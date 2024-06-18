<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestTestController;
use App\Http\Controllers\Blog\PostController; // Import PostController

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Route group for blog posts with namespace and prefix
Route::group(['namespace' => 'App\Http\Controllers\Blog', 'prefix' => 'blog'], function () {
    Route::resource('posts', PostController::class)->names('blog.posts');
});

// Resource route for RestTestController
Route::resource('rest', RestTestController::class)->names('restTest');
