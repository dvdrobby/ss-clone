<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        "title" => "Direktori Sekolah Sunnah se-Indonesia",
        "tagline" => "Cari Sekolah Impian Bermanhaj Salaf Yang Sesuai Untuk Buah Hati Anda Hanya Di SekolahSunnah.com"
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact | SekolahSUnnah.com",
        "tagline" => "Contact"
    ]);
});

Route::get('/tentang', function () {
    return view('tentang', [
        "title" => "Tentang | SekolahSUnnah.com",
        "tagline" => "Tentang"
    ]);
});

Route::get('/submit', function () {
    return view('submit', [
        "title" => "Submit Data | SekolahSUnnah.com",
        "tagline" => "Bantu kami submit data sekolah di sekitar anda"
    ]);
});
