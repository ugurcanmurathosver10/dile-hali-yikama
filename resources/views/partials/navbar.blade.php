<header class="bg-white shadow-md relative z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="hidden md:flex justify-between items-center h-24">

            <nav class="flex-1 flex justify-end space-x-10 pr-24">
                <a href="/" class="text-brand-dark hover:text-brand-light font-semibold transition">Anasayfa</a>
                <a href="/#hizmetler" class="text-brand-dark hover:text-brand-light font-semibold transition">Hizmetlerimiz</a>
            </nav>

            <div class="absolute left-1/2 transform -translate-x-1/2 top-2 flex justify-center z-50">
                <a href="/" class="bg-white rounded-full p-2 shadow-xl border-4 border-white transition-transform hover:scale-105">
                    <img src="{{ asset('images/logo.webp') }}" alt="{{ config('dilekhaliyikama.firma_adi') }}" class="w-32 h-32 object-contain rounded-full">
                </a>
            </div>

            <nav class="flex-1 flex justify-start space-x-10 pl-24 items-center">
                <a href="/#bolgeler" class="text-brand-dark hover:text-brand-light font-semibold transition">Hizmet Bölgelerimiz</a>
                <a href="/#hakkimizda" class="text-brand-dark hover:text-brand-light font-semibold transition">Hakkımızda</a>
                <a href="/iletisim" class="bg-brand-dark text-white px-6 py-2 rounded-full font-semibold hover:bg-brand-light transition shadow-lg">İletişim</a>
            </nav>
        </div>

        <div class="md:hidden flex justify-between items-center h-20">
            <div class="flex items-center">
                <img src="{{ asset('images/logo.webp') }}" alt="Logo" class="w-16 h-16 object-contain rounded-full bg-white p-1 shadow-sm">
                <span class="ml-2 font-bold text-brand-dark text-lg">{{ config('dilekhaliyikama.firma_adi') }}</span>
            </div>
            <button id="mobile-menu-btn" class="text-brand-dark p-2 focus:outline-none">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
            </button>
        </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 shadow-xl absolute w-full">
        <nav class="flex flex-col px-4 pt-2 pb-6 space-y-4">
            <a href="/" class="text-brand-dark font-semibold text-lg border-b border-gray-50 pb-2">Anasayfa</a>
            <a href="/#hizmetler" class="text-brand-dark font-semibold text-lg border-b border-gray-50 pb-2">Hizmetlerimiz</a>
            <a href="/#bolgeler" class="text-brand-dark font-semibold text-lg border-b border-gray-50 pb-2">Hizmet Bölgelerimiz</a>
            <a href="/#hakkimizda" class="text-brand-dark font-semibold text-lg border-b border-gray-50 pb-2">Hakkımızda</a>
            <a href="/iletisim" class="bg-brand-dark text-white text-center px-6 py-3 rounded-full font-semibold shadow-md mt-4">İletişim</a>
        </nav>
    </div>
</header>
<div class="h-12 hidden md:block"></div>
