<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\ViewComposers\ServiceTypesComposer;
use App\Http\ViewComposers\CustomerTypesComposer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->composeServiceTypes();
        $this->composeCustomerTypes();
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

    /**
     * Make Service Type avaliable to all the views.
     *
     * @return void
     */
    private function composeServiceTypes()
    {
        view()->composer('customerqueue', ServiceTypesComposer::class);
    }

    /**
     * Make Service Type avaliable to all the views.
     *
     * @return void
     */
    private function composeCustomerTypes()
    {
        view()->composer('customerqueue', CustomerTypesComposer::class);
    }
}
