<?php

$this->app['router']->group([

    'namespace' => 'Asmr\Http\Controllers',
    'prefix' => 'auth'

], function($router){

    $router->get('recover', [
        'as' => 'recover',
        'uses' => 'PasswordController@showRecover'
    ]);

    $router->post('recover', [
        'as' => 'postRecover',
        'uses' => 'PasswordController@postRecover'
    ]);

    $router->get('reset', [
        'as' => 'reset',
        'uses' => 'PasswordController@showReset'
    ]);

    $router->post('reset', [
        'as' => 'postReset',
        'uses' => 'PasswordController@postReset'
    ]);


});