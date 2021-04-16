<?php

namespace Gmblog;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class GmblogServiceProvider extends ServiceProvider
{
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
        $this->loadComponents();
    }

    private function loadComponents()
    {
        $components = [
            'post' => 'post',
            'full-post' => 'full-post',
            'tag' => 'tag',
        ];

        foreach ($components as $path => $alias) {
            Blade::component('gmblog::components.' . $path, 'gmblog-' . $alias);
        }
    }
}
