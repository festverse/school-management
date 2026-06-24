<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Virtual Tour - Lumina University</title>
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
    <style>
        .glass-nav {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        .hero-gradient {
            background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 100%);
        }
        .text-gradient {
            background: linear-gradient(to right, #60a5fa, #a78bfa);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="antialiased bg-gray-900 text-gray-100 font-sans selection:bg-primary-500 selection:text-white">
    <!-- Navbar -->
    <nav class="fixed w-full z-50 glass-nav transition-all duration-300">
        <div class="w-full px-4 sm:px-8 lg:px-12">
            <div class="flex justify-between h-20 items-center">
                <a href="{{ url('/') }}" class="flex-shrink-0 flex items-center gap-3 group">
                    <div class="w-10 h-10 bg-primary-600 rounded-lg flex items-center justify-center text-white font-display font-bold text-xl shadow-lg shadow-primary-500/30 group-hover:scale-105 transition-transform">
                        U
                    </div>
                    <span class="font-display font-bold text-2xl tracking-tight text-white">Lumina University</span>
                </a>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('academics') }}" class="text-sm font-medium text-gray-300 hover:text-white transition-colors">Academics</a>
                    <a href="{{ route('admissions') }}" class="text-sm font-medium text-gray-300 hover:text-white transition-colors">Admissions</a>
                    <a href="{{ url('/#student-directory') }}" class="text-sm font-medium text-gray-300 hover:text-white transition-colors">Student Directory</a>
                    
                    <div class="h-6 w-px bg-gray-700"></div>

                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="inline-flex items-center justify-center px-6 py-2.5 text-sm font-medium text-white bg-primary-600 rounded-full hover:bg-primary-500 transition-all shadow-lg shadow-primary-500/25 hover:shadow-primary-500/40 hover:-translate-y-0.5">
                                Enter Portal
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm font-medium text-gray-300 hover:text-white transition-colors">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-6 py-2.5 text-sm font-medium text-white bg-white/10 border border-white/20 rounded-full hover:bg-white/20 transition-all backdrop-blur-sm">
                                    Apply Now
                                </a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative pt-32 pb-20 hero-gradient flex items-center overflow-hidden border-b border-gray-800">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-primary-600/10 rounded-full blur-3xl opacity-40 pointer-events-none"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-display font-extrabold tracking-tight text-white mb-6">
                Immersive <span class="text-gradient">Campus Architecture</span>
            </h1>
            <p class="max-w-2xl text-lg text-gray-400 mx-auto font-light">
                Take a digital stroll through our cutting-edge academic facilities, advanced scientific research centers, and breathtaking student common rooms.
            </p>
        </div>
    </div>

    <!-- Gallery Grid -->
    <div class="py-24 bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Facility Card 1 -->
                <div class="group relative bg-gray-800/40 border border-gray-700/50 rounded-3xl overflow-hidden hover:border-primary-500/50 transition-all duration-500 shadow-2xl flex flex-col">
                    <div class="h-64 w-full overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&q=80&w=800" alt="Main Campus Quad" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent"></div>
                    </div>
                    <div class="p-8 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="text-xs font-bold uppercase tracking-widest text-primary-400 mb-2 block">Central Facility</span>
                            <h3 class="text-2xl font-bold text-white mb-3">Main Campus Quadrangle</h3>
                            <p class="text-gray-400 text-sm leading-relaxed">The vibrant heart of Lumina University, featuring open-air study pavilions, architectural fountains, and direct access to all major academic department halls.</p>
                        </div>
                    </div>
                </div>

                <!-- Facility Card 2 -->
                <div class="group relative bg-gray-800/40 border border-gray-700/50 rounded-3xl overflow-hidden hover:border-primary-500/50 transition-all duration-500 shadow-2xl flex flex-col">
                    <div class="h-64 w-full overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&q=80&w=800" alt="Central University Library" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent"></div>
                    </div>
                    <div class="p-8 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="text-xs font-bold uppercase tracking-widest text-purple-400 mb-2 block">Research & Archives</span>
                            <h3 class="text-2xl font-bold text-white mb-3">Advanced Informatics Library</h3>
                            <p class="text-gray-400 text-sm leading-relaxed">Housing over 4 million physical and digital volumes, private collaborative media pods, and 24/7 dedicated high-speed computational research stations.</p>
                        </div>
                    </div>
                </div>

                <!-- Facility Card 3 -->
                <div class="group relative bg-gray-800/40 border border-gray-700/50 rounded-3xl overflow-hidden hover:border-primary-500/50 transition-all duration-500 shadow-2xl flex flex-col">
                    <div class="h-64 w-full overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=800" alt="Student Commons" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent"></div>
                    </div>
                    <div class="p-8 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="text-xs font-bold uppercase tracking-widest text-emerald-400 mb-2 block">Student Life</span>
                            <h3 class="text-2xl font-bold text-white mb-3">Lumina Student Commons</h3>
                            <p class="text-gray-400 text-sm leading-relaxed">A premium, modern relaxation ecosystem featuring global dining halls, esports gaming arenas, entrepreneurial incubator labs, and fitness complexes.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Banner -->
            <div class="bg-gradient-to-r from-primary-900/50 via-purple-900/40 to-gray-800/40 border border-gray-700/60 rounded-3xl p-12 text-center max-w-4xl mx-auto space-y-6 shadow-2xl">
                <h3 class="text-3xl font-display font-bold text-white">Want to experience Lumina in person?</h3>
                <p class="text-gray-300 max-w-xl mx-auto font-light">We offer guided on-campus architecture tours and sit-down sessions with academic department heads every weekday.</p>
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-4 text-base font-semibold text-white bg-primary-600 rounded-full hover:bg-primary-500 transition-all shadow-lg shadow-primary-500/25 hover:shadow-primary-500/40 hover:-translate-y-1">
                    Schedule an On-Campus Tour
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-950 py-6 border-t border-gray-800">
        <div class="w-full px-4 sm:px-8 lg:px-12 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 bg-gray-800 rounded flex items-center justify-center text-white font-display font-bold text-sm">
                    U
                </div>
                <span class="text-gray-400 font-medium">© 2026 Lumina University. All rights reserved.</span>
            </div>
            <div class="flex gap-6">
                <a href="{{ route('privacy') }}" class="text-gray-500 hover:text-white transition-colors">Privacy Policy</a>
                <a href="{{ route('terms') }}" class="text-gray-500 hover:text-white transition-colors">Terms of Service</a>
                <a href="{{ route('contact') }}" class="text-gray-500 hover:text-white transition-colors">Contact Support</a>
            </div>
        </div>
    </footer>
</body>
</html>
