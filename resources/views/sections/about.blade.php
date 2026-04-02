<section id="hakkimizda" class="relative py-24 lg:py-32 overflow-hidden bg-white">

    <div class="absolute top-0 right-0 w-1/3 h-full bg-brand-dark/[0.02] -skew-x-12 transform origin-top pointer-events-none"></div>
    <div class="absolute -left-20 top-1/2 -translate-y-1/2 w-64 h-64 bg-yellow-400 opacity-10 blur-[120px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <div class="flex flex-col lg:flex-row gap-16 lg:items-center">

            <div class="w-full lg:w-1/2 relative" data-aos="fade-right">
                <div class="relative rounded-[3rem] overflow-hidden shadow-[0_50px_100px_-20px_rgba(0,0,0,0.2)] border-8 border-white group">
                    <img src="{{ asset('images/about-1.webp') }}" alt="Profesyonel Ekip" class="w-full h-[500px] lg:h-[600px] object-cover transform transition-transform duration-1000 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/60 via-transparent to-transparent"></div>

                    <div class="absolute bottom-8 left-8 bg-white/90 backdrop-blur-md p-6 rounded-3xl shadow-2xl flex items-center gap-4 border border-white">
                        <div class="text-4xl lg:text-5xl font-black text-brand-dark">{{ date('Y') - config('dilekhaliyikama.kurulus_yili') }}</div>
                        <div class="text-xs lg:text-sm font-bold uppercase tracking-tighter text-gray-500 leading-tight">
                            Yıllık <br> <span class="text-brand-dark">Sektör Liderliği</span>
                        </div>
                    </div>
                </div>

                <div class="hidden lg:block absolute -right-12 -bottom-12 w-64 h-64 rounded-[2.5rem] overflow-hidden border-8 border-white shadow-2xl z-20 transition-transform hover:-translate-y-4 duration-500">
                    <img src="{{ asset('images/about-2.webp') }}" alt="Halı Yıkama Detay" class="w-full h-full object-cover">
                </div>
            </div>

            <div class="w-full lg:w-1/2" data-aos="fade-left">
                <div class="mb-10 text-center lg:text-left">
                    <span class="inline-block px-4 py-1.5 rounded-full bg-brand-dark text-yellow-400 text-xs font-bold uppercase tracking-[0.2em] mb-4 shadow-lg shadow-brand-dark/20">
                        Hikayemiz & Değerlerimiz
                    </span>
                    <h2 class="text-4xl lg:text-6xl font-black text-gray-900 leading-tight mb-6">
                        Sadece Yıkamıyoruz, <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-dark to-brand-light">Yeniden Doğuruyoruz.</span>
                    </h2>
                    <p class="text-lg text-gray-600 leading-relaxed font-light">
                        {{ config('dilekhaliyikama.firma_adi') }} olarak, halılarınızı sadece birer eşya değil, evinizin ruhu olarak görüyoruz. {{ config('dilekhaliyikama.kurulus_yili') }}'den beri her ilmekte hijyen, her dokunuşta uzmanlık vaat ediyoruz.
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                    <div class="group p-6 rounded-[2rem] bg-gray-50 border border-gray-100 transition-all duration-300 hover:bg-brand-dark hover:shadow-2xl hover:shadow-brand-dark/30 hover:-translate-y-2">
                        <div class="w-12 h-12 rounded-2xl bg-brand-dark text-yellow-400 flex items-center justify-center mb-4 group-hover:bg-yellow-400 group-hover:text-brand-dark transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <h4 class="text-xl font-extrabold text-gray-900 mb-2 group-hover:text-white transition-colors">Misyonumuz</h4>
                        <p class="text-sm text-gray-500 group-hover:text-gray-300 leading-relaxed transition-colors">
                            En ileri teknolojiyi kullanarak Balıkesir'in en hijyenik temizlik standartlarını belirlemek.
                        </p>
                    </div>

                    <div class="group p-6 rounded-[2rem] bg-gray-50 border border-gray-100 transition-all duration-300 hover:bg-brand-dark hover:shadow-2xl hover:shadow-brand-dark/30 hover:-translate-y-2">
                        <div class="w-12 h-12 rounded-2xl bg-brand-dark text-yellow-400 flex items-center justify-center mb-4 group-hover:bg-yellow-400 group-hover:text-brand-dark transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                        </div>
                        <h4 class="text-xl font-extrabold text-gray-900 mb-2 group-hover:text-white transition-colors">Vizyonumuz</h4>
                        <p class="text-sm text-gray-500 group-hover:text-gray-300 leading-relaxed transition-colors">
                            Halı yıkama denildiğinde akla gelen "kusursuzluk" kelimesinin tek adresi olmak.
                        </p>
                    </div>

                </div>

                <div class="mt-8 text-center lg:text-left">
                    <a href="/hakkimizda" class="inline-flex items-center gap-3 text-brand-dark font-black hover:text-brand-light transition group">
                        <span class="border-b-2 border-brand-dark group-hover:border-brand-light uppercase tracking-widest text-sm">Kurumsal Detayları Gör</span>
                        <svg class="w-5 h-5 transform group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
