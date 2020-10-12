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


Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        $data['active'] = 'dashboard'; 
        return view('admin.Dashboard', $data);
    });


    Route::get('/pesanan', function () {
        $data['active'] = 'pesanan';
        return view('admin.Pesanan', $data);
    });


    Route::get('/pengiriman', function () {
        $data['active'] = 'pengiriman';
        return view('admin.Pengiriman', $data);
    });


    Route::get('/akses', function () {
        $data['active'] = 'akses';
        return view('admin.Akses', $data);
    });
});

// Popup
Route::get('/get/popup/admin/antar', function () {
    return view('admin.popup.Antar');
});
Route::get('/get/popup/admin/tambah_user', function () {
    return view('admin.popup.TambahUser');
});
Route::get('/get/popup/admin/edit_user', function () {
    return view('admin.popup.EditUser');
});
Route::get('/get/popup/admin/delete_user', function () {
    return view('admin.popup.DeleteUser');
});


Route::prefix('penjual')->group(function () {
    Route::get('/dashboard', function () {
        $data['active'] = 'dashboard'; 
        return view('penjual.Dashboard', $data);
    });


    Route::get('/produk', function () {
        $data['active'] = 'produk';
        return view('penjual.Produk', $data);
    });
    Route::get('/produk/tambah', function () {
        $data['active'] = 'produk';
        return view('penjual.ProdukTambah', $data);
    });


    Route::get('/pengiriman', function () {
        $data['active'] = 'pengiriman';
        return view('penjual.Pengiriman', $data);
    });


    Route::get('/akses', function () {
        $data['active'] = 'akses';
        return view('penjual.Akses', $data);
    });
});
Route::get('/get/popup/penjual/delete_produk', function () {
    return view('penjual.popup.DeleteProduk');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
