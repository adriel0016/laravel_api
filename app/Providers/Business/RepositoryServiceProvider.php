<?php

namespace App\Providers\Business;


use App\Business\Repositories\Generic\EntidadeRepository;
use App\Business\Repositories\Generic\EntidadeRepositoryEloquent;
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
        $this->app->bind(EntidadeRepository::class, EntidadeRepositoryEloquent::class);

    }
}
