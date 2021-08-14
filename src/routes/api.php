<?php

use Gmblog\Http\Controllers\Api\PostsController;
use Gmblog\Http\Controllers\Api\TagController;

Route::prefix(config('gmblog.apiBaseRoute'))->group(function () {
    Route::resource('tags', TagController::class);
    Route::resource('posts', PostsController::class);
});
