<?php namespace Asmr\Models;

use Asmr\Traits\BelongsToUser;
use Asmr\Traits\Likeable;
use Asmr\Traits\Taggable;
use Asmr\Traits\Videoable;

class Playlist extends Model {

    use BelongsToUser, Taggable, Videoable, Likeable;

    public function folder()
    {
        return $this->belongsTo('Asmr\Models\Folder', 'folder_id');
    }

}