<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    static private function activeGuard()
    {

        foreach (array_keys(config('auth.guards')) as $guard) {

            if (auth()->guard($guard)->check()) return $guard;
        }
        return null;
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        View::share('myGuard', Auth::guard(static::activeGuard())->user() ?: null);

        // if (Auth::guard('admin')->check()) {
        //     View::share('myGuard', 'admin');
        // } elseif (Auth::guard('staff')->check()) {
        //     View::share('myGuard', 'staff');
        // } else if (Auth::check()) {
        //     View::share('myGuard', 'web');
        // }
    }
}
