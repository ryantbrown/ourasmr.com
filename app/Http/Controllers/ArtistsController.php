<?php namespace Asmr\Http\Controllers;

use Asmr\Services\Youtube;

class ArtistsController extends Controller {

    protected $youtube;

    public function __construct(Youtube $youtube)
    {
        $this->youtube = $youtube;
    }

    public function showArtists()
    {
        return view('sections.artists.all');
    }

    public function showArtist($name)
    {
        return view('sections.artists.artist');
    }

}