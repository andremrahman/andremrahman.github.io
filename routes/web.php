<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'PT Gajahmada Karya Mandiri, A Construction and Infrastructure General Contractor']);
})->name('home');

Route::get('/services', function () {
    return view('services', ['title' => "Our Integrated Construction Solutions | PT Gajahmada Karya Mandiri"]);
})->name('services');

Route::get('/contact', function () {
    return view('contact', ['title' => "Contact & Office Address | PT Gajahmada Karya Mandiri"]);
})->name('contact');
