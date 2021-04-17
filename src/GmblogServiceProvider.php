<?php

namespace Gmblog;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class GmblogServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('gmblog', Gmblog::class);
        $this->mergeConfigFrom(__DIR__.'/config/gmblog.php', 'gmblog');
    }

    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadRoutesFrom(__DIR__ . '/routes/api.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'gmblog');
        $this->publishes([
            __DIR__.'/config/gmblog.php' => config_path('gmblog.php'),
        ]);
        $this->loadComponents();
    }

    private function loadComponents()
    {
        $components = [
            'post' => 'post',
            'full-post' => 'full-post',
            'tag' => 'tag',
            'share-post' => 'share-post'
        ];

        foreach ($components as $path => $alias) {
            Blade::component('gmblog::components.' . $path, 'gmblog-' . $alias);
        }
    }
}
