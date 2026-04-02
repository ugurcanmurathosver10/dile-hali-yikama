<section id="iletisim" class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden flex flex-col lg:flex-row">
            <div class="w-full lg:w-2/5 bg-brand-light p-10 md:p-16 text-white flex flex-col justify-center relative overflow-hidden">
                <div class="absolute bottom-0 right-0 w-48 h-48 bg-brand-dark opacity-50 rounded-full blur-3xl transform translate-x-1/2 translate-y-1/2"></div>
                <h3 class="text-3xl font-bold mb-8 relative z-10">Bizimle İletişime Geçin</h3>
                <p class="text-brand-light opacity-90 mb-10 relative z-10 text-gray-200">
                    Halılarınız için ücretsiz servis çağırmak veya fiyat almak için bizi hemen arayabilirsiniz.
                </p>
                <div class="space-y-6 relative z-10">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-white bg-opacity-20 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        </div>
                        <div>
                            <div class="text-sm opacity-80">Telefon</div>
                            <a href="tel:{{ config('dilekhaliyikama.telefon') }}" class="text-xl font-bold hover:text-yellow-400 transition">{{ config('dilekhaliyikama.telefon') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-3/5 p-10 md:p-16 bg-white flex flex-col justify-center text-center">
                <div class="w-20 h-20 bg-green-100 text-green-600 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-3xl font-bold text-gray-800 mb-4">Hızlı Servis İçin Arayın!</h3>
                <p class="text-gray-600 mb-8 text-lg">
                    Adresinizden ücretsiz alıyoruz, pırıl pırıl yapıp ücretsiz teslim ediyoruz.
                </p>
                <a href="tel:{{ config('dilekhaliyikama.telefon') }}" class="inline-flex justify-center items-center px-8 py-4 border border-transparent text-xl font-bold rounded-full shadow-lg text-white bg-green-500 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition transform hover:-translate-y-1 w-full md:w-auto mx-auto">
                    Tıkla ve Ara: {{ config('dilekhaliyikama.telefon') }}
                </a>
            </div>
        </div>
    </div>
</section>
