<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;

class AppServiceProvider extends ServiceProvider
{
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
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    Schema::defaultStringLength(255);
    Inertia::share([
        'errors' => function () {
            return Session::get('errors')
                ? Session::get('errors')->getBag('default')->getMessages()
                : (object) [];
        },
    ]);

    Inertia::share('flash', function () {
        return [
            'message' => Session::get('message'),
            'success' => Session::get('success'),
            'error' => Session::get('error'),
        ];
    });
    }
}
