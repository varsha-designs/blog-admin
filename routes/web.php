<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::view('/profile', 'profile.profile')->name('profile');
     Route::resource('posts', PostController::class);
     Route::resource('categories', CategoryController::class);

});


require __DIR__.'/auth.php';
