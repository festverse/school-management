<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Latest News & Upcoming Events | Lumina University</title>
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
            <span>Office of University Communications</span>
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
                    <a href="{{ route('news-events') }}" class="text-[#FFB81C] transition-colors font-bold">News</a>
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
            <a href="{{ route('news-events') }}" class="block py-2 text-[#FFB81C]">News</a>
            <a href="{{ route('director-desk') }}" class="block py-2 hover:text-[#FFB81C]">About</a>
            <a href="{{ route('admissions') }}" class="block py-3 text-center bg-[#E51937] rounded-lg shadow font-bold text-white">Apply Now</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative pt-24 pb-28 bg-[#002855] text-white border-b border-[#001a38]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6">
            <span class="text-xs font-bold uppercase tracking-widest text-[#FFB81C] px-3 py-1 bg-[#001a38] rounded-full border border-slate-700 inline-block">The Lumina Dispatch</span>
            <h1 class="text-5xl md:text-6xl font-serif font-black tracking-tight">
                Institutional News <span class="text-[#FFB81C]">& Upcoming Events</span>
            </h1>
            <p class="max-w-3xl text-lg text-slate-200 mx-auto font-normal leading-relaxed">
                Stay updated with groundbreaking research discoveries, international academic conferences, and vibrant student campus celebrations.
            </p>
        </div>
    </div>

    <!-- Content Section -->
    <div class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-20">
            <!-- News & Research Grid -->
            <div class="space-y-12">
                <h2 class="text-3xl font-serif font-bold text-[#002855] border-b border-slate-200 pb-4">Latest Research Highlights</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                    <div class="bg-white border border-slate-200 rounded-3xl overflow-hidden shadow-lg flex flex-col group hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                        <img src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?auto=format&fit=crop&q=80&w=800" alt="Laboratory Research" class="w-full h-60 object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="p-8 flex-1 flex flex-col justify-between space-y-6">
                            <div>
                                <span class="text-xs font-bold text-[#E51937] uppercase tracking-wider mb-2 block">Breakthrough • June 2026</span>
                                <h3 class="text-xl font-serif font-bold text-[#002855] mb-3">AI-Powered Mesoporous Carbon Nanomaterials</h3>
                                <p class="text-slate-600 text-sm leading-relaxed">Lumina researchers successfully synthesize next-generation carbon nanostructures capable of high-precision oncological drug delivery.</p>
                            </div>
                            <button onclick="alert('Full research paper available via the IRBS Digital Archive.')" class="w-full py-4 bg-[#002855] hover:bg-[#E51937] text-white font-bold text-xs uppercase tracking-wider rounded-lg transition-all shadow-lg">Read Journal Article</button>
                        </div>
                    </div>

                    <div class="bg-white border border-slate-200 rounded-3xl overflow-hidden shadow-lg flex flex-col group hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&q=80&w=800" alt="Informatics Laboratory" class="w-full h-60 object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="p-8 flex-1 flex flex-col justify-between space-y-6">
                            <div>
                                <span class="text-xs font-bold text-[#E51937] uppercase tracking-wider mb-2 block">Computing • May 2026</span>
                                <h3 class="text-xl font-serif font-bold text-[#002855] mb-3">$12M Grant Awarded for Quantum Fencing</h3>
                                <p class="text-slate-600 text-sm leading-relaxed">The Department of Computer Science secures a multi-year national defense grant to establish lattice-based quantum cryptography protocols.</p>
                            </div>
                            <button onclick="alert('Grant details and PhD research fellowship openings are listed in the Academics catalog.')" class="w-full py-4 bg-[#002855] hover:bg-[#E51937] text-white font-bold text-xs uppercase tracking-wider rounded-lg transition-all shadow-lg">View Fellowship Openings</button>
                        </div>
                    </div>

                    <div class="bg-white border border-slate-200 rounded-3xl overflow-hidden shadow-lg flex flex-col group hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=800" alt="Students Collaboration" class="w-full h-60 object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="p-8 flex-1 flex flex-col justify-between space-y-6">
                            <div>
                                <span class="text-xs font-bold text-[#E51937] uppercase tracking-wider mb-2 block">Accreditation • April 2026</span>
                                <h3 class="text-xl font-serif font-bold text-[#002855] mb-3">Lumina Achieves Perfect Global QS Tier-1 Rank</h3>
                                <p class="text-slate-600 text-sm leading-relaxed">International academic evaluation councils rank Lumina University in the top 1% globally for faculty research citations and graduate employability.</p>
                            </div>
                            <button onclick="alert('View the complete official institutional audit report in the ASC portal.')" class="w-full py-4 bg-[#002855] hover:bg-[#E51937] text-white font-bold text-xs uppercase tracking-wider rounded-lg transition-all shadow-lg">View Audit Report</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Upcoming Events Calendar -->
            <div class="space-y-12">
                <h2 class="text-3xl font-serif font-bold text-[#002855] border-b border-slate-200 pb-4">Upcoming Events & Symposiums</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                    <div class="bg-white border border-slate-200 rounded-3xl p-8 flex flex-col sm:flex-row items-center gap-8 shadow-lg hover:shadow-xl transition-all">
                        <div class="w-28 h-28 bg-[#002855] rounded-2xl flex flex-col items-center justify-center text-white flex-shrink-0 shadow-md">
                            <span class="text-xs font-bold uppercase tracking-widest text-[#FFB81C]">Oct</span>
                            <span class="text-4xl font-serif font-black">14</span>
                        </div>
                        <div class="space-y-4">
                            <h3 class="text-2xl font-serif font-bold text-[#002855]">Annual Interdisciplinary Research Symposium 2026</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">Join 500+ global keynote speakers, post-doctoral scholars, and corporate tech leadership at the Nandan Nilekani Main Auditorium.</p>
                            <button onclick="alert('Symposium registration pass successfully reserved and linked to your profile ID.')" class="px-7 py-3 bg-[#E51937] hover:bg-[#B21B2A] text-white font-bold uppercase tracking-wider text-xs rounded-lg transition-all shadow-lg">Reserve Pass</button>
                        </div>
                    </div>

                    <div class="bg-white border border-slate-200 rounded-3xl p-8 flex flex-col sm:flex-row items-center gap-8 shadow-lg hover:shadow-xl transition-all">
                        <div class="w-28 h-28 bg-[#002855] rounded-2xl flex flex-col items-center justify-center text-white flex-shrink-0 shadow-md">
                            <span class="text-xs font-bold uppercase tracking-widest text-[#FFB81C]">Nov</span>
                            <span class="text-4xl font-serif font-black">05</span>
                        </div>
                        <div class="space-y-4">
                            <h3 class="text-2xl font-serif font-bold text-[#002855]">Global Alumni Convergence & Tech Incubator Pitch</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">Lumina alumni venture capitalists return to campus to evaluate and fund disruptive student startup ideas at the Student Commons.</p>
                            <button onclick="alert('Pitch deck submission portal initialized on Moodle.')" class="px-7 py-3 bg-[#E51937] hover:bg-[#B21B2A] text-white font-bold uppercase tracking-wider text-xs rounded-lg transition-all shadow-lg">Submit Pitch Deck</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Master Footer -->
    <x-footer />
</body>
</html>
