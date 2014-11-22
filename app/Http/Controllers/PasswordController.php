<?php namespace Asmr\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\PasswordBroker;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class PasswordController extends Controller {


	protected $passwords;


	public function __construct(PasswordBroker $passwords)
	{
		$this->passwords = $passwords;

		$this->middleware('guest');
	}

	public function showRecover()
	{
		return view('sections.auth.recover')->with('reset', false);
	}

	public function postRecover(Request $request)
	{
		switch ($response = $this->passwords->sendResetLink($request->only('email')))
		{
			case PasswordBroker::INVALID_USER:
				return redirect()->back()->withErrors(['email' =>trans($response)]);

			case PasswordBroker::RESET_LINK_SENT:
				return redirect()->back()->with('status', trans($response));
		}
	}

	public function showReset($token = null)
	{
		if (is_null($token))
		{
			throw new NotFoundHttpException;
		}

		return view('sections.auth.recover')->with(['token' => $token, 'reset' => true]);
	}

	public function postReset(Request $request)
	{
		$credentials = $request->only(
			'email', 'password', 'password_confirmation', 'token'
		);

		$response = $this->passwords->reset($credentials, function($user, $password)
		{
			$user->password = bcrypt($password);

			$user->save();
		});

		switch ($response)
		{
			case PasswordBroker::INVALID_PASSWORD:
			case PasswordBroker::INVALID_TOKEN:
			case PasswordBroker::INVALID_USER:
				return redirect()->back()->withErrors(['email' => trans($response)]);

			case PasswordBroker::PASSWORD_RESET:
				return redirect()->to('/');
		}
	}

}
