@extends('layouts.app')

@section('title', $hizmetAdi . ' | ' . config('dilekhaliyikama.firma_adi'))
@section('meta_description', 'Profesyonel ' . mb_strtolower($hizmetAdi, 'UTF-8') . ' hizmetimiz ile derinlemesine temizlik ve %100 hijyen garantisi. Ücretsiz servis için hemen arayın.')

@section('content')
<section class="relative bg-brand-dark text-white py-20 overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/dust.png')]"></div>
    <div class="absolute right-0 top-0 w-1/2 h-full bg-brand-light opacity-20 blur-3xl rounded-l-full transform translate-x-1/4"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center" data-aos="fade-down">
        <a href="/#hizmetler" class="inline-flex items-center text-sm font-medium text-yellow-400 hover:text-white mb-6 transition">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            Tüm Hizmetlere Dön
        </a>
        <h1 class="text-4xl md:text-6xl font-extrabold mb-6">{{ $hizmetAdi }}</h1>
        <div class="w-24 h-1 bg-yellow-400 mx-auto rounded-full mb-6"></div>
        <p class="text-lg opacity-90 max-w-2xl mx-auto">
            {{ config('dilekhaliyikama.firma_adi') }} kalitesiyle profesyonel {{ mb_strtolower($hizmetAdi, 'UTF-8') }} çözümleri.
        </p>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-16">
            <div class="w-full lg:w-2/3" data-aos="fade-right">
                <div class="bg-white rounded-3xl shadow-lg p-8 md:p-12 border border-gray-100">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Neden Bizi Seçmelisiniz?</h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-8">
                        {{ $hizmetAdi }} işleminde, ürünlerinizin dokusuna ve malzemesine uygun özel şampuanlar ve son teknoloji endüstriyel makineler kullanıyoruz. Amacımız sadece yüzeysel kirleri değil, derinlere işlemiş toz, akar ve bakterileri de tamamen yok etmektir. Ürünleriniz %100 hijyen garantisiyle adresinizden alınır ve ilk günkü parlaklığıyla teslim edilir.
                    </p>

                    @if(count($altHizmetler) > 0)
                        <h3 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-4">Sunduğumuz {{ $hizmetAdi }} Çeşitleri</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            @foreach($altHizmetler as $alt)
                                <div class="flex items-center p-4 bg-gray-50 rounded-xl border border-gray-100 hover:border-brand-light transition">
                                    <div class="w-10 h-10 bg-yellow-100 text-yellow-600 rounded-lg flex items-center justify-center mr-4 shrink-0">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <span class="font-semibold text-gray-700">{{ $alt }}</span>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>

            <div class="w-full lg:w-1/3" data-aos="fade-left">
                <div class="bg-brand-dark text-white rounded-3xl p-8 sticky top-32 shadow-2xl">
                    <h3 class="text-2xl font-bold mb-4 border-b border-gray-700 pb-4">Hemen Fiyat Alın</h3>
                    <p class="text-gray-300 mb-8 opacity-90">
                        {{ $hizmetAdi }} hizmetimiz için ücretsiz servis talep edebilir veya metrekare/adet fiyatlarımızı öğrenebilirsiniz.
                    </p>

                    <a href="tel:{{ config('dilekhaliyikama.telefon') }}" class="w-full flex items-center justify-center px-6 py-4 border-2 border-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-brand-dark text-lg font-bold rounded-xl transition duration-300 shadow-lg mb-4">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        Müşteri Temsilcisi
                    </a>

                    <a href="https://wa.me/90{{ str_replace(' ', '', config('dilekhaliyikama.telefon')) }}?text=Merhaba, {{ $hizmetAdi }} hizmetiniz hakkında bilgi almak istiyorum." target="_blank" class="w-full flex items-center justify-center px-6 py-4 bg-green-500 text-white text-lg font-bold rounded-xl hover:bg-green-600 transition duration-300 shadow-lg">
                        WhatsApp'tan Yazın
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@include('sections.contact')
@endsection
