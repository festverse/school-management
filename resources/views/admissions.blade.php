<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admissions - Lumina University</title>
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
                        🎓
                    </div>
                    <span class="font-display font-bold text-2xl tracking-tight text-white">Lumina University</span>
                </a>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('academics') }}" class="text-sm font-medium text-gray-300 hover:text-white transition-colors">Academics</a>
                    <a href="{{ route('admissions') }}" class="text-sm font-semibold text-primary-400 hover:text-primary-300 transition-colors">Admissions</a>
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
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-purple-600/10 rounded-full blur-3xl opacity-40 pointer-events-none"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-display font-extrabold tracking-tight text-white mb-6">
                Your Journey <span class="text-gradient">Begins Here</span>
            </h1>
            <p class="max-w-2xl text-lg text-gray-400 mx-auto font-light">
                Discover our streamlined application process, generous financial aid packages, and the comprehensive support systems waiting for you at Lumina University.
            </p>
        </div>
    </div>

    <!-- Admissions Content -->
    <div class="py-24 bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-20">
            <!-- Timeline Section -->
            <div class="bg-gray-800/40 backdrop-blur-sm border border-gray-700/60 rounded-3xl p-8 lg:p-12 shadow-xl shadow-black/20">
                <h2 class="text-3xl font-display font-bold text-white mb-10">4 Steps to Excellence</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="space-y-4 border-t-2 border-primary-500 pt-4">
                        <span class="text-3xl font-display font-extrabold text-primary-500">01</span>
                        <h3 class="text-xl font-bold text-white">Choose Your Program</h3>
                        <p class="text-sm text-gray-400">Review our Academic catalog and select the department and specific major that aligns with your future aspirations.</p>
                    </div>
                    <div class="space-y-4 border-t-2 border-purple-500 pt-4">
                        <span class="text-3xl font-display font-extrabold text-purple-500">02</span>
                        <h3 class="text-xl font-bold text-white">Prepare Documentation</h3>
                        <p class="text-sm text-gray-400">Gather your official academic transcripts, letters of recommendation, and personal statement of purpose.</p>
                    </div>
                    <div class="space-y-4 border-t-2 border-primary-400 pt-4">
                        <span class="text-3xl font-display font-extrabold text-primary-400">03</span>
                        <h3 class="text-xl font-bold text-white">Submit Application</h3>
                        <p class="text-sm text-gray-400">Create your student portal account and submit your fully completed application via our secure admissions engine.</p>
                    </div>
                    <div class="space-y-4 border-t-2 border-emerald-500 pt-4">
                        <span class="text-3xl font-display font-extrabold text-emerald-500">04</span>
                        <h3 class="text-xl font-bold text-white">Enrollment & Onboarding</h3>
                        <p class="text-sm text-gray-400">Upon formal acceptance, complete your class enrollment registration and join our exclusive campus orientation.</p>
                    </div>
                </div>
            </div>

            <!-- Financial Aid Section -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center bg-gray-800/20 border border-gray-800 rounded-3xl p-8 lg:p-12">
                <div>
                    <span class="text-xs font-bold uppercase tracking-widest text-emerald-400 px-3 py-1 bg-emerald-500/10 border border-emerald-500/20 rounded-full mb-3 inline-block">Scholarships & Grants</span>
                    <h2 class="text-3xl sm:text-4xl font-display font-bold text-white mb-6">Accessible World-Class Education</h2>
                    <p class="text-gray-400 mb-6 font-light leading-relaxed">
                        We believe that financial barriers should never prevent exceptional talent from achieving greatness. Lumina University offers extensive merit-based scholarships, need-based grants, and graduate research assistantships.
                    </p>
                    <ul class="space-y-4 text-sm text-gray-300 mb-8">
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-emerald-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span>Up to 100% Tuition Coverage for Academic Excellence</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-emerald-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span>Dedicated On-Campus Employment Opportunities</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-emerald-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span>Zero Application Fee for First-Generation Students</span>
                        </li>
                    </ul>
                    <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-8 py-4 text-base font-semibold text-white bg-primary-600 rounded-full hover:bg-primary-500 transition-all shadow-lg shadow-primary-500/25 hover:shadow-primary-500/40 hover:-translate-y-1">
                        Begin Application Now
                    </a>
                </div>
                <div class="bg-gray-900 border border-gray-700/50 rounded-2xl p-8 shadow-2xl space-y-6">
                    <h3 class="text-xl font-bold text-white mb-4">Estimated Investment Summary</h3>
                    <div class="flex justify-between items-center pb-4 border-b border-gray-800">
                        <span class="text-gray-400">Full-Time Undergraduate Tuition</span>
                        <span class="text-white font-semibold">$14,500 / Semester</span>
                    </div>
                    <div class="flex justify-between items-center pb-4 border-b border-gray-800">
                        <span class="text-gray-400">Graduate Research Tuition</span>
                        <span class="text-white font-semibold">$18,200 / Semester</span>
                    </div>
                    <div class="flex justify-between items-center pb-4 border-b border-gray-800">
                        <span class="text-gray-400">Average Awarded Financial Aid</span>
                        <span class="text-emerald-400 font-semibold">-$9,800 / Semester</span>
                    </div>
                    <div class="flex justify-between items-center pt-2 text-lg font-bold">
                        <span class="text-white">Estimated Net Out-of-Pocket</span>
                        <span class="text-primary-400">$4,700 / Semester</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-950 py-6 border-t border-gray-800">
        <div class="w-full px-4 sm:px-8 lg:px-12 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 bg-gray-800 rounded flex items-center justify-center text-white font-display font-bold text-sm">
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
