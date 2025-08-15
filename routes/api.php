<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostApiController;

Route::apiResource('posts', PostApiController::class);
