<section id="iletisim" class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" data-aos="fade-up">
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
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-white bg-opacity-20 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div>
                            <div class="text-sm opacity-80">Çalışma Saatleri</div>
                            <div class="text-xl font-bold">Haftanın 7 Günü (09:00 - 20:00)</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-3/5 p-10 md:p-16 bg-white flex flex-col justify-center text-center">
                <div class="w-24 h-24 bg-brand-light bg-opacity-10 text-brand-dark rounded-full flex items-center justify-center mx-auto mb-8">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-4">Hızlı Servis İçin Bir Tık Yeter!</h3>
                <p class="text-gray-600 mb-10 text-lg max-w-md mx-auto">
                    Adresinizden ücretsiz alıyoruz, pırıl pırıl yapıp ücretsiz teslim ediyoruz. Form doldurmakla vakit kaybetmeyin, hemen ulaşın!
                </p>

                <div class="flex flex-col xl:flex-row justify-center gap-4">
                    <a href="tel:{{ config('dilekhaliyikama.telefon') }}" class="inline-flex justify-center items-center px-8 py-5 border-2 border-brand-dark text-xl font-bold rounded-2xl shadow-lg text-brand-dark hover:bg-brand-dark hover:text-white focus:outline-none transition-all transform hover:-translate-y-1 w-full xl:w-auto">
                        <svg class="w-7 h-7 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        Hemen Ara
                    </a>

                    <a href="https://wa.me/90{{ str_replace(' ', '', config('dilekhaliyikama.telefon')) }}?text=Merhaba, fiyatlar ve ücretsiz servis hakkında bilgi almak istiyorum." target="_blank" class="inline-flex justify-center items-center px-8 py-5 border border-transparent text-xl font-bold rounded-2xl shadow-lg text-white bg-[#25D366] hover:bg-[#20b858] focus:outline-none transition-all transform hover:-translate-y-1 w-full xl:w-auto">
                        <svg class="w-7 h-7 mr-3" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                        WhatsApp'tan Yaz
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
