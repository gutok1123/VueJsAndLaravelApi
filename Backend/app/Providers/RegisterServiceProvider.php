<?php

namespace App\Providers;

use App\Interfaces\Api\CrudProductsInterface;
use App\Repositories\Api\CrudProductsRepository;
use Illuminate\Support\ServiceProvider;

class RegisterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
       $this->app->bind(CrudProductsInterface::class, CrudProductsRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
