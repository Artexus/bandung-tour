<?php

use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TransactionController;
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

Route::get('/', function () { // public access
    return view('home');
})->name('HomePage');

Route::get('/gallery', function () { // public access
    return view('gallery');
})->name('GalleryPage');

Route::prefix('/contacts')->group(function () {
    Route::get('/', function () { // public access
        return view('contact');
    })->name('ContactPage');

    Route::post('/', [ContactController::class, 'submit'])->name('SubmitContact');
});

Route::get('/abouts', function () { // public access
    return view('about');
})->name('AboutPage');

Route::middleware('auth')->group(function () {
    Route::get('/logout', [LogoutController::class, 'logout'])->name('Logout');
    Route::prefix('/bookings')->group(function () {
        Route::get('/', [BookingController::class, 'show'])->name('BookingPage');
    });
    Route::post('/carts', [CartController::class, 'addCart'])->name('AddCart');
    Route::delete('/carts', [CartController::class, 'deleteCart'])->name('DeleteCart');

    Route::post('/checkout', [CheckoutController::class, 'checkout'])->name('Checkout');

    Route::get('/transactions', [TransactionController::class, 'showTransaction'])->name('TransactionPage');
});

Route::middleware('auth.guest')->group(function () {
    Route::prefix('login')->group(function () {
        Route::get('/', [LoginController::class, 'showLoginForm'])->name('LoginPage');
        Route::post('/', [LoginController::class, 'postLogin'])->name('SubmitLogin');
    });

    Route::prefix('register')->group(function () {
        Route::get('/', [RegisterController::class, 'showRegisterForm'])->name('RegisterPage');
        Route::post('/', [RegisterController::class, 'postRegister'])->name('SubmitRegister');
    });

    Route::prefix('forgot')->group(function () {
        Route::get('/', [ForgotPasswordController::class, 'showForgotPassword'])->name('ForgotPasswordPage');
        Route::get('/token/{token}', [ForgotPasswordController::class, 'showForgotPasswordStatus']);
        Route::post('/', [ForgotPasswordController::class, 'generateForgotToken'])->name('SubmitForgot');
        Route::post('/password', [ForgotPasswordController::class, 'submitNewPassword'])->name('SubmitNewPassword');
    });
});
