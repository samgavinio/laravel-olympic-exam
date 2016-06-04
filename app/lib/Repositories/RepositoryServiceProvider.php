<?php

namespace App\lib\Repositories;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Registers the repositories with Laravel's IoC Container
     * 
     */
    public function register()
    {
        $this->app->singleton('repository.event', function ($app) {
            return new EventRepository();
        });
    }
    
}