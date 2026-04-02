<?php

use Illuminate\Support\Facades\Route;
// Anasayfa Rotası
Route::get('/', function () {
    return view('home');
});
// İletişim Sayfası Rotası
Route::get('/iletisim', function () {
    return view('iletisim');
});
