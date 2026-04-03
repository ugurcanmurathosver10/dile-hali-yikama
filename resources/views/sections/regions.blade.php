<section id="hizmet-bolgeleri" class="relative py-12 md:py-16 bg-brand-dark overflow-hidden border-y border-white/5">

    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] pointer-events-none"></div>

    <div class="absolute top-0 left-0 w-1/3 h-full bg-gradient-to-r from-yellow-400/10 to-transparent blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 flex flex-col lg:flex-row items-center gap-8 lg:gap-12">

        <div class="w-full lg:w-1/3 text-center lg:text-left flex flex-col items-center lg:items-start" data-aos="fade-right">
            <div class="relative flex items-center justify-center w-12 h-12 mb-4">
                <span class="absolute inline-flex h-full w-full rounded-full bg-yellow-400 opacity-20 animate-ping"></span>
                <div class="w-10 h-10 rounded-full bg-yellow-400/20 border border-yellow-400 flex items-center justify-center">
                    <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </div>
            </div>
            <h2 class="text-2xl md:text-3xl font-black text-white mb-2 leading-tight">
                Size Çok <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-200 to-yellow-500">Yakınız!</span>
            </h2>
            <p class="text-gray-400 text-sm font-light leading-relaxed">
                Körfezin her noktasına ücretsiz, hızlı ve güvenilir servis ağımızla anında ulaşıyoruz.
            </p>
        </div>

        <div class="w-full lg:w-2/3" data-aos="fade-left">
            <div class="flex flex-wrap justify-center lg:justify-start gap-3 md:gap-4">

                @foreach(config('dilekhaliyikama.hizmet_bolgeleri') as $bolge)
                    <a href="{{ route('bolge.detay', \Illuminate\Support\Str::slug($bolge)) }}" class="group relative flex items-center gap-2 px-4 py-2.5 md:px-5 md:py-3 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-md hover:bg-yellow-400 hover:border-yellow-400 hover:shadow-[0_0_20px_rgba(250,204,21,0.4)] transition-all duration-300 transform hover:-translate-y-1">

                        <div class="relative flex items-center justify-center">
                            <span class="absolute inline-flex h-full w-full rounded-full bg-brand-dark opacity-0 group-hover:animate-ping group-hover:opacity-40"></span>
                            <svg class="relative w-4 h-4 text-yellow-400 group-hover:text-brand-dark transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>

                        <span class="text-sm font-semibold text-gray-200 group-hover:text-brand-dark transition-colors tracking-wide whitespace-nowrap">
                            {{ $bolge }}
                        </span>
                    </a>
                @endforeach

            </div>
        </div>

    </div>
</section>
