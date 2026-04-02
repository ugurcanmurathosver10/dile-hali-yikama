@extends('layouts.app')

@section('title', $bolge . ' | ' . config('dilekhaliyikama.firma_adi'))
@section('meta_description', config('dilekhaliyikama.firma_adi') . ' güvencesiyle ' . str_replace(' Halı Yıkama', '', $bolge) . ' bölgesinde ücretsiz servis, derinlemesine temizlik ve %100 hijyen garantili halı yıkama hizmeti.')

@section('content')

<section class="relative bg-brand-dark text-white py-24 overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/dust.png')]"></div>
    <div class="absolute left-0 bottom-0 w-1/2 h-full bg-yellow-400 opacity-10 blur-3xl rounded-r-full transform -translate-x-1/4"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center" data-aos="fade-down">
        <a href="/#bolgeler" class="inline-flex items-center text-sm font-medium text-yellow-400 hover:text-white mb-6 transition">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            Tüm Bölgelere Dön
        </a>

        <div class="inline-flex items-center justify-center bg-white bg-opacity-20 backdrop-blur-sm px-4 py-2 rounded-full mb-6">
            <svg class="w-5 h-5 text-yellow-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
            <span class="text-sm font-bold tracking-wider uppercase">Ücretsiz Servis Bölgemiz</span>
        </div>

        <h1 class="text-4xl md:text-6xl font-extrabold mb-6">{{ $bolge }}</h1>
        <p class="text-lg opacity-90 max-w-2xl mx-auto leading-relaxed">
            {{ str_replace(' Halı Yıkama', '', $bolge) }} ve çevresindeki müşterilerimiz için kapıdan kapıya ücretsiz servis imkanımızla, halı, koltuk, yorgan ve perdelerinizi ilk günkü temizliğine kavuşturuyoruz.
        </p>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-16">

            <div class="w-full lg:w-2/3" data-aos="fade-right">
                <div class="bg-white rounded-3xl shadow-lg p-8 md:p-12 border border-gray-100">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">{{ str_replace(' Halı Yıkama', '', $bolge) }} İçin Hizmet Sürecimiz</h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-8">
                        {{ config('dilekhaliyikama.firma_adi') }} olarak {{ str_replace(' Halı Yıkama', '', $bolge) }} sakinlerine özel, hızlı ve güvenilir temizlik hizmeti sunuyoruz. Sadece bir telefon uzağınızdayız. Uzman ekibimiz belirttiğiniz saatte adresinize gelerek ürünlerinizi teslim alır, fabrikamızda anti-bakteriyel şampuanlarla derinlemesine temizler ve tamamen kuruduktan sonra ambalajlayarak size geri getirir.
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-brand-light bg-opacity-5 p-6 rounded-2xl border border-brand-light border-opacity-10">
                            <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-brand-dark mb-4 shadow-sm">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <h4 class="text-xl font-bold text-gray-800 mb-2">Hızlı Teslimat</h4>
                            <p class="text-gray-600 text-sm">Ürünleriniz en kısa sürede, söz verdiğimiz tarihte yıkanmış ve kurutulmuş olarak adresinize teslim edilir.</p>
                        </div>
                        <div class="bg-yellow-50 p-6 rounded-2xl border border-yellow-100">
                            <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-yellow-500 mb-4 shadow-sm">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <h4 class="text-xl font-bold text-gray-800 mb-2">%100 Memnuniyet</h4>
                            <p class="text-gray-600 text-sm">Gelişmiş teknoloji makinelerimizle ürünlerinize zarar vermeden maksimum hijyen sağlıyoruz.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-1/3" data-aos="fade-left">
                <div class="bg-brand-dark text-white rounded-3xl p-8 sticky top-32 shadow-2xl">
                    <h3 class="text-2xl font-bold mb-2 border-b border-gray-700 pb-4">Hemen Servis Çağırın</h3>
                    <p class="text-gray-300 mb-8 opacity-90 mt-4">
                        {{ str_replace(' Halı Yıkama', '', $bolge) }} bölgesinde ücretsiz servis aracımız şu an sahada! Hemen arayıp adresinizi yazdırın.
                    </p>

                    <a href="tel:{{ config('dilekhaliyikama.telefon') }}" class="w-full flex items-center justify-center px-6 py-4 border-2 border-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-brand-dark text-lg font-bold rounded-xl transition duration-300 shadow-lg mb-4">
                        <svg class="w-6 h-6 mr-2 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        Şimdi Ara
                    </a>

                    <a href="https://wa.me/90{{ str_replace(' ', '', config('dilekhaliyikama.telefon')) }}?text=Merhaba, {{ str_replace(' Halı Yıkama', '', $bolge) }} bölgesinden yazıyorum. Halı yıkama fiyatları ve servis hakkında bilgi alabilir miyim?" target="_blank" class="w-full flex items-center justify-center px-6 py-4 bg-[#25D366] text-white text-lg font-bold rounded-xl hover:bg-[#20b858] transition duration-300 shadow-lg">
                        <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                        WhatsApp
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

@include('sections.contact')

@endsection
