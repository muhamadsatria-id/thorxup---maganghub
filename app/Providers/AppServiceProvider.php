<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\ProfileBrand;
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
        // The header and footer live in the layout, while page content may also
        // need the profile for calls to action and contact details.
        View::composer(['layouts.app', 'pages.*'], function ($view): void {
            $view->with([
                'profileBrand' => ProfileBrand::query()->first(),
                'navCategories' => Category::query()
                    ->active()
                    ->orderBy('sort_order')
                    ->orderBy('name')
                    ->take(6)
                    ->get(),
            ]);
        });
    }
}
