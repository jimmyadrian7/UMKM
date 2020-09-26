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
    return view('Login');
});


Route::get('/dashboard', function () {
    return view('Dashboard');
});


Route::get('/pesanan', function () {
    return view('Pesanan');
});



Route::get('/pengiriman', function () {
    return view('Pengiriman');
});



Route::get('/akses', function () {
    return view('Akses');
});
