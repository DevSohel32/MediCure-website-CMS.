<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use App\Models\PageItem;
use App\Models\Setting;

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
        // Pagination
        Paginator::useBootstrap();

        // use view share to globally setup data
        try {
            $page_item = PageItem::where('id', 1)->first();
            $setting = Setting::where('id', 1)->first();

            View::share('global_page_item', $page_item);
            View::share('global_setting', $setting);
        } catch (\Exception $e) {
            // Handle database not ready (e.g., during migrations or tests)
            View::share('global_page_item', null);
            View::share('global_setting', null);
        }
    }
}
