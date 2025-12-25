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
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
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