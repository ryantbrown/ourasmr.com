<?php

$this->app['router']->group([

    'namespace' => 'Asmr\Http\Controllers',
    'prefix' => ''

], function($router){

    $router->get('/', [
        'as' => 'home',
        'uses' => 'PagesController@showHome'
    ]);

    $router->get('about', [
        'as' => 'about',
        'uses' => 'PagesController@showAbout'
    ]);

    $router->get('help', [
        'as' => 'help',
        'uses' => 'PagesController@showHelp'
    ]);

    $router->get('contact', [
        'as' => 'contact',
        'uses' => 'PagesController@showContact'
    ]);

    $router->get('terms', [
        'as' => 'terms',
        'uses' => 'PagesController@showTerms'
    ]);

    $router->get('privacy', [
        'as' => 'privacy',
        'uses' => 'PagesController@showPrivacy'
    ]);


});