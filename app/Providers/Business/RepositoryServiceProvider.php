<?php

namespace App\Providers\Business;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Business\Repositories\PostRepository::class, \App\Business\Repositories\PostRepositoryEloquent::class);
        //:end-bindings:
    }
}
