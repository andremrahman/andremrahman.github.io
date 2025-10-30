<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Gajahmada Karya Mandiri']);
});

Route::get('/layanan', function () {
    return view('layanan', ['title' => "Layanan Kami | Gajahmada Karya Mandiri"]);
});

Route::get('/kontak', function () {
    return view('kontak', ['title' => "Kontak Kami | Gajahmada Karya Mandiri"]);
});
