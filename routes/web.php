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
Route::get('/register', function () {
    return view('Register');
});


Route::get('/dashboard', function () {
    $data['active'] = 'dashboard'; 
    return view('Dashboard', $data);
});


Route::get('/pesanan', function () {
    $data['active'] = 'pesanan';
    return view('Pesanan', $data);
});


Route::get('/pengiriman', function () {
    $data['active'] = 'pengiriman';
    return view('Pengiriman', $data);
});


Route::get('/akses', function () {
    $data['active'] = 'akses';
    return view('Akses', $data);
});

// Popup
Route::get('/get/popup/antar', function () {
    return view('popup.Antar');
});
Route::get('/get/popup/tambah_user', function () {
    return view('popup.TambahUser');
});
Route::get('/get/popup/edit_user', function () {
    return view('popup.EditUser');
});
Route::get('/get/popup/delete_user', function () {
    return view('popup.DeleteUser');
});
