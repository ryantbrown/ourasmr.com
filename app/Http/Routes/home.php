<?php

$this->app['router']->group([

    'namespace' => 'Asmr\Http\Controllers',
    'prefix' => ''

], function($router){

    $router->get('/', [
        'as' => 'home',
        'uses' => 'HomeController@showHome'
    ]);

    $router->get('/video/{id}', [
        'as' => 'videoQuickView',
        'uses' => 'HomeController@showVideo'
    ]);

});