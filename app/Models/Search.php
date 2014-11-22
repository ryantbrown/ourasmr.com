<?php namespace Asmr\Models;


class Search extends Model {


    public $timestamps = false;



    public function users()
    {
        return $this->morphedByMany('Asmr\Models\User', 'searchable');
    }

}