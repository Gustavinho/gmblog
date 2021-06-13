<?php

use Gmblog\Http\Controllers\PostsController;

Route::prefix(config('gmblog.baseRoute'))->group(function () {
    Route::get('/', [PostsController::class, 'index'])->name('gmblog.index');
    Route::get('/' . config('gmblog.postsByTagRoute') . '/{tag}', [PostsController::class, 'index'])
        ->name('gmblog.index.tag');
    Route::get('/{slug}', [PostsController::class, 'show'])->name('gmblog.show');
});
