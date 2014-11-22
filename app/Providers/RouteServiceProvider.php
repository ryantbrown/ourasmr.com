<?php namespace Asmr\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider {


	protected $scan = [];

	protected $scanWhenLocal = false;


	protected $routes = [
		'auth',
		'password',
		'page',
		'user',
		'discover'
	];


	/**
	 * All of the application's route middleware keys.
	 *
	 * @var array
	 */
	protected $middleware = [
		'auth' => 'Asmr\Http\Middleware\Authenticated',
		'auth.basic' => 'Illuminate\Auth\Middleware\AuthenticatedWithBasicAuth',
		'guest' => 'Asmr\Http\Middleware\IsGuest',
	];

	/**
	 * Called before routes are registered.
	 *
	 * Register any model bindings or pattern based filters.
	 *
	 * @param  \Illuminate\Routing\Router  $router
	 * @return void
	 */
	public function before(Router $router)
	{
		//
	}

	/**
	 * Define the routes for the application.
	 *
	 * @param  \Illuminate\Routing\Router  $router
	 * @return void
	 */
	public function map(Router $router)
	{
		foreach($this->routes as $route)
		{
			require __DIR__ . '/../Http/Routes/' . $route . '.php';
		}
	}

}
