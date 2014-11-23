<?php

$this->app['router']->group([

    'namespace' => 'Asmr\Http\Controllers',
    'prefix' => 'artists'

], function($router){

    $router->get('artists', [
        'as' => 'artists',
        'uses' => 'ArtistsController@showArtists'
    ]);

    $router->get('artist/{name}', [
        'as' => 'artist',
        'uses' => 'ArtistsController@showArtist'
    ]);


});