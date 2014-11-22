<?php namespace Asmr\Models;

use Asmr\Traits\Likeable;
use Asmr\Traits\Metable;
use Asmr\Traits\Taggable;
use Asmr\Traits\Videoable;

class Category extends Model {

    use Metable, Videoable, Taggable, Likeable;

    protected $table = 'categories';

}