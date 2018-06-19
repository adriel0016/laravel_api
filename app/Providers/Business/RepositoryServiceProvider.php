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
        $this->app->bind(\App\Business\Repositories\PDVCategoriaItemRepository::class, \App\Business\Repositories\PDVCategoriaItemRepositoryEloquent::class);
        $this->app->bind(\App\Business\Repositories\PDVItemRepository::class, \App\Business\Repositories\PDVItemRepositoryEloquent::class);
        //:end-bindings:
    }
}
