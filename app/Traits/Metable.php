<?php namespace Asmr\Traits;

trait Metable
{
    public function metas()
    {
        return $this->morphMany('Asmr\Models\Meta', 'metable');
    }
}