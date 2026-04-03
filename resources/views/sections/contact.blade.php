<section id="iletisim" class="relative py-24 bg-gray-50 overflow-hidden border-t border-gray-200/50">

    <div class="absolute top-0 left-1/2 transform -translate-x-1/2 w-full max-w-7xl h-full pointer-events-none">
        <div class="absolute -left-32 top-10 w-96 h-96 bg-yellow-400 opacity-5 rounded-full blur-[100px]"></div>
        <div class="absolute -right-32 bottom-10 w-96 h-96 bg-brand-dark opacity-5 rounded-full blur-[100px]"></div>
    </div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <div class="text-center mb-16" data-aos="fade-down">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand-dark/5 text-brand-dark border border-brand-dark/10 text-xs font-bold uppercase tracking-[0.2em] mb-4">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                İletişim & Randevu
            </span>
            <h2 class="text-4xl md:text-5xl font-black text-gray-900 leading-tight mb-4">
                Bize Hemen <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-dark to-brand-light">Ulaşın.</span>
            </h2>
            <p class="text-lg text-gray-500 font-light max-w-2xl mx-auto">
                Hizmetlerimiz hakkında detaylı bilgi almak, fiyat sormak veya ücretsiz servis çağırmak için bir tık uzağınızdayız.
            </p>
        </div>

        <div class="bg-white rounded-[2.5rem] shadow-[0_30px_60px_-15px_rgba(0,0,0,0.1)] border border-gray-100 overflow-hidden flex flex-col lg:flex-row relative" data-aos="zoom-in-up" data-aos-duration="1000">

            <div class="w-full lg:w-5/12 bg-brand-dark p-10 md:p-14 text-white flex flex-col relative overflow-hidden">
                <div class="absolute -bottom-20 -right-20 w-64 h-64 bg-yellow-400 opacity-20 rounded-full blur-3xl"></div>
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-yellow-400 to-transparent"></div>

                <div class="relative z-10 flex-1">
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/10 border border-white/20 backdrop-blur-sm mb-8">
                        <span class="relative flex h-3 w-3">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                        </span>
                        <span class="text-xs font-bold uppercase tracking-widest text-green-400">Canlı Destek Aktif</span>
                    </div>

                    <h3 class="text-3xl md:text-4xl font-black mb-6 leading-tight">Tek Tıkla <br><span class="text-yellow-400">Kapınızdayız.</span></h3>
                    <p class="text-gray-300 font-light mb-12 leading-relaxed opacity-90">
                        Körfez bölgesinin her noktasına ücretsiz servisimiz vardır. Eşyalarınızı evinizden alıyor, tertemiz teslim ediyoruz.
                    </p>

                    <div class="space-y-8">
                        <div class="flex items-start group">
                            <div class="w-12 h-12 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center mr-5 flex-shrink-0 group-hover:bg-yellow-400 group-hover:border-yellow-400 transition-colors">
                                <svg class="w-6 h-6 text-yellow-400 group-hover:text-brand-dark transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </div>
                            <div>
                                <div class="text-xs font-bold uppercase tracking-widest text-gray-400 mb-1">Müşteri Hizmetleri</div>
                                <a href="tel:{{ config('dilekhaliyikama.telefon') }}" class="text-2xl font-black text-white hover:text-yellow-400 transition-colors">{{ config('dilekhaliyikama.telefon') }}</a>
                            </div>
                        </div>

                        <div class="flex items-start group">
                            <div class="w-12 h-12 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center mr-5 flex-shrink-0 group-hover:bg-yellow-400 group-hover:border-yellow-400 transition-colors">
                                <svg class="w-6 h-6 text-yellow-400 group-hover:text-brand-dark transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div>
                                <div class="text-xs font-bold uppercase tracking-widest text-gray-400 mb-1">Çalışma Saatleri</div>
                                <div class="text-base font-medium text-white mb-0.5">Pzt - Cmt: <span class="font-bold text-yellow-400">08:00 - 20:00</span></div>
                                <div class="text-sm font-light text-red-400">Pazar: Kapalı</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-7/12 p-10 md:p-16 bg-white flex flex-col justify-center relative">
                <div class="absolute top-10 right-10 text-gray-50 opacity-50 pointer-events-none">
                    <svg class="w-48 h-48" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                </div>

                <div class="relative z-10 text-center lg:text-left">
                    <h3 class="text-3xl md:text-5xl font-black text-gray-900 mb-4 tracking-tight">Form Yok, Beklemek Yok!</h3>
                    <p class="text-gray-500 mb-10 text-lg">
                        Zamanınızın ne kadar değerli olduğunu biliyoruz. Form doldurmakla uğraşmayın, <strong class="text-gray-800">bize direkt mesaj atın veya arayın.</strong> Ortalama yanıt süremiz sadece saniyelerdir.
                    </p>

                    <div class="flex flex-col sm:flex-row items-center gap-5 justify-center lg:justify-start">
                        <a href="https://wa.me/90{{ str_replace(' ', '', config('dilekhaliyikama.telefon')) }}?text=Merhaba, fiyatlar ve ücretsiz servis hakkında bilgi almak istiyorum." target="_blank" class="group relative inline-flex justify-center items-center px-8 py-5 text-xl font-black rounded-2xl shadow-[0_15px_30px_rgba(37,211,102,0.3)] hover:shadow-[0_20px_40px_rgba(37,211,102,0.5)] text-white bg-gradient-to-b from-[#25D366] to-[#1da851] overflow-hidden transition-all transform hover:-translate-y-1 w-full sm:w-auto">
                            <span class="absolute top-0 left-0 w-full h-full bg-white opacity-0 group-hover:opacity-10 transition-opacity"></span>
                            <svg class="w-8 h-8 mr-3 animate-pulse" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                            WhatsApp İle Ulaşın
                        </a>

                        <a href="tel:{{ config('dilekhaliyikama.telefon') }}" class="group inline-flex justify-center items-center px-8 py-5 text-xl font-bold rounded-2xl border-2 border-gray-200 text-gray-800 bg-transparent hover:border-brand-dark hover:bg-brand-dark hover:text-white transition-all transform hover:-translate-y-1 w-full sm:w-auto">
                            <svg class="w-7 h-7 mr-3 transition-transform group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            Hemen Arayın
                        </a>
                    </div>

                    <p class="mt-6 text-sm text-gray-400">
                        <span class="inline-block w-2 h-2 rounded-full bg-green-500 mr-2"></span>Şu an aramalarınızı yanıtlamak için hazırız.
                    </p>

                </div>
            </div>

        </div>
    </div>
</section>
