<?php

$this->app['router']->group([

    'namespace' => 'Asmr\Http\Controllers',
    'prefix' => 'discover'

], function($router){

    $router->get('search', [
        'as' => 'search',
        'uses' => 'SearchController@showSearch'
    ]);

});