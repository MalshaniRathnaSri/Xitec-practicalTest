<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\SignoutController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\SidebarController;

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

//Sidebar Routes
Route::get('/myaccount',[SidebarController::class,'accountShow'])->name('myaccount');


Route::get('/prescription/upload',[PrescriptionController::class,'prescriptionUpload'])->name('prescription.show');
Route::post('/prescription/upload',[PrescriptionController::class,'prescriptionStore'])->name('prescription.upload');


