<?php

use Gmblog\Http\Controllers\PostsController;

Route::get('/blog', [PostsController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [PostsController::class, 'show'])->name('blog.show');
