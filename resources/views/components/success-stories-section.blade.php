<section class="py-24 bg-white relative overflow-hidden">
    <!-- Subtle background decoration -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-brand-50 rounded-full blur-3xl opacity-60"></div>
        <div class="absolute top-1/2 right-0 w-64 h-64 bg-gray-50 rounded-full blur-3xl opacity-60"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
            <div class="max-w-2xl">
                <span class="text-brand-600 font-bold tracking-wider uppercase text-sm">Resultados Tangibles</span>
                <h2 class="mt-4 text-4xl md:text-5xl font-heading font-bold text-gray-900 leading-tight">
                    No prometemos, <br>
                    <span class="text-transparent bg-clip-text bg-brand-600">demostramos
                        resultados.</span>
                </h2>
            </div>
            <div class="mb-2">
                <a href="#proyectos"
                    class="hidden md:inline-flex items-center text-gray-900 font-bold hover:text-brand-600 transition-colors">
                    Ver portfolio completo
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>

        <!-- Bento Grid Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">

            <!-- Main Featured Case (Span 7) -->
            <div
                class="lg:col-span-7 bg-gray-900 rounded-3xl p-8 md:p-12 relative overflow-hidden group hover:shadow-2xl transition-all duration-500">
                <div class="absolute inset-0 bg-gradient-to-br from-gray-800 to-gray-900"></div>
                <!-- Abstract Graph Visual -->
                <div
                    class="absolute bottom-0 right-0 opacity-20 transform translate-x-1/4 translate-y-1/4 group-hover:scale-105 transition-transform duration-700">
                    <svg width="400" height="400" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 200L50 150L100 180L200 50" stroke="#4ADE80" stroke-width="2" />
                        <path d="M0 200L50 150L100 180L200 50V200H0Z" fill="url(#paint0_linear)" />
                        <defs>
                            <linearGradient id="paint0_linear" x1="100" y1="50" x2="100" y2="200"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#4ADE80" stop-opacity="0.3" />
                                <stop offset="1" stop-color="#4ADE80" stop-opacity="0" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>

                <div class="relative z-10 flex flex-col h-full justify-between">
                    <div>
                        <div class="flex items-center gap-3 mb-6">
                            <span
                                class="px-3 py-1 rounded-full bg-brand-600/20 text-brand-400 text-xs font-bold uppercase tracking-wider border border-brand-600/30">Caso
                                Destacado</span>
                            <span class="text-gray-400 text-sm font-mono">Logística Global</span>
                        </div>
                        <h3 class="text-3xl font-bold text-white mb-4">Reducción del 40% en costos operativos de TI</h3>
                        <p class="text-gray-400 text-lg leading-relaxed max-w-lg">
                            Mediante la migración a contenedores y orquestación con Kubernetes, optimizamos la
                            infraestructura para escalar solo cuando es necesario.
                        </p>
                    </div>

                    <div class="mt-10 grid grid-cols-2 gap-8 border-t border-gray-800 pt-8">
                        <div>
                            <p class="text-4xl font-mono font-bold text-brand-500 mb-1">300%</p>
                            <p class="text-sm text-gray-500 font-medium uppercase">ROI Anual</p>
                        </div>
                        <div>
                            <p class="text-4xl font-mono font-bold text-brand-500 mb-1">-40%</p>
                            <p class="text-sm text-gray-500 font-medium uppercase">Factura Cloud</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Side Cards (Span 5) -->
            <div class="lg:col-span-5 flex flex-col gap-6">
                <!-- Card 2 -->
                <div
                    class="flex-1 bg-cream-50 rounded-3xl p-8 border border-cream-200 hover:border-brand-200 transition-colors group relative overflow-hidden">
                    <div
                        class="absolute top-0 right-0 w-24 h-24 bg-brand-100 rounded-bl-full opacity-50 group-hover:scale-110 transition-transform">
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-12 h-12 bg-white rounded-xl shadow-sm flex items-center justify-center text-brand-600 font-bold text-xl mb-4">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 mb-2">Fintech Start</h4>
                        <p class="text-gray-600 text-sm mb-4">
                            Implementación de arquitectura Zero-Trust. Pasaron auditoría bancaria en tiempo récord.
                        </p>
                        <div
                            class="inline-flex items-center gap-2 text-brand-700 font-bold bg-brand-50 px-3 py-1 rounded-lg text-sm">
                            <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                            Cumplimiento 100%
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div
                    class="flex-1 bg-white rounded-3xl p-8 border border-gray-100 shadow-lg hover:shadow-xl transition-shadow relative">
                    <div class="flex items-start justify-between">
                        <div>
                            <div class="text-sm text-gray-400 font-bold uppercase tracking-wider mb-1">Retail X</div>
                            <h4 class="text-xl font-bold text-gray-900">Black Friday Record</h4>
                        </div>
                        <div class="text-right">
                            <p class="text-3xl font-bold text-gray-900">100k</p>
                            <p class="text-xs text-brand-600 font-bold">Usuarios/min</p>
                        </div>
                    </div>
                    <div class="mt-6 w-full bg-gray-100 rounded-full h-2">
                        <div class="bg-brand-600 h-2 rounded-full w-full" style="width: 100%"></div>
                    </div>
                    <p class="mt-2 text-right text-xs text-gray-500 font-mono">100% Uptime Garantizado</p>
                </div>
            </div>

        </div>

        <div class="mt-8 text-center md:hidden">
            <a href="#proyectos"
                class="inline-flex items-center text-gray-900 font-bold hover:text-brand-600 transition-colors">
                Ver portfolio completo
                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </div>
</section>