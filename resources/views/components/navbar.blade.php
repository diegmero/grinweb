@php
  $items = [
    ['label' => 'Productos', 'href' => '#productos'],
    ['label' => 'Servicios', 'href' => '#servicios'],
    ['label' => 'Blog', 'href' => '#blog'],
  ];

  $clientes = [
    ['label' => 'Login', 'desc' => 'Portal de acceso', 'href' => route('filament.admin.auth.login'), 'badge' => 'bg-blue-50 text-blue-600', 'icon' => 'M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1'],
    ['label' => 'Hosting', 'desc' => 'Gestión de servicios', 'href' => '#hosting', 'badge' => 'bg-purple-50 text-purple-600', 'icon' => 'M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01'],
    ['label' => 'Registrarse', 'desc' => 'Nueva cuenta', 'href' => '#registrarse', 'badge' => 'bg-brand-50 text-brand-600', 'icon' => 'M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 818 0zM3 20a6 6 0 0112 0v1H3v-1'],
  ];
@endphp

<nav class="fixed inset-x-0 top-0 z-50 bg-cream-100/90 backdrop-blur-xl shadow-lg border-b border-white/20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="h-20 flex items-center gap-6">

      <!-- Logo (izquierda) -->
      <a href="/" class="flex items-center gap-3 group shrink-0">
        <div class="relative w-10 h-10 flex items-center justify-center bg-gradient-to-br from-brand-600 to-brand-800 rounded-xl text-white shadow-lg shadow-brand-500/20 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
          <span class="font-heading font-bold text-xl">G</span>
          <div class="absolute inset-0 bg-white/20 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
        </div>
        <span class="font-heading font-extrabold text-2xl tracking-tight text-gray-900">
          Grintic<span class="text-brand-600">.</span>
        </span>
      </a>

      <!-- Spacer -->
      <div class="flex-1"></div>

      <!-- Desktop nav (derecha, sin fondo) -->
      <div class="hidden md:flex items-center justify-end gap-1">
        @foreach($items as $item)
          <a href="{{ $item['href'] }}"
             class="relative px-4 py-2 text-sm font-bold text-gray-700 hover:text-brand-700 transition-colors group rounded-full focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-brand-500/60">
            {{ $item['label'] }}
            <span class="absolute bottom-1 left-1/2 w-0 h-0.5 bg-brand-500 group-hover:w-4 transition-all duration-300 -translate-x-1/2 rounded-full"></span>
          </a>
        @endforeach

        <!-- Clientes (details dropdown, sin JS) -->
        <details class="relative">
          <summary class="list-none cursor-pointer select-none px-4 py-2 text-sm font-bold text-gray-700 hover:text-brand-700 transition-colors flex items-center gap-1 rounded-full focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-brand-500/60">
            Clientes
            <svg class="w-3.5 h-3.5 transition-transform duration-300 details-open:rotate-180"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
            </svg>
          </summary>

          <div class="absolute top-full right-0 mt-3 w-64 z-50">
            <div class="bg-white/95 backdrop-blur-xl rounded-2xl shadow-xl shadow-brand-900/5 border border-white/50 overflow-hidden ring-1 ring-black/5 p-1">
              <div class="space-y-0.5">
                @foreach($clientes as $c)
                  <a href="{{ $c['href'] }}"
                     class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-cream-50 transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-brand-500/60">
                    <span class="w-8 h-8 rounded-lg {{ $c['badge'] }} flex items-center justify-center">
                      <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $c['icon'] }}"/>
                      </svg>
                    </span>
                    <span>
                      <span class="block font-bold text-xs text-gray-900">{{ $c['label'] }}</span>
                      <span class="block text-[10px] text-gray-500 font-medium">{{ $c['desc'] }}</span>
                    </span>
                  </a>
                @endforeach
              </div>
            </div>
          </div>
        </details>
      </div>

      <!-- CTA (derecha, desktop) -->
      @if (Route::has('login'))
        <div class="hidden md:flex items-center">
          @auth
            <a href="{{ url('/admin') }}"
               class="text-sm font-bold text-gray-900 hover:text-brand-600 px-4 py-2 rounded-full focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-brand-500/60">
              Dashboard
            </a>
          @else
            <a href="{{ route('filament.admin.auth.login') }}"
               class="group relative inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-gray-900 text-white text-sm font-bold shadow-lg shadow-gray-900/20 hover:shadow-gray-900/40 hover:-translate-y-0.5 transition-all duration-300 overflow-hidden focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-brand-500/60">
              <span class="relative z-10">Consola</span>
              <svg class="w-4 h-4 relative z-10 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
              </svg>
              <span class="absolute inset-0 bg-brand-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
            </a>
          @endauth
        </div>
      @endif

      <!-- Mobile menu button (derecha) -->
      <details class="md:hidden relative">
        <summary class="list-none cursor-pointer relative p-2.5 rounded-xl text-gray-800 hover:bg-white/50 transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-brand-500/60">
          <span class="sr-only">Abrir menú</span>
          <div class="w-6 h-5 relative flex flex-col justify-between overflow-hidden">
            <span class="w-full h-0.5 bg-current transition-all duration-300"></span>
            <span class="w-full h-0.5 bg-current transition-all duration-300"></span>
            <span class="w-full h-0.5 bg-current transition-all duration-300"></span>
          </div>
        </summary>

        <!-- Mobile panel (sin overlay JS) -->
        <div class="absolute top-full right-0 mt-3 w-[min(92vw,28rem)] z-50">
          <div class="bg-cream-100/95 backdrop-blur-2xl shadow-2xl border border-white/30 rounded-3xl p-5">
            <div class="space-y-2">
              @foreach($items as $item)
                <a href="{{ $item['href'] }}"
                   class="block text-xl font-extrabold text-gray-900 hover:text-brand-600 transition-colors rounded-2xl px-3 py-3 hover:bg-white/40 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-brand-500/60">
                  {{ $item['label'] }}
                </a>
              @endforeach
            </div>

            <div class="mt-4 pt-4 border-t border-gray-200/60">
              <p class="text-xs font-bold text-gray-400 uppercase tracking-wider px-1">Clientes</p>
              <div class="mt-2 space-y-1">
                @foreach($clientes as $c)
                  <a href="{{ $c['href'] }}"
                     class="flex items-center justify-between gap-3 rounded-2xl px-3 py-3 hover:bg-white/40 transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-brand-500/60">
                    <span class="font-bold text-gray-900">{{ $c['label'] }}</span>
                    <span class="text-xs text-gray-500">{{ $c['desc'] }}</span>
                  </a>
                @endforeach
              </div>

              <div class="mt-4">
                <a href="{{ route('filament.admin.auth.login') }}"
                   class="block w-full py-4 bg-gray-900 text-white font-bold text-center rounded-2xl shadow-xl focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-brand-500/60">
                  Acceso Consola
                </a>
              </div>
            </div>
          </div>
        </div>
      </details>

    </div>
  </div>
</nav>

<style>
  /* remove marker: estándar + Safari */
  summary { list-style: none; } /* marker styling base [web:44] */
  summary::-webkit-details-marker { display: none; } /* Safari fix [web:44] */
</style>