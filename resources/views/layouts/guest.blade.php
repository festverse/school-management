<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Lumina University') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800|outfit:400,600,800&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                darkMode: 'class',
                theme: {
                    extend: {
                        fontFamily: {
                            sans: ['Inter', 'sans-serif'],
                            display: ['Outfit', 'sans-serif'],
                        },
                        colors: {
                            primary: {
                                50: '#eff6ff',
                                100: '#dbeafe',
                                500: '#3b82f6',
                                600: '#2563eb',
                                900: '#1e3a8a',
                            }
                        }
                    }
                }
            }
        </script>
    </head>
    <body class="font-sans text-gray-100 antialiased bg-gray-950 min-h-screen flex flex-col justify-center items-center p-6 relative overflow-x-hidden overflow-y-auto">
        <!-- Abstract Shapes -->
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-primary-600/10 rounded-full blur-3xl pointer-events-none"></div>
        
        <div class="w-full max-w-md z-10 flex flex-col items-center mb-8">
            <a href="{{ url('/') }}" class="flex items-center gap-3 group mb-4">
                <div class="w-12 h-12 bg-primary-600 rounded-xl flex items-center justify-center text-white font-display font-bold text-2xl shadow-lg shadow-primary-500/30 group-hover:scale-105 transition-transform">
                    U
                </div>
                <span class="font-display font-bold text-3xl tracking-tight text-white">Lumina University</span>
            </a>
            <p class="text-gray-400 text-sm">Secure Institutional Access Portal</p>
        </div>

        <div class="w-full max-w-md z-10 p-8 bg-gray-900/80 backdrop-blur-xl border border-gray-800 rounded-3xl shadow-2xl shadow-black/50">
            {{ $slot }}
        </div>
    </body>
</html>
