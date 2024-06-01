<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\SignoutController;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('home');
});

Route::get('/Home',[FormController::class,'home'])->name('home');

//Authorization Routes
Route::get('/Registration',[AuthController::class,'showRegistration'])->name('register');
Route::post('/Registration',[AuthController::class,'store']);

Route::get('/Login',[LoginController::class,'show'])->middleware('guest')->name('login');
Route::post('/Login',[LoginController::class,'login']);
Route::get('/Profile',[LoginController::class,'profile'])->name('profile');

Route::post('/Logout',[SignoutController::class,'logout'])->name('logout');
