<section class="relative bg-gradient-to-r from-brand-dark to-brand-light text-white overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/dust.png')]"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 pt-32 pb-20 md:pt-40 md:pb-28 flex flex-col md:flex-row items-center">
        <div class="w-full md:w-1/2 text-center md:text-left mb-12 md:mb-0">
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight mb-6 leading-tight drop-shadow-lg">
                Halılarınızda <br>
                <span class="text-yellow-400">İlk Günkü Işıltı!</span>
            </h1>
            <p class="text-lg md:text-xl font-light mb-8 opacity-90 max-w-lg mx-auto md:mx-0">
                {{ config('dilekhaliyikama.firma_adi') }}, derinlemesine temizlik ve %100 hijyen garantisiyle yaşam alanlarınıza ferahlık katıyor.
            </p>
            <div class="flex flex-col sm:flex-row justify-center md:justify-start gap-4">
                <a href="tel:{{ config('dilekhaliyikama.telefon') }}" class="bg-white text-brand-dark px-8 py-4 rounded-full font-bold text-lg hover:bg-gray-100 transition shadow-xl">
                    Hemen Ara: {{ config('dilekhaliyikama.telefon') }}
                </a>
            </div>
        </div>
        <div class="w-full md:w-1/2 relative">
            <div class="relative w-full aspect-square max-w-md mx-auto">
                <div class="absolute inset-0 bg-yellow-400 rounded-full opacity-20 blur-3xl"></div>
                <img src="{{ asset('images/hero-image.webp') }}" alt="Halı Yıkama" class="relative z-10 w-full h-full object-cover rounded-[2rem] shadow-2xl rotate-3 hover:rotate-0 transition duration-500">
            </div>
        </div>
    </div>
</section>
