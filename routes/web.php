<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ToyController;

//Home Page Route
Route::get('/', function () {
    return view('index');
});
Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/category/{id}', [IndexController::class, 'show'])->name('toy.show');
Route::get('/toy/{id}', [IndexController::class, 'detail'])->name('toy.detail');

//Admin Page Route
Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/admin/toys/create', function () {
    return view('toys.create');
});
Route::get('/admin/toys', function () {
    return view('toys.index');
});

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::get('/users', [UserController::class, 'index']);
    Route::resource('toys', ToyController::class);
});

//Auth Register Route
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::post('/register', [UserController::class, 'register'])->name('register');

//Auth Login Route
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login');

//Auth Logout Route
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
