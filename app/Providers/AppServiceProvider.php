<?php

namespace App\Providers;

use App\Contracts\Repositories\AccountRepository;
use App\Contracts\Services\PlaidServiceContract;
use App\Repositories\AccountRepositoryEloquent;
use App\Services\Banking\PlaidService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AccountRepository::class, AccountRepositoryEloquent::class);
        $this->app->bind(PlaidServiceContract::class, PlaidService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    }
}
