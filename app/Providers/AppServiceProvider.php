<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\URL;
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
    
        // if (config('app.env') === 'local') {
        //     URL::forceScheme('https');
        // }
        // end
        View::composer('*', function ($view) {
            
            static $companyprofile = null;
    
            if ($companyprofile === null) {
                $companyprofile = \App\Models\CompanyProfile::first()->get();
                foreach ($companyprofile as $item) {
                    $companyprofile = $item;
                }
            }
            
            $view->with('companyprofile', $companyprofile);
        });     

    
    }

}
