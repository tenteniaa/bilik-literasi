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

Route::get('/dashboard', function () {
    return view('dashboard', ['title' => 'Home']);
});

Route::get('/dashboard/profil', function () {
    return view('users-profile', ['title' => 'Profil']);
});

Route::get('/dashboard/peminjaman', function () {
    return view('peminjaman', ['title' => 'Peminjaman Buku']);
});

Route::get('/dashboard/peminjaman/edit', function () {
    return view('form', ['title' => 'Edit Data Buku']);
});

Route::get('/dashboard/stok', function () {
    return view('stok', ['title' => 'Stok Buku']);
});

Route::get('/dashboard/kegiatan', function () {
    return view('kegiatan', ['title' => 'Kegiatan']);
});

Route::get('/dashboard/kegiatan/1', function () {
    return view('kegiatan-1', ['title' => 'Rumping Kodok Ngorek']);
});
