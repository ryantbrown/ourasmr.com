<?php

$this->app['router']->group([

    'namespace' => 'Asmr\Http\Controllers',
    'prefix' => 'user'

], function($router){

    $router->get('dashboard', [
        'as' => 'dashboard',
        'uses' => 'UserController@showDashboard'
    ]);

    $router->get('playlists', [
        'as' => 'playlists',
        'uses' => 'UserController@showPlaylists'
    ]);


});