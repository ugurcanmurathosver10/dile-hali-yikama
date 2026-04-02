<header class="bg-white relative z-50 shadow-sm border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="hidden md:flex justify-between items-center h-16">

            <nav class="flex-1 flex justify-end space-x-8 pr-20 items-center">
                <a href="/" class="text-brand-dark hover:text-brand-light font-semibold text-sm transition py-2">Anasayfa</a>

                <div class="relative group/hizmet">
                    <button class="flex items-center text-brand-dark hover:text-brand-light font-semibold text-sm transition py-2 outline-none">
                        Hizmetlerimiz
                        <svg class="w-4 h-4 ml-1 text-gray-500 group-hover/hizmet:text-yellow-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>

                    <div class="absolute right-0 md:left-0 top-full mt-0 w-64 bg-white rounded-b-xl shadow-xl border border-gray-100 opacity-0 invisible group-hover/hizmet:opacity-100 group-hover/hizmet:visible transition-all duration-300 z-50 transform origin-top group-hover/hizmet:translate-y-0 translate-y-2">
                        <div class="py-2">
                            @foreach(config('dilekhaliyikama.hizmetler') as $hizmetAdi => $altHizmetler)
                                @if(count($altHizmetler) > 0)
                                    <div class="relative group/alt">
                                        <a href="{{ route('hizmet.detay', \Illuminate\Support\Str::slug($hizmetAdi)) }}" class="flex items-center justify-between px-4 py-3 text-sm text-gray-700 hover:bg-yellow-50 hover:text-brand-dark transition-colors">
                                            <span class="flex items-center font-medium">
                                                <svg class="w-4 h-4 mr-2 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                                                {{ $hizmetAdi }}
                                            </span>
                                            <svg class="w-4 h-4 text-gray-400 group-hover/alt:text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                        </a>
                                        <div class="absolute left-full top-0 mt-0 ml-1 w-56 bg-white rounded-xl shadow-xl border border-gray-100 opacity-0 invisible group-hover/alt:opacity-100 group-hover/alt:visible transition-all duration-300 z-50 transform -translate-x-2 group-hover/alt:translate-x-0">
                                            <div class="py-2">
                                                @foreach($altHizmetler as $alt)
                                                    <a href="{{ route('hizmet.detay', \Illuminate\Support\Str::slug($hizmetAdi)) }}" class="flex items-center px-4 py-2 text-sm text-gray-600 hover:bg-yellow-50 hover:text-brand-dark transition-colors">
                                                        <div class="w-1.5 h-1.5 rounded-full bg-yellow-400 mr-2"></div>
                                                        {{ $alt }}
                                                    </a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <a href="{{ route('hizmet.detay', \Illuminate\Support\Str::slug($hizmetAdi)) }}" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-yellow-50 hover:text-brand-dark transition-colors font-medium">
                                        <svg class="w-4 h-4 mr-2 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                                        {{ $hizmetAdi }}
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </nav>

            <div class="absolute left-1/2 transform -translate-x-1/2 top-1 flex justify-center z-50">
                <a href="/" class="bg-white rounded-full p-1.5 shadow-lg border-2 border-gray-50 transition-transform hover:scale-105">
                    <img src="{{ asset('images/logo.webp') }}" alt="{{ config('dilekhaliyikama.firma_adi') }}" class="w-20 h-20 md:w-24 md:h-24 object-contain rounded-full">
                </a>
            </div>

            <nav class="flex-1 flex justify-start space-x-8 pl-20 items-center">

                <div class="relative group">
                    <button class="flex items-center text-brand-dark hover:text-brand-light font-semibold text-sm transition py-2 outline-none">
                        Hizmet Bölgelerimiz
                        <svg class="w-4 h-4 ml-1 text-gray-500 group-hover:text-yellow-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="absolute left-0 top-full mt-0 w-52 bg-white rounded-b-xl shadow-xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 transform origin-top group-hover:translate-y-0 translate-y-2">
                        <div class="py-2">
                            @foreach(config('dilekhaliyikama.hizmet_bolgeleri') as $bolge)
                                <a href="{{ route('bolge.detay', \Illuminate\Support\Str::slug($bolge)) }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-yellow-50 hover:text-brand-dark transition-colors font-medium">
                                    <svg class="w-4 h-4 mr-2 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                    {{ $bolge }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>

                <a href="/hakkimizda" class="text-brand-dark hover:text-brand-light font-semibold text-sm transition py-2">Hakkımızda</a>
                <a href="/iletisim" class="bg-brand-dark text-white px-5 py-1.5 rounded-full font-semibold text-sm hover:bg-brand-light transition shadow-md">İletişim</a>
            </nav>
        </div>

        <div class="md:hidden flex justify-between items-center h-16">
            <a href="/" class="flex items-center">
                <img src="{{ asset('images/logo.webp') }}" alt="{{ config('dilekhaliyikama.firma_adi') }}" class="w-12 h-12 object-contain rounded-full bg-white p-0.5 shadow-sm">
                <span class="ml-2 font-bold text-brand-dark text-base">{{ config('dilekhaliyikama.firma_adi') }}</span>
            </a>

            <button id="mobile-menu-btn" class="text-brand-dark p-2 focus:outline-none">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
            </button>
        </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 shadow-xl absolute w-full max-h-[80vh] overflow-y-auto">
        <nav class="flex flex-col px-4 pt-4 pb-6 space-y-4">
            <a href="/" class="text-brand-dark font-semibold text-lg border-b border-gray-50 pb-2">Anasayfa</a>

            <div class="border-b border-gray-50 pb-2">
                <button id="mobile-services-btn" class="w-full flex justify-between items-center text-brand-dark font-semibold text-lg outline-none">
                    <span>Hizmetlerimiz</span>
                    <svg id="mobile-services-icon" class="w-5 h-5 text-gray-500 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div id="mobile-services-menu" class="hidden flex-col mt-3 pl-2 space-y-3">
                    @foreach(config('dilekhaliyikama.hizmetler') as $hizmetAdi => $altHizmetler)
                        @if(count($altHizmetler) > 0)
                            <div class="flex flex-col">
                                <button class="mobile-sub-services-btn flex justify-between items-center text-gray-600 font-medium text-base hover:text-brand-dark w-full outline-none py-1">
                                    <span class="flex items-center">
                                        <svg class="w-4 h-4 mr-2 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                                        {{ $hizmetAdi }}
                                    </span>
                                    <svg class="w-4 h-4 text-gray-400 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </button>
                                <div class="mobile-sub-services-menu hidden flex-col mt-2 pl-6 space-y-2 border-l-2 border-yellow-100 ml-2">
                                    @foreach($altHizmetler as $alt)
                                        <a href="{{ route('hizmet.detay', \Illuminate\Support\Str::slug($hizmetAdi)) }}" class="flex items-center text-sm text-gray-500 hover:text-brand-dark py-1">
                                            <div class="w-1.5 h-1.5 rounded-full bg-yellow-400 mr-2"></div>
                                            {{ $alt }}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        @else
                            <a href="{{ route('hizmet.detay', \Illuminate\Support\Str::slug($hizmetAdi)) }}" class="flex items-center text-gray-600 font-medium text-base hover:text-brand-dark py-1">
                                <svg class="w-4 h-4 mr-2 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                                {{ $hizmetAdi }}
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>

            <div class="border-b border-gray-50 pb-2">
                <button id="mobile-regions-btn" class="w-full flex justify-between items-center text-brand-dark font-semibold text-lg outline-none">
                    <span>Hizmet Bölgelerimiz</span>
                    <svg id="mobile-regions-icon" class="w-5 h-5 text-gray-500 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div id="mobile-regions-menu" class="hidden flex-col mt-3 pl-4 space-y-3">
                    @foreach(config('dilekhaliyikama.hizmet_bolgeleri') as $bolge)
                        <a href="{{ route('bolge.detay', \Illuminate\Support\Str::slug($bolge)) }}" class="flex items-center text-gray-600 font-medium text-base hover:text-brand-dark">
                            <svg class="w-4 h-4 mr-2 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            {{ $bolge }}
                        </a>
                    @endforeach
                </div>
            </div>

            <a href="/hakkimizda" class="text-brand-dark font-semibold text-lg border-b border-gray-50 pb-2">Hakkımızda</a>
            <a href="/iletisim" class="bg-brand-dark text-white text-center px-6 py-3 rounded-full font-semibold shadow-md mt-4">İletişim</a>
        </nav>
    </div>
</header>
