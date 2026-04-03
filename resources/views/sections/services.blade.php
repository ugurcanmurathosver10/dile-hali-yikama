<section id="hizmetler" class="relative py-20 md:py-32 overflow-hidden bg-gray-50/50">

    <div class="absolute inset-0 opacity-[0.03] bg-[url('https://www.transparenttextures.com/patterns/dust.png')] pointer-events-none"></div>
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-screen-2xl h-px bg-gradient-to-r from-transparent via-brand-dark/10 to-transparent"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <div class="text-center mb-16 md:mb-24" data-aos="fade-up">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand-dark text-yellow-400 text-xs font-bold uppercase tracking-[0.2em] mb-4 shadow-xl shadow-brand-dark/10 border border-brand-light/20">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                %100 Memnuniyet Garantisi
            </span>
            <h2 class="text-4xl md:text-6xl font-black text-gray-900 leading-tight mb-6">
                Evinize Gelen <br class="md:hidden"> <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-dark to-brand-light">Gerçek Temizlik.</span>
            </h2>
            <p class="text-lg md:text-xl text-gray-600 font-light max-w-2xl mx-auto leading-relaxed">
                Yüzeysel değil, derinlemesine temizlik. Yılların tecrübesiyle eşyalarınızı ilk günkü ferahlığına ve sağlığına kavuşturuyoruz.
            </p>
        </div>

        <div class="relative -mx-4 px-4 sm:-mx-0 sm:px-0">
            <div class="flex flex-row md:grid md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 overflow-x-auto md:overflow-visible pb-8 md:pb-0 snap-x snap-mandatory scroll-smooth [scrollbar-width:none] [-ms-overflow-style:none] [&::-webkit-scrollbar]:hidden">

                @php
                    $hizmetGorselleri = [
                        'Halı Yıkama' => 'hali-yikama-card.webp',
                        'Koltuk Yıkama' => 'koltuk-yikama-card.webp',
                        'Yorgan Yıkama' => 'yorgan-yikama-card.webp',
                        'Yorgan & Battaniye Yıkama' => 'yorgan-yikama-card.webp',
                        'Battaniye Yıkama' => 'battaniye-yikama-card.webp',
                        'Perde Yıkama' => 'perde-yikama-card.webp',
                        'Stor Perde Yıkama' => 'perde-yikama-card.webp',
                        'Overlok' => 'overlok-card.webp',
                        'Overlok Hizmeti' => 'overlok-card.webp',
                    ];

                    $hizmetAciklamalari = [
                        'Halı Yıkama' => 'İplik yapısına özel şampuanlarla derinlemesine temizlik, anti-bakteriyel koruma ve ilk günkü parlaklık.',
                        'Koltuk Yıkama' => 'Kumaş dokusuna zarar vermeyen güçlü vakum teknolojisi ile koltuklarınızdaki inatçı lekelere ve akarlara son.',
                        'Yorgan Yıkama' => 'Elyaf, yün veya pamuklu yorganlarınız için formunu bozmayan, alerjenlerden arındırılmış tam hijyenik yıkama.',
                        'Yorgan & Battaniye Yıkama' => 'Yorgan ve battaniyeleriniz için formunu bozmayan, alerjenlerden arındırılmış tam hijyenik yıkama.',
                        'Battaniye Yıkama' => 'Battaniyelerinizin yumuşaklığını kaybetmeden, endüstriyel makinelerde derinlemesine yıkanması ve kurutulması.',
                        'Perde Yıkama' => 'Stor ve zebra perdeleriniz kırışmadan, mekanizmalarına zerre zarar vermeden özel alanlarımızda özenle temizlenir.',
                        'Stor Perde Yıkama' => 'Stor ve zebra perdeleriniz kırışmadan, mekanizmalarına zarar vermeden özel alanlarımızda özenle temizlenir.',
                        'Overlok' => 'Yıpranmış halı kenarlarınız için fabrika standartlarında, iplik atmasını engelleyen dayanıklı overlok yenileme.',
                        'Overlok Hizmeti' => 'Yıpranmış halı kenarlarınız için fabrika standartlarında, iplik atmasını engelleyen dayanıklı overlok yenileme.'
                    ];
                @endphp

                @foreach(config('dilekhaliyikama.hizmetler') as $hizmetAdi => $altHizmetler)
                    <div class="flex-shrink-0 w-[85%] md:w-auto snap-center md:snap-align-none" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">

                        <div class="relative group rounded-[2.5rem] overflow-hidden shadow-[0_30px_60px_-15px_rgba(0,0,0,0.15)] hover:shadow-[0_40px_80px_-15px_rgba(0,0,0,0.3)] transition-all duration-500 hover:-translate-y-3 bg-brand-dark aspect-[4/5] lg:aspect-[3/4]">

                            <div class="absolute inset-0 w-full h-full pointer-events-none z-0">
                                <img src="{{ asset('images/' . ($hizmetGorselleri[$hizmetAdi] ?? 'default-card.webp')) }}" alt="{{ $hizmetAdi }} - {{ config('dilekhaliyikama.firma_adi') }}" class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                            </div>

                            <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/95 via-brand-dark/60 to-transparent z-10"></div>

                            <div class="relative z-20 h-full w-full flex flex-col justify-end p-8 md:p-10 text-center">

                                <div class="w-16 h-16 rounded-3xl bg-white/10 backdrop-blur-md border border-white/20 flex items-center justify-center mb-6 mx-auto shadow-xl group-hover:scale-110 transition-transform duration-500">
                                    <svg class="w-9 h-9 text-yellow-400 drop-shadow-[0_2px_5px_rgba(250,204,21,0.5)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        @if(str_contains($hizmetAdi, 'Halı'))
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 10h18v4H3v-4z M5 8v2 M9 8v2 M15 8v2 M19 8v2 M5 14v2 M9 14v2 M15 14v2 M19 14v2"></path>
                                        @elseif(str_contains($hizmetAdi, 'Koltuk'))
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 14v3a1 1 0 001 1h14a1 1 0 001-1v-3M4 14a2 2 0 01-2-2V9a1 1 0 011-1h2V6a2 2 0 012-2h10a2 2 0 012 2v2h2a1 1 0 011 1v3a2 2 0 01-2 2"></path>
                                        @elseif(str_contains($hizmetAdi, 'Yorgan') || str_contains($hizmetAdi, 'Battaniye'))
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 15h16M4 15a2 2 0 002 2h12a2 2 0 002-2M4 15v-4a2 2 0 012-2h12a2 2 0 012 2v4M6 9V7a2 2 0 012-2h8a2 2 0 012 2v2"></path>
                                        @elseif(str_contains($hizmetAdi, 'Perde'))
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M5 6v12a1 1 0 001 1h12a1 1 0 001-1V6M9 6v8h6V6M12 14v3M10 17h4"></path>
                                        @elseif(str_contains($hizmetAdi, 'Overlok'))
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.121 14.121L19 19m-7-7l7-7m-7 7l-2.879 2.879M6.5 6.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 17.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path>
                                        @else
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                        @endif
                                    </svg>
                                </div>

                                <h3 class="text-3xl md:text-4xl font-black text-white leading-tight mb-3 drop-shadow-xl">{{ $hizmetAdi }}</h3>

                                <p class="hidden md:block text-gray-200 text-sm font-light mb-8 leading-relaxed opacity-90">
                                    {{ $hizmetAciklamalari[$hizmetAdi] ?? 'Uzman kadromuz ve son teknoloji ekipmanlarımızla eşyalarınız için en üst düzey hijyen garantisi sunuyoruz.' }}
                                </p>

                                <a href="{{ route('hizmet.detay', \Illuminate\Support\Str::slug($hizmetAdi)) }}" class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl bg-yellow-400 text-brand-dark font-extrabold text-sm uppercase tracking-widest transition-all duration-300 shadow-[0_10px_20px_rgba(250,204,21,0.2)] hover:shadow-[0_10px_30px_rgba(250,204,21,0.4)] hover:scale-105 group-hover:bg-white group-hover:text-brand-dark">
                                    Detayları İncele
                                    <svg class="w-4 h-4 transform group-hover:translate-x-1.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </a>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>

            <div class="flex md:hidden justify-center items-center gap-2 mt-4 opacity-70">
                <div class="w-16 h-1 rounded-full bg-brand-dark/20 relative overflow-hidden">
                    <div class="absolute inset-y-0 left-0 w-1/3 bg-brand-dark rounded-full animate-[swipe_3s_ease-in-out_infinite]"></div>
                </div>
                <span class="text-xs font-bold uppercase tracking-widest text-brand-dark/50">Kaydır</span>
            </div>

            <style>
                @keyframes swipe {
                    0% { transform: translateX(0%); }
                    50% { transform: translateX(200%); }
                    100% { transform: translateX(0%); }
                }
            </style>
        </div>

    </div>
</section>
