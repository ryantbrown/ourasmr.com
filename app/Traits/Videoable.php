<?php namespace Asmr\Traits;


trait Videoable
{
    public function videos()
    {
        return $this->morphToMany('Asmr\Models\Video', 'videoable');
    }
}