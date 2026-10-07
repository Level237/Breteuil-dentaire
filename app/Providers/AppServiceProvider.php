<?php

namespace App\Providers;

use App\Models\PageMeta;
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

        View::composer('layouts.main', function ($view) {
            if (! Schema::hasTable('page_metas')) {
                $view->with('pageMeta', null);

                return;
            }

            $key = PageMeta::keyForRoute(request()->route()?->getName());

            $view->with(
                'pageMeta',
                $key ? PageMeta::query()->where('page_key', $key)->first() : null
            );
        });
    }
}
