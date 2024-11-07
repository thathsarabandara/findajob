<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\EmployeeRegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;

Route::post('/register', [EmployeeRegisterController::class, 'register'])->name('register.employee');
Route::get('/register',[EmployeeRegisterController::class , 'showRegistrationForm'])->name(('register'));
Route::get('/login',[LoginController::class , 'showLoginForm'])->name(('login'));
Route::get('/home',[HomeController::class , 'viewHome'])->name(('home'));
Route::post('/login',[LoginController::class , 'checkValidation'])->name(('checkme'));
