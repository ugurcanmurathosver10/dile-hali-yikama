@extends('layouts.app')

@php
    // KRALIN FİLTRE MOTORU: Config'den "Akçay Halı Yıkama" gelse bile, "Halı Yıkama" kısmını kesip atar, sadece "Akçay" kalır!
    $safBolgeAdi = trim(str_ireplace(['Halı Yıkama', 'Koltuk Yıkama', 'Yıkama'], '', $bolgeAdi));

    // ETİK VE MANTIKLI İÇERİK MOTORU (Artık "Akçay Halı Yıkama sakinleri" değil, "Akçay bölgesinde..." yazacak)
    $kisaAciklama = $safBolgeAdi . ' bölgesinde yaşayan değerli müşterilerimiz için ücretsiz servis ağımızla kapınızdayız. ' . config('dilekhaliyikama.firma_adi') . ' güvencesiyle halı, koltuk, yorgan ve perdelerinize %100 hijyen garantili bakım yapıyoruz.';

    $uzunMetin = 'Sektördeki tecrübemiz ve kalitemizle, <strong>' . $safBolgeAdi . '</strong> bölgesinin havasını ve dokusunu çok iyi tanıyoruz. Körfez bölgesinin nemli yapısı nedeniyle eşyalarınızda biriken görünmeyen toz akarları ve bakterileri, sıradan yöntemlerle değil; endüstriyel vakum makinelerimiz ve anti-bakteriyel şampuanlarımızla derinlemesine temizliyoruz.<br><br>Siz ' . $safBolgeAdi . ' sokaklarında sevdiklerinizle vakit geçirirken, biz ' . config('dilekhaliyikama.firma_adi') . ' profesyonelliği ile eşyalarınızı evinizden alıyor, tesisimizde el değmeden yıkayıp kurutuyor ve ilk günkü ferahlığıyla teslim ediyoruz.';

    $sssListesi = [
        ['soru' => config('dilekhaliyikama.firma_adi') . ', ' . $safBolgeAdi . ' bölgesine hangi günler servis veriyor?', 'cevap' => $safBolgeAdi . ' ve çevresi için haftanın 6 günü (Pazartesi - Cumartesi) sürekli ring halinde olan özel servis araçlarımız bulunmaktadır. Bizi aradığınız gün veya ertesi gün ürünlerinizi kapınızdan alıyoruz.'],
        ['soru' => $safBolgeAdi . ' adresinden alım için ekstra servis ücreti var mı?', 'cevap' => 'Kesinlikle hayır. ' . $safBolgeAdi . ' sınırlarındaki tüm mahalle ve sokaklar ücretsiz servis ağımıza dâhildir. Yalnızca yıkama ücreti ödersiniz.'],
        ['soru' => 'Ürünlerim kaç günde teslim edilir?', 'cevap' => 'Ürünleriniz kapınızdan alındıktan sonra, yıkama ve özel yalıtımlı odalarımızda tam kurutma işlemleri dâhil ortalama 3-4 iş günü içerisinde mis kokulu ve ambalajlı olarak teslim edilir.']
    ];

    $hizmetGorselleri = [
        'Halı Yıkama' => 'hali-yikama-card.webp',
        'Koltuk Yıkama' => 'koltuk-yikama-card.webp',
        'Yorgan Yıkama' => 'yorgan-yikama-card.webp',
        'Perde Yıkama' => 'perde-yikama-card.webp',
    ];
@endphp

@section('title', config('dilekhaliyikama.firma_adi') . ' | ' . $safBolgeAdi . ' Bölgesi Profesyonel Yıkama Servisi')
@section('meta_description', $safBolgeAdi . ' bölgesinde güvenilir temizlik mi arıyorsunuz? Ücretsiz servis ve %100 leke çıkarma garantisi ile ' . config('dilekhaliyikama.firma_adi') . ' hemen yanınızda.')

@section('content')

<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "LocalBusiness",
  "name": "{{ config('dilekhaliyikama.firma_adi') }} - {{ $safBolgeAdi }} Bölge Servisi",
  "image": "{{ asset('images/hero-image.webp') }}",
  "telephone": "{{ config('dilekhaliyikama.telefon') }}",
  "url": "{{ request()->url() }}",
  "description": "{{ $kisaAciklama }}",
  "areaServed": {
    "@@type": "City",
    "name": "{{ $safBolgeAdi }}"
  },
  "priceRange": "$$",
  "makesOffer": [
    { "@@type": "Offer", "itemOffered": { "@@type": "Service", "name": "{{ $safBolgeAdi }} Bölgesinde Halı Yıkama" } },
    { "@@type": "Offer", "itemOffered": { "@@type": "Service", "name": "{{ $safBolgeAdi }} Bölgesinde Koltuk Yıkama" } }
  ]
}
</script>

