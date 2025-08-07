<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::view('/profile', 'profile.profile')->name('profile');
    Route::resource('posts', App\Http\Controllers\PostController::class)->middleware('auth');

});


require __DIR__.'/auth.php';
