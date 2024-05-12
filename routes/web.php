<?php

use App\Http\Controllers\BusController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmailController;

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
Route::get('/usersList', [UserController::class,'show'])->name('usersList');
Route::get('/editUser/{id}', [UserController::class,'edit'])->name('editUser');
Route::post('/editUser/{id}', [UserController::class,'update'])->name('editUser');
//Buses
Route::get('/buses', [BusController::class,'index'])->name('buses');
Route::get('/addBus', [BusController::class, 'addBus'])->name('addBus');
Route::post('/addBus', [BusController::class, 'store'])->name('addBus');
Route::get('/editBus/{id}', [BusController::class,'edit'])->name('editBus');
Route::post('/editBus/{id}', [BusController::class, 'update'])->name('editBus');
Route::delete('/delete/{id}', [BusController::class,'destroy'])->name('delete');

//Stripe routes
Route::get('/payment', [PaymentController::class, 'showPaymentForm'])->name('payment.form');
Route::post('/process-payment', [PaymentController::class, 'processPayment'])->name('process.payment');
//Route::get('/payment', 'PaymentController@showPaymentForm')->name('payment.form');
//Route::post('/process-payment', 'PaymentController@processPayment')->name('process.payment');

Route::get('/payment/success', function () {
    return view('payment.success');
})->name('payment.success');

Route::get('/payment/failure', function () {
    return view('payment.failure');
})->name('payment.failure');

//Email routes
Route::get('/send-welcome-email', [EmailController::class, 'sendWelcomeEmail']);

