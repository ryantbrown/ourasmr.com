<?php namespace Asmr\Http\Controllers;

use Asmr\Repositories\UserRepository;

class UserController extends Controller {

	protected $user;

	public function __construct(UserRepository $user)
	{
		$this->user = $user;

		$this->middleware('auth');
	}

	public function showDashboard()
	{
		return view('sections.user.dashboard');
	}

	public function showPlaylists()
	{
		return view('sections.user.playlists');
	}


}
