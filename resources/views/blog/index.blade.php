<x-app-layout>
    <!-- Hero Section (Max Height 800px) -->
    <div class="relative h-[800px] w-full overflow-hidden">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1499750310159-5b5f87ae97e7?q=80&w=2669&auto=format&fit=crop"
                alt="Blog Workspace" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gray-900/60 backdrop-blur-[2px]"></div>
        </div>

        <div class="relative z-10 h-full flex items-center justify-center text-center">
            <div class="max-w-4xl px-4">
                <span
                    class="inline-block py-1 px-3 rounded-full bg-brand-500/20 border border-brand-400/30 text-brand-300 font-bold mb-6 backdrop-blur-md">
                    Nuestro Blog
                </span>
                <h1 class="text-5xl md:text-8xl font-heading font-black text-white leading-tight mb-8 tracking-tight">
                    Ideas que inspiran <br>
                    <span class="text-brand-400 font-serif italic">Innovación</span>
                </h1>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                    Explora artículos sobre tecnología, tendencias digitales y casos de estudio de la industria.
                </p>
            </div>
        </div>
    </div>

    <!-- Masonry Blog Section -->
    <section class="py-24 bg-cream-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Filter/Categories (Stylet) -->
            <div class="flex justify-center flex-wrap gap-4 mb-16">
                <button
                    class="px-6 py-2 rounded-full bg-gray-900 text-white font-bold text-sm shadow-lg hover:transform hover:-translate-y-1 transition-all">Todos</button>
                <button
                    class="px-6 py-2 rounded-full bg-white text-gray-600 font-bold text-sm shadow-sm hover:bg-gray-100 transition-colors">Tecnología</button>
                <button
                    class="px-6 py-2 rounded-full bg-white text-gray-600 font-bold text-sm shadow-sm hover:bg-gray-100 transition-colors">Negocios</button>
                <button
                    class="px-6 py-2 rounded-full bg-white text-gray-600 font-bold text-sm shadow-sm hover:bg-gray-100 transition-colors">Tutoriales</button>
            </div>

            <!-- CSS Masonry Grid -->
            <div class="columns-1 md:columns-2 lg:columns-3 gap-8 space-y-8">

                <!-- Blog Post 1 (Tall) -->
                <div
                    class="break-inside-avoid bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=2070&auto=format&fit=crop"
                            class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-700"
                            alt="Tech">
                        <div
                            class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-lg text-xs font-bold text-brand-700">
                            Tecnología
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 text-gray-400 text-xs mb-3">
                            <span>Dic 24, 2024</span>
                            <span>&bull;</span>
                            <span>5 min lectura</span>
                        </div>
                        <h3
                            class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-brand-600 transition-colors leading-tight">
                            El futuro de la IA en el desarrollo web
                        </h3>
                        <p class="text-gray-500 text-sm leading-relaxed mb-4">
                            Cómo los grandes modelos de lenguaje están redefiniendo la forma en que escribimos código y
                            diseñamos interfaces de usuario.
                        </p>
                        <a href="#"
                            class="inline-flex items-center text-sm font-bold text-gray-900 underline decoration-brand-500 underline-offset-4 hover:text-brand-600 transition-colors">
                            Leer Artículo
                        </a>
                    </div>
                </div>

                <!-- Blog Post 2 (Short) -->
                <div
                    class="break-inside-avoid bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group">
                    <div class="p-8 bg-brand-600 text-white">
                        <h3 class="text-2xl font-bold mb-4">Quote of the Day</h3>
                        <blockquote class="text-xl italic font-serif opacity-90">
                            "La innovación distingue a los líderes de los seguidores."
                        </blockquote>
                        <div class="mt-4 font-bold opacity-75">— Steve Jobs</div>
                    </div>
                </div>

                <!-- Blog Post 3 (Medium) -->
                <div
                    class="break-inside-avoid bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2015&auto=format&fit=crop"
                            class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-700"
                            alt="Business">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 text-gray-400 text-xs mb-3">
                            <span>Dic 20, 2024</span>
                            <span>&bull;</span>
                            <span>8 min lectura</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-brand-600 transition-colors">
                            Estrategias de Transformación Digital para 2025
                        </h3>
                        <p class="text-gray-500 text-sm leading-relaxed mb-4">
                            Guía completa para directivos que buscan modernizar sus procesos empresariales.
                        </p>
                        <div class="flex items-center gap-3 mt-4">
                            <img src="https://i.pravatar.cc/150?u=a042581f4e29026024d" class="w-8 h-8 rounded-full"
                                alt="Author">
                            <span class="text-xs font-bold text-gray-700">Ana Martínez</span>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 4 (Tall) -->
                <div
                    class="break-inside-avoid bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1488190211105-8b0e65b80b4e?q=80&w=2070&auto=format&fit=crop"
                            class="w-full h-96 object-cover group-hover:scale-105 transition-transform duration-700"
                            alt="Coding">
                    </div>
                    <div class="p-6">
                        <div
                            class="bg-purple-100 text-purple-600 text-xs font-bold px-2 py-1 rounded inline-block mb-3">
                            Tutorial</div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-brand-600 transition-colors">
                            Dominando Laravel 11: Novedades
                        </h3>
                        <p class="text-gray-500 text-sm leading-relaxed">
                            Un repaso profundo a las nuevas características del framework PHP más popular.
                        </p>
                    </div>
                </div>

                <!-- Blog Post 5 (Short) -->
                <div
                    class="break-inside-avoid bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-brand-600 transition-colors">
                            ¿Por qué usar Tailwind CSS?
                        </h3>
                        <p class="text-gray-500 text-sm leading-relaxed mb-4">
                            Analizamos las ventajas competitivas de usar un framework utility-first en proyectos
                            grandes.
                        </p>
                        <a href="#"
                            class="inline-flex items-center text-sm font-bold text-gray-900 underline decoration-brand-500 underline-offset-4 hover:text-brand-600 transition-colors">
                            Leer más
                        </a>
                    </div>
                </div>

            </div>

            <div class="mt-16 text-center">
                <button
                    class="px-8 py-3 border-2 border-gray-900 text-gray-900 font-bold rounded-full hover:bg-gray-900 hover:text-white transition-all duration-300 uppercase tracking-wider text-sm">
                    Cargar más artículos
                </button>
            </div>
        </div>
    </section>
</x-app-layout>