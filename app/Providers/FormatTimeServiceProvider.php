<?php

namespace App\Providers;

use App\Helpers\FormatTime;

use Illuminate\Support\ServiceProvider;

class FormatTimeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {

        $this->app->bind('formatTime', function () {
            return new FormatTime();
        });
        
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        
    }
}
