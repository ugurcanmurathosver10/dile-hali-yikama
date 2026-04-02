<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('/', function () {
    return view('home');
});

Route::get('/iletisim', function () {
    return view('iletisim');
});

Route::get('/hizmet/{slug}', function ($slug) {
    $hizmetler = config('dilekhaliyikama.hizmetler');
    $secilenHizmetAdi = null;
    $altHizmetler = [];

    foreach ($hizmetler as $hizmetAdi => $altlar) {
        if (Str::slug($hizmetAdi) === $slug) {
            $secilenHizmetAdi = $hizmetAdi;
            $altHizmetler = $altlar;
            break;
        }
    }

    if (!$secilenHizmetAdi) {
        abort(404);
    }

    return view('hizmet-detay', [
        'hizmetAdi' => $secilenHizmetAdi,
        'altHizmetler' => $altHizmetler,
        'slug' => $slug
    ]);
})->name('hizmet.detay');

// Yeni Dinamik Hizmet Bölgesi Rotası
Route::get('/bolge/{slug}', function ($slug) {
    $bolgeler = config('dilekhaliyikama.hizmet_bolgeleri');
    $secilenBolge = null;

    // Config'deki bölgeleri dönüp, URL'deki slug ile eşleşen var mı kontrol ediyoruz
    foreach ($bolgeler as $bolge) {
        if (Str::slug($bolge) === $slug) {
            $secilenBolge = $bolge;
            break;
        }
    }

    // Bölge bulunamazsa 404 sayfasına at
    if (!$secilenBolge) {
        abort(404);
    }

    return view('bolge-detay', [
        'bolge' => $secilenBolge,
        'slug' => $slug
    ]);
})->name('bolge.detay');

// routes/web.php içerisine eklenecek kısım
Route::get('/hakkimizda', function () {
    return view('hakkimizda');
})->name('hakkimizda');

// Gizlilik ve Çerez Politikası İçin Basit Rotalar (İçeriklerini daha sonra eklersin)
Route::get('/gizlilik-politikasi', function () { return view('home'); }); // Şimdilik home'a döner
Route::get('/cerez-yonetimi', function () { return view('home'); });

// Mükemmel Dinamik Sitemap Rotası
Route::get('/sitemap.xml', function () {
    $hizmetler = config('dilekhaliyikama.hizmetler');
    $bolgeler = config('dilekhaliyikama.hizmet_bolgeleri');

    // Bu verileri sitemap görünümüne gönderiyoruz ve sayfanın formatını XML yapıyoruz
    return response()->view('sitemap', [
        'hizmetler' => $hizmetler,
        'bolgeler' => $bolgeler
    ])->header('Content-Type', 'text/xml');
});
