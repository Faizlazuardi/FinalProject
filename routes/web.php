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
Route::get('/', [IndexController::class, 'index']);
Route::get('/?category={category}', [indexController::class, 'show']);

//Admin Page Route
Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/admin/toys', function () {
    return view('admin.toys');
});
Route::get('/admin/users', function () {
    return view('admin.users');
});
Route::get('/admin/toys/create', function () {
    return view('toys.create');
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
