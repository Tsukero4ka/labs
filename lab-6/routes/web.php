<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;

Route::get('/users', [UserController::class, 'get']);
Route::get('/users/{user}/posts', [UserController::class, 'userPosts'])->name('users.posts');
Route::get('/roles', [RoleController::class, 'index']);


