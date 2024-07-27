<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\UserMiddleware;

//Home Page Route
Route::middleware([UserMiddleware::class])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // Filter and Show Routes
    Route::get('/category/{id}', [HomeController::class, 'filter'])->name('toy.filter');
    Route::get('/toy/{id}', [HomeController::class, 'show'])->name('toy.show');

    // Cart Page Route
    Route::get('/cart', [HomeController::class, 'cart'])->name('toy.cart');
});

// Admin Page Routes with Middleware
Route::prefix('admin')->middleware([AdminMiddleware::class])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('/users', [UserController::class, 'index'])->name('admin.users');
    Route::resource('toys', ToyController::class);
});

// Auth Routes
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');
