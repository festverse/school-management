<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Academics | Lumina University</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=merriweather:400,700,900|inter:400,500,600,700,800&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['Merriweather', 'serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="antialiased bg-slate-50 text-slate-900 font-sans selection:bg-[#E51937] selection:text-white">
    <!-- Auxiliary Top Bar -->
    <div class="bg-[#E51937] text-white text-xs font-bold uppercase tracking-widest py-2 px-4 sm:px-8 lg:px-12 flex justify-between items-center z-50 relative shadow-inner">
        <div class="hidden md:flex items-center space-x-6">
            <span>The Mecca of Excellence</span>
            <span>•</span>
            <span>Est. 1867</span>
            <span>•</span>
            <span>Academic Distinction</span>
        </div>
        <div class="flex items-center space-x-6 w-full md:w-auto justify-end">
            <a href="{{ route('admissions') }}" class="hover:underline transition-all">Apply</a>
            <a href="{{ route('virtual-tour') }}" class="hover:underline transition-all">Visit</a>
            <a href="{{ route('contact') }}" class="hover:underline transition-all">Give</a>
            <a href="{{ url('/#student-directory') }}" class="hover:underline transition-all">Directory</a>
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="bg-[#002855] text-white px-3 py-1 rounded hover:bg-[#003366] transition-all shadow">Enter Portal</a>
                @else
                    <a href="{{ route('login') }}" class="bg-[#002855] text-white px-3 py-1 rounded hover:bg-[#003366] transition-all shadow">Log in</a>
                @endauth
            @endif
        </div>
    </div>

    <!-- Main Mega-Navbar -->
    <nav x-data="{ open: false }" class="bg-[#002855] border-b border-[#001a38] sticky top-0 z-40 shadow-lg transition-all duration-300">
        <div class="w-full px-4 sm:px-8 lg:px-12">
            <div class="flex justify-between h-24 items-center">
                <a href="{{ url('/') }}" class="flex-shrink-0 flex items-center gap-4 group">
                    <div class="text-4xl group-hover:scale-110 transition-transform duration-300">
                        🎓
                    </div>
                    <div class="flex flex-col">
                        <span class="font-serif font-bold text-3xl tracking-tight text-white group-hover:text-[#FFB81C] transition-colors">Lumina University</span>
                        <span class="text-[10px] uppercase font-sans font-bold tracking-widest text-slate-300">Excellence in Truth and Service</span>
                    </div>
                </a>

                <!-- Desktop Navigation Links -->
                <div class="hidden lg:flex items-center space-x-8 text-sm font-semibold uppercase tracking-wider text-white">
                    <a href="{{ route('admissions') }}" class="hover:text-[#FFB81C] transition-colors">Admission</a>
                    <a href="{{ route('academics') }}" class="text-[#FFB81C] transition-colors font-bold">Academics</a>
                    <a href="{{ route('irbs') }}" class="hover:text-[#FFB81C] transition-colors">Research</a>
                    <a href="{{ route('gymkhana') }}" class="hover:text-[#FFB81C] transition-colors">Athletics & Clubs</a>
                    <a href="{{ route('news-events') }}" class="hover:text-[#FFB81C] transition-colors">News</a>
                    <a href="{{ route('director-desk') }}" class="hover:text-[#FFB81C] transition-colors">About</a>
                </div>

                <!-- Call to action button -->
                <div class="hidden lg:flex items-center space-x-4">
                    <a href="{{ route('admissions') }}" class="inline-flex items-center justify-center px-7 py-3.5 font-sans font-bold text-sm text-white bg-[#E51937] hover:bg-[#B21B2A] rounded-lg transition-all shadow-lg uppercase tracking-wider">
                        Apply Now
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="lg:hidden flex items-center">
                    <button @click="open = !open" class="text-white p-2 focus:outline-none">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Dropdown -->
        <div x-show="open" x-transition class="lg:hidden bg-[#001a38] border-t border-slate-700 text-white px-6 py-4 space-y-4 font-semibold uppercase tracking-wider text-sm">
            <a href="{{ route('admissions') }}" class="block py-2 hover:text-[#FFB81C]">Admission</a>
            <a href="{{ route('academics') }}" class="block py-2 text-[#FFB81C]">Academics</a>
            <a href="{{ route('irbs') }}" class="block py-2 hover:text-[#FFB81C]">Research</a>
            <a href="{{ route('gymkhana') }}" class="block py-2 hover:text-[#FFB81C]">Athletics & Clubs</a>
            <a href="{{ route('news-events') }}" class="block py-2 hover:text-[#FFB81C]">News</a>
            <a href="{{ route('director-desk') }}" class="block py-2 hover:text-[#FFB81C]">About</a>
            <a href="{{ route('admissions') }}" class="block py-3 text-center bg-[#E51937] rounded-lg shadow font-bold text-white">Apply Now</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative pt-24 pb-28 bg-[#002855] text-white border-b border-[#001a38]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6">
            <span class="text-xs font-bold uppercase tracking-widest text-[#FFB81C] px-3 py-1 bg-[#001a38] rounded-full border border-slate-700 inline-block">Rigorous Pedagogical Heritage</span>
            <h1 class="text-5xl md:text-6xl font-serif font-black tracking-tight">
                World-Class <span class="text-[#FFB81C]">Academic Faculties</span>
            </h1>
            <p class="max-w-3xl text-lg text-slate-200 mx-auto font-normal leading-relaxed">
                Explore our rigorously designed academic departments and specialized course programs engineered to drive world-changing research and professional mastery.
            </p>
        </div>
    </div>

    <!-- Departments & Courses Catalog -->
    <div class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="space-y-16">
                @forelse ($departments as $department)
                    <div class="bg-white border border-slate-200 rounded-2xl p-8 lg:p-12 shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between pb-8 border-b border-slate-200 gap-6">
                            <div>
                                <span class="text-xs font-bold uppercase tracking-widest text-[#E51937] px-3 py-1 bg-red-50 border border-red-200 rounded-full mb-3 inline-block">Faculty Department</span>
                                <h2 class="text-3xl font-serif font-bold text-[#002855]">{{ $department->name }}</h2>
                            </div>
                            <a href="{{ url('/#student-directory?search=' . urlencode($department->name)) }}" class="inline-flex items-center gap-2 text-sm font-bold text-white bg-[#002855] px-6 py-3.5 rounded-lg shadow hover:bg-[#E51937] transition-all w-fit uppercase tracking-wider">
                                View Department Scholars
                                <svg class="w-4 h-4 text-[#FFB81C]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </a>
                        </div>

                        <div class="mt-12">
                            <h3 class="text-sm font-bold uppercase tracking-wider text-slate-500 mb-6">Available Degree Programs & Courses</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                                @forelse ($department->courses as $course)
                                    <div class="bg-slate-50 border border-slate-200 rounded-xl p-8 hover:border-[#002855] hover:shadow-xl transition-all duration-300 group flex flex-col justify-between">
                                        <div>
                                            <div class="flex items-center justify-between gap-4 mb-4">
                                                <span class="text-xs font-mono font-bold text-white bg-[#002855] px-3 py-1 rounded shadow">{{ $course->code ?? 'COURSE' }}</span>
                                                <span class="text-xs text-slate-600 font-bold">{{ $course->credits ?? 3 }} Credits</span>
                                            </div>
                                            <h4 class="text-xl font-serif font-bold text-[#002855] group-hover:text-[#E51937] transition-colors mb-3">{{ $course->name }}</h4>
                                            <p class="text-sm text-slate-600 leading-relaxed line-clamp-3">{{ $course->description ?? 'An advanced study program focusing on specialized theoretical and practical applications.' }}</p>
                                        </div>
                                        <div class="mt-8 pt-4 border-t border-slate-200 flex items-center justify-between">
                                            <span class="text-xs font-semibold text-slate-500">Fall / Spring Semesters</span>
                                            <a href="{{ route('register') }}" class="text-xs font-bold text-[#E51937] hover:text-[#B21B2A] inline-flex items-center gap-1 uppercase tracking-wider">
                                                Enroll Now →
                                            </a>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-span-full py-12 text-center text-slate-500 bg-white rounded-xl border border-slate-200 border-dashed shadow-sm">
                                        Course catalog is currently being updated for the upcoming academic semester.
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="py-20 text-center text-slate-500 bg-white rounded-2xl border border-slate-200 border-dashed shadow-md">
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
