<?php

namespace Franco\HiThere;

use Illuminate\Support\ServiceProvider;

class HHServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/migrations');
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
