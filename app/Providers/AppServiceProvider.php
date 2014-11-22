<?php namespace Asmr\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {


	protected $helpers = [
		'constants',
		'helpers',
		'exceptions',
		'composers'
	];

	protected $providers = [
		'Event',
		'Route'
	];

	protected function loadHelpers()
	{
		foreach($this->helpers as $helper)
		{
			require __DIR__ .'/../Helpers/' . $helper . '.php';
		}
	}

	protected function registerProviders()
	{
		foreach($this->providers as $provider)
		{
			$this->app->register(ASMR_PROVIDERS . '\\' . $provider . 'ServiceProvider');
		}
	}


	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->loadHelpers();

		$this->registerProviders();

	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
