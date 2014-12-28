<?php namespace Asmr\Http\Controllers;

use Asmr\Http\Requests\Auth\LoginRequest;
use Asmr\Http\Requests\Auth\RegisterRequest;
use Illuminate\Contracts\Auth\Guard as Auth;
use Laravel\Socialite\Contracts\Factory as SocialiteFactory;
use Asmr\Repositories\UserRepository;
use \Hash;


class AuthController extends Controller {

	protected $auth;
	protected $socialite;

	public function __construct(Auth $auth, SocialiteFactory $socialite)
	{
		$this->auth = $auth;
		$this->socialte = $socialite;

		$this->middleware('guest', ['except' => 'doLogout']);
	}

	public function showLogin()
	{
		return view('sections.auth.login');
	}

	public function postLogin(LoginRequest $request)
	{
		if ($this->auth->attempt($request->only('email', 'password')))
		{
			return redirect()->route('dashboard');
		}

		return redirect()->route('login')->withErrors([
			'email' => 'Your account information was incorrect.',
		]);
	}

	public function showRegister()
	{
		return view('sections.auth.register');
	}

	public function postRegister(RegisterRequest $request, UserRepository $users)
	{
		$user = $users->create($request->only('email', 'password'));

		$this->auth->login($user);

		return redirect()->route('dashboard')->with('message', 'Your account has been created!');
	}

	public function socialRedirect($driver)
	{
		if($this->auth->check())
		{
			return redirect()->route('dashboard');
		}

		return $this->socialite->driver($driver)->redirect();
	}

	public function socialCallback($driver, UserRepository $users)
	{
		$userData = $this->socialite->driver($driver)->user();

		$user = $users->findOrCreate($userData, $driver);

		$this->auth->login($user);

		return redirect()->route('dashboard');
	}

	public function doLogout()
	{
		$this->auth->logout();

		return redirect()->route('home');
	}
}
