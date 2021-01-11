<?php

namespace zoparga\ReviewRateable;

use Illuminate\Support\ServiceProvider;

class ReviewRateableServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $timestamp = date('Y_m_d_His', time());
        $this->publishes([
            __DIR__.'/../database/migrations/create_ratings_table.php.stub' => $this->app->databasePath()."/migrations/{$timestamp}_create_ratings_table.php",
        ], 'migrations');
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
