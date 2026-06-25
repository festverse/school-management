<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Central Informatics Library - Lumina University</title>
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
        .text-gradient { background: linear-gradient(to right, #38bdf8, #0284c7); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
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
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-sky-600/10 rounded-full blur-3xl opacity-40 pointer-events-none"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-display font-extrabold tracking-tight text-white mb-6">
                Central Informatics <span class="text-gradient">Library</span>
            </h1>
            <p class="max-w-2xl text-lg text-gray-400 mx-auto font-light">
                Explore over 4 million physical volumes, access high-impact international e-journals, and reserve dedicated computational research carrels.
            </p>
        </div>
    </div>

    <!-- Content Section -->
    <div class="py-24 bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            <!-- Search Banner -->
            <div class="bg-gray-800/40 border border-gray-700/50 rounded-3xl p-8 md:p-12 shadow-2xl space-y-8">
                <h2 class="text-3xl font-display font-bold text-white">Digital Library Catalog Search</h2>
                <form onsubmit="event.preventDefault(); alert('Querying Central Library Catalog... Found 14 available physical copies and full-text access via IEEE Xplore & Elsevier ScienceDirect.');" class="flex flex-col md:flex-row gap-6">
                    <input type="text" required class="flex-1 p-4 bg-gray-900 border border-gray-700 rounded-xl text-white focus:ring-2 focus:ring-sky-500 focus:border-sky-500 transition-all" placeholder="Search by book title, author, ISBN, or subject classification...">
                    <button type="submit" class="px-8 py-4 bg-sky-600 hover:bg-sky-500 text-white font-semibold rounded-xl shadow-lg shadow-sky-600/20 transition-all hover:-translate-y-0.5">Search Catalog</button>
                </form>
            </div>

            <!-- Seat Reservation Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-gray-800/40 border border-gray-700/50 rounded-3xl p-8 shadow-xl space-y-6">
                    <h3 class="text-2xl font-bold text-white">Study Room & Seat Booking</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">Reserve quiet study pods, interactive group presentation media rooms, or high-performance workstation desks up to 48 hours in advance.</p>
                    <button onclick="alert('Seat booking confirmation ticket sent to your student portal account.')" class="px-6 py-3 bg-sky-600 hover:bg-sky-500 text-white font-semibold rounded-xl transition-all shadow-lg shadow-sky-600/20">Reserve Study Seat</button>
                </div>

                <div class="bg-gray-800/40 border border-gray-700/50 rounded-3xl p-8 shadow-xl space-y-6">
                    <h3 class="text-2xl font-bold text-white">Inter-Library Loan (ILL)</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">Require a highly specialized foreign research volume not physically available on campus? Request an expedited inter-library digital or physical loan.</p>
                    <button onclick="alert('ILL request form initialized. The acquisition librarian will review your request within 24 hours.')" class="px-6 py-3 bg-gray-700 hover:bg-gray-600 text-white font-semibold rounded-xl border border-gray-600 transition-all">Request Inter-Library Loan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Master Footer -->
    <x-footer />
</body>
</html>
