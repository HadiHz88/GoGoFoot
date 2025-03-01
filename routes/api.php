<?php

use App\Http\Controllers\UserController;

Route::prefix('api')->middleware('auth:api')->group(function () {
    Route::get('/user', [UserController::class, 'show']);
});

