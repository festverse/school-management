<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lumina University | Excellence in Truth and Service</title>
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
                    },
                    colors: {
                        bison: {
                            blue: '#002855',
                            red: '#E51937',
                            darkblue: '#001a38',
                            gold: '#FFB81C',
                        }
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
            <span>Washington, D.C. Style Heritage</span>
        </div>
        <div class="flex items-center space-x-6 w-full md:w-auto justify-end">
            <a href="{{ route('admissions') }}" class="hover:underline transition-all">Apply</a>
            <a href="{{ route('virtual-tour') }}" class="hover:underline transition-all">Visit</a>
            <a href="{{ route('contact') }}" class="hover:underline transition-all">Give</a>
            <a href="#student-directory" class="hover:underline transition-all">Directory</a>
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
    <nav x-data="{ open: false, activeMenu: null }" class="bg-[#002855] border-b border-[#001a38] sticky top-0 z-40 shadow-lg transition-all duration-300">
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
                    <div class="relative group py-2">
                        <a href="{{ route('admissions') }}" class="hover:text-[#FFB81C] transition-colors inline-flex items-center gap-1">
                            Admission
                        </a>
                    </div>
                    <div class="relative group py-2">
                        <a href="{{ route('academics') }}" class="hover:text-[#FFB81C] transition-colors inline-flex items-center gap-1">
                            Academics
                        </a>
                    </div>
                    <div class="relative group py-2">
                        <a href="{{ route('irbs') }}" class="hover:text-[#FFB81C] transition-colors inline-flex items-center gap-1">
                            Research
                        </a>
                    </div>
                    <div class="relative group py-2">
                        <a href="{{ route('gymkhana') }}" class="hover:text-[#FFB81C] transition-colors inline-flex items-center gap-1">
                            Athletics & Clubs
                        </a>
                    </div>
                    <div class="relative group py-2">
                        <a href="{{ route('news-events') }}" class="hover:text-[#FFB81C] transition-colors inline-flex items-center gap-1">
                            News
                        </a>
                    </div>
                    <div class="relative group py-2">
                        <a href="{{ route('director-desk') }}" class="hover:text-[#FFB81C] transition-colors inline-flex items-center gap-1">
                            About
                        </a>
                    </div>
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

    <!-- Immersive Cinematic Hero Section -->
    <div class="relative pt-32 pb-36 lg:pt-48 lg:pb-56 bg-[#002855] overflow-hidden flex items-center">
        <!-- Hero Background Media (High-end fallback and gradient overlay) -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1541336032412-2048a678540d?auto=format&fit=crop&q=80&w=2000" alt="University Campus" class="w-full h-full object-cover opacity-30 object-center filter contrast-125">
            <div class="absolute inset-0 bg-gradient-to-r from-[#002855] via-[#002855]/90 to-transparent"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-[#002855] via-transparent to-transparent"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10 w-full">
            <div class="max-w-3xl space-y-8">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-[#E51937] text-white rounded-full text-xs font-bold uppercase tracking-widest shadow-lg">
                    <span>Truth & Service</span>
                </div>
                <h1 class="text-5xl md:text-7xl font-serif font-black tracking-tight text-white leading-[1.1]">
                    Excellence in <br/>
                    <span class="text-[#FFB81C]">Truth and Service</span>
                </h1>
                <p class="text-lg md:text-xl text-slate-200 font-normal leading-relaxed max-w-2xl">
                    Welcome to Lumina University. Founded on the legendary pillars of academic distinction, our private research institution prepares diverse, ambitious students to learn, lead, and embody global excellence.
                </p>
                <div class="flex flex-wrap gap-4 pt-4">
                    <a href="{{ route('academics') }}" class="px-8 py-4 text-sm font-bold uppercase tracking-wider text-white bg-[#E51937] hover:bg-[#B21B2A] rounded-lg transition-all shadow-xl hover:-translate-y-1">
                        Explore Our Programs
                    </a>
                    <a href="{{ route('virtual-tour') }}" class="px-8 py-4 text-sm font-bold uppercase tracking-wider text-white bg-white/10 hover:bg-white/20 border border-white/30 rounded-lg transition-all backdrop-blur-md hover:-translate-y-1">
                        Take Virtual Tour
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Editorial Newsroom (Inspired by The Dig & HU2U) -->
    <div class="py-24 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            <div class="flex flex-col md:flex-row justify-between items-end border-b-2 border-[#002855] pb-6">
                <div>
                    <span class="text-xs font-bold text-[#E51937] uppercase tracking-widest mb-2 block">The Dig Newsroom</span>
                    <h2 class="text-4xl font-serif font-bold text-[#002855]">Latest News & Digital Publications</h2>
                </div>
                <a href="{{ route('news-events') }}" class="mt-6 md:mt-0 inline-flex items-center gap-2 text-[#002855] hover:text-[#E51937] font-bold text-sm uppercase tracking-wider transition-colors">
                    Explore The Dig Newsroom
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>

            <!-- Editorial News Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="bg-slate-50 border border-slate-200 rounded-xl overflow-hidden shadow-md flex flex-col group hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                    <div class="relative overflow-hidden h-56">
                        <img src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?auto=format&fit=crop&q=80&w=800" alt="Laboratory Research" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute top-4 left-4 bg-[#002855] text-white text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded shadow">Research</div>
                    </div>
                    <div class="p-8 flex-1 flex flex-col justify-between space-y-6">
                        <div>
                            <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2 block">June 24, 2026 • 5 Min Read</span>
                            <h3 class="text-xl font-serif font-bold text-[#002855] group-hover:text-[#E51937] transition-colors mb-3">AI-Powered Mesoporous Carbon Nanomaterials</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">Lumina researchers successfully synthesize next-generation carbon nanostructures capable of high-precision oncological drug delivery.</p>
                        </div>
                        <a href="{{ route('news-events') }}" class="inline-flex items-center gap-2 text-[#002855] font-bold text-sm hover:text-[#E51937] transition-colors">Read Full Article →</a>
                    </div>
                </div>

                <div class="bg-slate-50 border border-slate-200 rounded-xl overflow-hidden shadow-md flex flex-col group hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                    <div class="relative overflow-hidden h-56">
                        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&q=80&w=800" alt="Informatics Laboratory" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute top-4 left-4 bg-[#002855] text-white text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded shadow">HU2U Podcast</div>
                    </div>
                    <div class="p-8 flex-1 flex flex-col justify-between space-y-6">
                        <div>
                            <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2 block">May 18, 2026 • Episode 42</span>
                            <h3 class="text-xl font-serif font-bold text-[#002855] group-hover:text-[#E51937] transition-colors mb-3">$12M Grant Awarded for Quantum Fencing</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">The Department of Computer Science secures a multi-year national defense grant to establish lattice-based quantum cryptography protocols.</p>
                        </div>
                        <a href="{{ route('news-events') }}" class="inline-flex items-center gap-2 text-[#002855] font-bold text-sm hover:text-[#E51937] transition-colors">Listen to Podcast →</a>
                    </div>
                </div>

                <div class="bg-slate-50 border border-slate-200 rounded-xl overflow-hidden shadow-md flex flex-col group hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                    <div class="relative overflow-hidden h-56">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=800" alt="Students Collaboration" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute top-4 left-4 bg-[#002855] text-white text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded shadow">Global Impact</div>
                    </div>
                    <div class="p-8 flex-1 flex flex-col justify-between space-y-6">
                        <div>
                            <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2 block">April 30, 2026 • Press Release</span>
                            <h3 class="text-xl font-serif font-bold text-[#002855] group-hover:text-[#E51937] transition-colors mb-3">Lumina Achieves Perfect Global QS Tier-1 Rank</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">International academic evaluation councils rank Lumina University in the top 1% globally for faculty research citations and graduate employability.</p>
                        </div>
                        <a href="{{ route('news-events') }}" class="inline-flex items-center gap-2 text-[#002855] font-bold text-sm hover:text-[#E51937] transition-colors">View Institutional Audit →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Official Bulletin & Tenders -->
    <div class="py-24 bg-slate-100 border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            <div class="text-center max-w-3xl mx-auto">
                <span class="px-4 py-1.5 bg-[#002855] text-white rounded-full text-xs font-bold uppercase tracking-widest mb-4 inline-block">Institutional Bulletin</span>
                <h2 class="text-4xl font-serif font-bold text-[#002855] mb-4">Official Notices, Tenders & Careers</h2>
                <p class="text-slate-600 text-base leading-relaxed">Live announcements regarding faculty recruitment, public procurement tenders, student circulars, and ongoing national research projects.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Tenders & Procurement -->
                <div class="bg-white border border-slate-200 rounded-xl p-8 shadow-md flex flex-col justify-between group hover:shadow-xl transition-all duration-300">
                    <div>
                        <div class="flex items-center gap-3 mb-6 pb-4 border-b border-slate-100">
                            <div class="text-2xl">📜</div>
                            <h3 class="text-xl font-serif font-bold text-[#002855]">Active Tenders & RFPs</h3>
                        </div>
                        <ul class="space-y-4 text-sm text-slate-700 mb-8 divide-y divide-slate-100">
                            <li class="pt-4 first:pt-0"><a href="{{ route('tenders') }}" class="hover:text-[#E51937] transition-colors block font-medium">LU/TEN/2026/089: 500-Node High Performance GPU Supercomputing Cluster</a></li>
                            <li class="pt-4"><a href="{{ route('tenders') }}" class="hover:text-[#E51937] transition-colors block font-medium">LU/TEN/2026/074: Construction of Advanced Mechatronics Lab Complex</a></li>
                            <li class="pt-4"><a href="{{ route('tenders') }}" class="hover:text-[#E51937] transition-colors block font-medium">LU/TEN/2026/062: AMC for Campus Optical Fiber Backbone Network</a></li>
                        </ul>
                    </div>
                    <a href="{{ route('tenders') }}" class="w-full py-3 bg-[#E51937] hover:bg-[#B21B2A] text-white font-bold text-sm uppercase tracking-wider rounded-lg shadow text-center block transition-all">View All Tenders</a>
                </div>

                <!-- Careers & Recruitment -->
                <div class="bg-white border border-slate-200 rounded-xl p-8 shadow-md flex flex-col justify-between group hover:shadow-xl transition-all duration-300">
                    <div>
                        <div class="flex items-center gap-3 mb-6 pb-4 border-b border-slate-100">
                            <div class="text-2xl">👥</div>
                            <h3 class="text-xl font-serif font-bold text-[#002855]">Faculty & Staff Careers</h3>
                        </div>
                        <ul class="space-y-4 text-sm text-slate-700 mb-8 divide-y divide-slate-100">
                            <li class="pt-4 first:pt-0"><a href="{{ route('careers') }}" class="hover:text-[#E51937] transition-colors block font-medium">Assistant / Associate Professor in AI & Computer Vision (Tenure-Track)</a></li>
                            <li class="pt-4"><a href="{{ route('careers') }}" class="hover:text-[#E51937] transition-colors block font-medium">Principal Research Scientist - Mechatronics & Industrial IoT</a></li>
                            <li class="pt-4"><a href="{{ route('careers') }}" class="hover:text-[#E51937] transition-colors block font-medium">Chief Information Security Officer (CISO) - Campus Network Administration</a></li>
                        </ul>
                    </div>
                    <a href="{{ route('careers') }}" class="w-full py-3 bg-[#E51937] hover:bg-[#B21B2A] text-white font-bold text-sm uppercase tracking-wider rounded-lg shadow text-center block transition-all">Explore Open Positions</a>
                </div>

                <!-- General Circulars -->
                <div class="bg-white border border-slate-200 rounded-xl p-8 shadow-md flex flex-col justify-between group hover:shadow-xl transition-all duration-300">
                    <div>
                        <div class="flex items-center gap-3 mb-6 pb-4 border-b border-slate-100">
                            <div class="text-2xl">📌</div>
                            <h3 class="text-xl font-serif font-bold text-[#002855]">Student Circulars</h3>
                        </div>
                        <ul class="space-y-4 text-sm text-slate-700 mb-8 divide-y divide-slate-100">
                            <li class="pt-4 first:pt-0"><a href="{{ route('academics') }}" class="hover:text-[#E51937] transition-colors block font-medium">Important Notification: Autumn Semester 2026 Course Registration Schedule</a></li>
                            <li class="pt-4"><a href="{{ route('admissions') }}" class="hover:text-[#E51937] transition-colors block font-medium">Admissions 2026: Third Merit List & Fee Payment Deadlines</a></li>
                            <li class="pt-4"><a href="{{ route('asc') }}" class="hover:text-[#E51937] transition-colors block font-medium">ASC Guidelines for Issuance of Cryptographically Signed Transcripts</a></li>
                        </ul>
                    </div>
                    <a href="{{ route('academics') }}" class="w-full py-3 bg-[#E51937] hover:bg-[#B21B2A] text-white font-bold text-sm uppercase tracking-wider rounded-lg shadow text-center block transition-all">View Academic Circulars</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Centers of Excellence (CoE) -->
    <div class="py-24 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            <div class="text-center max-w-3xl mx-auto">
                <span class="px-4 py-1.5 bg-[#E51937] text-white rounded-full text-xs font-bold uppercase tracking-widest mb-4 inline-block">State-of-the-Art Research</span>
                <h2 class="text-4xl font-serif font-bold text-[#002855] mb-4">Centers of Excellence & Laboratories</h2>
                <p class="text-slate-600 text-base leading-relaxed">Established in partnership with global industrial conglomerates to foster multi-disciplinary research in heavy engineering, artificial intelligence, and urban development.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- CoE Robotics -->
                <div class="bg-slate-50 border border-slate-200 rounded-xl overflow-hidden shadow-md flex flex-col group hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                    <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=800" alt="Advanced Manufacturing" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="p-8 flex-1 flex flex-col justify-between space-y-6">
                        <div>
                            <h3 class="text-2xl font-serif font-bold text-[#002855] mb-3">CoE in Advanced Manufacturing & Robotics</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">Pioneering multi-axis CNC precision machining, direct metal laser sintering (DMLS) 3D printing, and 6-axis industrial robotic arms for automated assembly.</p>
                        </div>
                        <a href="{{ route('coe-robotics') }}" class="w-full py-3.5 bg-[#002855] hover:bg-[#E51937] text-white font-bold uppercase tracking-wider text-sm rounded-lg text-center block shadow transition-all">Explore CoE Robotics</a>
                    </div>
                </div>

                <!-- CoE AI -->
                <div class="bg-slate-50 border border-slate-200 rounded-xl overflow-hidden shadow-md flex flex-col group hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                    <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&q=80&w=800" alt="Artificial Intelligence" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="p-8 flex-1 flex flex-col justify-between space-y-6">
                        <div>
                            <h3 class="text-2xl font-serif font-bold text-[#002855] mb-3">CoE in Artificial Intelligence & Machine Learning</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">Housing the 500-GPU PARAM-Lumina supercomputing cluster. Driving breakthroughs in foundation LLM pretraining, autonomous driving vision, and quantum simulation.</p>
                        </div>
                        <a href="{{ route('coe-ai') }}" class="w-full py-3.5 bg-[#002855] hover:bg-[#E51937] text-white font-bold uppercase tracking-wider text-sm rounded-lg text-center block shadow transition-all">Explore CoE AI</a>
                    </div>
                </div>

                <!-- CoE Smart Cities -->
                <div class="bg-slate-50 border border-slate-200 rounded-xl overflow-hidden shadow-md flex flex-col group hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=800" alt="Smart Cities" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="p-8 flex-1 flex flex-col justify-between space-y-6">
                        <div>
                            <h3 class="text-2xl font-serif font-bold text-[#002855] mb-3">CoE in Urban Infrastructure & Smart Cities</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">Developing smart metropolitan ecosystems through 6-DoF seismic earthquake shake tables, microscopic IoT traffic grid simulation, and satellite GIS intelligence.</p>
                        </div>
                        <a href="{{ route('coe-smart-cities') }}" class="w-full py-3.5 bg-[#002855] hover:bg-[#E51937] text-white font-bold uppercase tracking-wider text-sm rounded-lg text-center block shadow transition-all">Explore CoE Smart Cities</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vibrant Milestones & Numbers That Speak -->
    <div class="py-24 bg-[#002855] border-y border-[#001a38] text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            <div class="text-center max-w-3xl mx-auto">
                <span class="px-4 py-1.5 bg-[#E51937] text-white rounded-full text-xs font-bold uppercase tracking-widest mb-4 inline-block">Milestones & Achievements</span>
                <h2 class="text-4xl font-serif font-bold mb-4">Numbers That Speak</h2>
                <p class="text-slate-300 text-base">Lumina University stands proudly as a benchmark of research funding, faculty excellence, and industrial synergy in higher education.</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="bg-[#003366] border border-[#004080] rounded-2xl p-8 text-center shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <h3 class="text-4xl md:text-6xl font-serif font-black text-white mb-3">₹45 Cr+</h3>
                    <p class="text-[#FFB81C] font-semibold text-sm uppercase tracking-wider">Active Research Funding</p>
                </div>
                <div class="bg-[#003366] border border-[#004080] rounded-2xl p-8 text-center shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <h3 class="text-4xl md:text-6xl font-serif font-black text-white mb-3">100%</h3>
                    <p class="text-[#FFB81C] font-semibold text-sm uppercase tracking-wider">Ph.D. Holding Faculty</p>
                </div>
                <div class="bg-[#003366] border border-[#004080] rounded-2xl p-8 text-center shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <h3 class="text-4xl md:text-6xl font-serif font-black text-white mb-3">50+</h3>
                    <p class="text-[#FFB81C] font-semibold text-sm uppercase tracking-wider">Global Industrial MoUs</p>
                </div>
                <div class="bg-[#003366] border border-[#004080] rounded-2xl p-8 text-center shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <h3 class="text-4xl md:text-6xl font-serif font-black text-white mb-3">25+</h3>
                    <p class="text-[#FFB81C] font-semibold text-sm uppercase tracking-wider">High-Tech Laboratories</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Innovation & Incubation (SSIP) and Placement Desk -->
    <div class="py-24 bg-slate-100 border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- SSIP Incubation Card -->
                <div class="bg-white border border-slate-200 rounded-2xl p-12 shadow-lg flex flex-col justify-between space-y-8 hover:shadow-2xl transition-all duration-300">
                    <div class="space-y-6">
                        <span class="px-4 py-1.5 bg-[#002855] text-white rounded-full text-xs font-bold uppercase tracking-widest inline-block">Student Startup & Innovation Policy (SSIP)</span>
                        <h3 class="text-3xl font-serif font-bold text-[#002855]">Lumina Innovation & Incubation Center</h3>
                        <p class="text-slate-600 text-base leading-relaxed">Empowering visionary student entrepreneurs with state-of-the-art makerspaces, elite venture capital mentorship, and non-dilutive seed grants up to ₹25 Lakhs. Over 40+ deep-tech startups successfully incubated.</p>
                    </div>
                    <a href="{{ route('incubation') }}" class="w-full py-4 bg-[#002855] hover:bg-[#E51937] text-white font-bold uppercase tracking-wider text-sm rounded-lg text-center block shadow transition-all hover:-translate-y-1">Enter Incubation Portal</a>
                </div>

                <!-- Placement Desk Card -->
                <div class="bg-white border border-slate-200 rounded-2xl p-12 shadow-lg flex flex-col justify-between space-y-8 hover:shadow-2xl transition-all duration-300">
                    <div class="space-y-6">
                        <span class="px-4 py-1.5 bg-[#E51937] text-white rounded-full text-xs font-bold uppercase tracking-widest inline-block">Global Career Launchpad</span>
                        <h3 class="text-3xl font-serif font-bold text-[#002855]">Placement & Training Cell</h3>
                        <p class="text-slate-600 text-base leading-relaxed">Maintaining strong talent supply agreements with world leaders. Offering exceptional summer internships and full-time career packages with a record highest CTC of ₹62.5 LPA across 350+ global hiring partners.</p>
                    </div>
                    <a href="{{ route('placement-cell') }}" class="w-full py-4 bg-[#E51937] hover:bg-[#B21B2A] text-white font-bold uppercase tracking-wider text-sm rounded-lg text-center block shadow transition-all hover:-translate-y-1">View Placement Records</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Director General's Vision Desk -->
    <div class="py-24 bg-white border-b border-slate-200">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-slate-50 border border-slate-200 rounded-3xl p-12 shadow-xl flex flex-col md:flex-row gap-12 items-center">
                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=800" alt="Director General" class="w-52 h-52 rounded-full object-cover border-4 border-[#002855] shadow-xl flex-shrink-0">
                <div class="space-y-6">
                    <div>
                        <span class="px-3 py-1 bg-[#E51937] text-white rounded-full text-xs font-bold uppercase tracking-widest mb-3 inline-block">Executive Desk</span>
                        <h3 class="text-3xl font-serif font-bold text-[#002855] mb-1">Prof. Dr. Alistair Vance</h3>
                        <p class="text-[#E51937] font-bold text-sm tracking-wide">Director General, Lumina University (Ph.D., Stanford University)</p>
                    </div>
                    <blockquote class="text-slate-700 text-base leading-relaxed italic border-l-4 border-[#002855] pl-6 font-serif">
                        "Welcome to Lumina University, an elite temple of advanced technological learning and multi-disciplinary research. Our foundational ethos mirrors premier institutions worldwide—to forge resilient, highly skilled innovators capable of solving humanity's most complex infrastructure, manufacturing, and computing challenges."
                    </blockquote>
                    <div class="pt-2">
                        <a href="{{ route('director-desk') }}" class="inline-flex items-center gap-2 text-[#002855] hover:text-[#E51937] font-bold text-sm uppercase tracking-wider transition-colors">Read Full Strategic Message →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Student Directory Preview -->
    <div id="student-directory" class="py-24 bg-slate-50 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end border-b-2 border-[#002855] pb-6 mb-12">
                <div>
                    <span class="text-xs font-bold text-[#E51937] uppercase tracking-widest mb-2 block">Our Dynamic Community</span>
                    <h2 class="text-4xl font-serif font-bold text-[#002855]">Student Directory</h2>
                    <p class="text-slate-600 max-w-2xl mt-2 text-sm">Browse our diverse community of scholars, researchers, and innovators. Connect with peers across different departments and disciplines.</p>
                </div>
                <form action="{{ route('search-welcome') }}" method="GET" class="w-full md:w-auto mt-6 md:mt-0">
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                            <svg class="w-5 h-5 text-slate-400 group-focus-within:text-[#002855] transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </div>
                        <input type="text" name="search" class="block w-full md:w-80 p-3.5 pl-11 text-sm text-slate-900 bg-white border border-slate-300 rounded-lg shadow-sm focus:ring-2 focus:ring-[#002855] focus:border-[#002855] placeholder-slate-400 transition-all" placeholder="Search by name, course, or ID...">
                    </div>
                </form>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @forelse (((request()->routeIs('search-welcome') || request()->has('search')) ? $students : $students->take(8)) as $student)
                    <div class="group relative bg-white border border-slate-200 rounded-xl p-6 hover:border-[#002855] transition-all duration-300 hover:-translate-y-1 shadow-sm hover:shadow-xl">
                        <div class="flex items-start gap-4">
                            <img src="https://randomuser.me/api/portraits/{{ (strtolower($student->gender) === 'female') ? 'women' : 'men' }}/{{ $student->id % 90 }}.jpg" alt="{{ $student->fName }}" class="w-16 h-16 rounded-full object-cover border-2 border-slate-200 group-hover:border-[#002855] transition-colors">
                            <div>
                                <h3 class="text-lg font-serif font-bold text-[#002855] group-hover:text-[#E51937] transition-colors">{{ $student->fName }} {{ $student->lName }}</h3>
                                <p class="text-xs font-bold text-slate-600 mb-2">{{ $student->course }}</p>
                                
                                @if ($student->enrolled === 'Enrolled')
                                    <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-bold bg-green-100 text-green-800 border border-green-200">Active</span>
                                @else
                                    <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-bold bg-slate-100 text-slate-700 border border-slate-200">{{ $student->enrolled }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mt-6 pt-4 border-t border-slate-100 grid grid-cols-2 gap-y-2 gap-x-4 text-sm">
                            <div>
                                <span class="text-slate-400 text-[10px] font-bold block uppercase tracking-wider mb-0.5">Student ID</span>
                                <span class="text-slate-700 font-semibold">{{ $student->studentId }}</span>
                            </div>
                            <div>
                                <span class="text-slate-400 text-[10px] font-bold block uppercase tracking-wider mb-0.5">Year</span>
                                <span class="text-slate-700 font-semibold">{{ $student->age }}</span>
                            </div>
                            <div class="col-span-2">
                                <span class="text-slate-400 text-[10px] font-bold block uppercase tracking-wider mb-0.5">Location</span>
                                <span class="text-slate-700 font-semibold">{{ $student->city }}, {{ $student->province }}</span>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full py-12 text-center text-slate-500 bg-white rounded-xl border border-slate-200 border-dashed shadow-sm">
                        No students found in the directory.
                    </div>
                @endforelse
            </div>
            
            @if(request()->routeIs('search-welcome') || request()->has('search'))
                <div class="mt-12 pt-6 border-t border-slate-200 flex justify-center">
                    {{ $students->links() }}
                </div>
            @elseif($students->count() > 8)
            <div class="mt-12 text-center">
                <a href="{{ route('search-welcome') }}" class="inline-flex items-center gap-2 text-white bg-[#002855] hover:bg-[#E51937] font-bold text-sm uppercase tracking-wider px-8 py-4 rounded-lg shadow-lg transition-all hover:-translate-y-1">
                    View Full Directory 
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
            @endif
        </div>
    </div>

    <!-- Master Footer -->
    <x-footer />
</body>
</html>
