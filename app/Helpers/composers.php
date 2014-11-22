<?php


View::composer('*', function($view)
{
    $view->with('class', format_uri());
});