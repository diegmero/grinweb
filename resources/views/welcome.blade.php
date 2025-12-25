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
</head>

<body class="bg-cream-100 font-sans text-gray-900 antialiased selection:bg-brand-500 selection:text-white">

    <!-- Navbar -->
    <nav x-data="{ open: false }" class="fixed w-full z-50 transition-all duration-300"
        :class="{ 'bg-cream-100/80 backdrop-blur-md shadow-sm': open || window.scrollY > 10, 'bg-transparent': !open && window.scrollY <= 10 }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex items-center">
                    <a href="/" class="flex-shrink-0 flex items-center gap-2">
                        <!-- Logo Placeholder -->
                        <div
                            class="w-10 h-10 bg-brand-600 rounded-xl flex items-center justify-center text-white font-bold text-xl shadow-lg transform -rotate-3">
                            G</div>
                        <span class="font-heading font-bold text-2xl tracking-tight text-gray-900">Grintic</span>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#productos"
                        class="text-gray-600 hover:text-brand-600 font-medium transition-colors">Productos</a>
                    <a href="#servicios"
                        class="text-gray-600 hover:text-brand-600 font-medium transition-colors">Servicios</a>
                    <a href="#blog" class="text-gray-600 hover:text-brand-600 font-medium transition-colors">Blog</a>

                    @if (Route::has('login'))
                        <div class="flex items-center gap-4">
                            @auth
                                <a href="{{ url('/admin') }}"
                                    class="px-5 py-2.5 rounded-full bg-gray-900 text-white font-medium hover:bg-gray-800 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">Dashboard</a>
                            @else
                                <a href="{{ route('filament.admin.auth.login') }}"
                                    class="text-gray-900 hover:text-brand-600 font-bold transition-colors">Log in</a>
                            @endauth
                        </div>
                    @endif
                </div>

                <!-- Mobile Menu Button -->
                <div class="flex items-center md:hidden">
                    <button @click="open = ! open"
                        class="text-gray-600 hover:text-gray-900 focus:outline-none p-2 rounded-md">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div :class="{'block': open, 'hidden': ! open}"
            class="hidden md:hidden bg-white/95 backdrop-blur-xl border-t border-gray-100 absolute w-full">
            <div class="px-4 pt-2 pb-6 space-y-2 shadow-lg">
                <a href="#productos"
                    class="block px-3 py-3 rounded-xl text-base font-medium text-gray-700 hover:text-brand-600 hover:bg-cream-50">Productos</a>
                <a href="#servicios"
                    class="block px-3 py-3 rounded-xl text-base font-medium text-gray-700 hover:text-brand-600 hover:bg-cream-50">Servicios</a>
                <a href="#blog"
                    class="block px-3 py-3 rounded-xl text-base font-medium text-gray-700 hover:text-brand-600 hover:bg-cream-50">Blog</a>
                <a href="{{ route('filament.admin.auth.login') }}"
                    class="block px-3 py-3 rounded-xl text-base font-bold text-brand-600 hover:bg-cream-50">Acceso
                    Cliente</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative pt-32 pb-20 sm:pt-40 sm:pb-24 overflow-hidden">
        <!-- Background Blobs -->
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full z-0 pointer-events-none">
            <div
                class="absolute top-20 left-10 w-96 h-96 bg-brand-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob">
            </div>
            <div
                class="absolute top-20 right-10 w-96 h-96 bg-cream-300 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000">
            </div>
            <div
                class="absolute -bottom-32 left-1/3 w-96 h-96 bg-pink-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-4000">
            </div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span
                class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/60 backdrop-blur-sm border border-white/50 shadow-sm text-sm font-semibold text-brand-700 mb-8 animate-fade-in-up">
                <span class="w-2 h-2 rounded-full bg-brand-500 animate-pulse"></span>
                Innovación Digital 2025
            </span>

            <h1
                class="text-5xl md:text-7xl font-heading font-extrabold text-gray-900 tracking-tight leading-tight mb-8 animate-fade-in-up animation-delay-100">
                Creamos experiencias <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-violet-600">Digitales que
                    Impactan.</span>
            </h1>

            <p class="mt-4 max-w-2xl mx-auto text-xl text-gray-600 mb-10 animate-fade-in-up animation-delay-200">
                Llevamos tu presencia corporativa al siguiente nivel con productos digitales exclusivos, servicios de
                consultoría y una estrategia visual impecable.
            </p>

            <div
                class="flex flex-col sm:flex-row gap-4 justify-center items-center animate-fade-in-up animation-delay-300">
                <a href="#servicios"
                    class="inline-flex items-center px-8 py-4 border border-transparent text-lg font-bold rounded-full text-white bg-gray-900 hover:bg-gray-800 transition-all shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
                    Ver Servicios
                    <svg class="ml-2 -mr-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
                <a href="#contacto"
                    class="inline-flex items-center px-8 py-4 border border-gray-300/50 backdrop-blur-sm bg-white/40 text-lg font-bold rounded-full text-gray-900 hover:bg-white transition-all shadow-lg hover:shadow-xl">
                    Contáctanos
                </a>
            </div>
        </div>

        <!-- UI Dashboard Preview (Floating Mockup) -->
        <div class="relative mt-20 max-w-5xl mx-auto px-4 perspective-1000 animate-fade-in-up animation-delay-500">
            <div
                class="bg-white rounded-2xl shadow-2xl border border-gray-100 p-2 transform rotate-x-6 hover:rotate-x-0 transition-transform duration-700 ease-out">
                <div
                    class="bg-gray-900 rounded-xl overflow-hidden border border-gray-800 aspect-[16/9] flex items-center justify-center relative group">
                    <!-- Abstract Code/Server Visual -->
                    <div class="absolute inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-20">
                    </div>
                    <div
                        class="absolute w-full h-full  bg-gradient-to-tr from-gray-900 via-gray-800 to-brand-900 opacity-90">
                    </div>

                    <!-- Dashboard Content -->
                    <div class="z-10 w-full h-full p-8 flex flex-col">
                        <!-- Mockup Header -->
                        <div class="flex items-center justify-between mb-8 border-b border-gray-700 pb-4">
                            <div class="flex gap-2">
                                <div class="w-3 h-3 rounded-full bg-red-500"></div>
                                <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                                <div class="w-3 h-3 rounded-full bg-green-500"></div>
                            </div>
                            <div class="text-gray-400 text-xs font-mono">grintic.com</div>
                        </div>

                        <!-- Mockup Body grid -->
                        <div class="grid grid-cols-3 gap-6 h-full">
                            <!-- Card 1: Client Satisfaction -->
                            <div
                                class="col-span-2 bg-gray-800/50 backdrop-blur-sm rounded-lg p-5 border border-gray-700">
                                <div class="flex justify-between items-start mb-4">
                                    <div>
                                        <p class="text-xs text-gray-400 font-mono uppercase mb-1">Impacto Corporativo
                                        </p>
                                        <h4 class="text-white font-bold text-lg">Top Clientes</h4>
                                    </div>
                                    <div
                                        class="px-2 py-1 rounded bg-yellow-500/20 text-yellow-400 text-xs font-bold flex items-center gap-1">
                                        <span>4.9</span>
                                        <svg class="w-3 h-3 fill-current" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="space-y-3">
                                    <!-- Fake Corporate Clients List -->
                                    <div class="flex items-center justify-between p-2 rounded bg-gray-700/30">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="w-8 h-8 rounded bg-blue-500/20 text-blue-400 flex items-center justify-center font-bold text-xs">
                                                A</div>
                                            <div>
                                                <p class="text-sm text-white font-medium">AGFSAS</p>
                                                <p class="text-[10px] text-gray-400">Gestión de TI</p>
                                            </div>
                                        </div>
                                        <div class="flex text-yellow-500 text-[10px]">★★★★★</div>
                                    </div>
                                    <div class="flex items-center justify-between p-2 rounded bg-gray-700/30">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="w-8 h-8 rounded bg-blue-500/20 text-blue-400 flex items-center justify-center font-bold text-xs">
                                                I</div>
                                            <div>
                                                <p class="text-sm text-white font-medium">Inventiva Estudios</p>
                                                <p class="text-[10px] text-gray-400">Desarrollo de Software</p>
                                            </div>
                                        </div>
                                        <div class="flex text-yellow-500 text-[10px]">★★★★★</div>
                                    </div>
                                    <div class="flex items-center justify-between p-2 rounded bg-gray-700/30">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="w-8 h-8 rounded bg-blue-500/20 text-blue-400 flex items-center justify-center font-bold text-xs">
                                                G</div>
                                            <div>
                                                <p class="text-sm text-white font-medium">Gran Apple Tours</p>
                                                <p class="text-[10px] text-gray-400">Software de Turismo</p>
                                            </div>
                                        </div>
                                        <div class="flex text-yellow-500 text-[10px]">★★★★★</div>
                                    </div>
                                    <div class="flex items-center justify-between p-2 rounded bg-gray-700/30">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="w-8 h-8 rounded bg-purple-500/20 text-purple-400 flex items-center justify-center font-bold text-xs">
                                                Q</div>
                                            <div>
                                                <p class="text-sm text-white font-medium">Quiron Solutions</p>
                                                <p class="text-[10px] text-gray-400">Desarrollo Web</p>
                                            </div>
                                        </div>
                                        <div class="flex text-yellow-500 text-[10px]">★★★★★</div>
                                    </div>
                                    <div class="flex items-center justify-between p-2 rounded bg-gray-700/30">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="w-8 h-8 rounded bg-green-500/20 text-green-400 flex items-center justify-center font-bold text-xs">
                                                V</div>
                                            <div>
                                                <p class="text-sm text-white font-medium">Vive Trekking</p>
                                                <p class="text-[10px] text-gray-400">Software de Turismo</p>
                                            </div>
                                        </div>
                                        <div class="flex text-yellow-500 text-[10px]">★★★★★</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2: Global Coverage -->
                            <div
                                class="col-span-1 bg-gray-800/50 backdrop-blur-sm rounded-lg p-5 border border-gray-700 flex flex-col">
                                <div class="mb-4">
                                    <div
                                        class="w-10 h-10 rounded-lg bg-indigo-500/20 flex items-center justify-center text-indigo-400 mb-2">
                                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <p class="text-xs text-gray-400 font-mono uppercase">Presencia</p>
                                    <h4 class="text-white font-bold text-base leading-tight">Cobertura Global</h4>
                                </div>
                                <div class="space-y-2 overflow-hidden">
                                    <div class="flex items-center gap-2">
                                        <span class="text-xs">🇲🇽</span>
                                        <span class="text-gray-300 text-xs font-mono">México</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="text-xs">🇺🇸</span>
                                        <span class="text-gray-300 text-xs font-mono">USA</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="text-xs">🇨🇴</span>
                                        <span class="text-gray-300 text-xs font-mono">Colombia</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="text-xs">🇪🇸</span>
                                        <span class="text-gray-300 text-xs font-mono">España</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="text-xs">🇨🇷</span>
                                        <span class="text-gray-300 text-xs font-mono">Costa Rica</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="text-xs">🇵🇦</span>
                                        <span class="text-gray-300 text-xs font-mono">Panamá</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="text-xs">🇧🇷</span>
                                        <span class="text-gray-300 text-xs font-mono">Brasil</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="text-xs">🇦🇷</span>
                                        <span class="text-gray-300 text-xs font-mono">Argentina</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="text-xs">🇦🇼</span>
                                        <span class="text-gray-300 text-xs font-mono">Aruba</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Floating Element 1: Uptime -->
            <div
                class="absolute -right-8 top-26 bg-white/95 backdrop-blur-xl p-4 rounded-xl shadow-2xl border border-gray-100 animate-float">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center text-green-600">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500 font-bold uppercase tracking-wider">Disponibilidad</p>
                        <p class="text-lg font-heading font-bold text-gray-900">99.99%</p>
                    </div>
                </div>
            </div>

            <!-- Floating Element 2: Code/Commits -->
            <div
                class="absolute -right-20 bottom-24 bg-gray-900/95 backdrop-blur-xl p-4 rounded-xl shadow-2xl border border-gray-700 animate-float animation-delay-2000">
                <div class="flex items-center gap-3">
                    <div
                        class="w-10 h-10 bg-blue-500/20 rounded-full flex items-center justify-center text-blue-400 font-mono text-sm font-bold">
                        &lt;/&gt;
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 font-semibold uppercase">Soporte TI</p>
                        <p class="text-sm font-mono text-white">24/7</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts requirement notification -->
    <!-- AlpineJS is included via app.js if Livewire/Filament is installed, but for Guest layout we might need to ensure it's loaded. 
         Filament usually injects it, but on a raw welcome page standard Livewire/Alpine might not be there unless we include it. 
         For now, we assume app.js includes it or we'll add CDN if valid. -->

    <style>
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
    </style>
</body>

</html>