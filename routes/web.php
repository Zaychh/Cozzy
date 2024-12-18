<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'processLogin']);

Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'processRegister']);

Route::get('home', [AuthController::class, 'home'])->name('home')->middleware('auth');

Route::post('logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('logout');