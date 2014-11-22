<?php namespace Asmr\Models;


class Meta extends Model {

    public function metable()
    {
        return $this->morphTo();
    }

}