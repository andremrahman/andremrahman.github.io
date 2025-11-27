<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Gajahmada Karya Mandiri']);
})->name('home');

Route::get('/services', function () {
    return view('services', ['title' => "Services | Gajahmada Karya Mandiri"]);
})->name('services');

Route::get('/contact', function () {
    return view('contact', ['title' => "Contact Us | Gajahmada Karya Mandiri"]);
})->name('contact');
