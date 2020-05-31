<?php

namespace Franco\HiThere;

use Illuminate\Support\ServiceProvider;

class HHServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/migrations/2020_05_31_045105_create_table_hithere.php');
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
