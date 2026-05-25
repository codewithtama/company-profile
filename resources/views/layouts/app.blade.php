<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PT Peduli Cepat Internasional (HK Indonesia) - Layanan cleaning service profesional, cepat, dan terpercaya untuk lingkungan kerja yang bersih dan sehat.">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'HK Indonesia') - PT Peduli Cepat Internasional">
    <meta property="og:description" content="Jasa cleaning service profesional dari PT Peduli Cepat Internasional. Wujudkan lingkungan kerja yang bersih, sehat, dan nyaman.">
    <title>@yield('title', 'HK Indonesia') - PT Peduli Cepat Internasional</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#f36b21',
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }

        /* Article content styling */
        .article-content h3 {
            font-size: 1.25rem;
            font-weight: 700;
            color: #1f2937;
            margin-top: 2rem;
            margin-bottom: 0.75rem;
            line-height: 1.4;
        }
        .article-content h3:first-child {
            margin-top: 0;
        }
        .article-content p {
            margin-bottom: 1rem;
            line-height: 1.8;
            color: #4b5563;
        }
        .article-content ul {
            list-style-type: disc;
            padding-left: 1.5rem;
            margin-top: 0.75rem;
            margin-bottom: 1rem;
        }
        .article-content ul li {
            margin-bottom: 0.5rem;
            line-height: 1.7;
            color: #4b5563;
        }
        .article-content strong {
            font-weight: 700;
            color: #1f2937;
        }
    </style>
</head>
<body class="bg-white text-gray-800">

    <!-- Navbar -->
    <nav class="bg-white shadow sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center gap-3">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo HK Indonesia" class="h-12 w-auto object-contain">
                    <div class="hidden sm:block">
                        <p class="font-bold text-gray-800 text-sm">HK Indonesia</p>
                        <p class="text-xs text-gray-500">PT Peduli Cepat Internasional</p>
                    </div>
                </a>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center gap-6">
                    <a href="{{ route('home') }}" class="text-sm font-medium {{ request()->routeIs('home') ? 'text-primary' : 'text-gray-600 hover:text-primary' }}">Beranda</a>
                    <a href="{{ route('tentang') }}" class="text-sm font-medium {{ request()->routeIs('tentang') ? 'text-primary' : 'text-gray-600 hover:text-primary' }}">Tentang Kami</a>
                    <a href="{{ route('layanan') }}" class="text-sm font-medium {{ request()->routeIs('layanan') ? 'text-primary' : 'text-gray-600 hover:text-primary' }}">Layanan</a>
                    <a href="{{ route('artikel.index') }}" class="text-sm font-medium {{ request()->routeIs('artikel.*') ? 'text-primary' : 'text-gray-600 hover:text-primary' }}">Artikel</a>
                    <a href="{{ route('kontak') }}" class="bg-primary text-white text-sm font-semibold px-4 py-2 rounded-lg hover:bg-orange-600">Hubungi Kami</a>
                </div>

                <!-- Mobile Hamburger -->
                <button id="mobile-menu-btn" aria-label="Toggle menu" class="md:hidden text-gray-700 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t px-4 py-3 space-y-2">
            <a href="{{ route('home') }}" class="block text-sm font-medium text-gray-600 hover:text-primary py-1">Beranda</a>
            <a href="{{ route('tentang') }}" class="block text-sm font-medium text-gray-600 hover:text-primary py-1">Tentang Kami</a>
            <a href="{{ route('layanan') }}" class="block text-sm font-medium text-gray-600 hover:text-primary py-1">Layanan</a>
            <a href="{{ route('artikel.index') }}" class="block text-sm font-medium text-gray-600 hover:text-primary py-1">Artikel</a>
            <a href="{{ route('kontak') }}" class="block text-sm font-semibold text-primary py-1">Hubungi Kami</a>
        </div>
    </nav>

    <!-- Page Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-[#10555c] text-gray-300 py-12 mt-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                <!-- Brand -->
                <div data-aos="fade-up" data-aos-delay="0">
                    <div class="flex items-center gap-3 mb-4">
                        <img src="{{ asset('img/logo.png') }}" alt="Logo HK Indonesia" class="h-10 w-auto bg-white rounded p-0.5">
                        <div>
                            <p class="font-bold text-white">HK Indonesia</p>
                            <p class="text-xs text-gray-400">PT Peduli Cepat Internasional</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-400">Jasa cleaning service yang siap bantu wujudkan lingkungan kerja yang bersih, sehat, dan nyaman.</p>
                </div>

                <!-- Links -->
                <div data-aos="fade-up" data-aos-delay="100">
                    <h4 class="font-bold text-white mb-4 text-sm">Navigasi</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('home') }}" class="hover:text-white">Beranda</a></li>
                        <li><a href="{{ route('tentang') }}" class="hover:text-white">Tentang Kami</a></li>
                        <li><a href="{{ route('layanan') }}" class="hover:text-white">Layanan</a></li>
                        <li><a href="{{ route('artikel.index') }}" class="hover:text-white">Artikel</a></li>
                        <li><a href="{{ route('admin.dashboard') }}" class="text-gray-500 hover:text-white opacity-50">Admin Dashboard</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div data-aos="fade-up" data-aos-delay="200">
                    <h4 class="font-bold text-white mb-4 text-sm">Kontak</h4>
                    <ul class="space-y-2 text-sm">
                        <li>Komplek Perkantoran Grogol Permai Blok C No. 25, Jakarta Barat</li>
                        <li>+62 812-1335-1978</li>
                        <li>info@hk-indonesia.id</li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-700 pt-6 text-center text-sm text-gray-500" data-aos="fade-up" data-aos-delay="300">
                &copy; {{ date('Y') }} PT Peduli Cepat Internasional. All Rights Reserved.
            </div>
        </div>
    </footer>

    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 100,
        });
    </script>
</body>
</html>
