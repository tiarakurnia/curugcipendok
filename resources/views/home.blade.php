@extends('layouts.app')

@section('title', 'Curug Cipendok')

@section('content')
    <!-- Home Section -->
    <section id="home" class="bg-cover bg-center h-screen flex items-center justify-center text-white font-sans"
        style="background-image: linear-gradient(rgba(0, 64, 77, 0.5), rgba(0, 64, 77, 0.5)), url('/images/home.jpeg');">
        <div class="text-center max-w-screen-2xl mx-auto px-6">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold font-serif">Selamat Datang di Website Resmi Curug Cipendok
            </h1>
            <p class="text-lg md:text-xl lg:text-2xl mt-4 font-medium font-serif max-w-5xl mx-auto" style="font-size: 20px;">
                Temukan keindahan alam yang memukau dan pengalaman liburan tak terlupakan di Wisata Curug. Jelajahi pesona
                air terjun, nikmati udara segar, dan abadikan momen istimewa bersama keluarga atau teman. Melalui platform
                ini, Anda dapat dengan mudah mendapatkan informasi lengkap mengenai lokasi, fasilitas, tiket masuk, dan
                aktivitas
                menarik yang kami tawarkan. Yuk, mulai petualangan Anda bersama kami dan rasakan keajaiban alam Wisata Curug
                yang memikat hati!
            </p>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="bg-[#00404D] text-white py-16 font-sans">
        <div class="container mx-auto px-6">
            @include('partials.tentang')
        </div>
    </section>

    <!-- Facility Section -->
    <section id="facility" class="py-16 bg-cover bg-center text-white font-serif"
        style="background-image: linear-gradient(rgba(0, 64, 77, 0.5), rgba(0, 64, 77, 0.5)), url('images/fasilitas.jpeg'); background-position: center center; background-size: cover; padding: 0;">
        <div class="container mx-auto px-6">
            @include('partials.fasilitas')
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="py-16 bg-[#133B11] font-serif">
        <div>
            @include('partials.galeri')
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-16 bg-[#C5EEC4] font-serif">
        <div>
            @include('partials.faq')
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="font-serif">
        <div>
            @include('partials.kontak')
        </div>
    </section>
@endsection
