<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Terms of Service - Lumina University</title>
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
                    <div class="text-3xl group-hover:scale-110 transition-transform duration-300">
                        🎓
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

    <!-- Content Section -->
    <div class="pt-32 pb-24 bg-gray-900 min-h-screen">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            <div class="border-b border-gray-800 pb-8">
                <h1 class="text-4xl font-display font-bold text-white mb-4">Terms of Service</h1>
                <p class="text-gray-400">Effective Date: June 24, 2026</p>
            </div>
            
            <div class="space-y-8 text-gray-300 leading-relaxed font-light">
                <section class="space-y-4">
                    <h2 class="text-2xl font-bold text-white">1. Agreement to Terms</h2>
                    <p>By accessing the Lumina University online portal and student dashboard ecosystem, you agree to be bound by these institutional terms of service and our established student code of conduct.</p>
                </section>
                
                <section class="space-y-4">
                    <h2 class="text-2xl font-bold text-white">2. User Accounts & Responsibilities</h2>
                    <p>You are strictly responsible for maintaining the confidentiality of your credentials (`admin@demo.com`, `teacher1@demo.com`, `student@demo.com`). Any activity originating from your active session is legally attributed to your account.</p>
                </section>

                <section class="space-y-4">
                    <h2 class="text-2xl font-bold text-white">3. Academic Integrity & System Modification</h2>
                    <p>Attempting to circumvent Role-Based Access Control (RBAC) parameters, inject malicious SQL/PostgreSQL scripts, or alter confirmed academic grading tables without authorization will result in immediate termination of portal privileges and administrative disciplinary proceedings.</p>
                </section>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-950 py-6 border-t border-gray-800">
        <div class="w-full px-4 sm:px-8 lg:px-12 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="flex items-center gap-3">
                <div class="text-2xl">
                    🎓
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
