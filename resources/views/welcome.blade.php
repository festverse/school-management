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
                <a href="{{ url('/') }}" class="flex-shrink-0 flex items-center gap-3 group">
                    <div class="text-3xl group-hover:scale-110 transition-transform duration-300">
                        🎓
                    </div>
                    <span class="font-display font-bold text-2xl tracking-tight text-white group-hover:text-primary-400 transition-colors">Lumina University</span>
                </a>
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

    <!-- Institutional News & Events Section -->
    <div class="py-24 bg-gray-900 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl font-display font-bold text-white mb-4">Latest News & Announcements</h2>
                    <p class="text-gray-400 max-w-2xl">Stay connected with groundbreaking research discoveries, international academic symposiums, and vibrant student campus celebrations.</p>
                </div>
                <a href="{{ route('news-events') }}" class="mt-6 md:mt-0 inline-flex items-center gap-2 text-primary-400 hover:text-primary-300 font-medium transition-colors">
                    View All News & Events
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>

            <!-- News Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-800/40 border border-gray-700/50 rounded-3xl overflow-hidden shadow-xl flex flex-col group hover:border-primary-500/50 transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?auto=format&fit=crop&q=80&w=800" alt="Laboratory Research" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="p-8 flex-1 flex flex-col justify-between space-y-4">
                        <div>
                            <span class="text-xs font-bold text-primary-400 uppercase tracking-wider mb-2 block">Breakthrough | June 2026</span>
                            <h3 class="text-xl font-bold text-white mb-2">AI-Powered Mesoporous Carbon Nanomaterials</h3>
                            <p class="text-gray-400 text-sm leading-relaxed">Lumina researchers successfully synthesize next-generation carbon nanostructures capable of high-precision oncological drug delivery.</p>
                        </div>
                        <a href="{{ route('news-events') }}" class="inline-flex items-center gap-2 text-primary-400 hover:text-primary-300 font-medium text-sm transition-colors">Read Full Article →</a>
                    </div>
                </div>

                <div class="bg-gray-800/40 border border-gray-700/50 rounded-3xl overflow-hidden shadow-xl flex flex-col group hover:border-purple-500/50 transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&q=80&w=800" alt="Informatics Laboratory" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="p-8 flex-1 flex flex-col justify-between space-y-4">
                        <div>
                            <span class="text-xs font-bold text-purple-400 uppercase tracking-wider mb-2 block">Computing | May 2026</span>
                            <h3 class="text-xl font-bold text-white mb-2">$12M Grant Awarded for Quantum Fencing</h3>
                            <p class="text-gray-400 text-sm leading-relaxed">The Department of Computer Science secures a multi-year national defense grant to establish lattice-based quantum cryptography protocols.</p>
                        </div>
                        <a href="{{ route('news-events') }}" class="inline-flex items-center gap-2 text-purple-400 hover:text-purple-300 font-medium text-sm transition-colors">Explore Grant Details →</a>
                    </div>
                </div>

                <div class="bg-gray-800/40 border border-gray-700/50 rounded-3xl overflow-hidden shadow-xl flex flex-col group hover:border-emerald-500/50 transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=800" alt="Students Collaboration" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="p-8 flex-1 flex flex-col justify-between space-y-4">
                        <div>
                            <span class="text-xs font-bold text-emerald-400 uppercase tracking-wider mb-2 block">Accreditation | April 2026</span>
                            <h3 class="text-xl font-bold text-white mb-2">Lumina Achieves Perfect Global QS Tier-1 Rank</h3>
                            <p class="text-gray-400 text-sm leading-relaxed">International academic evaluation councils rank Lumina University in the top 1% globally for faculty research citations and graduate employability.</p>
                        </div>
                        <a href="{{ route('news-events') }}" class="inline-flex items-center gap-2 text-emerald-400 hover:text-emerald-300 font-medium text-sm transition-colors">View Institutional Audit →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- IITRAM-Inspired Live Notice Board & Tenders -->
    <div class="py-24 bg-gray-950 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            <div class="text-center max-w-3xl mx-auto">
                <span class="px-4 py-1.5 bg-primary-500/10 text-primary-400 border border-primary-500/20 rounded-full text-xs font-bold uppercase tracking-widest mb-4 inline-block">Institutional Bulletin</span>
                <h2 class="text-3xl font-display font-bold text-white mb-4">Official Notices, Tenders & Careers</h2>
                <p class="text-gray-400">Live announcements regarding faculty recruitment, public procurement tenders, student circulars, and ongoing national research projects.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Tenders & Procurement -->
                <div class="bg-gray-900/80 border border-gray-800 rounded-3xl p-8 shadow-xl flex flex-col justify-between group hover:border-primary-500/50 transition-all duration-300">
                    <div>
                        <div class="flex items-center gap-3 mb-6">
                            <div class="p-3 bg-primary-500/10 text-primary-400 rounded-2xl border border-primary-500/20">📜</div>
                            <h3 class="text-xl font-bold text-white">Active Tenders & RFPs</h3>
                        </div>
                        <ul class="space-y-4 text-sm text-gray-300 mb-8 divide-y divide-gray-800">
                            <li class="pt-4 first:pt-0"><a href="{{ route('tenders') }}" class="hover:text-primary-400 transition-colors block font-medium">LU/TEN/2026/089: 500-Node High Performance GPU Supercomputing Cluster</a></li>
                            <li class="pt-4"><a href="{{ route('tenders') }}" class="hover:text-primary-400 transition-colors block font-medium">LU/TEN/2026/074: Construction of Advanced Mechatronics Lab Complex</a></li>
                            <li class="pt-4"><a href="{{ route('tenders') }}" class="hover:text-primary-400 transition-colors block font-medium">LU/TEN/2026/062: AMC for Campus Optical Fiber Backbone Network</a></li>
                        </ul>
                    </div>
                    <a href="{{ route('tenders') }}" class="w-full py-3 bg-gray-800 hover:bg-gray-700 text-white font-semibold rounded-xl border border-gray-700 transition-all text-center block">View All Tenders</a>
                </div>

                <!-- Careers & Recruitment -->
                <div class="bg-gray-900/80 border border-gray-800 rounded-3xl p-8 shadow-xl flex flex-col justify-between group hover:border-purple-500/50 transition-all duration-300">
                    <div>
                        <div class="flex items-center gap-3 mb-6">
                            <div class="p-3 bg-purple-500/10 text-purple-400 rounded-2xl border border-purple-500/20">👥</div>
                            <h3 class="text-xl font-bold text-white">Faculty & Staff Careers</h3>
                        </div>
                        <ul class="space-y-4 text-sm text-gray-300 mb-8 divide-y divide-gray-800">
                            <li class="pt-4 first:pt-0"><a href="{{ route('careers') }}" class="hover:text-purple-400 transition-colors block font-medium">Assistant / Associate Professor in AI & Computer Vision (Tenure-Track)</a></li>
                            <li class="pt-4"><a href="{{ route('careers') }}" class="hover:text-purple-400 transition-colors block font-medium">Principal Research Scientist - Mechatronics & Industrial IoT</a></li>
                            <li class="pt-4"><a href="{{ route('careers') }}" class="hover:text-purple-400 transition-colors block font-medium">Chief Information Security Officer (CISO) - Campus Network Administration</a></li>
                        </ul>
                    </div>
                    <a href="{{ route('careers') }}" class="w-full py-3 bg-gray-800 hover:bg-gray-700 text-white font-semibold rounded-xl border border-gray-700 transition-all text-center block">Explore Open Positions</a>
                </div>

                <!-- General Circulars -->
                <div class="bg-gray-900/80 border border-gray-800 rounded-3xl p-8 shadow-xl flex flex-col justify-between group hover:border-emerald-500/50 transition-all duration-300">
                    <div>
                        <div class="flex items-center gap-3 mb-6">
                            <div class="p-3 bg-emerald-500/10 text-emerald-400 rounded-2xl border border-emerald-500/20">📌</div>
                            <h3 class="text-xl font-bold text-white">Student & Academic Circulars</h3>
                        </div>
                        <ul class="space-y-4 text-sm text-gray-300 mb-8 divide-y divide-gray-800">
                            <li class="pt-4 first:pt-0"><a href="{{ route('academics') }}" class="hover:text-emerald-400 transition-colors block font-medium">Important Notification: Autumn Semester 2026 Course Registration Schedule</a></li>
                            <li class="pt-4"><a href="{{ route('admissions') }}" class="hover:text-emerald-400 transition-colors block font-medium">Admissions 2026: Third Merit List & Fee Payment Deadlines</a></li>
                            <li class="pt-4"><a href="{{ route('asc') }}" class="hover:text-emerald-400 transition-colors block font-medium">ASC Guidelines for Issuance of Cryptographically Signed Transcripts</a></li>
                        </ul>
                    </div>
                    <a href="{{ route('academics') }}" class="w-full py-3 bg-gray-800 hover:bg-gray-700 text-white font-semibold rounded-xl border border-gray-700 transition-all text-center block">View Academic Circulars</a>
                </div>
            </div>
        </div>
    </div>

    <!-- IITRAM-Inspired Centers of Excellence (CoE) -->
    <div class="py-24 bg-gray-900 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            <div class="text-center max-w-3xl mx-auto">
                <span class="px-4 py-1.5 bg-blue-500/10 text-blue-400 border border-blue-500/20 rounded-full text-xs font-bold uppercase tracking-widest mb-4 inline-block">State-of-the-Art Research</span>
                <h2 class="text-3xl font-display font-bold text-white mb-4">Centers of Excellence & Laboratories</h2>
                <p class="text-gray-400">Established in partnership with global industrial conglomerates to foster multi-disciplinary research in heavy engineering, artificial intelligence, and urban development.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- CoE Robotics -->
                <div class="bg-gray-800/40 border border-gray-700/50 rounded-3xl overflow-hidden shadow-xl flex flex-col group hover:border-primary-500/50 transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=800" alt="Advanced Manufacturing" class="w-full h-52 object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="p-8 flex-1 flex flex-col justify-between space-y-6">
                        <div>
                            <h3 class="text-2xl font-bold text-white mb-3">CoE in Advanced Manufacturing & Robotics</h3>
                            <p class="text-gray-400 text-sm leading-relaxed">Pioneering multi-axis CNC precision machining, direct metal laser sintering (DMLS) 3D printing, and 6-axis industrial robotic arms for automated assembly.</p>
                        </div>
                        <a href="{{ route('coe-robotics') }}" class="w-full py-3 bg-primary-600 hover:bg-primary-500 text-white font-semibold rounded-xl text-center block shadow-lg shadow-primary-500/20 transition-all">Explore CoE Robotics</a>
                    </div>
                </div>

                <!-- CoE AI -->
                <div class="bg-gray-800/40 border border-gray-700/50 rounded-3xl overflow-hidden shadow-xl flex flex-col group hover:border-purple-500/50 transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&q=80&w=800" alt="Artificial Intelligence" class="w-full h-52 object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="p-8 flex-1 flex flex-col justify-between space-y-6">
                        <div>
                            <h3 class="text-2xl font-bold text-white mb-3">CoE in Artificial Intelligence & Machine Learning</h3>
                            <p class="text-gray-400 text-sm leading-relaxed">Housing the 500-GPU PARAM-Lumina supercomputing cluster. Driving breakthroughs in foundation LLM pretraining, autonomous driving vision, and quantum simulation.</p>
                        </div>
                        <a href="{{ route('coe-ai') }}" class="w-full py-3 bg-purple-600 hover:bg-purple-500 text-white font-semibold rounded-xl text-center block shadow-lg shadow-purple-500/20 transition-all">Explore CoE AI</a>
                    </div>
                </div>

                <!-- CoE Smart Cities -->
                <div class="bg-gray-800/40 border border-gray-700/50 rounded-3xl overflow-hidden shadow-xl flex flex-col group hover:border-emerald-500/50 transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=800" alt="Smart Cities" class="w-full h-52 object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="p-8 flex-1 flex flex-col justify-between space-y-6">
                        <div>
                            <h3 class="text-2xl font-bold text-white mb-3">CoE in Urban Infrastructure & Smart Cities</h3>
                            <p class="text-gray-400 text-sm leading-relaxed">Developing smart metropolitan ecosystems through 6-DoF seismic earthquake shake tables, microscopic IoT traffic grid simulation, and satellite GIS intelligence.</p>
                        </div>
                        <a href="{{ route('coe-smart-cities') }}" class="w-full py-3 bg-emerald-600 hover:bg-emerald-500 text-white font-semibold rounded-xl text-center block shadow-lg shadow-emerald-500/20 transition-all">Explore CoE Smart Cities</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vibrant Milestones & Numbers That Speak -->
    <div class="py-24 bg-gray-950 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            <div class="text-center max-w-3xl mx-auto">
                <span class="px-4 py-1.5 bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 rounded-full text-xs font-bold uppercase tracking-widest mb-4 inline-block">Milestones & Achievements</span>
                <h2 class="text-3xl font-display font-bold text-white mb-4">Numbers That Speak</h2>
                <p class="text-gray-400">Lumina University stands proudly as a benchmark of research funding, faculty excellence, and industrial synergy in higher education.</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="bg-gray-900/80 border border-gray-800 rounded-3xl p-8 text-center shadow-xl hover:border-primary-500/50 transition-all duration-300 hover:-translate-y-1">
                    <h3 class="text-4xl md:text-5xl font-display font-extrabold text-white mb-3">₹45 Cr+</h3>
                    <p class="text-primary-400 font-medium text-sm">Active Research & Sponsored Funding</p>
                </div>
                <div class="bg-gray-900/80 border border-gray-800 rounded-3xl p-8 text-center shadow-xl hover:border-purple-500/50 transition-all duration-300 hover:-translate-y-1">
                    <h3 class="text-4xl md:text-5xl font-display font-extrabold text-white mb-3">100%</h3>
                    <p class="text-purple-400 font-medium text-sm">Ph.D. Holding Elite Faculty Roster</p>
                </div>
                <div class="bg-gray-900/80 border border-gray-800 rounded-3xl p-8 text-center shadow-xl hover:border-emerald-500/50 transition-all duration-300 hover:-translate-y-1">
                    <h3 class="text-4xl md:text-5xl font-display font-extrabold text-white mb-3">50+</h3>
                    <p class="text-emerald-400 font-medium text-sm">MoUs with Global Industrial Giants</p>
                </div>
                <div class="bg-gray-900/80 border border-gray-800 rounded-3xl p-8 text-center shadow-xl hover:border-blue-500/50 transition-all duration-300 hover:-translate-y-1">
                    <h3 class="text-4xl md:text-5xl font-display font-extrabold text-white mb-3">25+</h3>
                    <p class="text-blue-400 font-medium text-sm">High-Tech Advanced Laboratories</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Innovation & Incubation (SSIP) and Placement Desk -->
    <div class="py-24 bg-gray-900 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- SSIP Incubation Card -->
                <div class="bg-gray-800/40 border border-gray-700/50 rounded-3xl p-10 shadow-2xl flex flex-col justify-between space-y-8 hover:border-primary-500/50 transition-all duration-300">
                    <div class="space-y-6">
                        <span class="px-4 py-1.5 bg-primary-500/10 text-primary-400 border border-primary-500/20 rounded-full text-xs font-bold uppercase tracking-widest inline-block">Student Startup & Innovation Policy (SSIP)</span>
                        <h3 class="text-3xl font-display font-bold text-white">Lumina Innovation & Incubation Center</h3>
                        <p class="text-gray-400 text-base leading-relaxed">Empowering visionary student entrepreneurs with state-of-the-art makerspaces, elite venture capital mentorship, and non-dilutive seed grants up to ₹25 Lakhs. Over 40+ deep-tech startups successfully incubated.</p>
                    </div>
                    <a href="{{ route('incubation') }}" class="w-full py-4 bg-primary-600 hover:bg-primary-500 text-white font-semibold rounded-xl text-center block shadow-lg shadow-primary-500/20 transition-all hover:-translate-y-1">Enter Incubation Portal</a>
                </div>

                <!-- Placement Desk Card -->
                <div class="bg-gray-800/40 border border-gray-700/50 rounded-3xl p-10 shadow-2xl flex flex-col justify-between space-y-8 hover:border-emerald-500/50 transition-all duration-300">
                    <div class="space-y-6">
                        <span class="px-4 py-1.5 bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 rounded-full text-xs font-bold uppercase tracking-widest inline-block">Global Career Launchpad</span>
                        <h3 class="text-3xl font-display font-bold text-white">Placement & Training Cell</h3>
                        <p class="text-gray-400 text-base leading-relaxed">Maintaining strong talent supply agreements with world leaders. Offering exceptional summer internships and full-time career packages with a record highest CTC of ₹62.5 LPA across 350+ global hiring partners.</p>
                    </div>
                    <a href="{{ route('placement-cell') }}" class="w-full py-4 bg-emerald-600 hover:bg-emerald-500 text-white font-semibold rounded-xl text-center block shadow-lg shadow-emerald-500/20 transition-all hover:-translate-y-1">View Placement Records</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Director General's Vision Desk -->
    <div class="py-24 bg-gray-950 border-t border-gray-800">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gray-900/80 border border-gray-800 rounded-3xl p-12 shadow-2xl flex flex-col md:flex-row gap-12 items-center">
                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=800" alt="Director General" class="w-52 h-52 rounded-full object-cover border-4 border-primary-500 shadow-xl flex-shrink-0">
                <div class="space-y-6">
                    <div>
                        <span class="px-3 py-1 bg-primary-500/10 text-primary-400 border border-primary-500/20 rounded-full text-xs font-bold uppercase tracking-widest mb-3 inline-block">Executive Desk</span>
                        <h3 class="text-2xl font-display font-bold text-white mb-1">Prof. Dr. Alistair Vance</h3>
                        <p class="text-primary-400 font-medium text-sm">Director General, Lumina University (Ph.D., Stanford University)</p>
                    </div>
                    <blockquote class="text-gray-300 text-sm leading-relaxed italic border-l-4 border-primary-500 pl-6">
                        "Welcome to Lumina University, an elite temple of advanced technological learning and multi-disciplinary research. Our foundational ethos mirrors premier institutions worldwide—to forge resilient, highly skilled innovators capable of solving humanity's most complex infrastructure, manufacturing, and computing challenges."
                    </blockquote>
                    <div class="pt-2">
                        <a href="{{ route('director-desk') }}" class="inline-flex items-center gap-2 text-primary-400 hover:text-primary-300 font-medium text-sm transition-colors">Read Full Strategic Message →</a>
                    </div>
                </div>
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

    <!-- Master Footer -->
    <x-footer />
</body>
</html>
