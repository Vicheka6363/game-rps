<?php

namespace Vendor\PaperRockScissorsGame;

use Illuminate\Support\ServiceProvider;

class PaperRockScissorsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'paperrockscissorsgame');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/paperrockscissorsgame'),
        ]);
    }

    public function register()
    {
        // Register any application services.
    }
}
