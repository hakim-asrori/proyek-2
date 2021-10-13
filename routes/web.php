<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('home');
});

Route::get('/home', function () {
	return view('welcome');
});

Route::post('auth/login', [App\Http\Controllers\AuthController::class, 'login']);
Route::get('auth/logout', [App\Http\Controllers\AuthController::class, 'logout']);
Route::get('auth/google', [App\Http\Controllers\AuthController::class, 'google']);
Route::get('auth/google/callback', [App\Http\Controllers\AuthController::class, 'google_callback']);