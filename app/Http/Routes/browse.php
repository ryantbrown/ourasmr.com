<?php

$this->app['router']->group([

    'namespace' => 'Asmr\Http\Controllers',
    'prefix' => 'discover'

], function($router){

    $router->get('browse', [
        'as' => 'browse',
        'uses' => 'BrowseController@showBrowse'
    ]);

    $router->get('browse/{tag}', [
        'as' => 'browseTag',
        'uses' => 'BrowseController@showBrowseTag'
    ]);

    $router->get('popular', [
        'as' => 'popular',
        'uses' => 'BrowseController@showPopular'
    ]);

});