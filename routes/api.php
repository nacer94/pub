<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
use App\Http\Controllers\AuteurController;
Route::middleware('api')->group(function () {
Route::resource('auteurs', AuteurController::class);
});

use App\Http\Controllers\SpecialiteController;
Route::middleware('api')->group(function () {
Route::resource('specialites', SpecialiteController::class);
});

use App\Http\Controllers\EditeurController;
Route::middleware('api')->group(function () {
Route::resource('editeurs', EditeurController::class);
});

use App\Http\Controllers\LivreController;
Route::middleware('api')->group(function () {
Route::resource('livres', EditeurController::class);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
