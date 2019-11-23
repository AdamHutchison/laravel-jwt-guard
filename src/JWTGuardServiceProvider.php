<?php


namespace JWTGuard;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class JWTGuardServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Auth::extend('jwt', function ($app) {
            return new JwtGuard($app['request']);
        });
    }

    public function register()
    {
        //
    }
}