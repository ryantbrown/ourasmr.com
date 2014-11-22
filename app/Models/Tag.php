<?php namespace Asmr\Models;

use Asmr\Traits\Likeable;

class Tag extends Model {


    use Likeable;


    public $timestamps = false;



    public function users()
    {
        return $this->morphedByMany('Asmr\Models\User', 'taggable');
    }

    public function folders()
    {
        return $this->morphedByMany('Asmr\Models\Folder', 'taggable');
    }

    public function playlists()
    {
        return $this->morphedByMany('Asmr\Models\Playlist', 'taggable');
    }

    public function videos()
    {
        return $this->morphedByMany('Asmr\Models\Video', 'taggable');
    }

    public function channels()
    {
        return $this->morphedByMany('Asmr\Models\Channel', 'taggable');
    }

    public function categories()
    {
        return $this->morphedByMany('Asmr\Models\Category', 'taggable');
    }

}