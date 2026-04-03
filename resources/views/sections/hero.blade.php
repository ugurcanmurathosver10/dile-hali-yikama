<style>
    @keyframes kenburns {
        0% { transform: scale(1); }
        100% { transform: scale(1.15); }
    }
    .animate-kenburns {
        animation: kenburns 25s ease-out infinite alternate;
    }
</style>

<section class="relative w-full h-[100svh] min-h-[600px] flex flex-col items-center justify-center overflow-hidden bg-brand-dark">

    <div class="absolute inset-0 w-full h-full pointer-events-none">
        <img src="{{ asset('images/hero-image.webp') }}" alt="{{ config('dilekhaliyikama.firma_adi') }} Premium Temizlik" class="w-full h-full object-cover animate-kenburns origin-center opacity-90">
    </div>

    <div class="absolute inset-0 bg-brand-dark/30 mix-blend-multiply pointer-events-none"></div>

    <div class="absolute inset-x-0 top-0 h-[85%] bg-gradient-to-b from-brand-dark via-brand-dark/70 to-transparent pointer-events-none z-0"></div>

    <div class="absolute inset-x-0 bottom-0 h-40 bg-gradient-to-t from-brand-dark to-transparent pointer-events-none z-0"></div>

    <div class="relative z-10 w-full max-w-5xl mx-auto px-4 flex flex-col items-center text-center mt-16 lg:mt-24">

        <div data-aos="fade-down" data-aos-duration="1000" class="inline-flex items-center gap-2 px-6 py-2 rounded-full border border-yellow-400/50 bg-black/30 backdrop-blur-md mb-8 shadow-[0_0_30px_rgba(250,204,21,0.2)]">
            <span class="relative flex h-3 w-3">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-yellow-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-3 w-3 bg-yellow-500"></span>
            </span>
            <span class="text-yellow-400 font-bold tracking-[0.2em] text-xs sm:text-sm uppercase">{{ date('Y') - config('dilekhaliyikama.kurulus_yili') }} Yıllık Mükemmellik</span>
        </div>

        <h1 data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="200" class="text-5xl sm:text-7xl lg:text-[7rem] font-extrabold text-white leading-[1.05] tracking-tight drop-shadow-2xl mb-6">
            Evinize Gelen <br>
            <span class="text-transparent bg-clip-text bg-gradient-to-b from-yellow-200 to-yellow-500 filter drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)]">
                Saf Güzellik.
            </span>
        </h1>

        <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400" class="text-lg sm:text-2xl text-gray-200 font-light max-w-3xl mb-12 drop-shadow-lg leading-relaxed">
            Halı, koltuk ve perdeleriniz için sıradan bir yıkama değil; dokularına zarar vermeyen, anti-bakteriyel bir <strong class="text-white font-semibold">temizlik</strong> sunuyoruz.
        </p>

        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600" class="flex flex-col sm:flex-row items-center gap-5 w-full sm:w-auto">
            <a href="tel:{{ config('dilekhaliyikama.telefon') }}" class="group relative flex items-center justify-center px-10 py-5 bg-yellow-400 text-brand-dark font-extrabold text-lg sm:text-xl rounded-full overflow-hidden transition-all shadow-[0_0_40px_rgba(250,204,21,0.4)] hover:shadow-[0_0_60px_rgba(250,204,21,0.6)] hover:scale-105 w-full sm:w-auto">
                <span class="absolute inset-0 w-full h-full bg-white opacity-0 group-hover:opacity-30 transition-opacity duration-300"></span>
                <svg class="w-6 h-6 sm:w-7 sm:h-7 mr-3 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                Hemen Fiyat Alın
            </a>

            <a href="#hizmetler" class="flex items-center justify-center px-10 py-5 text-white font-bold text-lg sm:text-xl rounded-full border border-white/40 hover:bg-white/10 hover:border-white transition-all backdrop-blur-sm w-full sm:w-auto group">
                Hizmetleri İncele
                <svg class="w-6 h-6 ml-2 transform transition-transform group-hover:translate-y-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
            </a>
        </div>
    </div>

</section>
