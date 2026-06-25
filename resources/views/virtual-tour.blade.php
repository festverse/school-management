<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Virtual Tour | Lumina University</title>
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
            <span>Breathtaking Architecture</span>
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
                    <a href="{{ route('academics') }}" class="hover:text-[#FFB81C] transition-colors">Academics</a>
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
            <a href="{{ route('academics') }}" class="block py-2 hover:text-[#FFB81C]">Academics</a>
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
            <span class="text-xs font-bold uppercase tracking-widest text-[#FFB81C] px-3 py-1 bg-[#001a38] rounded-full border border-slate-700 inline-block">Explore Our Legacy</span>
            <h1 class="text-5xl md:text-6xl font-serif font-black tracking-tight">
                Immersive <span class="text-[#FFB81C]">Campus Architecture</span>
            </h1>
            <p class="max-w-3xl text-lg text-slate-200 mx-auto font-normal leading-relaxed">
                Take a digital stroll through our cutting-edge academic facilities, advanced scientific research centers, and breathtaking student common rooms.
            </p>
        </div>
    </div>

    <!-- Gallery Grid -->
    <div class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Facility Card 1 -->
                <div class="group relative bg-white border border-slate-200 rounded-2xl overflow-hidden hover:shadow-2xl transition-all duration-500 shadow-md flex flex-col hover:-translate-y-1">
                    <div class="h-72 w-full overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&q=80&w=800" alt="Main Campus Quad" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#002855] via-transparent to-transparent opacity-80"></div>
                    </div>
                    <div class="p-8 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="text-xs font-bold uppercase tracking-widest text-[#E51937] mb-2 block">Central Facility</span>
                            <h3 class="text-2xl font-serif font-bold text-[#002855] mb-3">Main Campus Quadrangle</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">The vibrant heart of Lumina University, featuring open-air study pavilions, architectural fountains, and direct access to all major academic department halls.</p>
                        </div>
                    </div>
                </div>

                <!-- Facility Card 2 -->
                <div class="group relative bg-white border border-slate-200 rounded-2xl overflow-hidden hover:shadow-2xl transition-all duration-500 shadow-md flex flex-col hover:-translate-y-1">
                    <div class="h-72 w-full overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&q=80&w=800" alt="Central University Library" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#002855] via-transparent to-transparent opacity-80"></div>
                    </div>
                    <div class="p-8 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="text-xs font-bold uppercase tracking-widest text-[#E51937] mb-2 block">Research & Archives</span>
                            <h3 class="text-2xl font-serif font-bold text-[#002855] mb-3">Advanced Informatics Library</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">Housing over 4 million physical and digital volumes, private collaborative media pods, and 24/7 dedicated high-speed computational research stations.</p>
                        </div>
                    </div>
                </div>

                <!-- Facility Card 3 -->
                <div class="group relative bg-white border border-slate-200 rounded-2xl overflow-hidden hover:shadow-2xl transition-all duration-500 shadow-md flex flex-col hover:-translate-y-1">
                    <div class="h-72 w-full overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=800" alt="Student Commons" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#002855] via-transparent to-transparent opacity-80"></div>
                    </div>
                    <div class="p-8 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="text-xs font-bold uppercase tracking-widest text-[#E51937] mb-2 block">Student Life</span>
                            <h3 class="text-2xl font-serif font-bold text-[#002855] mb-3">Lumina Student Commons</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">A premium, modern relaxation ecosystem featuring global dining halls, esports gaming arenas, entrepreneurial incubator labs, and fitness complexes.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Banner -->
            <div class="bg-[#002855] border border-[#001a38] rounded-3xl p-12 text-center max-w-4xl mx-auto space-y-6 shadow-2xl text-white">
                <h3 class="text-4xl font-serif font-bold">Want to experience Lumina in person?</h3>
                <p class="text-slate-200 max-w-xl mx-auto font-normal text-base">We offer guided on-campus architecture tours and sit-down sessions with academic department heads every weekday.</p>
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-4 text-sm font-bold uppercase tracking-wider text-white bg-[#E51937] rounded-lg hover:bg-[#B21B2A] transition-all shadow-lg hover:-translate-y-1">
                    Schedule an On-Campus Tour
                </a>
            </div>
        </div>
    </div>

    <!-- Master Footer -->
    <x-footer />
</body>
</html>
