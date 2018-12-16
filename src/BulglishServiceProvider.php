<?php
namespace Boyo\Bulglish;

use Illuminate\Support\ServiceProvider;

class BulglishServiceProvider extends ServiceProvider
{
	
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        //
    }
    
    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->singleton(Bulglish::class, function () {
            return new Bulglish();
        });
    }
    
}