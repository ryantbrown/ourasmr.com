<?php namespace Asmr\Models;

use Asmr\Traits\BelongsToUser;
use Asmr\Traits\Likeable;
use Asmr\Traits\Taggable;

class Folder extends Model {

    use BelongsToUser, Taggable, Likeable;


    public function parent()
    {
        return $this->hasOne('Asmr\Models\Folder', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('Asmr\Models\Folder', 'parent_id', 'id');
    }

    public function playlists()
    {
        return $this->hasMany('Asmr\Models\Playlist', 'folder_id', 'id');
    }


}