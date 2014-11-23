<?php namespace Asmr\Http\Controllers;

use Asmr\Services\Youtube;

class BrowseController extends Controller {

    protected $youtube;

    public function __construct(Youtube $youtube)
    {
        $this->youtube = $youtube;
    }

    public function showBrowse()
    {
        return view('sections.discover.browse');
    }

    public function showBrowseTag($tag)
    {
        return view('sections.discover.browse');
    }

    public function showPopular()
    {
        return view('sections.discover.browse');
    }

}