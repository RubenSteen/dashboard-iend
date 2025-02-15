<?php

declare(strict_types=1);

namespace App\Providers;

use App\Services\TopDesk;
use Illuminate\Support\ServiceProvider;

final class TopDeskServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(TopDesk::class, fn (): TopDesk => new TopDesk(
            config()->string('services.topdesk.url'),
            config()->string('services.topdesk.username'),
            config()->string('services.topdesk.password')
        ));
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
