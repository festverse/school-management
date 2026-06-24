<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>University Management System</title>
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
                <div class="flex-shrink-0 flex items-center gap-3">
                    <div class="w-10 h-10 bg-primary-600 rounded-lg flex items-center justify-center text-white font-display font-bold text-xl shadow-lg shadow-primary-500/30">
                        U
                    </div>
                    <span class="font-display font-bold text-2xl tracking-tight text-white">Lumina University</span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('academics') }}" class="text-sm font-medium text-gray-300 hover:text-white transition-colors">Academics</a>
                    <a href="{{ route('admissions') }}" class="text-sm font-medium text-gray-300 hover:text-white transition-colors">Admissions</a>
                    <a href="#student-directory" class="text-sm font-medium text-gray-300 hover:text-white transition-colors">Student Directory</a>
                    
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
    <div class="relative pt-32 pb-20 sm:pt-40 sm:pb-24 hero-gradient min-h-screen flex items-center overflow-hidden">
        <!-- Abstract Shapes -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-primary-600/20 rounded-full blur-3xl opacity-50 mix-blend-screen pointer-events-none"></div>
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-purple-600/20 rounded-full blur-3xl opacity-30 mix-blend-screen pointer-events-none"></div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-5xl md:text-7xl font-display font-extrabold tracking-tight text-white mb-6 leading-tight">
                Empowering the <br/>
                <span class="text-gradient">Next Generation</span> of Leaders
            </h1>
            <p class="mt-4 max-w-2xl text-xl text-gray-400 mx-auto mb-10 font-light">
                A modern, comprehensive academic ecosystem designed to foster innovation, connectivity, and excellence among students and faculty.
            </p>
            <div class="flex justify-center gap-4">
                <a href="{{ route('academics') }}" class="px-8 py-4 text-base font-semibold text-white bg-primary-600 rounded-full hover:bg-primary-500 transition-all shadow-lg shadow-primary-500/25 hover:shadow-primary-500/40 hover:-translate-y-1">
                    Explore Programs
                </a>
                <a href="{{ route('virtual-tour') }}" class="px-8 py-4 text-base font-semibold text-white bg-white/5 border border-white/10 rounded-full hover:bg-white/10 transition-all backdrop-blur-md hover:-translate-y-1 hover:shadow-lg hover:shadow-white/10">
                    Virtual Tour
                </a>
            </div>
        </div>
    </div>

    <!-- Student Directory Preview -->
    <div id="student-directory" class="py-24 bg-gray-900 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl font-display font-bold text-white mb-4">Student Directory</h2>
                    <p class="text-gray-400 max-w-2xl">Browse our diverse community of scholars, researchers, and innovators. Connect with peers across different departments and disciplines.</p>
                </div>
                <form action="{{ route('search-welcome') }}" method="GET" class="w-full md:w-auto mt-6 md:mt-0">
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 group-focus-within:text-primary-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </div>
                        <input type="text" name="search" class="block w-full md:w-80 p-3 pl-11 text-sm text-white bg-gray-800 border border-gray-700 rounded-full focus:ring-2 focus:ring-primary-500 focus:border-primary-500 placeholder-gray-500 transition-all" placeholder="Search by name, course, or ID...">
                    </div>
                </form>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @forelse (((request()->routeIs('search-welcome') || request()->has('search')) ? $students : $students->take(8)) as $student)
                    <div class="group relative bg-gray-800/50 backdrop-blur-sm border border-gray-700/50 rounded-2xl p-6 hover:bg-gray-800 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-primary-500/10">
                        <div class="flex items-start gap-4">
                            <img src="https://randomuser.me/api/portraits/{{ (strtolower($student->gender) === 'female') ? 'women' : 'men' }}/{{ $student->id % 90 }}.jpg" alt="{{ $student->fName }}" class="w-16 h-16 rounded-full object-cover border-2 border-gray-700 group-hover:border-primary-500 transition-colors">
                            <div>
                                <h3 class="text-lg font-bold text-white group-hover:text-primary-400 transition-colors">{{ $student->fName }} {{ $student->lName }}</h3>
                                <p class="text-sm text-primary-400 mb-2 font-medium">{{ $student->course }}</p>
                                
                                @if ($student->enrolled === 'Enrolled')
                                    <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-green-500/10 text-green-400 border border-green-500/20">Active</span>
                                @else
                                    <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-500/10 text-gray-400 border border-gray-500/20">{{ $student->enrolled }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mt-4 pt-4 border-t border-gray-700/50 grid grid-cols-2 gap-y-2 gap-x-4 text-sm">
                            <div>
                                <span class="text-gray-500 text-xs block uppercase tracking-wider mb-0.5">Student ID</span>
                                <span class="text-gray-300">{{ $student->studentId }}</span>
                            </div>
                            <div>
                                <span class="text-gray-500 text-xs block uppercase tracking-wider mb-0.5">Year</span>
                                <span class="text-gray-300">{{ $student->age }}</span>
                            </div>
                            <div class="col-span-2">
                                <span class="text-gray-500 text-xs block uppercase tracking-wider mb-0.5">Location</span>
                                <span class="text-gray-300">{{ $student->city }}, {{ $student->province }}</span>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full py-12 text-center text-gray-500 bg-gray-800/30 rounded-2xl border border-gray-700 border-dashed">
                        No students found in the directory.
                    </div>
                @endforelse
            </div>
            
            @if(request()->routeIs('search-welcome') || request()->has('search'))
                <div class="mt-12 pt-6 border-t border-gray-800 flex justify-center">
                    {{ $students->links() }}
                </div>
            @elseif($students->count() > 8)
            <div class="mt-12 text-center">
                <a href="{{ route('search-welcome') }}" class="inline-flex items-center gap-2 text-primary-400 hover:text-primary-300 font-medium transition-colors">
                    View Full Directory 
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
            @endif
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
