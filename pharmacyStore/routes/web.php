<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\SignoutController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\SidebarController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\Auth\AdminSignoutController;

Route::get('/', function () {
    return view('welcome');
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

//Admin Routes
Route::get('/admin',[AdminController::class,'adminShow'])->name('admin.show');
Route::get('/admin/registration',[RegistrationController::class,'showRegistrationForm'])->name('admin.registration');
Route::post('admin/registration',[RegistrationController::class,'storeData']);

Route::get('/admin/login',[AdminLoginController::class,'loginShow'])->name('admin.login');
Route::post('/admin/login',[AdminLoginController::class,'adminLogin']);

Route::post('/admin/logout',[AdminSignoutController::class,'logout'])->name('admin/logout');

Route::get('/admin/profile',[AdminProfileController::class,'showProfile'])->name('admin.profile');