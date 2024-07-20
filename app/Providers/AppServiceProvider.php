<?php

namespace App\Providers;

use App\Http\Controllers\MainController;
use Illuminate\Support\ServiceProvider;
use Litres\Parser\LitresParser;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
       $this->app->when(LitresParser::class)->needs(
           '$XMLFileLocation'
       )->give(storage_path() . '/top500.xml');
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
