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

        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body
    class="bg-cream-100 font-sans text-gray-900 antialiased selection:bg-brand-500 selection:text-white flex flex-col min-h-screen">

    <x-navbar />

    <main class="flex-grow">
        {{ $slot }}
    </main>

    <x-footer />

</body>

</html>