<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ToyController;

//Home Page Route
Route::get('/', function () {
    return view('index');
});
Route::get('/', [IndexController::class,'index']);

//filter
Route::get('/{name}', function () {
    return view('index');
});

//Admin Page Route
Route::get('/admin', function () {
    return view('admin.index');
});
Route::prefix('admin')->group(function () {
    Route::resource('toys', ToyController::class);
    Route::resource('categories', CategoryController::class);
});

//Create Toys Route
Route::get('/admin/create', function () {
    return view('toys.create');
});

//Auth Register Route
Route::get('/register', function () {
    return view('auth.register');
});
Route::post('/register', [UserController::class, 'register'])->name('register');

//Auth Login Route
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login');

//Auth Logout Route
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

