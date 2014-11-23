<?php namespace Asmr\Services;

use Madcoda\Youtube as YoutubeApi;
use Illuminate\Contracts\Config\Repository as Config;
use stdClass;

class Youtube {

    protected $api;

    public function __construct(Config $config)
    {
        $this->api = new YoutubeApi([
            'key' => $config->get('services.youtube.key')
        ]);
    }

    public function search($query, $max = 10)
    {
        $videos = $this->api->searchVideos($query, $max);

        return $videos ? array_map([$this, "basics"], (array) $videos) : null;
    }

    public function video($video_id)
    {
        return $this->api->getVideoInfo($video_id);
    }

    public function image(stdClass $video)
    {
        $thumbs = $video->snippet->thumbnails;

        return isset($thumbs->standard) ? $thumbs->standard : $thumbs->high;
    }

    public function details($video_id)
    {
        $video = $this->video($video_id);

        return array_add($this->basics($video), 'stats', $this->stats($video));
    }

    public function stats(stdClass $video)
    {
        return [
            'views' => number_format($video->statistics->viewCount, 0),
            'likes' => number_format($video->statistics->likeCount, 0),
            'comments' => number_format($video->statistics->commentCount, 0)
        ];
    }

    public function channel(stdClass $video)
    {
        return [
            'id' => $video->snippet->channelId,
            'title' => $video->snippet->channelTitle
        ];
    }

    public function basics(stdClass $video)
    {
        return [
            'id' => isset($video->id->videoId) ? $video->id->videoId : $video->id,
            'title' => $video->snippet->title,
            'description' => $video->snippet->description,
            'author' => $video->snippet->channelTitle,
            'image' => $video->snippet->thumbnails->medium->url,
            'date' => format_date($video->snippet->publishedAt)
        ];
    }
}