<?php namespace Asmr\Models;

use Asmr\Traits\BelongsToUser;


class Like extends Model {


    use BelongsToUser;



    public $timestamps = false;



    public function videos()
    {
        return $this->morphedByMany('Asmr\Models\Video', 'likeable');
    }

    public function channels()
    {
        return $this->morphedByMany('Asmr\Models\Channel', 'likeable');
    }

    public function folders()
    {
        return $this->morphedByMany('Asmr\Models\Folder', 'likeable');
    }

    public function playlists()
    {
        return $this->morphedByMany('Asmr\Models\Playlist', 'likeable');
    }

    public function tags()
    {
        return $this->morphedByMany('Asmr\Models\Tag', 'likeable');
    }

    public function categories()
    {
        return $this->morphedByMany('Asmr\Models\Category', 'likeable');
    }


}