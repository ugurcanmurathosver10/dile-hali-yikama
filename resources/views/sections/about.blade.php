<section id="hakkimizda" class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center gap-16">
        <div class="w-full lg:w-1/2">
            <div class="inline-block bg-brand-light bg-opacity-10 text-brand-dark font-semibold px-4 py-2 rounded-full mb-4">
                Kurumsal Kimliğimiz
            </div>
            <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-6">
                {{ config('dilekhaliyikama.kurulus_yili') }}'den Beri Güvenle...
            </h2>
            <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                {{ config('dilekhaliyikama.firma_adi') }} olarak, gelişmiş endüstriyel makinelerimiz, doğa ve insan dostu şampuanlarımız ile halılarınızı dokusuna zarar vermeden ilk günkü canlılığına kavuşturuyoruz.
            </p>
        </div>
        <div class="w-full lg:w-1/2 relative">
            <div class="grid grid-cols-2 gap-4">
                <img src="{{ asset('images/about-1.webp') }}" alt="Profesyonel Temizlik" class="rounded-2xl shadow-lg w-full h-64 object-cover mt-8">
                <img src="{{ asset('images/about-2.webp') }}" alt="Müşteri Memnuniyeti" class="rounded-2xl shadow-lg w-full h-80 object-cover">
            </div>
        </div>
    </div>
</section>
