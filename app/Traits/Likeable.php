<?php namespace Asmr\Traits;


trait Likeable
{
    public function likes()
    {
        return $this->morphToMany('Asmr\Models\Like', 'likeable');
    }
}