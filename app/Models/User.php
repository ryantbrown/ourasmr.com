<?php namespace Asmr\Models;

use Asmr\Traits\Metable;
use Asmr\Traits\Searchable;
use Asmr\Traits\Taggable;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as Auth;
use Illuminate\Contracts\Auth\CanResetPassword as ResetPassword;


class User extends Model implements Auth, ResetPassword {

	use Authenticatable, CanResetPassword, Taggable, Searchable, Metable;

	protected $guarded = ['id', 'password'];
	protected $hidden = ['password', 'remember_token'];


	public function folders()
	{
		return $this->hasMany('Asmr\Models\Folder');
	}

	public function playlists()
	{
		return $this->hasMany('Asmr\Models\Playlist');
	}

	public function views()
	{
		return $this->hasMany('Asmr\Models\View');
	}

	public function likes()
	{
		return $this->hasMany('Asmr\Models\View');
	}

}
