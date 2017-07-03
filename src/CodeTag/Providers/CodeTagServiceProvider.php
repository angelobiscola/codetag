<?php namespace Code\CodeTag\Providers;

use Illuminate\Support\ServiceProvider;

class CodeTagServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([__DIR__.'/../../Resources/Migrations' => base_path('database/migrations')],'migrations');
    }

    public function register()
    {

    }
}