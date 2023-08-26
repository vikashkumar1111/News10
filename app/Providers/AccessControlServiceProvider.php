<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\AccessControl;

class AccessControlServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
        public function boot()
    {
        View::composer(['admin.dashboard', 'admin.V-R&P'], function ($view) {
            $AccessControl = AccessControl::orderBy('id', 'asc')->get();
            $view->with('AccessData', $AccessControl);
        });
    }

}
