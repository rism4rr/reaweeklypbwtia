<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('profile', [
        'name' => 'Risma',
        'nim' => '12342520025',
        'prodi' => 'Teknologi Informasi',
        'gambar' => 'images/foto.jpg'
    ]);
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/kontak', function () {
    return view('kontak');
});