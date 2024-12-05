<section class="bg-cover bg-center h-screen flex items-center justify-center text-white font-sans">
    <div class="container mx-auto px-6">
        <!-- Judul Fasilitas dengan font Roboto Serif Bold 36px -->
        <h2 class="font-serif font-bold text-3xl md:text-4xl text-center mb-6" style="font-size: 36px;">Fasilitas</h2>

        <!-- Konten Fasilitas dengan font Roboto Serif Semi-Bold 24px -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Item Fasilitas -->
            <div class="bg-[#C5EEC4] rounded-lg shadow-lg">
                <img src="{{ asset('images/toilet.png') }}" alt="Toilet Umum" class="w-full rounded-t-lg">
                <div class="p-4 text-center">
                    <p class="font-serif font-semibold text-lg md:text-xl text-gray-800" style="font-size: 24px;">Toilet
                        Umum</p>
                </div>
            </div>
            <div class="bg-[#C5EEC4] rounded-lg shadow-lg">
                <img src="{{ asset('images/mushola.png') }}" alt="Mushola" class="w-full rounded-t-lg">
                <div class="p-4 text-center">
                    <p class="font-serif font-semibold text-lg md:text-xl text-gray-800" style="font-size: 24px;">
                        Mushola</p>
                </div>
            </div>
            <div class="bg-[#C5EEC4] rounded-lg shadow-lg">
                <img src="{{ asset('images/area camp.png') }}" alt="Area Camp" class="w-full rounded-t-lg">
                <div class="p-4 text-center">
                    <p class="font-serif font-semibold text-lg md:text-xl text-gray-800" style="font-size: 24px;">Area
                        Camp</p>
                </div>
            </div>
            <div class="bg-[#C5EEC4] rounded-lg shadow-lg">
                <img src="{{ asset('images/area bermain.png') }}" alt="Area Bermain" class="w-full rounded-t-lg">
                <div class="p-4 text-center">
                    <p class="font-serif font-semibold text-lg md:text-xl text-gray-800" style="font-size: 24px;">Area
                        Bermain</p>
                </div>
            </div>
        </div>
    </div>
</section>
