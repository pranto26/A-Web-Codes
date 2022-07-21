<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UploadController;
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
Route::get('/',[PagesController::class,'welcome'])->name('welcome'); 
Route::get('/aboutus',[PagesController::class,'about'])->name('about'); 
Route::get('/register',[AuthController::class,'register'])->name('customer.register');
Route::post('/register',[AuthController::class,'registerSubmit'])->name('customer.register.submit');
Route::get('/login',[AuthController::class,'login'])->name('customer.login');
Route::post('/login',[AuthController::class,'loginSubmit'])->name('customer.login.submit');
Route::get('/dashboard',[AuthController::class,'dashboard'])->name('customer.dashboard')->middleware('logged.user');
Route::get('/login',[AuthController::class,'logout'])->name('customer.login');
Route::get('/dashboard/order',[DashboardController::class,'mlist'])->name('mdc.list');
Route::get('/dashboard/doctor',[DashboardController::class,'dlists'])->name('doctor.list');
Route::get('/dashboard/profiledetail',[AuthController::class,'pdetails'])->name('pdetails.customer');
Route::get('/dashboard/cpassword',[DashboardController::class,'cpassword'])->name('change.password');
Route::get('/sendEmail',[MailController::class,'sendEmail'])->name('email');
Route::get('/change-password',[AuthController::class,'cpassword'])->name('cpassword');
Route::post('/change-password',[AuthController::class,'cpasssubmit'])->name('cpass.submit');
Route::post('/dashboard/profiledetail',[UploadController::class,'upload'])->name('upload.file');