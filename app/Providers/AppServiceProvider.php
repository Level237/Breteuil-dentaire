<?php

namespace App\Providers;

use App\Models\Service;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        View::composer('layouts.header', function ($view) {
            if (! Schema::hasTable('services')) {
                $view->with('navServices', collect());

                return;
            }

            $view->with(
                'navServices',
                Service::query()
                    ->published()
                    ->orderBy('sort_order')
                    ->orderBy('id')
                    ->get()
                    ->groupBy('category')
            );
        });
    }
}
