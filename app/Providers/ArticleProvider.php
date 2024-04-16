<?php

namespace App\Providers;

use App\Interface\IArticleRepository;
use App\Interface\IArticleService;
use App\Interface\IAuthRepository;
use App\Interface\IAuthService;
use App\Repository\ArticleRepository;
use App\Repository\AuthRepository;
use App\Services\ArticleService;
use App\Services\AuthService;
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
        $this->app->bind(IAuthRepository::class,AuthRepository::class);
        $this->app->bind(IAuthService::class,AuthService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
