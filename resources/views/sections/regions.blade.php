<section id="bolgeler" class="py-20 bg-brand-dark text-white relative overflow-hidden">
    <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-5 rounded-full blur-3xl transform translate-x-1/2 -translate-y-1/2"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center" data-aos="zoom-in">
        <h2 class="text-3xl md:text-5xl font-bold mb-4">Hizmet Bölgelerimiz</h2>
        <div class="w-24 h-1 bg-yellow-400 mx-auto rounded-full mb-12"></div>
        <div class="flex flex-wrap justify-center gap-4">
            @foreach(config('dilekhaliyikama.hizmet_bolgeleri') as $bolge)
                <a href="{{ route('bolge.detay', \Illuminate\Support\Str::slug($bolge)) }}" class="bg-white bg-opacity-10 backdrop-blur-md border border-white border-opacity-20 px-6 py-3 rounded-full text-lg font-semibold hover:bg-yellow-400 hover:text-brand-dark hover:border-yellow-400 transition duration-300 shadow-lg cursor-pointer group flex items-center">
                    <svg class="w-5 h-5 mr-2 group-hover:animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    {{ $bolge }}
                </a>
            @endforeach
        </div>
    </div>
</section>
