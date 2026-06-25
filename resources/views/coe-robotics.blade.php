<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CoE in Advanced Manufacturing & Robotics | Lumina University</title>
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
            <span>Heavy Engineering Research</span>
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
                    <a href="{{ route('irbs') }}" class="text-[#FFB81C] transition-colors font-bold">Research</a>
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
            <a href="{{ route('irbs') }}" class="block py-2 text-[#FFB81C]">Research</a>
            <a href="{{ route('gymkhana') }}" class="block py-2 hover:text-[#FFB81C]">Athletics & Clubs</a>
            <a href="{{ route('news-events') }}" class="block py-2 hover:text-[#FFB81C]">News</a>
            <a href="{{ route('director-desk') }}" class="block py-2 hover:text-[#FFB81C]">About</a>
            <a href="{{ route('admissions') }}" class="block py-3 text-center bg-[#E51937] rounded-lg shadow font-bold text-white">Apply Now</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative pt-24 pb-28 bg-[#002855] text-white border-b border-[#001a38]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6">
            <span class="text-xs font-bold uppercase tracking-widest text-[#FFB81C] px-3 py-1 bg-[#001a38] rounded-full border border-slate-700 inline-block">Center of Excellence</span>
            <h1 class="text-5xl md:text-6xl font-serif font-black tracking-tight">
                Advanced Manufacturing <span class="text-[#FFB81C]">& Robotics</span>
            </h1>
            <p class="max-w-3xl text-lg text-slate-200 mx-auto font-normal leading-relaxed">
                Established in collaboration with global industrial conglomerates to pioneer multi-axis CNC machining, additive 3D metal printing, and autonomous robotics.
            </p>
        </div>
    </div>

    <!-- Facilities Grid -->
    <div class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="bg-white border border-slate-200 rounded-2xl overflow-hidden shadow-lg flex flex-col group hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                    <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=800" alt="Robotics Assembly" class="w-full h-60 object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="p-8 flex-1 flex flex-col justify-between space-y-6">
                        <div>
                            <h3 class="text-2xl font-serif font-bold text-[#002855] mb-3">6-Axis Industrial Robotic Arms</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">Equipped with state-of-the-art force torque sensors and machine vision capabilities for precision assembly, welding, and automated packing research.</p>
                        </div>
                        <button onclick="alert('Industrial equipment booking is available for researchers via the IRBS portal.')" class="w-full py-3 bg-[#002855] hover:bg-[#E51937] text-white font-bold uppercase tracking-wider rounded-lg transition-all text-xs shadow">Check Equipment Availability</button>
                    </div>
                </div>

                <div class="bg-white border border-slate-200 rounded-2xl overflow-hidden shadow-lg flex flex-col group hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                    <img src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&q=80&w=800" alt="3D Metal Printing" class="w-full h-60 object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="p-8 flex-1 flex flex-col justify-between space-y-6">
                        <div>
                            <h3 class="text-2xl font-serif font-bold text-[#002855] mb-3">Direct Metal Laser Sintering (DMLS)</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">Industrial-grade additive manufacturing machines capable of fabricating complex high-strength aerospace components using titanium and inconel superalloys.</p>
                        </div>
                        <button onclick="alert('Industrial equipment booking is available for researchers via the IRBS portal.')" class="w-full py-3 bg-[#002855] hover:bg-[#E51937] text-white font-bold uppercase tracking-wider rounded-lg transition-all text-xs shadow">Check Equipment Availability</button>
                    </div>
                </div>

                <div class="bg-white border border-slate-200 rounded-2xl overflow-hidden shadow-lg flex flex-col group hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                    <img src="https://images.unsplash.com/photo-1581092335397-9583fe92d232?auto=format&fit=crop&q=80&w=800" alt="CNC Machining" class="w-full h-60 object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="p-8 flex-1 flex flex-col justify-between space-y-6">
                        <div>
                            <h3 class="text-2xl font-serif font-bold text-[#002855] mb-3">5-Axis Ultra-Precision CNC Machining</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">Equipped with real-time tool wear monitoring AI sensors, used extensively for defense component prototyping and industrial consultancy.</p>
                        </div>
                        <button onclick="alert('Industrial equipment booking is available for researchers via the IRBS portal.')" class="w-full py-3 bg-[#002855] hover:bg-[#E51937] text-white font-bold uppercase tracking-wider rounded-lg transition-all text-xs shadow">Check Equipment Availability</button>
                    </div>
                </div>
            </div>

            <!-- Industrial Collaborations -->
            <div class="bg-white border border-slate-200 rounded-2xl p-10 max-w-4xl mx-auto text-center space-y-6 shadow-md">
                <h3 class="text-3xl font-serif font-bold text-[#002855]">Looking for Industrial Consultancy?</h3>
                <p class="text-slate-600 text-base leading-relaxed">The CoE actively engages with automotive, defense, and heavy engineering sectors to solve complex manufacturing bottlenecks. Our expert professors and high-tech laboratories are available for corporate consultancy contracts.</p>
                <div class="pt-2">
                    <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-4 bg-[#E51937] hover:bg-[#B21B2A] text-white rounded-lg font-bold text-sm uppercase tracking-wider transition-all shadow-lg hover:-translate-y-0.5">Initiate Corporate Partnership</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Master Footer -->
    <x-footer />
</body>
</html>
