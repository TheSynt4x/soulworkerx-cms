<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\GuestMiddleware;
use App\Http\Middleware\RedirectIfAuthenticated;
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

Route::get('/', 'HomeController@index')->name('home');

Route::middleware([RedirectIfAuthenticated::class])->group(function () {
    Route::get('/login', 'LoginController@index')->name('login');
    Route::post('/login', 'LoginController@authenticate');
    Route::get('/register', 'RegisterController@index')->name('register');
    Route::post('/register', 'RegisterController@store');
});

Route::middleware([GuestMiddleware::class])->group(function () {
    Route::get('/change-password', 'ChangePasswordController@index')->name('change-password');
    Route::post('/change-password', 'ChangePasswordController@edit');

    Route::get('/logout', 'LoginController@logout')->name('logout');

    Route::get('/store', 'PaymentController@index')->name('store');

    Route::get('/payment', 'PaymentController@payWithpaypal')->name('payment');
    Route::get('/payment/status', 'PaymentController@getPaymentStatus')->name('status');
});
