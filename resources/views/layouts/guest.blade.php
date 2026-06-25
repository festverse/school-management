<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Lumina University') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=merriweather:400,700,900|inter:400,500,600,700,800&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                darkMode: 'class',
                theme: {
                    extend: {
                        fontFamily: {
                            sans: ['Inter', 'sans-serif'],
                            serif: ['Merriweather', 'serif'],
                        },
                        colors: {
                            bison: {
                                blue: '#002855',
                                red: '#E51937',
                            }
                        }
                    }
                }
            }
        </script>
    </head>
    <body class="font-sans text-slate-900 antialiased bg-[#002855] min-h-screen flex flex-col justify-center items-center p-6 relative overflow-x-hidden overflow-y-auto">
        <!-- Background Overlay / Shield Accent -->
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-tr from-[#001a38] via-[#002855] to-[#003a7a] opacity-90 pointer-events-none"></div>
        
        <div class="w-full max-w-md z-10 flex flex-col items-center mb-8 text-center">
            <a href="{{ url('/') }}" class="flex flex-col items-center gap-4 group mb-2">
                <div class="text-6xl group-hover:scale-110 transition-transform duration-300">
                    🎓
                </div>
                <span class="font-serif font-bold text-4xl tracking-tight text-white">Lumina University</span>
            </a>
            <p class="text-slate-300 text-sm tracking-wide font-medium">Excellence in Truth and Service</p>
        </div>

        <div class="w-full max-w-md z-10 p-8 bg-white border border-slate-100 rounded-2xl shadow-2xl shadow-black/40">
            {{ $slot }}
        </div>
    </body>
</html>
