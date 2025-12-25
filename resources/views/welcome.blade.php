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

    <!-- Technologies Section -->
    <x-tech-carousel />

    <!-- Services Section -->
    <section id="servicios" class="py-24 bg-white relative overflow-hidden">
        <!-- Decor pattern -->
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-brand-50 rounded-full blur-3xl opacity-50"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-brand-600 font-bold tracking-wider uppercase text-sm">Tu aliado tecnológico</span>
                <h2 class="mt-4 text-4xl md:text-5xl font-heading font-bold text-gray-900 leading-tight">
                    No dejes que la tecnología <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-violet-600">frene tu
                        crecimiento.</span>
                </h2>
                <p class="mt-6 text-xl text-gray-600">
                    Nos encargamos de lo complejo para que tú te enfoques en vender. Gestión integral, modernización y
                    soporte de clase mundial.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1: IT Management (Core) -->
                <div
                    class="group p-8 rounded-2xl bg-cream-50 border border-cream-100 hover:bg-white hover:border-brand-100 hover:shadow-2xl transition-all duration-300 relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                        <svg class="w-24 h-24 text-brand-600" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                            </path>
                        </svg>
                    </div>
                    <div
                        class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center text-brand-600 mb-6 group-hover:scale-110 transition-transform relative z-10">
                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 font-heading relative z-10">Gestión de TI
                    </h3>
                    <p class="text-gray-600 mb-6 leading-relaxed relative z-10">
                        ¿Busca un soporte TI confiable? Administramos todo lo que necesitas para que tu negocio
                        funcione sin problemas innovando en tecnología.
                    </p>
                    <a href="#"
                        class="inline-flex items-center text-brand-600 font-bold hover:gap-2 transition-all relative z-10">
                        Delegar mi TI <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>

                <!-- Service 2: Modernization -->
                <div
                    class="group p-8 rounded-2xl bg-cream-50 border border-cream-100 hover:bg-white hover:border-brand-100 hover:shadow-2xl transition-all duration-300">
                    <div
                        class="w-14 h-14 bg-purple-100 rounded-xl flex items-center justify-center text-purple-600 mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 font-heading">Modernización de Software</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Transformamos sistemas antiguos y lentos en plataformas modernas, rápidas y seguras.
                    </p>
                    <a href="#" class="inline-flex items-center text-purple-600 font-bold hover:gap-2 transition-all">
                        Renovar mi software <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>

                <!-- Service 3: Maintenance -->
                <div
                    class="group p-8 rounded-2xl bg-cream-50 border border-cream-100 hover:bg-white hover:border-brand-100 hover:shadow-2xl transition-all duration-300">
                    <div
                        class="w-14 h-14 bg-yellow-100 rounded-xl flex items-center justify-center text-yellow-600 mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 font-heading">Mantenimiento Web</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Tu web necesita estar viva. Ofrecemos planes de mantenimiento para corregir errores, actualizar
                        seguridad y agregar nuevas funciones mes a mes.
                    </p>
                    <a href="#" class="inline-flex items-center text-yellow-600 font-bold hover:gap-2 transition-all">
                        Ver planes <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Split Section -->
    <section class="py-24 bg-cream-50 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <!-- Content (Left) -->
                <div class="lg:w-1/2">
                    <span class="text-brand-600 font-bold tracking-wider uppercase text-sm">Tranquilidad Total</span>
                    <h2 class="mt-3 text-4xl md:text-5xl font-heading font-bold text-gray-900 leading-tight">
                        Somos tu <span class="text-brand-600">departamento de TI.</span>
                    </h2>
                    <p class="mt-6 text-xl text-gray-600 leading-relaxed mb-10">
                        Olvídate de contratar personal, lidiar con bajas o curvas de aprendizaje. Tienes un equipo
                        experto gestionando y protegiendo tu tecnología 24/7 alineado a las tecnologías modernas para
                        hacer crecer su negocio.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Feature 1: Security (Highlighted) -->
                        <div
                            class="p-6 bg-white rounded-2xl shadow-sm border border-cream-200 hover:border-brand-200 hover:shadow-lg transition-all duration-300">
                            <h4 class="text-lg font-bold text-gray-900 mb-2 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span> Monitorización
                            </h4>
                            <p class="text-gray-600 text-sm">Vigilancia proactiva. Si algo falla, lo arreglamos antes de
                                que te des cuenta.</p>
                        </div>

                        <div
                            class="p-6 bg-white rounded-2xl shadow-sm border border-cream-200 hover:border-brand-200 hover:shadow-lg transition-all duration-300">
                            <h4 class="text-lg font-bold text-gray-900 mb-2 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-blue-500"></span> Escalabilidad
                            </h4>
                            <p class="text-gray-600 text-sm">Infraestructura elástica que crece automáticamente con tu
                                tráfico y ventas.</p>
                        </div>
                    </div>
                </div>

                <!-- Visual/Image (Right) - Expanded Dashboard -->
                <div class="lg:w-1/2 relative w-full">
                    <div
                        class="absolute inset-0 bg-gradient-to-tr from-brand-600/20 to-purple-600/20 rounded-3xl transform rotate-2 scale-105 blur-2xl">
                    </div>

                    <!-- Main Dashboard Window -->
                    <div
                        class="relative bg-gray-900 rounded-2xl shadow-2xl overflow-hidden border border-gray-800 flex flex-col group hover:scale-[1.01] transition-transform duration-500 animate-alive">
                        <!-- Header -->
                        <div
                            class="flex items-center justify-between px-6 py-4 bg-gray-800/50 border-b border-gray-700 backdrop-blur-sm">
                            <div class="flex gap-2">
                                <div class="w-3 h-3 rounded-full bg-red-500 group-hover:bg-red-400 transition-colors">
                                </div>
                                <div
                                    class="w-3 h-3 rounded-full bg-yellow-500 group-hover:bg-yellow-400 transition-colors">
                                </div>
                                <div
                                    class="w-3 h-3 rounded-full bg-green-500 group-hover:bg-green-400 transition-colors">
                                </div>
                            </div>
                            <div
                                class="flex items-center gap-2 px-3 py-1 rounded-full bg-black/40 border border-gray-700/50">
                                <svg class="w-3 h-3 text-gray-400" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                    </path>
                                </svg>
                                <span class="text-gray-400 text-xs font-mono tracking-wide">dashboard.grintic.com</span>
                            </div>
                        </div>

                        <!-- Content Rows -->
                        <div class="p-6 space-y-4 font-mono text-sm relative">
                            <!-- Matrix rain background effect suggestion (subtle) -->
                            <div
                                class="absolute inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-5 pointer-events-none">
                            </div>

                            <!-- Row 1: App Health -->
                            <div
                                class="flex items-center justify-between p-4 rounded-xl bg-gray-800/40 border border-gray-700/50 hover:bg-gray-800/60 transition-colors">
                                <div class="flex items-center gap-4">
                                    <div class="p-2.5 rounded-lg bg-green-500/10 text-green-400">
                                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-white font-bold tracking-tight">Salud del Sistema</p>
                                        <div class="flex items-center gap-2 mt-1.5">
                                            <div class="h-1.5 w-24 bg-gray-700/50 rounded-full overflow-hidden">
                                                <div
                                                    class="h-full bg-green-500 w-full animate-pulse shadow-[0_0_10px_rgba(34,197,94,0.5)]">
                                                </div>
                                            </div>
                                            <span class="text-[10px] text-gray-400 font-bold">100% OPERATIVO</span>
                                        </div>
                                    </div>
                                </div>
                                <span
                                    class="px-3 py-1 rounded-full bg-green-500/10 text-green-400 text-[10px] font-bold border border-green-500/20 tracking-wider">STABLE</span>
                            </div>

                            <!-- Row 2: Security (Highlight) -->
                            <div
                                class="flex items-center justify-between p-4 rounded-xl bg-gradient-to-r from-brand-900/40 to-gray-800/40 border border-brand-500/30 hover:border-brand-500/50 transition-colors relative overflow-hidden group/security">
                                <div class="absolute inset-0 bg-brand-500/5 opacity-50 animate-pulse"></div>
                                <div class="flex items-center gap-4 relative z-10">
                                    <div
                                        class="p-2.5 rounded-lg bg-brand-500/10 text-brand-400 group-hover/security:text-brand-300 transition-colors">
                                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-white font-bold flex items-center gap-2">Security Shield <span
                                                class="text-[9px] bg-brand-600 text-white px-1.5 py-0.5 rounded uppercase tracking-wider">Mitigar</span>
                                        </p>
                                        <p class="text-xs text-gray-400 mt-1">Firewall Activo • IPS/IDS</p>
                                    </div>
                                </div>
                                <div class="text-right relative z-10">
                                    <p class="text-brand-400 font-bold text-xs">0 Amenazas</p>
                                    <p class="text-gray-500 text-[10px]">Escaneando...</p>
                                </div>
                            </div>

                            <!-- Row 3: Database & Backups -->
                            <div class="grid grid-cols-2 gap-4">
                                <div
                                    class="p-4 rounded-xl bg-gray-800/40 border border-gray-700/50 hover:bg-gray-800/60 transition-colors">
                                    <div class="flex items-center gap-3 mb-2">
                                        <svg class="w-5 h-5 text-blue-400" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4">
                                            </path>
                                        </svg>
                                        <span class="text-gray-300 text-xs font-bold uppercase tracking-wide">Base de
                                            Datos</span>
                                    </div>
                                    <p class="text-white font-bold text-lg">12ms <span
                                            class="text-gray-500 font-normal text-xs block -mt-1">Latencia Global</span>
                                    </p>
                                </div>
                                <div
                                    class="p-4 rounded-xl bg-gray-800/40 border border-gray-700/50 hover:bg-gray-800/60 transition-colors">
                                    <div class="flex items-center gap-3 mb-2">
                                        <svg class="w-5 h-5 text-purple-400" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2">
                                            </path>
                                        </svg>
                                        <span
                                            class="text-gray-300 text-xs font-bold uppercase tracking-wide">Backups</span>
                                    </div>
                                    <p class="text-white font-bold text-lg">Encriptado <span
                                            class="text-green-400 text-sm align-top">✓</span></p>
                                </div>
                            </div>

                            <!-- Row 4: CI/CD -->
                            <div
                                class="flex items-center justify-between p-4 rounded-xl bg-gray-800/40 border border-gray-700/50 group">
                                <div class="flex items-center gap-4">
                                    <div class="p-2.5 rounded-lg bg-orange-500/10 text-orange-400">
                                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-white font-bold">CI/CD Pipeline</p>
                                        <p class="text-xs text-gray-400 mt-1">Despliegue automático</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="flex -space-x-2">
                                        <div
                                            class="w-6 h-6 rounded-full bg-gray-700 border border-gray-800 flex items-center justify-center text-[8px] text-white font-bold ring-2 ring-gray-900">
                                            GH</div>
                                        <div
                                            class="w-6 h-6 rounded-full bg-gray-700 border border-gray-800 flex items-center justify-center text-[8px] text-white font-bold ring-2 ring-gray-900">
                                            GL</div>
                                    </div>
                                    <span
                                        class="px-2 py-1 rounded bg-green-900/30 text-green-400 text-[10px] font-bold border border-green-900/50">PASSING</span>
                                </div>
                            </div>
                        </div>
                        <!-- Scan Animation Overlay -->
                        <div
                            class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-brand-500 to-transparent opacity-50 animate-scan pointer-events-none">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gray-900 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-brand-900 to-gray-900 opacity-50"></div>
        <div
            class="absolute -top-24 -right-24 w-96 h-96 bg-brand-600 rounded-full mix-blend-multiply filter blur-3xl opacity-20">
        </div>

        <div class="max-w-4xl mx-auto px-4 relative z-10 text-center">
            <h2 class="text-4xl md:text-5xl font-heading font-bold text-white mb-6">
                ¿Tu infraestructura tecnológica te está costando dinero?
            </h2>
            <p class="text-xl text-gray-400 mb-10 max-w-2xl mx-auto">
                No pierdas más clientes por webs lentas o sistemas caídos. Agenda una auditoría gratuita y optimicemos
                tu negocio hoy mismo.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#contacto"
                    class="inline-flex items-center justify-center px-8 py-4 bg-brand-600 hover:bg-brand-500 text-white font-bold rounded-full text-lg transition-all shadow-lg hover:shadow-brand-500/30 transform hover:-translate-y-1">
                    Solicitar Auditoría Gratis
                </a>
                <a href="https://wa.me/XXXXXXXXXX" target="_blank"
                    class="inline-flex items-center justify-center px-8 py-4 bg-green-600 hover:bg-green-500 border border-transparent text-white font-bold rounded-full text-lg transition-all shadow-lg">
                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.017-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                    </svg>
                    Hablemos por WhatsApp
                </a>
            </div>
        </div>
    </section>

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

        /* Alive/Health Pulse Animation */
        @keyframes alive-pulse {
            0% {
                box-shadow: 0 0 0 0px rgba(74, 222, 128, 0.05);
                border-color: rgba(31, 41, 55, 1);
                /* gray-800 */
            }

            50% {
                box-shadow: 0 10px 30px -5px rgba(74, 222, 128, 0.15);
                border-color: rgba(74, 222, 128, 0.4);
                /* green-400 equivalent */
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
            /* Green tint */
            height: 20px;
            /* Thicker scan line */
            filter: blur(4px);
            /* Blur effect requested */
        }
    </style>
</body>

</html>