<?php

namespace App\Providers;

use App\Interface\IArticleRepository;
use App\Interface\IArticleService;
use App\Repository\ArticleRepository;
use App\Services\ArticleService;
use Illuminate\Support\ServiceProvider;

class ArticleProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(IArticleService::class,ArticleService::class);
        $this->app->bind(IArticleRepository::class,ArticleRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
