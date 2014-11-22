<?php

$this->app['router']->group([

    'namespace' => 'Asmr\Http\Controllers',
    'prefix' => 'auth'

], function($router){

    $router->get('login', [
        'as' => 'login',
        'uses' => 'AuthController@showLogin'
    ]);

    $router->post('login', [
        'as' => 'postLogin',
        'uses' => 'AuthController@postLogin'
    ]);

    $router->get('register', [
        'as' => 'register',
        'uses' => 'AuthController@showRegister'
    ]);

    $router->post('register', [
        'as' => 'postRegister',
        'uses' => 'AuthController@postRegister'
    ]);

    $router->get('social/{driver}', [
        'as' => 'social_login',
        'uses' => 'AuthController@socialRedirect'
    ]);

    $router->get('social/callback/{driver}', [
        'as' => 'social_callback',
        'uses' => 'AuthController@socialCallback'
    ]);

    $router->get('logout', [
        'as' => 'logout',
        'uses' => 'AuthController@doLogout'
    ]);

});