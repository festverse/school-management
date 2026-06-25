<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Academics - Lumina University</title>
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
                    <a href="{{ route('academics') }}" class="text-sm font-semibold text-primary-400 hover:text-primary-300 transition-colors">Academics</a>
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
                World-Class <span class="text-gradient">Academic Faculties</span>
            </h1>
            <p class="max-w-2xl text-lg text-gray-400 mx-auto font-light">
                Explore our rigorously designed academic departments and specialized course programs engineered to drive world-changing research and professional mastery.
            </p>
        </div>
    </div>

    <!-- Departments & Courses Catalog -->
    <div class="py-24 bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="space-y-16">
                @forelse ($departments as $department)
                    <div class="bg-gray-800/40 backdrop-blur-sm border border-gray-700/60 rounded-3xl p-8 lg:p-12 hover:border-gray-600/80 transition-all duration-300 shadow-xl shadow-black/20">
                        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between pb-8 border-b border-gray-700/50 gap-6">
                            <div>
                                <span class="text-xs font-bold uppercase tracking-widest text-primary-400 px-3 py-1 bg-primary-500/10 border border-primary-500/20 rounded-full mb-3 inline-block">Faculty Department</span>
                                <h2 class="text-3xl font-display font-bold text-white">{{ $department->name }}</h2>
                            </div>
                            <a href="{{ url('/#student-directory?search=' . urlencode($department->name)) }}" class="inline-flex items-center gap-2 text-sm font-semibold text-gray-300 hover:text-white bg-gray-700/50 px-6 py-3 rounded-full border border-gray-600/50 hover:bg-gray-700 transition-all w-fit">
                                View Department Scholars
                                <svg class="w-4 h-4 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </a>
                        </div>

                        <div class="mt-8">
                            <h3 class="text-sm font-semibold uppercase tracking-wider text-gray-400 mb-6">Available Degree Programs & Courses</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                @forelse ($department->courses as $course)
                                    <div class="bg-gray-900/60 border border-gray-700/50 rounded-2xl p-6 hover:bg-gray-800/80 hover:border-primary-500/40 transition-all duration-300 group flex flex-col justify-between">
                                        <div>
                                            <div class="flex items-center justify-between gap-4 mb-3">
                                                <span class="text-xs font-mono font-bold text-primary-400 bg-primary-500/10 px-2.5 py-1 rounded border border-primary-500/20">{{ $course->code ?? 'COURSE' }}</span>
                                                <span class="text-xs text-gray-500 font-medium">{{ $course->credits ?? 3 }} Credits</span>
                                            </div>
                                            <h4 class="text-xl font-bold text-white group-hover:text-primary-300 transition-colors mb-2">{{ $course->name }}</h4>
                                            <p class="text-sm text-gray-400 line-clamp-2">{{ $course->description ?? 'An advanced study program focusing on specialized theoretical and practical applications.' }}</p>
                                        </div>
                                        <div class="mt-6 pt-4 border-t border-gray-800 flex items-center justify-between">
                                            <span class="text-xs text-gray-500">Fall / Spring Semesters</span>
                                            <a href="{{ route('register') }}" class="text-xs font-bold text-primary-400 hover:text-primary-300 inline-flex items-center gap-1">
                                                Enroll Now →
                                            </a>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-span-full py-8 text-center text-gray-500 bg-gray-900/30 rounded-xl border border-gray-800 border-dashed">
                                        Course catalog is currently being updated for the upcoming academic semester.
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="py-20 text-center text-gray-500 bg-gray-800/20 rounded-3xl border border-gray-700 border-dashed">
                        No academic departments available at the moment.
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    <!-- Master Footer -->
    <x-footer />
</body>
</html>
