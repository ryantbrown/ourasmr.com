<?php namespace Asmr\Http\Controllers;

use Asmr\Services\Youtube;

class SearchController extends Controller {

    protected $youtube;

    public function __construct(Youtube $youtube)
    {
        $this->youtube = $youtube;
    }

    public function showSearch()
    {
        return view('sections.discover.search');
    }

}