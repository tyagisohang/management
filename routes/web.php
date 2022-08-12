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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Login With Google

Route::get('login/google', [App\Http\Controllers\Auth\RegisterController::class, 'redirectToGoogle'])->name('login.google');
Route::get('google-callback', [App\Http\Controllers\Auth\RegisterController::class, 'handleGoogleCallback']);

Route::get('self_contractor', [App\Http\Controllers\SelfContractorController::class, 'dashboard'])->name('self-contractor');