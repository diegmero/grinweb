<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Grintic | Productos Digitales y Servicios</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        [x-cloak] {
            display: none !important;
        }

        /* Navbar specific styles */
        .glass-nav {
            background-color: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }

        .perspective-1000 {
            perspective: 1000px;
        }

        .rotate-x-6 {
            transform: rotateX(12deg);
        }

        .rotate-x-0 {
            transform: rotateX(0deg);
        }

        @keyframes blob {
            0% {
                transform: translate(0px, 0px) scale(1);
            }

            33% {
                transform: translate(30px, -50px) scale(1.1);
            }

            66% {
                transform: translate(-20px, 20px) scale(0.9);
            }

            100% {
                transform: translate(0px, 0px) scale(1);
            }
        }

        .animate-blob {
            animation: blob 7s infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
            opacity: 0;
        }

        .animation-delay-100 {
            animation-delay: 0.1s;
        }

        .animation-delay-200 {
            animation-delay: 0.2s;
        }

        .animation-delay-300 {
            animation-delay: 0.3s;
        }

        .animation-delay-500 {
            animation-delay: 0.5s;
        }

        .animation-delay-2000 {
            animation-delay: 2s;
        }

        .animation-delay-4000 {
            animation-delay: 4s;
        }

        /* Alive/Health Pulse Animation */
        @keyframes alive-pulse {
            0% {
                box-shadow: 0 0 0 0px rgba(74, 222, 128, 0.05);
                border-color: rgba(31, 41, 55, 1);
            }

            50% {
                box-shadow: 0 10px 30px -5px rgba(74, 222, 128, 0.15);
                border-color: rgba(74, 222, 128, 0.4);
            }

            100% {
                box-shadow: 0 0 0 0px rgba(74, 222, 128, 0.05);
                border-color: rgba(31, 41, 55, 1);
            }
        }

        .animate-alive {
            animation: alive-pulse 4s ease-in-out infinite;
        }

        /* Enhanced Scan Animation */
        @keyframes scan {
            0% {
                top: 0%;
                opacity: 0;
            }

            15% {
                opacity: 1;
            }

            85% {
                opacity: 1;
            }

            100% {
                top: 100%;
                opacity: 0;
            }
        }

        .animate-scan {
            animation: scan 3s linear infinite;
            background: linear-gradient(to bottom, transparent, rgba(74, 222, 128, 0.2), transparent);
            height: 20px;
            filter: blur(4px);
        }
    </style>
</head>

<body
    class="bg-cream-100 font-sans text-gray-900 antialiased selection:bg-brand-500 selection:text-white flex flex-col min-h-screen">

    @php
        $navItems = [
            ['label' => 'Inicio', 'href' => route('home'), 'active' => request()->routeIs('home')],
            ['label' => 'Productos', 'href' => route('products.index'), 'active' => request()->routeIs('products.*')],
            ['label' => 'Servicios', 'href' => route('services.index'), 'active' => request()->routeIs('services.*')],
            ['label' => 'Blog', 'href' => route('blog.index'), 'active' => request()->routeIs('blog.*')],
        ];
    @endphp

    <header x-data="{ mobileOpen: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 10)"
        class="fixed top-0 w-full z-50 transition-all duration-300 border-b border-gray-200/50 bg-cream-50/95 backdrop-blur-xl shadow-sm">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="flex justify-between items-center transition-all duration-300"
                :class="scrolled ? 'h-16' : 'h-20'">

                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="/" class="flex items-center gap-2 group">
                        <div
                            class="w-9 h-9 bg-brand-600 text-white rounded-lg flex items-center justify-center font-bold text-xl shadow-lg shadow-brand-500/20 group-hover:scale-105 transition-transform">
                            G
                        </div>
                        <span class="font-heading font-extrabold text-xl tracking-tight text-gray-900">
                            Grintic<span class="text-brand-600">.</span>
                        </span>
                    </a>
                </div>

                <!-- Desktop Navigation (Tabs) -->
                <nav class="hidden md:flex space-x-1">
                    @foreach($navItems as $item)
                                    <a href="{{ $item['href'] }}" class="px-4 py-2 rounded-full text-sm font-bold transition-all duration-200
                                                                  {{ $item['active']
                        ? 'bg-gray-900 text-white shadow-md'
                        : 'text-gray-600 hover:bg-white hover:text-brand-600 hover:shadow-sm' }}">
                                        {{ $item['label'] }}
                                    </a>
                    @endforeach
                </nav>

                <!-- Actions -->
                <div class="hidden md:flex items-center gap-4">
                    @auth
                        <a href="{{ url('/admin') }}"
                            class="text-sm font-bold text-gray-900 hover:text-brand-600 transition-colors">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('filament.admin.auth.login') }}"
                            class="text-sm font-bold text-gray-900 hover:text-brand-600 transition-colors">
                            Log in
                        </a>
                        <a href="#contacto"
                            class="px-5 py-2 bg-brand-600 text-white text-sm font-bold rounded-full hover:bg-brand-700 transition-all shadow-lg shadow-brand-500/30 hover:-translate-y-0.5">
                            Contacto
                        </a>
                    @endauth
                </div>

                <!-- Mobile Button -->
                <button @click="mobileOpen = !mobileOpen"
                    class="md:hidden p-2 text-gray-600 rounded-lg hover:bg-gray-100 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!mobileOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                        <path x-show="mobileOpen" x-cloak stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileOpen" x-cloak x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-2"
            class="absolute top-full left-0 w-full bg-white/95 backdrop-blur-xl border-b border-gray-100 shadow-xl md:hidden">

            <div class="p-4 space-y-2">
                @foreach($navItems as $item)
                    <a href="{{ $item['href'] }}"
                        class="block px-4 py-3 rounded-xl text-base font-bold transition-colors
                                      {{ $item['active'] ? 'bg-brand-50 text-brand-700' : 'text-gray-600 hover:bg-gray-50' }}">
                        {{ $item['label'] }}
                    </a>
                @endforeach

                <div class="h-px bg-gray-100 my-2"></div>

                @auth
                    <a href="{{ url('/admin') }}"
                        class="block px-4 py-3 text-center rounded-xl bg-gray-900 text-white font-bold">
                        Dashboard
                    </a>
                @else
                    <div class="grid grid-cols-2 gap-3 p-2">
                        <a href="{{ route('filament.admin.auth.login') }}"
                            class="flex items-center justify-center px-4 py-3 rounded-xl border border-gray-200 font-bold text-gray-700 hover:bg-gray-50">
                            Log in
                        </a>
                        <a href="#contacto"
                            class="flex items-center justify-center px-4 py-3 rounded-xl bg-brand-600 text-white font-bold hover:bg-brand-700 shadow-lg shadow-brand-500/20">
                            Contacto
                        </a>
                    </div>
                @endauth
            </div>
        </div>
    </header>

    <main class="flex-grow pt-20">
        {{ $slot }}
    </main>

    <x-footer />

</body>

</html>