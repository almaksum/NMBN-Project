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
    return view('navbar.home', ['title' => 'NMBN-PROJECT']);
});

Route::get('/layanan-kami', function () {
    return view('navbar.service', ['title' => 'Layanan Yang Tersedia']);
});

Route::get('/galeri-project', function () {
    return view('navbar.galery', ['title' => 'Galeri NMBN-PROJECT']);
});

Route::get('/kontak-kami', function () {
    return view('navbar.contact', ['title' => 'Kontak NMBN-PROJECT']);
});

Route::get('/tentang-kami', function () {
    return view('navbar.about', ['title' => 'Tentang NMBN-PROJECT']);
});
