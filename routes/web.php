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
        "title" => "Contact | SekolahSunnah.com",
        "tagline" => "Contact"
    ]);
});

Route::get('/tentang', function () {
    return view('tentang', [
        "title" => "Tentang | SekolahSunnah.com",
        "tagline" => "Tentang"
    ]);
});

Route::get('/submit', function () {
    return view('submit', [
        "title" => "Submit Data | SekolahSunnah.com",
        "tagline" => "Bantu kami submit data sekolah di sekitar anda"
    ]);
});

Route::get('/login', function () {
    return view('auth.login', [
        "title" => "Sekolah Sunnah Admin Login Page",
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard', [
        "title" => "Sekolah Sunnah Dashboard",
    ]);
});
