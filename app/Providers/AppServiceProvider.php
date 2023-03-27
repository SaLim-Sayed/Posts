<?php

namespace App\Providers;

use App\Models\User;
use App\Mail\TestsMail;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\ServiceProvider;

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

        User::created(function ($user ) {
            Mail::to($user)->send(new TestsMail($user));
        });






        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();
    }
}
