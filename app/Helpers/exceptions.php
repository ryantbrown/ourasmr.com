<?php

//$handler = $this->app->make('\Illuminate\Contracts\Exception\Handler'); die;


//app('exception')->error(function(\Asmr\Exceptions\AuthenticationException $e)
//{
//    return redirect()->route('login')->with('error', 'Please login to continue');
//});
//
//\App::error(function(Illuminate\Session\TokenMismatchException $e)
//{
//    return redirect()->route('home')->with('error', 'Token mismatch!');
//});
//
//\App::error(function(\Asmr\Exceptions\ValidationException $e)
//{
//    return redirect()->back()->withInput()->withErrors($e->getErrors());
//});
//
//\App::error(function(\Asmr\Exceptions\AuthenticationException $e)
//{
//    return redirect()->route('home')->with('error', 'You do not have access to that');
//});