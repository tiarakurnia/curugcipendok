<footer class="bg-gray-800 text-[#C5EEC4] py-8 font-serif">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <!-- Informasi Lokasi -->
            <div class="flex flex-col items-start">
                <h2 class="text-3xl font-bold mb-4">CURUG CIPENDOK</h2>
                <p class="flex items-center mb-4">
                    <!-- Icon Alamat -->
                    <img src="{{ asset('images/maps footer.png') }}" alt="Location" class="w-6 h-6 mr-2">
                    Dusun II Lebaksiu, Karanganyar, Karanggayam, Kec. Cilongok, Kabupaten Banyumas, Jawa Tengah 53162
                </p>
                <p class="flex items-center">
                    <!-- Icon WhatsApp -->
                    <img src="{{ asset('images/whatsapp footer.png') }}" alt="WhatsApp" class="w-6 h-6 mr-2">
                    <a href="https://wa.me/6282283062299" class="hover:underline">+62 82283062299</a>
                </p>
            </div>
            <!-- Menu -->
            <div class="flex flex-col items-center justify-center">
                <h2 class="text-lg font-semibold mb-4">Menu</h2>
                <ul class="space-y-2 text-center">
                    <li><a href="#home" class="hover:underline">Home</a></li>
                    <li><a href="#about" class="hover:underline">About</a></li>
                    <li><a href="#facility" class="hover:underline">Facility</a></li>
                    <li><a href="#gallery" class="hover:underline">Gallery</a></li>
                    <li><a href="#faq" class="hover:underline">FAQ</a></li>
                    <li><a href="#contact" class="hover:underline">Contact</a></li>
                </ul>
            </div>
            <!-- Media Sosial -->
            <div class="flex flex-col items-center">
                <h2 class="text-lg font-semibold mb-4">Follow Us</h2>
                <div class="flex space-x-6">
                    <!-- Icon Instagram -->
                    <a href="https://www.instagram.com/curugcipendok.econique?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                        class="hover:opacity-75">
                        <img src="{{ asset('images/skill-icons_instagram.png') }}" alt="Instagram" class="w-8 h-8">
                    </a>
                    <!-- Icon Facebook -->
                    <a href="https://www.facebook.com/CurugCipendok" class="hover:opacity-75">
                        <img src="{{ asset('images/devicon_facebook.png') }}" alt="Facebook" class="w-8 h-8">
                    </a>
                    <!-- Icon Tiktok -->
                    <a href="https://www.tiktok.com/@curugcipendok.official?_t=8rrHekZzMVp&_r=1"
                        class="hover:opacity-75">
                        <img src="{{ asset('images/logos_tiktok-icon.png') }}" alt="Tiktok" class="w-8 h-8">
                    </a>
                </div>
            </div>
        </div>
        <!-- Copyright -->
        <div class="mt-8 text-center border-t border-gray-600 pt-4">
            &copy; 2023 Curug Cipendok by Telkom University Purwokerto. All rights reserved.
        </div>
    </div>
</footer>
