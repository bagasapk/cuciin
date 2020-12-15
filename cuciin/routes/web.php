<?php

use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});

Auth::routes();

Route::get('/homepage', [App\Http\Controllers\HomeController::class, 'index'])->name('homepage');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin')->middleware('cekStatus');

Route::get('/update', function () {
    return view('adminUpdate');
})->name('update');

Route::get('/pemesanan', [App\Http\Controllers\CartController::class, 'index'])->name('pemesanan');
// Route::get('/transaksi', [App\Http\Controllers\CartController::class, 'listCart'])->name('transaksi');
Route::POST('addToCart', [App\Http\Controllers\CartController::class, 'addToCart'])->name('addToCart');

Route::get('/faq', function () {
    return view('faqUser');
})->name('faq');

Route::get('/about', function () {
    return view('aboutUser');
})->name('about');
