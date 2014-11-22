<?php namespace Asmr\Models;

use Asmr\Traits\Likeable;
use Asmr\Traits\Taggable;
use Asmr\Traits\Viewable;

class Video extends Model {

    use Viewable, Taggable, Likeable;

    protected $table = 'videos';


    public function playlists()
    {
        return $this->morphedByMany('Asmr\Models\Playlist', 'videoable');
    }

    public function channels()
    {
        return $this->morphedByMany('Asmr\Models\Channel', 'videoable');
    }

    public function categories()
    {
        return $this->morphedByMany('Asmr\Models\Category', 'videoable');
    }

}