@props(['title' => 'Tecnologías que Potencian tu Crecimiento'])

<section class="py-16 bg-cream-50 border-t border-cream-200 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 mb-8 text-center">
        <p class="text-sm font-bold text-gray-400 uppercase tracking-widest">{{ $title }}</p>
    </div>

    <div class="relative w-full">
        <!-- Gradient Masks for smooth fade out -->
        <div class="absolute left-0 top-0 bottom-0 w-24 bg-gradient-to-r from-cream-50 to-transparent z-10"></div>
        <div class="absolute right-0 top-0 bottom-0 w-24 bg-gradient-to-l from-cream-50 to-transparent z-10"></div>

        <div class="flex overflow-hidden group">
            <div class="flex space-x-16 animate-infinite-scroll group-hover:paused items-center">
                <!-- Logos Loop (Doubled for seamless scroll) -->
                @foreach (range(1, 2) as $i)
                    <!-- PHP -->
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/2560px-PHP-logo.svg.png" alt="PHP" title="PHP"
                        class="h-10 w-auto object-contain transition-all duration-300 filter grayscale brightness-50 opacity-50 hover:grayscale-0 hover:brightness-100 hover:opacity-100">
                    
                    <!-- Laravel -->
                    <img src="https://cdn.simpleicons.org/laravel/FF2D20" alt="Laravel" title="Laravel"
                        class="h-10 w-auto object-contain transition-all duration-300 filter grayscale brightness-50 opacity-50 hover:grayscale-0 hover:brightness-100 hover:opacity-100">
                    
                    <!-- Python -->
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Python-logo-notext.svg/2048px-Python-logo-notext.svg.png" alt="Python" title="Python"
                        class="h-10 w-auto object-contain transition-all duration-300 filter grayscale brightness-50 opacity-50 hover:grayscale-0 hover:brightness-100 hover:opacity-100">
                    
                    <!-- Go -->
                    <img src="https://www.vectorlogo.zone/logos/golang/golang-official.svg" alt="Go" title="Go"
                        class="h-10 w-auto object-contain transition-all duration-300 filter grayscale brightness-50 opacity-50 hover:grayscale-0 hover:brightness-100 hover:opacity-100">
                    
                    <!-- Docker -->
                    <img src="https://upload.wikimedia.org/wikipedia/commons/1/1e/Docker_Logo.png" alt="Docker" title="Docker"
                        class="h-10 w-auto object-contain transition-all duration-300 filter grayscale brightness-50 opacity-50 hover:grayscale-0 hover:brightness-100 hover:opacity-100">
                    
                    <!-- Podman -->
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Podman-logo-orig.png" alt="Podman" title="Podman"
                        class="h-10 w-auto object-contain transition-all duration-300 filter grayscale brightness-50 opacity-50 hover:grayscale-0 hover:brightness-100 hover:opacity-100">

                    <!-- WordPress -->
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/WordPress_logo.svg/1280px-WordPress_logo.svg.png" alt="WordPress" title="WordPress"
                        class="h-10 w-auto object-contain transition-all duration-300 filter grayscale brightness-50 opacity-50 hover:grayscale-0 hover:brightness-100 hover:opacity-100">
                    
                    <!-- Kubernetes -->
                    <img src="https://cdn.simpleicons.org/kubernetes/326CE5" alt="Kubernetes" title="Kubernetes"
                        class="h-10 w-auto object-contain transition-all duration-300 filter grayscale brightness-50 opacity-50 hover:grayscale-0 hover:brightness-100 hover:opacity-100">
                    
                    <!-- Google Cloud -->
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Google_Cloud_logo.svg/2560px-Google_Cloud_logo.svg.png" title="Google Cloud"
                        class="h-10 w-auto object-contain transition-all duration-300 filter grayscale brightness-50 opacity-50 hover:grayscale-0 hover:brightness-100 hover:opacity-100">
                    
                    <!-- AWS -->
                    <img src="https://cdn.worldvectorlogo.com/logos/amazon-web-services-2.svg" alt="AWS" title="AWS"
                        class="h-10 w-auto object-contain transition-all duration-300 filter grayscale brightness-50 opacity-50 hover:grayscale-0 hover:brightness-100 hover:opacity-100">
                    
                    <!-- Azure -->
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Microsoft_Azure.svg/2048px-Microsoft_Azure.svg.png" alt="Azure" title="Azure"
                        class="h-10 w-auto object-contain transition-all duration-300 filter grayscale brightness-50 opacity-50 hover:grayscale-0 hover:brightness-100 hover:opacity-100">
                        
                     <!-- Grintic Hosting (Brand) -->
                    <div class="h-10 flex items-center gap-2 group/brand cursor-pointer filter grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
                         <div class="h-8 w-8 bg-black/80 rounded-lg flex items-center justify-center text-white font-bold text-xs group-hover/brand:bg-brand-600 transition-colors">
                            G
                         </div>
                         <span class="font-bold text-lg text-gray-800 tracking-tight">Grintic<span class="font-light text-gray-500">Hosting</span></span>
                    </div>

                    <!-- React -->
                     <img src="https://cdn.simpleicons.org/react/61DAFB" alt="React" title="React"
                        class="h-10 w-auto object-contain transition-all duration-300 filter grayscale brightness-50 opacity-50 hover:grayscale-0 hover:brightness-100 hover:opacity-100">

                    <!-- Vue -->
                     <img src="https://cdn.simpleicons.org/vue.js/4FC08D" alt="Vue.js" title="Vue.js"
                        class="h-10 w-auto object-contain transition-all duration-300 filter grayscale brightness-50 opacity-50 hover:grayscale-0 hover:brightness-100 hover:opacity-100">
                @endforeach
            </div>
        </div>
    </div>
</section>