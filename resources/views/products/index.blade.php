<x-app-layout>
    <!-- Hero Section (Max Height 800px) -->
    <div class="relative h-[800px] w-full overflow-hidden">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?q=80&w=2070&auto=format&fit=crop"
                alt="Technology Products" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-gray-900/90 to-gray-900/40"></div>
        </div>

        <div class="relative z-10 h-full flex items-center">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                <div class="max-w-3xl">
                    <h1 class="text-5xl md:text-7xl font-heading font-extrabold text-white leading-tight mb-6">
                        Soluciones Digitales <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-400 to-brand-300">
                            De Alto Impacto
                        </span>
                    </h1>
                    <p class="text-xl text-gray-300 leading-relaxed mb-8 max-w-2xl">
                        Descubre nuestro ecosistema de productos diseñados para escalar tu negocio. Software robusto,
                        seguro y listo para la empresa del futuro.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#catalogo"
                            class="px-8 py-4 bg-brand-600 hover:bg-brand-500 text-white font-bold rounded-2xl transition-all shadow-lg shadow-brand-500/30">
                            Explorar Catálogo
                        </a>
                        <a href="#"
                            class="px-8 py-4 bg-white/10 hover:bg-white/20 text-white font-bold rounded-2xl backdrop-blur-md transition-all border border-white/20">
                            Agendar Demo
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Catalog Section -->
    <section id="catalogo" class="py-24 bg-cream-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-brand-600 font-bold uppercase tracking-wider text-sm">Nuestros Productos</span>
                <h2 class="text-4xl font-heading font-extrabold text-gray-900 mt-2">Tecnología lista para usar</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Product Card 1 -->
                <div
                    class="group bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 border border-gray-100">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2015&auto=format&fit=crop"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                            alt="ERP System">
                        <div
                            class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full text-xs font-bold text-gray-900">
                            Empresarial
                        </div>
                    </div>
                    <div class="p-8">
                        <div
                            class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center text-blue-600 mb-6 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-brand-600 transition-colors">
                            GrinERP Cloud</h3>
                        <p class="text-gray-500 mb-6 leading-relaxed">
                            Gestión integral de recursos empresariales en la nube. Finanzas, inventario y RRHH en una
                            sola plataforma.
                        </p>
                        <a href="#" class="inline-flex items-center text-brand-600 font-bold hover:text-brand-700">
                            Ver Características <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Product Card 2 -->
                <div
                    class="group bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 border border-gray-100">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2070&auto=format&fit=crop"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                            alt="Analytics">
                        <div
                            class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full text-xs font-bold text-gray-900">
                            Data Science
                        </div>
                    </div>
                    <div class="p-8">
                        <div
                            class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center text-purple-600 mb-6 group-hover:bg-purple-600 group-hover:text-white transition-colors duration-300">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-brand-600 transition-colors">
                            GrinAnalytics</h3>
                        <p class="text-gray-500 mb-6 leading-relaxed">
                            Inteligencia de negocios impulsada por IA. Visualiza datos, predice tendencias y toma
                            decisiones informadas.
                        </p>
                        <a href="#" class="inline-flex items-center text-brand-600 font-bold hover:text-brand-700">
                            Ver Características <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Product Card 3 -->
                <div
                    class="group bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 border border-gray-100">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?q=80&w=1470&auto=format&fit=crop"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                            alt="Security">
                        <div
                            class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full text-xs font-bold text-gray-900">
                            Ciberseguridad
                        </div>
                    </div>
                    <div class="p-8">
                        <div
                            class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center text-green-600 mb-6 group-hover:bg-green-600 group-hover:text-white transition-colors duration-300">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-brand-600 transition-colors">
                            GrinShield</h3>
                        <p class="text-gray-500 mb-6 leading-relaxed">
                            Protección perimetral avanzada para tu infraestructura digital. Monitoreo 24/7 y respuesta a
                            incidentes.
                        </p>
                        <a href="#" class="inline-flex items-center text-brand-600 font-bold hover:text-brand-700">
                            Ver Características <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>