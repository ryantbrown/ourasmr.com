<?php namespace Asmr\Http\Controllers;

use Asmr\Services\Youtube;
use Illuminate\Contracts\Redis\Database as Redis;

class HomeController extends Controller {

    protected $youtube;
    protected $redis;

    public function __construct(Youtube $youtube, Redis $redis)
    {
        $this->youtube = $youtube;
        $this->redis = $redis;
    }

    public function showHome()
    {
        $videos = $this->youtube->search('asmr', 20);

        return view('sections.home.index', compact('videos'));
    }

    public function showVideo($id)
    {
        $video = $this->youtube->details($id);
        $max_description_length = 450;

        return view('sections.home.partials.video', compact('video', 'max_description_length'));
    }

}