<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [App\Http\Controllers\PaymentController::class, 'index'])->name('index');
Route::get('/payment', [App\Http\Controllers\PaymentController::class, 'payment'])->name('payment');
Route::match(['get', 'post'],'/return', [App\Http\Controllers\PaymentController::class, 'return'])->name('return');
Route::post('/notification', [App\Http\Controllers\PaymentController::class, 'notification'])->name('notification');
Route::post('/callback', [App\Http\Controllers\PaymentController::class, 'callback'])->name('callback');
