@extends('layouts.app')

@php
    $hizmetGorselleri = [
        'Halı Yıkama' => 'hali-yikama-card.webp',
        'Koltuk Yıkama' => 'koltuk-yikama-card.webp',
        'Yorgan Yıkama' => 'yorgan-yikama-card.webp',
        'Battaniye Yıkama' => 'battaniye-yikama-card.webp',
        'Perde Yıkama' => 'perde-yikama-card.webp',
        'Overlok' => 'overlok-card.webp',
    ];

    $gorsel = $hizmetGorselleri[$hizmetAdi] ?? 'default-card.webp';

    // ANLAMLI VE VURUCU METİN MOTORU (Başlıklar artık daha davetkar)
    $hizmetDetaylari = [
        'Halı Yıkama' => [
            'slogan' => 'Derinlemesine Hijyen, İlk Günkü Canlılık.',
            'metin' => 'Halılarınızın sadece yüzeyini değil, en dipteki ilmeklerini temizliyoruz. Anti-bakteriyel şampuanlar ve tam otomatik durulama sistemimizle, toz akarlarından arındırılmış sağlıklı bir yaşam alanı sunuyoruz.',
            'ozellikler' => ['Otomatik Toz Alma', 'Bitkisel Şampuan', 'Kapalı Oda Kurutma']
        ],
        'Koltuk Yıkama' => [
            'slogan' => 'Kumaş Dokusunda Kusursuz Ferahlık.',
            'metin' => 'Lekelere veda edin. Vakumlu buhar teknolojimizle koltuk süngerlerine işlemiş kirleri ve kokuları söküp alıyoruz. Kumaş yapısına zarar vermeden derinlemesine hijyen sağlıyoruz.',
            'ozellikler' => ['Yerinde Hizmet', 'Leke Çıkarma Garantisi', 'Hızlı Kuruma']
        ],
        'Perde Yıkama' => [
            'slogan' => 'Stor ve Zebra Perdeleriniz Bize Emanet.',
            'metin' => 'Zahmetli sökme ve takma işini bize bırakın. Perdelerinizi adresinizden alıyor, mekanizmalarına zarar vermeden özel havuzlarda yıkayıp ütülenmiş gibi teslim ediyoruz.',
            'ozellikler' => ['Ücretsiz Sök-Tak', 'Hassas Yıkama', 'Mekanizma Bakımı']
        ],
        'Overlok' => [
            'slogan' => 'Eskimiş Halı Kenarlarına Yeni Bir Hayat.',
            'metin' => 'Yıpranan veya saçakları dökülen halılarınızın kenarlarını, orijinal dokusuna uygun en dayanıklı ipliklerle fabrikasyon standartlarında yeniliyoruz.',
            'ozellikler' => ['Çift Dikiş Sağlamlık', 'Renk Uyumu', 'Hızlı Teslimat']
        ]
    ];

    $detay = $hizmetDetaylari[$hizmetAdi] ?? [
        'slogan' => 'Profesyonel Temizlik Çözümleri.',
        'metin' => 'Eşyalarınızın ömrünü uzatan, sağlığınızı koruyan uzman temizlik hizmeti.',
        'ozellikler' => ['Uzman Kadro', 'Ücretsiz Servis', '%100 Hijyen']
    ];
@endphp

@section('content')

<section class="relative h-[50vh] md:h-[60vh] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/' . $gorsel) }}" class="w-full h-full object-cover scale-105 animate-[kenburns_20s_linear_infinite]" alt="{{ $hizmetAdi }}">
        <div class="absolute inset-0 bg-gradient-to-b from-brand-dark/80 via-brand-dark/40 to-white"></div>
    </div>

    <div class="relative z-10 text-center px-4" data-aos="fade-up">
        <span class="bg-yellow-400 text-brand-dark px-4 py-1 rounded-full text-xs font-bold uppercase tracking-widest mb-4 inline-block shadow-xl">Premium Seri</span>
        <h1 class="text-4xl md:text-7xl font-black text-white mb-4 drop-shadow-2xl">{{ $hizmetAdi }}</h1>
        <p class="text-white/90 text-lg md:text-xl font-light italic">{{ $detay['slogan'] }}</p>
    </div>
</section>

