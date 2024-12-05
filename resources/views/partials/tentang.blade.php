<section class="bg-[#00404D] text-white py-12 font-serif">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-8">Tentang Kami</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Bagian Kiri (Gambar) -->
            <div class="flex justify-center">
                <img src="{{ asset('images/tentang.jpeg') }}" alt="Welcome to Curug Cipendok"
                    class="rounded-lg shadow-lg w-full max-w-md object-cover aspect-[4/3]">
            </div>
            <!-- Bagian Kanan (Deskripsi dan Tabel) -->
            <div>
                <p class="text-lg leading-relaxed bg-[#E3F9E5] text-[#00404D] p-6 rounded-lg shadow-md">
                    Curug Cipendok adalah salah satu objek wisata alam yang terletak di Desa Karangtengah, Kecamatan
                    Cilongok, Banyumas, Jawa Tengah. Air terjun ini memiliki ketinggian sekitar 92 meter dan berada di
                    lereng
                    Gunung Slamet, sehingga menawarkan suasana yang asri dengan pemandangan alam yang indah serta udara
                    yang
                    sejuk. Lokasi ini juga dikelilingi oleh hutan lebat yang menjadi habitat berbagai flora dan fauna.
                </p>
                <!-- Tabel Jam Operasional -->
                <div class="mt-6">
                    <h3 class="text-2xl font-bold text-center mb-4">Jam Operasional</h3>
                    <div class="flex justify-center px-4">
                        <!-- Menambahkan div pembungkus yang memberi margin seimbang pada kedua sisi -->
                        <div class="w-full max-w-4xl"> <!-- Mengatur lebar tabel agar tidak terlalu besar -->
                            <table class="w-full bg-[#E3F9E5] text-[#00404D] rounded-lg overflow-hidden shadow-lg">
                                <thead>
                                    <tr class="bg-[#B5E0C5] text-left">
                                        <th class="py-2 px-4">No</th>
                                        <th class="py-2 px-4">Hari</th>
                                        <th class="py-2 px-4">Jam Buka</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="py-2 px-4">1</td>
                                        <td class="py-2 px-4">Senin</td>
                                        <td class="py-2 px-4">08:00 - 16:00 WIB</td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 px-4">2</td>
                                        <td class="py-2 px-4">Selasa</td>
                                        <td class="py-2 px-4">08:00 - 16:00 WIB</td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 px-4">3</td>
                                        <td class="py-2 px-4">Rabu</td>
                                        <td class="py-2 px-4">08:00 - 16:00 WIB</td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 px-4">4</td>
                                        <td class="py-2 px-4">Kamis</td>
                                        <td class="py-2 px-4">08:00 - 16:00 WIB</td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 px-4">5</td>
                                        <td class="py-2 px-4">Jumat</td>
                                        <td class="py-2 px-4">08:00 - 16:00 WIB</td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 px-4">6</td>
                                        <td class="py-2 px-4">Sabtu</td>
                                        <td class="py-2 px-4">08:00 - 16:00 WIB</td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 px-4">7</td>
                                        <td class="py-2 px-4">Minggu</td>
                                        <td class="py-2 px-4">08:00 - 16:00 WIB</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
