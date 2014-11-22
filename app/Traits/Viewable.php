<?php namespace Asmr\Traits;

trait Viewable
{
    public function views()
    {
        return $this->morphToMany('Asmr\Models\View', 'viewable');
    }
}