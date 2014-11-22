<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Asmr\Models\User;
use Asmr\Models\UserMeta;
use Asmr\Models\Folder;
use Asmr\Models\Playlist;
use Asmr\Models\Channel;
use Asmr\Models\ChannelMeta;
use Asmr\Models\Video;
use Asmr\Models\VideoMeta;
use Asmr\Models\Tag;
use Asmr\Models\Search;
use Asmr\Models\Like;
use Asmr\Models\Category;
use Asmr\Models\View;



class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$f = Faker\Factory::create();

		$user = $this->createUser($f);

		$this->addUserMeta($user);

		$folder = $this->addFolder($user);

		$sub_folder = $this->addSubFolder($folder);

		//$this->getParentFolder($sub_folder);

		$playlist = $this->addPlaylist($sub_folder);

		$video = $this->createVideo($f);


		$this->addVideoToPlaylist($video, $playlist);

		$category = $this->createCategory($f);

		$this->addVideoToCategory($video, $category);

		$this->addTagToVideo($video);


		$this->viewVideo($user, $video);




	}



	private function createUser($f)
	{
		return User::create([
			'email' => $f->email,
			'username' => $f->username,
			'password' => Hash::make($f->password)
		]);
	}

	private function createVideo($f)
	{
		return Video::create([
			'youtube_id' => $f->username
		]);
	}

	private function addUserMeta($user)
	{
		return $user->metas()->save(new UserMeta(['key' => 'test', 'value' => 'testing more']));
	}


	private function addFolder($user)
	{
		return $user->folders()->save(new Folder(['name' => 'New Folder']));
	}

	private function addSubFolder($folder)
	{
		return $folder->children()->save(new Folder(['name' => 'Sub Folder']));
	}

	private function addPlaylist($folder)
	{
		return $folder->playlists()->save(new Playlist(['name' => 'New Playlist']));
	}

	private function addVideoToPlaylist($video, $playlist)
	{
		$playlist->videos()->sync([$video->id]);
	}

	private function createCategory($f)
	{
		return Category::create([
			'name' => $f->name
		]);
	}

	private function addVideoToCategory($video, $category)
	{
		$category->videos()->sync([$video->id]);
	}

	private function addTagToVideo($video)
	{
		$tag = Tag::create(['tag' => 'newtag']);

		$tag->videos()->attach([$video->id]);

	}

	private function viewVideo($user, $video)
	{
		$view = $user->views()->save(new View);

		$view->videos()->attach([$video->id]);
	}



}
