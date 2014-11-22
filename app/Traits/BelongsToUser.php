<?php namespace Asmr\Traits;


trait BelongsToUser
{
    public function user()
    {
        return $this->belongsTo('Asmr\Models\User', 'user_id');
    }
}