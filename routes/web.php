<?php

use App\Http\Controllers\BusController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('user/login');
});

// Route::post('/register', function () {
//     return view('user/register');
// });

//Users
Route::get('/register', [UserController::class, 'showRegister'])->name('register');
Route::post('/register', [UserController::class, 'store']);
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'authenticate'])->name('login');
Route::get('/dashboard', [UserController::class,'index'])->name('dashboard');
Route::get('/logout', [UserController::class,'logout'])->name('logout');
//Buses
Route::get('/buses', [BusController::class,'index'])->name('buses');
Route::get('/addBus', [BusController::class, 'addBus'])->name('addBus');
Route::post('/addBus', [BusController::class, 'store'])->name('addBus');