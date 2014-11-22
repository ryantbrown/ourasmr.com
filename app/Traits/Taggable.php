<?php namespace Asmr\Traits;

trait Taggable
{
    public function tags()
    {
        return $this->morphToMany('Asmr\Models\Tag', 'taggable');
    }
}