<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // ngrok not styling issue
        // if (config('app.env') === 'local') {
        //     URL::forceScheme('https');
        // }
        //end


        view()->composer('*', function ($view) {
            $view->with('companyProfile', Cache::get('companyprofile'));
        });

        Paginator::useBootstrapFive();
    }
}
