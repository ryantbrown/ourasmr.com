<?php namespace Asmr\Models;


use Asmr\Traits\BelongsToUser;

class View extends Model {

    use BelongsToUser;


    public $timestamps = false;



    public function videos()
    {
        return $this->morphedByMany('Asmr\Models\Video', 'viewable');
    }

    public function playlists()
    {
        return $this->morphedByMany('Asmr\Models\Playlist', 'viewable');
    }

    public function tags()
    {
        return $this->morphedByMany('Asmr\Models\Tag', 'viewable');
    }

    public function categories()
    {
        return $this->morphedByMany('Asmr\Models\Category', 'viewable');
    }

    public function channels()
    {
        return $this->morphedByMany('Asmr\Models\Channel', 'viewable');
    }

}