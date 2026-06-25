<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Latest News & Upcoming Events - Lumina University</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800|outfit:400,600,800&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: { sans: ['Inter', 'sans-serif'], display: ['Outfit', 'sans-serif'] },
                    colors: { primary: { 50: '#eff6ff', 100: '#dbeafe', 500: '#3b82f6', 600: '#2563eb', 900: '#1e3a8a' } }
                }
            }
        }
    </script>
    <style>
        .glass-nav { background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border-bottom: 1px solid rgba(255, 255, 255, 0.1); }
        .hero-gradient { background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 100%); }
        .text-gradient { background: linear-gradient(to right, #60a5fa, #a78bfa); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
    </style>
</head>
<body class="antialiased bg-gray-900 text-gray-100 font-sans selection:bg-primary-500 selection:text-white">
    <!-- Navbar -->
    <nav class="fixed w-full z-50 glass-nav transition-all duration-300">
        <div class="w-full px-4 sm:px-8 lg:px-12">
            <div class="flex justify-between h-20 items-center">
                <a href="{{ url('/') }}" class="flex-shrink-0 flex items-center gap-3 group">
                    <div class="text-3xl group-hover:scale-110 transition-transform duration-300">🎓</div>
                    <span class="font-display font-bold text-2xl tracking-tight text-white">Lumina University</span>
                </a>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('academics') }}" class="text-sm font-medium text-gray-300 hover:text-white transition-colors">Academics</a>
                    <a href="{{ route('admissions') }}" class="text-sm font-medium text-gray-300 hover:text-white transition-colors">Admissions</a>
                    <a href="{{ url('/#student-directory') }}" class="text-sm font-medium text-gray-300 hover:text-white transition-colors">Student Directory</a>
                    <div class="h-6 w-px bg-gray-700"></div>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="inline-flex items-center justify-center px-6 py-2.5 text-sm font-medium text-white bg-primary-600 rounded-full hover:bg-primary-500 transition-all shadow-lg shadow-primary-500/25">Enter Portal</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm font-medium text-gray-300 hover:text-white transition-colors">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-6 py-2.5 text-sm font-medium text-white bg-white/10 border border-white/20 rounded-full hover:bg-white/20 transition-all backdrop-blur-sm">Apply Now</a>
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
                Institutional News & <span class="text-gradient">Upcoming Events</span>
            </h1>
            <p class="max-w-2xl text-lg text-gray-400 mx-auto font-light">
                Stay updated with groundbreaking research discoveries, international academic conferences, and vibrant student campus celebrations.
            </p>
        </div>
    </div>

    <!-- Content Section -->
    <div class="py-24 bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-20">
            <!-- News & Research Grid -->
            <div class="space-y-12">
                <h2 class="text-3xl font-display font-bold text-white border-b border-gray-800 pb-4">Latest Research Highlights</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-gray-800/40 border border-gray-700/50 rounded-3xl overflow-hidden shadow-xl flex flex-col group">
                        <img src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?auto=format&fit=crop&q=80&w=800" alt="Laboratory Research" class="w-full h-52 object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="p-8 flex-1 flex flex-col justify-between space-y-4">
                            <div>
                                <span class="text-xs font-bold text-primary-400 uppercase tracking-wider mb-2 block">Breakthrough | June 2026</span>
                                <h3 class="text-xl font-bold text-white mb-2">AI-Powered Mesoporous Carbon Nanomaterials</h3>
                                <p class="text-gray-400 text-sm leading-relaxed">Lumina researchers successfully synthesize next-generation carbon nanostructures capable of high-precision oncological drug delivery.</p>
                            </div>
                            <button onclick="alert('Full research paper available via the IRBS Digital Archive.')" class="w-full py-3 bg-gray-800 hover:bg-gray-700 text-white font-semibold rounded-xl border border-gray-700 transition-all">Read Journal Article</button>
                        </div>
                    </div>

                    <div class="bg-gray-800/40 border border-gray-700/50 rounded-3xl overflow-hidden shadow-xl flex flex-col group">
                        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&q=80&w=800" alt="Informatics Laboratory" class="w-full h-52 object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="p-8 flex-1 flex flex-col justify-between space-y-4">
                            <div>
                                <span class="text-xs font-bold text-purple-400 uppercase tracking-wider mb-2 block">Computing | May 2026</span>
                                <h3 class="text-xl font-bold text-white mb-2">$12M Grant Awarded for Quantum Fencing</h3>
                                <p class="text-gray-400 text-sm leading-relaxed">The Department of Computer Science secures a multi-year national defense grant to establish lattice-based quantum cryptography protocols.</p>
                            </div>
                            <button onclick="alert('Grant details and PhD research fellowship openings are listed in the Academics catalog.')" class="w-full py-3 bg-gray-800 hover:bg-gray-700 text-white font-semibold rounded-xl border border-gray-700 transition-all">View Fellowship Openings</button>
                        </div>
                    </div>

                    <div class="bg-gray-800/40 border border-gray-700/50 rounded-3xl overflow-hidden shadow-xl flex flex-col group">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=800" alt="Students Collaboration" class="w-full h-52 object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="p-8 flex-1 flex flex-col justify-between space-y-4">
                            <div>
                                <span class="text-xs font-bold text-emerald-400 uppercase tracking-wider mb-2 block">Accreditation | April 2026</span>
                                <h3 class="text-xl font-bold text-white mb-2">Lumina Achieves Perfect Global QS Tier-1 Rank</h3>
                                <p class="text-gray-400 text-sm leading-relaxed">International academic evaluation councils rank Lumina University in the top 1% globally for faculty research citations and graduate employability.</p>
                            </div>
                            <button onclick="alert('View the complete official institutional audit report in the ASC portal.')" class="w-full py-3 bg-gray-800 hover:bg-gray-700 text-white font-semibold rounded-xl border border-gray-700 transition-all">View Audit Report</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Upcoming Events Calendar -->
            <div class="space-y-12">
                <h2 class="text-3xl font-display font-bold text-white border-b border-gray-800 pb-4">Upcoming Events & Symposiums</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-gray-800/40 border border-gray-700/50 rounded-3xl p-8 flex flex-col sm:flex-row items-center gap-8 shadow-xl">
                        <div class="w-24 h-24 bg-primary-500/10 border border-primary-500/30 rounded-2xl flex flex-col items-center justify-center text-primary-400 flex-shrink-0">
                            <span class="text-sm font-bold uppercase">Oct</span>
                            <span class="text-3xl font-display font-extrabold">14</span>
                        </div>
                        <div class="space-y-3">
                            <h3 class="text-2xl font-bold text-white">Annual Interdisciplinary Research Symposium 2026</h3>
                            <p class="text-gray-400 text-sm leading-relaxed">Join 500+ global keynote speakers, post-doctoral scholars, and corporate tech leadership at the Nandan Nilekani Main Auditorium.</p>
                            <button onclick="alert('Symposium registration pass successfully reserved and linked to your profile ID.')" class="px-6 py-2.5 bg-primary-600 hover:bg-primary-500 text-white font-semibold text-sm rounded-xl transition-all shadow-lg shadow-primary-600/20">Reserve Pass</button>
                        </div>
                    </div>

                    <div class="bg-gray-800/40 border border-gray-700/50 rounded-3xl p-8 flex flex-col sm:flex-row items-center gap-8 shadow-xl">
                        <div class="w-24 h-24 bg-purple-500/10 border border-purple-500/30 rounded-2xl flex flex-col items-center justify-center text-purple-400 flex-shrink-0">
                            <span class="text-sm font-bold uppercase">Nov</span>
                            <span class="text-3xl font-display font-extrabold">05</span>
                        </div>
                        <div class="space-y-3">
                            <h3 class="text-2xl font-bold text-white">Global Alumni Convergence & Tech Incubator Pitch</h3>
                            <p class="text-gray-400 text-sm leading-relaxed">Lumina alumni venture capitalists return to campus to evaluate and fund disruptive student startup ideas at the Student Commons.</p>
                            <button onclick="alert('Pitch deck submission portal initialized on Moodle.')" class="px-6 py-2.5 bg-purple-600 hover:bg-purple-500 text-white font-semibold text-sm rounded-xl transition-all shadow-lg shadow-purple-600/20">Submit Pitch Deck</button>
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
