<?php namespace Asmr\Services;

use Illuminate\Contracts\Redis\Database;

class Redis {

    protected $redis;

    public function __consttruct(Database $redis)
    {
        $this->redis = $redis;
    }

}