<?php namespace Asmr\Traits;


trait Searchable
{
    public function searches()
    {
        return $this->morphToMany('Asmr\Models\Search', 'searchable');
    }
}