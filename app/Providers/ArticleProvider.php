<?php

namespace App\Providers;

use App\Interface\IArticleService;
use Illuminate\Support\ServiceProvider;

class ArticleProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(IArticleService::class,\ArticleService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
