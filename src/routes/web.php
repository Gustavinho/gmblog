<?php

use Gmblog\Http\Controllers\PostsController;

Route::prefix(config('gmblog.baseRoute'))->group(function () {
    Route::get('/', [PostsController::class, 'index'])->name('blog.index');
    Route::get('/{slug}', [PostsController::class, 'show'])->name('blog.show');
});
