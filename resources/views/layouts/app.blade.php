<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Curug Cipendok</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css') <!-- Pastikan Vite sudah di-setup -->
</head>

<body>
    <!-- Header/Navbar -->
    @include('partials.header')

    <!-- Konten -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Smooth scrolling ketika klik link
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // Highlight menu aktif saat scroll
            const sections = document.querySelectorAll('section');
            const menuLinks = document.querySelectorAll('nav a'); // Ganti dengan selektor link navigasi Anda

            window.addEventListener('scroll', () => {
                let current = '';
                sections.forEach(section => {
                    const sectionTop = section.offsetTop - 50; // Penyesuaian offset untuk header
                    const sectionHeight = section.offsetHeight;

                    if (window.scrollY >= sectionTop && window.scrollY < sectionTop +
                        sectionHeight) {
                        current = section.getAttribute('id');
                    }
                });

                menuLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${current}`) {
                        link.classList.add('active');
                    }
                });
            });
        });
    </script>

</body>

</html>
