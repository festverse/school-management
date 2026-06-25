<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Academic Service Center (ASC) - Lumina University</title>
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
        .text-gradient { background: linear-gradient(to right, #60a5fa, #3b82f6); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
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
                Academic Service <span class="text-gradient">Center (ASC)</span>
            </h1>
            <p class="max-w-2xl text-lg text-gray-400 mx-auto font-light">
                Your one-stop digital office for class scheduling registration, semester fee receipt generation, official exam timetables, and academic degree transcript verification.
            </p>
        </div>
    </div>

    <!-- Content Section -->
    <div class="py-24 bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Action Card 1 -->
                <div class="bg-gray-800/40 border border-gray-700/50 rounded-3xl p-8 shadow-xl space-y-6 flex flex-col justify-between">
                    <div>
                        <h3 class="text-2xl font-bold text-white mb-3">Course Registration Engine</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">Add or drop course credits, view prerequisite department waivers, and verify timetable conflict alerts for the upcoming academic semester.</p>
                    </div>
                    <button onclick="alert('Please log into your active student portal session to perform live course add/drop modifications.')" class="w-full py-3 bg-primary-600 hover:bg-primary-500 text-white font-semibold rounded-xl transition-all">Launch Course Scheduler</button>
                </div>

                <!-- Action Card 2 -->
                <div class="bg-gray-800/40 border border-gray-700/50 rounded-3xl p-8 shadow-xl space-y-6 flex flex-col justify-between">
                    <div>
                        <h3 class="text-2xl font-bold text-white mb-3">Fee Receipt & Accounting</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">View outstanding tuition balances, download cryptographically signed official semester fee receipts, and process bank challan remittances.</p>
                    </div>
                    <button onclick="alert('Connecting to Lumina Accounting Ledger... All student tuition receipts are currently up to date.')" class="w-full py-3 bg-gray-700 hover:bg-gray-600 text-white font-semibold rounded-xl border border-gray-600 transition-all">Download Fee Receipt</button>
                </div>

                <!-- Action Card 3 -->
                <div class="bg-gray-800/40 border border-gray-700/50 rounded-3xl p-8 shadow-xl space-y-6 flex flex-col justify-between">
                    <div>
                        <h3 class="text-2xl font-bold text-white mb-3">Official Transcript Vault</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">Request official watermarked digital academic transcripts, verify graduation audit checklists, and view cumulative Grade Point Average (GPA) progression.</p>
                    </div>
                    <button onclick="alert('Transcript audit generated successfully. Check your registered student profile inbox for the secure PDF download link.')" class="w-full py-3 bg-gray-700 hover:bg-gray-600 text-white font-semibold rounded-xl border border-gray-600 transition-all">Generate Transcript Audit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Master Footer -->
    <x-footer />
</body>
</html>
