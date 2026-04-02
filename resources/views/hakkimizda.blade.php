@extends('layouts.app')

@section('title', 'Hakkımızda | ' . config('dilekhaliyikama.firma_adi'))
@section('meta_description', config('dilekhaliyikama.firma_adi') . ' ' . config('dilekhaliyikama.kurulus_yili') . ' yılından beri sektördeki tecrübesiyle halı, koltuk ve perde yıkamada güvenilir hizmet sunar.')

@section('content')

<section class="relative bg-brand-dark text-white py-24 overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/dust.png')]"></div>
    <div class="absolute right-0 top-1/2 w-1/2 h-full bg-yellow-400 opacity-10 blur-3xl rounded-l-full transform translate-x-1/4 -translate-y-1/2"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center" data-aos="fade-down">
        <h1 class="text-4xl md:text-6xl font-extrabold mb-6">Hakkımızda</h1>
        <div class="w-24 h-1 bg-yellow-400 mx-auto rounded-full mb-6"></div>
        <p class="text-lg opacity-90 max-w-3xl mx-auto leading-relaxed">
            Kurulduğumuz {{ config('dilekhaliyikama.kurulus_yili') }} yılından bu yana, tek bir amacımız var: Yaşam alanlarınıza sağlık, ferahlık ve gerçek temizliği getirmek.
        </p>
    </div>
</section>

<div class="pt-12">
    @include('sections.about')
</div>

<section class="py-24 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-5xl font-bold text-brand-dark mb-4">Kurumsal Değerlerimiz</h2>
            <div class="w-24 h-1 bg-yellow-400 mx-auto rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <div class="bg-gray-50 rounded-3xl p-10 border border-gray-100 shadow-lg hover:shadow-xl transition-shadow duration-300 relative group" data-aos="fade-up" data-aos-delay="100">
                <div class="absolute top-0 right-0 w-24 h-24 bg-brand-light opacity-5 rounded-bl-full transition-all group-hover:scale-110"></div>
                <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center text-brand-dark mb-6 shadow-sm border border-gray-100">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Misyonumuz</h3>
                <p class="text-gray-600 leading-relaxed">
                    Müşterilerimizin sağlığını ve memnuniyetini en ön planda tutarak, doğa dostu temizlik ürünleri ve son teknoloji ekipmanlarla sektördeki en kaliteli ve hijyenik yıkama hizmetini sunmak.
                </p>
            </div>

            <div class="bg-brand-dark text-white rounded-3xl p-10 border border-brand-dark shadow-xl hover:shadow-2xl transition-shadow duration-300 transform md:-translate-y-4 relative group" data-aos="fade-up" data-aos-delay="200">
                <div class="absolute top-0 right-0 w-24 h-24 bg-yellow-400 opacity-10 rounded-bl-full transition-all group-hover:scale-110"></div>
                <div class="w-16 h-16 bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl flex items-center justify-center text-yellow-400 mb-6 shadow-sm border border-white border-opacity-20">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold mb-4">Vizyonumuz</h3>
                <p class="text-gray-300 leading-relaxed">
                    Yenilikçi temizlik teknolojilerini sürekli takip ederek, bölgemizde "Temizlik ve Güven" denildiğinde akla gelen ilk, lider ve referans marka olmak.
                </p>
            </div>

            <div class="bg-gray-50 rounded-3xl p-10 border border-gray-100 shadow-lg hover:shadow-xl transition-shadow duration-300 relative group" data-aos="fade-up" data-aos-delay="300">
                <div class="absolute top-0 right-0 w-24 h-24 bg-brand-light opacity-5 rounded-bl-full transition-all group-hover:scale-110"></div>
                <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center text-brand-dark mb-6 shadow-sm border border-gray-100">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Kalite Politikamız</h3>
                <p class="text-gray-600 leading-relaxed">
                    Sıfır hata prensibiyle çalışmak, zamanında teslimat yapmak, ürün garantisi sunmak ve uzman kadromuzla %100 müşteri memnuniyetini sağlamak.
                </p>
            </div>
        </div>
    </div>
</section>

@include('sections.contact')

@endsection