<section class="relative w-full h-[60vh] min-h-[450px] flex items-center justify-center overflow-hidden bg-brand-dark">
    <div class="absolute inset-0 w-full h-full pointer-events-none">
        <img src="{{ asset('images/hero-image.webp') }}" alt="{{ config('dilekhaliyikama.firma_adi') }} {{ $safBolgeAdi }} Servisi" class="w-full h-full object-cover origin-center opacity-70 transform scale-105 animate-[kenburns_20s_ease-out_infinite_alternate]">
    </div>
    <div class="absolute inset-0 bg-gradient-to-t from-brand-dark via-brand-dark/80 to-transparent pointer-events-none"></div>

    <div class="relative z-10 text-center px-4 max-w-4xl" data-aos="zoom-in">
        <div class="inline-flex items-center gap-2 px-5 py-2 rounded-full bg-yellow-400/10 border border-yellow-400/30 backdrop-blur-md mb-6 shadow-[0_0_20px_rgba(250,204,21,0.2)]">
            <span class="relative flex h-3 w-3">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-yellow-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-3 w-3 bg-yellow-500"></span>
            </span>
            <span class="text-yellow-400 font-bold uppercase tracking-[0.2em] text-xs sm:text-sm">{{ config('dilekhaliyikama.firma_adi') }} Güvencesiyle</span>
        </div>

        <h1 class="text-5xl md:text-7xl font-black text-white leading-tight drop-shadow-2xl mb-4 tracking-tight">
            {{ $safBolgeAdi }} Bölgesinde <br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-200 to-yellow-500">Kusursuz Temizlik.</span>
        </h1>
        <p class="text-lg md:text-xl text-gray-300 font-light max-w-2xl mx-auto drop-shadow-md">
            {{ $safBolgeAdi }} sakinleri için ücretsiz kapıdan alış ve teslimat ayrıcalığı.
        </p>
    </div>
</section>

<div class="bg-yellow-400 border-b border-yellow-500 relative z-20 shadow-xl">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center divide-x divide-brand-dark/10">
            <div class="px-2">
                <span class="block text-brand-dark font-black text-lg md:text-xl">%100</span>
                <span class="block text-brand-dark/80 text-xs font-bold uppercase tracking-widest">Leke Garantisi</span>
            </div>
            <div class="px-2">
                <span class="block text-brand-dark font-black text-lg md:text-xl">Bedava</span>
                <span class="block text-brand-dark/80 text-xs font-bold uppercase tracking-widest">Evden Alış/Teslim</span>
            </div>
            <div class="px-2">
                <span class="block text-brand-dark font-black text-lg md:text-xl">Hızlı</span>
                <span class="block text-brand-dark/80 text-xs font-bold uppercase tracking-widest">Servis Ağı</span>
            </div>
            <div class="px-2">
                <span class="block text-brand-dark font-black text-lg md:text-xl">Güvenilir</span>
                <span class="block text-brand-dark/80 text-xs font-bold uppercase tracking-widest">Anti-Bakteriyel</span>
            </div>
        </div>
    </div>
</div>

