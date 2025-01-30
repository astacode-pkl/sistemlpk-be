<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
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
        if (config('app.env') === 'local') {
            URL::forceScheme('https');
        }
        //end

        
        view()->composer('*', function ($view) {
            $logo = \App\Models\CompanyProfile::get()->where('id', 1)->value('logo');
            $name = \App\Models\CompanyProfile::get()->where('id', 1)->value('name');
            $view->with('logo', $logo);
            $view->with('companyName', $name);
        });

        Paginator::useBootstrapFive();
    }
}
