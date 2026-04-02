@extends('layouts.app')

@section('content')

<section class="bg-brand-dark py-16 text-center text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/dust.png')]"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4">İletişim</h1>
        <p class="text-lg opacity-80 max-w-2xl mx-auto">Sorularınız, fiyat bilgisi veya ücretsiz servis talebi için bize dilediğiniz an ulaşabilirsiniz.</p>
    </div>
</section>

@include('sections.contact')

<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-24">
    <div class="bg-white p-4 rounded-3xl shadow-xl">
        <div class="w-full h-96 bg-gray-200 rounded-2xl flex items-center justify-center text-gray-400">
            Harita görünümü için Google Maps iframe kodunuzu buraya ekleyebilirsiniz.
        </div>
    </div>
</section>

@endsection
