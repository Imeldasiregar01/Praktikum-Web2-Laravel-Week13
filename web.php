<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\DashboardControllers;
use App\Http\Controllers\AdminController;
use  App\Http\Controllers\PasienController;

Route::get('/', function () {
    return view('admin.index');
});

Route::get('/salam', function () {
    return "Hai, Saya Imelda siap belajar Laravel 11";
});

Route::get('/profil', function () {
    return view('profil');
});



Route::get('/admin', [AdminController::class, 'index']);
Route::get('/pasien/show', [PasienController::class, 'show']);