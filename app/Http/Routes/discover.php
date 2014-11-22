<?php

$this->app['router']->group([

    'namespace' => 'Asmr\Http\Controllers',
    'prefix' => 'discover'

], function($router){

    $router->get('/', [
        'as' => 'discover',
        'uses' => 'DiscoverController@showDiscover'
    ]);

    $router->get('browse', [
        'as' => 'browse',
        'uses' => 'DiscoverController@showBrowse'
    ]);

    $router->get('browse/{tag}', [
        'as' => 'browseTag',
        'uses' => 'DiscoverController@showBrowseTag'
    ]);

    $router->get('search', [
        'as' => 'search',
        'uses' => 'DiscoverController@showSearch'
    ]);

    $router->get('popular', [
        'as' => 'popular',
        'uses' => 'DiscoverController@showPopular'
    ]);

    $router->get('video/{id}', [
        'as' => 'video',
        'uses' => 'DiscoverController@showVideo'
    ]);

    $router->get('artists', [
        'as' => 'artists',
        'uses' => 'DiscoverController@showArtists'
    ]);


});