<section id="hizmetler" class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-5xl font-bold text-brand-dark mb-4">Profesyonel Hizmetlerimiz</h2>
            <div class="w-24 h-1 bg-yellow-400 mx-auto rounded-full"></div>
            <p class="mt-6 text-lg text-gray-600 max-w-2xl mx-auto">İhtiyacınıza özel, son teknoloji ekipmanlarla sunduğumuz garantili temizlik hizmetlerimiz.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach(config('dilekhaliyikama.hizmetler') as $hizmetAdi => $altHizmetler)
            <a href="{{ route('hizmet.detay', \Illuminate\Support\Str::slug($hizmetAdi)) }}"
               data-aos="fade-up"
               data-aos-delay="{{ $loop->index * 150 }}"
               class="bg-gray-50 rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all duration-300 border border-gray-100 group block transform hover:-translate-y-2">

                <div class="flex justify-between items-start mb-6">
                    <div class="w-14 h-14 bg-brand-light bg-opacity-10 rounded-xl flex items-center justify-center text-brand-dark group-hover:scale-110 group-hover:bg-brand-dark group-hover:text-yellow-400 transition-all duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center text-gray-400 group-hover:text-brand-dark group-hover:bg-yellow-400 transition-all duration-300 shadow-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </div>
                </div>

                <h3 class="text-2xl font-bold text-gray-800 mb-4 group-hover:text-brand-dark transition-colors">{{ $hizmetAdi }}</h3>

                @if(count($altHizmetler) > 0)
                    <ul class="space-y-2 mb-6">
                        @foreach(array_slice($altHizmetler, 0, 3) as $alt)
                            <li class="flex items-center text-gray-600 text-sm">
                                <svg class="w-4 h-4 text-yellow-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                {{ $alt }}
                            </li>
                        @endforeach
                        @if(count($altHizmetler) > 3)
                            <li class="text-xs text-gray-400 italic mt-2">+ {{ count($altHizmetler) - 3 }} çeşit daha...</li>
                        @endif
                    </ul>
                @else
                    <p class="text-gray-500 text-sm mb-6">Derinlemesine ve hijyenik {{ mb_strtolower($hizmetAdi, 'UTF-8') }} hizmeti detayları için tıklayın.</p>
                @endif
            </a>
            @endforeach
        </div>
    </div>
</section>
