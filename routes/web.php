<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ToyController;

Route::get('/', function () {
    return view('index');
});

Route::get('/', [CategoryController::class, 'index']);

Route::get('/toys', [ToyController::class, 'index']);
Route::get('/toys/{name}', [ToyController::class, 'show']);

Route::get('/register', function () {
    return view('auth.register');
});
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');

