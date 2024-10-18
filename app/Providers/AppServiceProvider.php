<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
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
        /*
            Ini untuk mencegah jika melakukan collab dan ada developer yang menerapkan Lazy Loading dan akan menghasilkan error, kenapa begitu karna kita tidak perlu lagi Lazy Loading karna sudah membuat Eager Loading langsung pada Model Posts
        */
        Model::preventLazyLoading();
    }
}