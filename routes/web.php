<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome.welcome');
})->name('welcome');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    // dashboad route =====
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // payment route =====
    Route::get('dashboard/payment', function () {
        return view('payment');
    })->name('payment');

    // paypal route =====
    Route::get(
        'dashboard/payment/paypal',
        [
            App\Http\Controllers\Payment\PaypalController::class, 'index'
        ]
    )->name('paypal');
    // paypal post route =====
    Route::post(
        'dashboard/payment/paypal',
        [
            App\Http\Controllers\Payment\PaypalController::class, 'store'
        ]
    )->name('paypal');

    // creditcard route =====
    Route::get(
        'dashboard/payment/creditcard',
        [
            App\Http\Controllers\Payment\CardController::class, 'index'
        ]
    )->name('creditcard');
    // credit post route =====
    Route::post(
        'dashboard/payment/creditcard',
        [
            App\Http\Controllers\Payment\CardController::class, 'store'
        ]
    )->name('creditcard');

    // payment route =====
    Route::get('dashboard/payment/crypto', function () {
        return view('payment-crypto');
    })->name('crypto');
});
