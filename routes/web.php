<?php

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
    return view('index');
});

Route::get('/kategori', function () {
    return view('kategori');
});

Route::get('/maps', function () {
    return view('maps');
});

Route::get('/testimoni', function () {
    return view('testimoni');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/details', function () {
    return view('details');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/sukses', function () {
    return view('sukses');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});


