<?php

use Gmblog\Http\Controllers\PostsController;

Route::prefix('api')->group(function () {
    Route::resource('posts', PostsController::class);
});
