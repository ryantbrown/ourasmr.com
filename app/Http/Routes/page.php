<?php

$this->app['router']->group([

    'namespace' => 'Asmr\Http\Controllers',
    'prefix' => ''

], function($router){

    $router->get('learn', [
        'as' => 'learn',
        'uses' => 'PagesController@showLearn'
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