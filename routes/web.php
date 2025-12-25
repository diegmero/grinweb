<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/productos', function () {
    return view('products.index');
})->name('products.index');

Route::get('/servicios', function () {
    return view('services.index');
})->name('services.index');

Route::get('/blog', function () {
    return view('blog.index');
})->name('blog.index');
