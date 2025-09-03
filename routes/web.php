<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});



Route::middleware(['auth'])->group(function () {
// Admin dashboard view

Route::view('/admins/dashboard', 'admins.dashboard')->name('admins.dashboard');

// User dashboard view
Route::view('/user/dashboard', 'user.dashboard')->name('user.dashboard');

    Route::view('/admins/profile', 'admins.profile')->name('admins.profile');
     Route::view('/user/profile', 'user.profile')->name('user.profile');

     Route::resource('posts', PostController::class);
     Route::resource('categories', CategoryController::class);

});


require __DIR__.'/auth.php';
