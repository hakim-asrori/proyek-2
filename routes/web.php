<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

use App\Models\User;

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
	$user = Session::get('logged_in');
	return view('home', compact("user"));
});

Route::get('/home', function () {
	$user = Session::get('logged_in');
	return view('home', compact("user"));
});

// Route Authentication
Route::post('auth/login', [App\Http\Controllers\AuthController::class, 'login']);
Route::post('auth/register', [App\Http\Controllers\AuthController::class, 'register']);
Route::get('auth/logout', [App\Http\Controllers\AuthController::class, 'logout']);
Route::get('auth/google', [App\Http\Controllers\AuthController::class, 'google']);
Route::get('auth/google/callback', [App\Http\Controllers\AuthController::class, 'google_callback']);

// Route Profile
Route::get('profil', [App\Http\Controllers\ProfilController::class, 'index'])->middleware("otentikasi");

// Route Barang
Route::resource('kendaraan', App\Http\Controllers\BarangController::class)->middleware("otentikasi");

// Route Whistlist
Route::resource('whistlist', App\Http\Controllers\WhistlistController::class)->middleware("otentikasi");