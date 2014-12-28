<?php namespace Asmr\Http\Controllers;

use Asmr\Repositories\UserRepository;
use Asmr\Repositories\FolderRepository;
use Asmr\Repositories\PlaylistRepository;
use Asmr\Repositories\VideoRepository;


use Asmr\Http\Requests\Folder\CreateFolderRequest;

class UserController extends Controller {

	protected $user;
	protected $folders;
	protected $playlists;
	protected $videos;

	public function __construct(UserRepository $user,
								FolderRepository $folders,
								PlaylistRepository $playlists,
								VideoRepository $videos)
	{
		$this->middleware('auth');

		$this->user = $user;
		$this->folders = $folders;
		$this->playlists = $playlists;
		$this->videos = $videos;

	}

	public function showDashboard()
	{
		$data['user'] = $this->user->currentUser();


		return view('sections.user.dashboard', $data);
	}

	public function createFolder(CreateFolderRequest $request)
	{
		$folder = $this->folders->create($request->only('name', 'parent_id'));
	}

	public function showPlaylists()
	{
		return view('sections.user.playlists');
	}


}
