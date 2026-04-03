<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

// ANA SAYFA
Route::get('/', function () {
    return view('home');
})->name('home');

// HAKKIMIZDA
Route::get('/hakkimizda', function () {
    return view('hakkimizda');
})->name('hakkimizda');

// İLETİŞİM
Route::get('/iletisim', function () {
    return view('iletisim');
})->name('iletisim');

// HİZMET DETAY (Dinamik SEO Sayfaları)
Route::get('/hizmet/{slug}', function ($slug) {
    $hizmetler = config('dilekhaliyikama.hizmetler', []);
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

// BÖLGE DETAY (Dinamik Dönüşüm ve Local SEO Sayfaları)
Route::get('/bolge/{slug}', function ($slug) {
    $bolgeler = config('dilekhaliyikama.hizmet_bolgeleri', []);
    $secilenBolge = null;

    foreach ($bolgeler as $bolge) {
        // KRALIN SEO DOKUNUŞU: Hem "akcay" hem de "akcay-hali-yikama" slug'larını yakalar
        if (Str::slug($bolge) === $slug || Str::slug($bolge . ' hali yikama') === $slug) {
            $secilenBolge = $bolge;
            break;
        }
    }

    if (!$secilenBolge) {
        abort(404);
    }

    // HATANIN ÇÖZÜLDÜĞÜ YER: Değişkenin adını 'bolgeAdi' yaptık!
    return view('bolge-detay', [
        'bolgeAdi' => $secilenBolge,
        'slug' => $slug
    ]);
})->name('bolge.detay');

// POLİTİKALAR (Şimdilik ana sayfaya döner, ileride içerik girersin)
Route::get('/gizlilik-politikasi', function () {
    return view('home');
})->name('gizlilik');

Route::get('/cerez-yonetimi', function () {
    return view('home');
})->name('cerez');

// SITEMAP (Dinamik XML - Google Botları İçin Ziyafet)
Route::get('/sitemap.xml', function () {
    $hizmetler = config('dilekhaliyikama.hizmetler', []);
    $bolgeler = config('dilekhaliyikama.hizmet_bolgeleri', []);

    return response()->view('sitemap', [
        'hizmetler' => $hizmetler,
        'bolgeler' => $bolgeler
    ])->header('Content-Type', 'text/xml');
});
