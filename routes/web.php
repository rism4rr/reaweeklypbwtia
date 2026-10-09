<?php

use Illuminate\Support\Facades\Route;
use App\Models\Berita;

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

Route::get('/kontak', function () {
    return view('kontak');
});


// Data berita
$data_berita = [
    [
        "judul" => "MBG mas Burhan",
        "slug" => "MBG-mas-Burhan",
        "penulis" => "Burhan",
        "konten" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus ipsum dignissimos nulla, tempore, delectus distinctio qui debitis sapiente esse veniam cum, saepe blanditiis adipisci praesentium molestias consequatur a mollitia sed. Fuga atque a provident iusto reiciendis expedita omnis maxime aut. Similique veniam aspernatur nulla laboriosam asperiores iure, necessitatibus, inventore, ab cupiditate sapiente eius quaerat ratione. Voluptatem quae incidunt corrupti debitis, fugit doloribus repellendus dignissimos quaerat rem error saepe odit alias harum eaque aspernatur natus sapiente maiores rerum quis labore?"
    ],

    [
        "judul" => "Indonesia Juara Asean",
        "slug" => "Indonesia-Juara-Asean",
        "penulis" => "Risma",
        "konten" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus ipsum dignissimos nulla, tempore, delectus distinctio qui debitis sapiente esse veniam cum."
    ]
];


// Halaman berita

Route::get('/berita', function () {
    $beritas = Berita::all();

    return view('berita', [
        'title' => 'Berita',
        'beritas' => $beritas
    ]);
});

// Routing untuk menampilkan 1 berita
Route::get('/berita/{slug}', function ($slug) {
    $berita = Berita::where('slug', $slug)->firstOrFail();

    return view('beritatunggal', [
        'title' => $berita->judul,
        'singelnews' => $berita
    ]);
});