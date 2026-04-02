<footer class="bg-gray-900 text-gray-300 py-12 border-t-4 border-brand-dark mt-16 relative z-[40]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">

            <div>
                <img src="{{ asset('images/logo.webp') }}" alt="{{ config('dilekhaliyikama.firma_adi') }}" class="w-24 h-24 object-contain bg-white rounded-full p-2 mb-6 shadow-lg">
                <p class="text-sm opacity-80 mb-4 leading-relaxed text-gray-400">
                    {{ config('dilekhaliyikama.kurulus_yili') }} yılından beri güvenle... Halı, koltuk, yorgan ve perde yıkamada %100 hijyen garantisi sunuyoruz.
                </p>
            </div>

            <div>
                <h4 class="text-white text-lg font-bold mb-6 uppercase tracking-wider relative inline-block">
                    Hizmet Bölgelerimiz
                    <span class="absolute -bottom-2 left-0 w-1/2 h-1 bg-yellow-400 rounded-full"></span>
                </h4>
                <ul class="space-y-3">
                    @foreach(config('dilekhaliyikama.hizmet_bolgeleri') as $bolge)
                        <li>
                            <a href="{{ route('bolge.detay', \Illuminate\Support\Str::slug($bolge)) }}" class="group flex items-center text-sm text-gray-400 hover:text-white transition-all duration-300 bg-gray-800 bg-opacity-30 hover:bg-gray-800 rounded-lg p-2 border border-transparent hover:border-gray-700">
                                <span class="bg-brand-dark text-yellow-400 p-1.5 rounded-md mr-3 group-hover:bg-yellow-400 group-hover:text-brand-dark transition-colors shadow-sm">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                </span>
                                <span class="font-medium tracking-wide">{{ $bolge }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h4 class="text-white text-lg font-bold mb-6 uppercase tracking-wider relative inline-block">
                    Kurumsal & Yasal
                    <span class="absolute -bottom-2 left-0 w-1/2 h-1 bg-yellow-400 rounded-full"></span>
                </h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="/hakkimizda" class="text-gray-400 hover:text-yellow-400 transition-colors flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-gray-600 mr-3"></span>Hakkımızda</a></li>
                    <li><a href="/iletisim" class="text-gray-400 hover:text-yellow-400 transition-colors flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-gray-600 mr-3"></span>İletişim</a></li>
                    <li><a href="/gizlilik-politikasi" class="text-gray-400 hover:text-yellow-400 transition-colors flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-gray-600 mr-3"></span>Gizlilik Politikası</a></li>
                    <li><a href="/cerez-yonetimi" class="text-gray-400 hover:text-yellow-400 transition-colors flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-gray-600 mr-3"></span>Çerez Yönetimi</a></li>
                    <li class="pt-2">
                        <a href="/sitemap.xml" target="_blank" class="inline-flex items-center text-yellow-500 hover:text-white border border-yellow-500 hover:border-white px-3 py-1.5 rounded-lg transition-colors bg-yellow-500 bg-opacity-10">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path></svg>
                            Sitemap (Site Haritası)
                        </a>
                    </li>
                </ul>
            </div>

            <div>
                <h4 class="text-white text-lg font-bold mb-6 uppercase tracking-wider relative inline-block">
                    Bize Ulaşın
                    <span class="absolute -bottom-2 left-0 w-1/2 h-1 bg-yellow-400 rounded-full"></span>
                </h4>
                <a href="tel:{{ config('dilekhaliyikama.telefon') }}" class="block text-2xl font-bold text-yellow-400 hover:text-white transition-colors mb-2">
                    {{ config('dilekhaliyikama.telefon') }}
                </a>
                <p class="text-sm text-gray-400 mb-6">Ücretsiz Servis İçin Hemen Arayın</p>
                <a href="https://wa.me/90{{ str_replace(' ', '', config('dilekhaliyikama.telefon')) }}" target="_blank" class="inline-flex items-center text-sm font-bold text-white bg-[#25D366] hover:bg-[#20b858] px-5 py-3 rounded-xl transition-all transform hover:-translate-y-1 shadow-lg">
                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                    WhatsApp Destek
                </a>
            </div>

        </div>

        <div class="border-t border-gray-800 pt-8 pb-6 flex flex-col lg:flex-row justify-between items-center gap-6 text-sm">
            <div class="text-center lg:text-left text-gray-500">
                <p>&copy; {{ date('Y') }} <span class="text-gray-300">{{ config('dilekhaliyikama.firma_adi') }}</span>. Tüm hakları saklıdır.</p>
            </div>

            <div class="text-center lg:text-right flex flex-col items-center lg:items-end bg-gray-800 bg-opacity-50 px-6 py-3 rounded-xl border border-gray-700">
                <p class="mb-1 text-gray-300 text-base">
                    <span class="text-red-500 animate-pulse inline-block">❤️</span> ile
                    <a href="https://www.ugurcanmurathosver.com.tr" target="_blank" class="font-bold text-white hover:text-yellow-400 transition-colors border-b border-dashed border-gray-500 hover:border-yellow-400 pb-0.5 ml-1">
                        Uğurcan Murat Hoşver
                    </a> tarafından kodlanmıştır.
                </p>
                <p class="text-xs text-gray-400 font-mono tracking-wider mt-1">
                    Powered by <span class="text-[#FF2D20] font-semibold">Laravel</span> & <span class="text-[#38B2AC] font-semibold">Tailwind CSS</span>
                </p>
            </div>
        </div>

    </div>
</footer>
