<?php namespace Asmr\Http\Controllers;


class DiscoverController extends Controller {

    public function __construct()
    {

    }

    public function showDiscover()
    {
        return view('sections.discover.index');
    }

    public function showBrowse()
    {
        return view('sections.discover.browse');
    }

    public function showBrowseTag()
    {
        return view('sections.discover.browse');
    }

    public function showSearch()
    {
        return view('sections.discover.search');
    }

    public function showArtists()
    {
        return view('sections.discover.artists');
    }

    public function showPopular()
    {
        return view('sections.discover.popular');
    }

    public function showVideo($id)
    {
        return view('sections.discover.partials.video');
    }
}