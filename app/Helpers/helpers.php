<?php

if (!function_exists('current_uri'))
{
    function current_uri()
    {
        return str_replace(Config::get('app.url'), '', URL::current());
    }
}

if (!function_exists('format_uri'))
{
    function format_uri()
    {
        $uri = trim(str_replace('/', '-', current_uri()), '-');

        return empty($uri) ? 'home' : $uri;
    }
}


if (!function_exists('format_date'))
{
    function format_date($date)
    {
        $parts = explode('-', explode('T', $date)[0]);

        return \Carbon\Carbon::create($parts[0], $parts[1], $parts[2])->diffForHumans();
    }
}