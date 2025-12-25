<x-app-layout>
    <!-- Hero Section (Max Height 800px) -->
    <div class="relative h-[800px] w-full overflow-hidden">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070&auto=format&fit=crop"
                alt="Team working" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-br from-brand-900/90 via-gray-900/80 to-gray-900/40"></div>
        </div>

        <div class="relative z-10 h-full flex items-center">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                <div class="max-w-3xl">
                    <h1 class="text-5xl md:text-7xl font-heading font-extrabold text-white leading-tight mb-6">
                        Servicios que <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-400 to-green-300">
                            Transforman Negocios
                        </span>
                    </h1>
                    <p class="text-xl text-gray-200 leading-relaxed mb-8 max-w-2xl">
                        Expertos en consultoría tecnológica, desarrollo a medida y modernización digital. Llevamos tu
                        visión al siguiente nivel.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#servicios"
                            class="px-8 py-4 bg-white text-brand-900 font-bold rounded-2xl hover:bg-gray-100 transition-all shadow-xl">
                            Conocer Servicios
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services List Section -->
    <section id="servicios" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-16">

                <!-- Service 1: Development -->
                <div class="flex flex-col lg:flex-row items-center gap-12 group">
                    <div class="lg:w-1/2 relative">
                        <div
                            class="absolute inset-0 bg-brand-200 rounded-3xl transform rotate-3 group-hover:rotate-6 transition-transform duration-500">
                        </div>
                        <img src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?q=80&w=2070&auto=format&fit=crop"
                            class="relative rounded-3xl shadow-2xl w-full object-cover h-[400px]" alt="Coding">
                    </div>
                    <div class="lg:w-1/2 space-y-6">
                        <div class="w-16 h-16 bg-brand-100 rounded-2xl flex items-center justify-center text-brand-600">
                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                        </div>
                        <h2 class="text-4xl font-heading font-bold text-gray-900">Desarrollo de Software a Medida</h2>
                        <p class="text-lg text-gray-600 leading-relaxed">
                            Creamos soluciones de software perfectamente adaptadas a tus procesos de negocio. Desde
                            aplicaciones web complejas hasta sistemas móviles nativos, utilizamos las últimas
                            tecnologías para garantizar rendimiento, escalabilidad y seguridad.
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-center gap-3 text-gray-700">
                                <svg class="w-5 h-5 text-brand-500" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Aplicaciones Web Progresivas (PWA)
                            </li>
                            <li class="flex items-center gap-3 text-gray-700">
                                <svg class="w-5 h-5 text-brand-500" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Apps para iOS y Android
                            </li>
                            <li class="flex items-center gap-3 text-gray-700">
                                <svg class="w-5 h-5 text-brand-500" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Integración de APIs y Microservicios
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Service 2: Cloud -->
                <div class="flex flex-col lg:flex-row-reverse items-center gap-12 group">
                    <div class="lg:w-1/2 relative">
                        <div
                            class="absolute inset-0 bg-blue-200 rounded-3xl transform -rotate-3 group-hover:-rotate-6 transition-transform duration-500">
                        </div>
                        <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=2072&auto=format&fit=crop"
                            class="relative rounded-3xl shadow-2xl w-full object-cover h-[400px]" alt="Cloud">
                    </div>
                    <div class="lg:w-1/2 space-y-6">
                        <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center text-blue-600">
                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                            </svg>
                        </div>
                        <h2 class="text-4xl font-heading font-bold text-gray-900">Infraestructura Cloud</h2>
                        <p class="text-lg text-gray-600 leading-relaxed">
                            Migramos y optimizamos tu infraestructura en la nube. Aprovecha la flexibilidad de AWS,
                            Azure o Google Cloud para reducir costos operativos y aumentar la disponibilidad de tus
                            servicios.
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-center gap-3 text-gray-700">
                                <svg class="w-5 h-5 text-brand-500" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Migración y Arquitectura Serverless
                            </li>
                            <li class="flex items-center gap-3 text-gray-700">
                                <svg class="w-5 h-5 text-brand-500" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                DevOps y CI/CD
                            </li>
                            <li class="flex items-center gap-3 text-gray-700">
                                <svg class="w-5 h-5 text-brand-500" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Optimización de Costos Cloud
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-app-layout>