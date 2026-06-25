<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IRBS - Institutional Research & Bibliographic System</title>
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
        .text-gradient { background: linear-gradient(to right, #a855f7, #c084fc); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
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
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-purple-600/10 rounded-full blur-3xl opacity-40 pointer-events-none"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-display font-extrabold tracking-tight text-white mb-6">
                Institutional Research & <span class="text-gradient">Bibliographic System</span>
            </h1>
            <p class="max-w-2xl text-lg text-gray-400 mx-auto font-light">
                The centralized repository engine tracking active faculty research grants, published international patent architectures, and interdisciplinary doctoral dissertations.
            </p>
        </div>
    </div>

    <!-- Content Section -->
    <div class="py-24 bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            <!-- Search Archive Engine -->
            <div class="bg-gray-800/40 border border-gray-700/50 rounded-3xl p-8 md:p-12 shadow-2xl space-y-8">
                <h2 class="text-3xl font-display font-bold text-white">Search Published Research</h2>
                <form onsubmit="event.preventDefault(); alert('Querying IRBS Digital Archive... Found 42 published papers and 3 active patents matching your criteria.');" class="flex flex-col md:flex-row gap-6">
                    <input type="text" required class="flex-1 p-4 bg-gray-900 border border-gray-700 rounded-xl text-white focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition-all" placeholder="Search by paper title, DOI, faculty author, or research grant ID...">
                    <button type="submit" class="px-8 py-4 bg-purple-600 hover:bg-purple-500 text-white font-semibold rounded-xl shadow-lg shadow-purple-600/20 transition-all hover:-translate-y-0.5">Search Bibliography</button>
                </form>
            </div>

            <!-- Active Research Highlights -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-800/40 border border-gray-700/50 rounded-2xl p-8 space-y-4 hover:border-purple-500/50 transition-all shadow-xl">
                    <span class="text-xs font-mono font-bold text-purple-400 bg-purple-500/10 px-2.5 py-1 rounded border border-purple-500/20">GRANT-2026-AI</span>
                    <h3 class="text-xl font-bold text-white">Neuro-Symbolic LLM Architectures</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">Investigating hybrid artificial intelligence models combining deep neural attention mechanisms with strict rule-based symbolic verification fences.</p>
                    <div class="pt-4 border-t border-gray-800 flex justify-between text-xs text-gray-500">
                        <span>Lead: Prof. Jonathan Vance</span>
                        <span class="text-emerald-400 font-semibold">Active ($1.2M)</span>
                    </div>
                </div>

                <div class="bg-gray-800/40 border border-gray-700/50 rounded-2xl p-8 space-y-4 hover:border-purple-500/50 transition-all shadow-xl">
                    <span class="text-xs font-mono font-bold text-purple-400 bg-purple-500/10 px-2.5 py-1 rounded border border-purple-500/20">PATENT-BIO-882</span>
                    <h3 class="text-xl font-bold text-white">Targeted Nanomaterial Delivery</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">Synthesis of biocompatible mesoporous carbon nanocarriers for high-precision oncological pharmaceutical drug delivery systems.</p>
                    <div class="pt-4 border-t border-gray-800 flex justify-between text-xs text-gray-500">
                        <span>Lead: Dr. Elena Rostova</span>
                        <span class="text-blue-400 font-semibold">Filed & Published</span>
                    </div>
                </div>

                <div class="bg-gray-800/40 border border-gray-700/50 rounded-2xl p-8 space-y-4 hover:border-purple-500/50 transition-all shadow-xl">
                    <span class="text-xs font-mono font-bold text-purple-400 bg-purple-500/10 px-2.5 py-1 rounded border border-purple-500/20">THESIS-CS-2026</span>
                    <h3 class="text-xl font-bold text-white">Quantum Encryption Fencing</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">Lattice-based cryptographic protocol architecture resistant to decryption attacks originating from next-generation quantum processing engines.</p>
                    <div class="pt-4 border-t border-gray-800 flex justify-between text-xs text-gray-500">
                        <span>Ph.D. Scholar: Marcus Thorne</span>
                        <span class="text-amber-400 font-semibold">Completed</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Master Footer -->
    <x-footer />
</body>
</html>