<section class="py-12 bg-white relative z-20 -mt-10 md:-mt-20">
    <div class="max-w-6xl mx-auto px-4">
        <div class="bg-white rounded-[3rem] shadow-[0_50px_100px_-20px_rgba(0,0,0,0.15)] p-8 md:p-16 flex flex-col lg:flex-row gap-12 items-center border border-gray-100">

            <div class="w-full lg:w-3/5 text-center lg:text-left">
                <h2 class="text-3xl md:text-4xl font-black text-gray-900 mb-6 leading-tight">
                    Neden {{ config('dilekhaliyikama.firma_adi') }}?
                </h2>
                <p class="text-gray-600 text-lg leading-relaxed mb-8 font-light">
                    {{ $detay['metin'] }}
                </p>

                <div class="flex flex-wrap justify-center lg:justify-start gap-3">
                    @foreach($detay['ozellikler'] as $item)
                        <span class="flex items-center gap-2 bg-gray-50 border border-gray-200 px-4 py-2 rounded-2xl text-sm font-bold text-brand-dark">
                            <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            {{ $item }}
                        </span>
                    @endforeach
                </div>
            </div>

            <div class="w-full lg:w-2/5">
                <div class="bg-brand-dark rounded-[2.5rem] p-8 md:p-10 text-white relative overflow-hidden shadow-2xl">
                    <div class="absolute top-0 right-0 p-4 opacity-10">
                        <svg class="w-24 h-24" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-2">Hemen Arayın</h3>
                    <p class="text-white/70 text-sm mb-8 italic">Ücretsiz servis için bir tık yeterli.</p>

                    <div class="space-y-4">
                        <a href="tel:{{ config('dilekhaliyikama.telefon') }}" class="flex items-center justify-center gap-3 bg-white text-brand-dark py-4 rounded-2xl font-black text-lg hover:bg-yellow-400 transition-all shadow-xl">
                             <svg class="w-6 h-6 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                             Aramayı Başlat
                        </a>
                        <a href="https://wa.me/90{{ str_replace(' ', '', config('dilekhaliyikama.telefon')) }}" class="flex items-center justify-center gap-3 bg-[#25D366] text-white py-4 rounded-2xl font-black text-lg hover:scale-105 transition-all">
                             WhatsApp Mesaj
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4">
        <div class="text-center mb-10">
            <h3 class="text-2xl md:text-3xl font-black text-gray-900">Merak Edilenler</h3>
        </div>
        <div class="space-y-3">
            @foreach([
                ['s' => 'Yıkama süresi ne kadar?', 'c' => 'Ortalama 3-4 iş günü içerisinde teslim ediyoruz.'],
                ['s' => 'Servis ücretli mi?', 'c' => 'Hayır, tüm bölgelerimize servisimiz tamamen ücretsizdir.'],
                ['s' => 'Hangi şampuanları kullanıyorsunuz?', 'c' => 'Doğa dostu ve anti-alerjik özel endüstriyel şampuanlar kullanıyoruz.']
            ] as $faq)
                <details class="group bg-gray-50 border border-gray-100 rounded-3xl overflow-hidden">
                    <summary class="flex justify-between items-center p-6 cursor-pointer font-bold text-gray-800 list-none">
                        {{ $faq['s'] }}
                        <span class="group-open:rotate-180 transition-transform"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></span>
                    </summary>
                    <div class="px-6 pb-6 text-gray-600 font-light">{{ $faq['c'] }}</div>
                </details>
            @endforeach
        </div>
    </div>
</section>

<section class="py-12 bg-gray-50 border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-4">
        <h3 class="text-xl font-bold text-gray-400 uppercase tracking-widest text-center mb-10">Keşfetmeye Devam Edin</h3>
        <div class="flex flex-row overflow-x-auto gap-4 lg:grid lg:grid-cols-5 lg:gap-6 [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">
            @foreach(config('dilekhaliyikama.hizmetler') as $h => $alt)
                @if($h != $hizmetAdi)
                    <a href="{{ route('hizmet.detay', \Illuminate\Support\Str::slug($h)) }}" class="flex-shrink-0 w-40 lg:w-auto group">
                        <div class="aspect-square rounded-3xl overflow-hidden mb-3 shadow-lg">
                            <img src="{{ asset('images/' . ($hizmetGorselleri[$h] ?? 'default-card.webp')) }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <h4 class="text-sm font-bold text-gray-700 text-center group-hover:text-brand-dark">{{ $h }}</h4>
                    </a>
                @endif
            @endforeach
        </div>
    </div>
</section>

@include('sections.regions')

@endsection