<section class="relative py-16 md:py-24 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex flex-col lg:flex-row gap-12 lg:gap-16">

            <div class="w-full lg:w-2/3" data-aos="fade-right">

                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-6 leading-tight">
                    {{ $safBolgeAdi }} Sakinlerinin İlk Tercihi: <br> <span class="text-brand-dark">{{ config('dilekhaliyikama.firma_adi') }}</span>
                </h2>

                <div class="prose prose-lg prose-yellow max-w-none text-gray-600 font-light leading-relaxed mb-12">
                    <p class="text-xl text-gray-800 font-medium leading-relaxed mb-6 border-l-4 border-yellow-400 pl-6 bg-gray-50/50 py-4 rounded-r-2xl shadow-sm">
                        {{ $kisaAciklama }}
                    </p>
                    <p>{!! $uzunMetin !!}</p>
                </div>

                <div class="mb-10">
                    <h3 class="text-2xl font-black text-gray-900 mb-6 flex items-center gap-2">
                        <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        {{ $safBolgeAdi }} Servisimiz Hakkında Sorular
                    </h3>
                    <div class="space-y-4">
                        @foreach($sssListesi as $sss)
                            <details class="group bg-gray-50 border border-gray-100 rounded-2xl [&_summary::-webkit-details-marker]:hidden">
                                <summary class="flex cursor-pointer items-center justify-between gap-1.5 p-5 text-gray-900 font-bold hover:text-brand-dark transition-colors">
                                    {{ $sss['soru'] }}
                                    <span class="relative h-5 w-5 shrink-0 text-gray-400 group-hover:text-brand-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute inset-0 opacity-100 group-open:opacity-0 transition-opacity" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute inset-0 opacity-0 group-open:opacity-100 transition-opacity" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                    </span>
                                </summary>
                                <div class="px-5 pb-5 text-gray-600 font-light leading-relaxed">
                                    {{ $sss['cevap'] }}
                                </div>
                            </details>
                        @endforeach
                    </div>
                </div>

            </div>

            <div class="w-full lg:w-1/3" data-aos="fade-left">
                <div class="sticky top-24 bg-brand-dark rounded-3xl p-8 shadow-[0_30px_60px_-15px_rgba(0,0,0,0.5)] border border-white/10 overflow-hidden relative">

                    <div class="absolute -top-20 -right-20 w-48 h-48 bg-yellow-400 opacity-20 rounded-full blur-3xl"></div>

                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/10 border border-white/20 mb-6">
                        <span class="relative flex h-2.5 w-2.5"><span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span><span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-green-500"></span></span>
                        <span class="text-[10px] font-bold uppercase tracking-widest text-green-400">Şu An {{ $safBolgeAdi }} Bölgesindeyiz</span>
                    </div>

                    <h3 class="text-2xl font-black text-white mb-2 relative z-10">Servis Çağırın</h3>
                    <p class="text-gray-300 font-light text-sm mb-8 relative z-10">{{ config('dilekhaliyikama.firma_adi') }} kalitesiyle tanışmak için tek tıkla adresinize araç isteyin.</p>

                    <div class="space-y-4 relative z-10">
                        <a href="https://wa.me/90{{ str_replace(' ', '', config('dilekhaliyikama.telefon')) }}?text=Merhaba, {{ $safBolgeAdi }} bölgesinden ulaşıyorum. Fiyat ve ücretsiz servis hakkında bilgi almak istiyorum." target="_blank" class="flex items-center justify-center gap-3 w-full py-4 px-6 bg-[#25D366] hover:bg-[#1da851] text-white rounded-2xl font-bold text-lg transition-transform transform hover:-translate-y-1 shadow-lg shadow-[#25D366]/30">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                            WhatsApp'tan Konum Atın
                        </a>
                        <a href="tel:{{ config('dilekhaliyikama.telefon') }}" class="flex items-center justify-center gap-3 w-full py-4 px-6 bg-yellow-400 hover:bg-white text-brand-dark rounded-2xl font-bold text-lg transition-transform transform hover:-translate-y-1 shadow-lg shadow-yellow-400/20">
                            <svg class="w-6 h-6 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            Hemen Arayın
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-16 bg-gray-50 border-t border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h3 class="text-3xl font-black text-gray-900 mb-3">{{ $safBolgeAdi }} İçin Sunduğumuz Hizmetler</h3>
            <p class="text-gray-500">Tüm hizmetlerimizde {{ $safBolgeAdi }} adresinizden ücretsiz alış ve teslimat geçerlidir.</p>
        </div>

        <div class="relative -mx-4 px-4 sm:-mx-0 sm:px-0">
            <div class="flex flex-row overflow-x-auto pb-6 snap-x snap-mandatory scroll-smooth [scrollbar-width:none] [-ms-overflow-style:none] [&::-webkit-scrollbar]:hidden gap-4 lg:grid lg:grid-cols-4 lg:gap-6 lg:overflow-visible lg:pb-0">
                @foreach(['Halı Yıkama', 'Koltuk Yıkama', 'Yorgan Yıkama', 'Perde Yıkama'] as $hizmet)
                    <a href="{{ route('hizmet.detay', \Illuminate\Support\Str::slug($hizmet)) }}" class="flex-shrink-0 w-[75%] sm:w-[45%] lg:w-auto snap-center group relative rounded-2xl overflow-hidden aspect-[4/3] shadow-md hover:shadow-xl transition-all">
                        <img src="{{ asset('images/' . ($hizmetGorselleri[$hizmet] ?? 'default-card.webp')) }}" alt="{{ config('dilekhaliyikama.firma_adi') }} {{ $hizmet }}" class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/95 via-brand-dark/40 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-5 w-full">
                            <div class="w-10 h-10 rounded-xl bg-white/20 backdrop-blur-sm flex items-center justify-center mb-3">
                                <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <h4 class="text-white font-bold text-lg drop-shadow-md group-hover:text-yellow-400 transition-colors">{{ $hizmet }}</h4>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection
