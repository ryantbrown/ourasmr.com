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