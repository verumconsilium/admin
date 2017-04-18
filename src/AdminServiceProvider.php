<?php

namespace VerumConsilium\Admin;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{	
	/**
	 * Bootstrap the application services.
	 * 
	 * @return void
	 */
	public function boot()
	{	
		$this->publishes([
			__DIR__.'/../assets/css' => resource_path('assets/css/admin'),
			__DIR__.'/../assets/js' => resource_path('assets/js/admin'),
			__DIR__.'/../assets/views' => resource_path('views/admin')
		], 'admin');
	}

	 /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        
    }
}