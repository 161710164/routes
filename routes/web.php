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
    return view('welcome');
});

Route::get('/about', function () {
    return '<h1>Halo</h1>'
    .'selamat datang di webapp saya<br>'
    .'Laravel, emang keren.';
});

Route::get('/about/1', function () {
    return '<h1>Halo</h1>'
    .'selamat datang di warung saya<br>'
    .'warung saya, emang mantap.';
});

Route::get('/about/2', function () {
    return '<h1>Halo</h1>'
    .'selamat datang kantin sakola<br>'
    .'kantin sakola, jadi lapar.';
});

Route::get('/about/3', function () {
    return '<h1>Halo</h1>'
    .'selamat datang di webapp saya<br>'
    .'Laravel, emang keren.';
});


Route::get('/kantin/{a}/{b}/{c}', function ($a,$b,$c) {
    return '<h1>Pesanan</h1>'
    .'saya makan :'. $a .'<br>'
    .'saya minum :'. $b .'<br>'
    .'cemilannya :'. $c ;
});

Route::get('user/{name?}', function ($name = 'john'){
	return 'Nama Saya ' .$name;
});