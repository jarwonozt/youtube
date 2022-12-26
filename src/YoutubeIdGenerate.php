<?php

namespace Jarwonoztech\Youtube;

class YoutubeIdGenerate
{

    public static function id($url)
    {
        preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
        $youtube_id = $match[1];

        return $youtube_id;
    }
}
