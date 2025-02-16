<?php

declare(strict_types=1);

namespace App\Providers;

use App\Models\User;
use App\Services\TopDesk;
use Illuminate\Support\ServiceProvider;

final class TopDeskServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(TopDesk::class, fn (): TopDesk => new TopDesk());
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
