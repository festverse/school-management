<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lumina Innovation & Incubation Center (SSIP) - Lumina University</title>
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
                    <span class="font-display font-bold text-2xl tracking-tight text-white group-hover:text-primary-400 transition-colors">Lumina University</span>
                </a>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('academics') }}" class="text-sm font-medium text-gray-300 hover:text-white transition-colors">Academics</a>
                    <a href="{{ route('admissions') }}" class="text-sm font-medium text-gray-300 hover:text-white transition-colors">Admissions</a>
                    <a href="{{ url('/#student-directory') }}" class="text-sm font-medium text-gray-300 hover:text-white transition-colors">Student Directory</a>
                    <div class="h-6 w-px bg-gray-700"></div>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="inline-flex items-center justify-center px-6 py-2.5 text-sm font-medium text-white bg-primary-600 rounded-full hover:bg-primary-500 transition-all shadow-lg shadow-primary-500/25 hover:shadow-primary-500/40 hover:-translate-y-0.5">Enter Portal</a>
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
            <span class="px-4 py-1.5 bg-primary-500/10 text-primary-400 border border-primary-500/20 rounded-full text-xs font-bold uppercase tracking-widest mb-6 inline-block">Student Startup & Innovation Policy (SSIP)</span>
            <h1 class="text-4xl md:text-6xl font-display font-extrabold tracking-tight text-white mb-6">
                Innovation & <span class="text-gradient">Incubation Center</span>
            </h1>
            <p class="max-w-2xl text-lg text-gray-400 mx-auto font-light">
                Empowering visionary student entrepreneurs with state-of-the-art co-working spaces, elite venture capital mentorship, and non-dilutive seed grants up to ₹25 Lakhs.
            </p>
        </div>
    </div>

    <!-- Incubation Content -->
    <div class="py-24 bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-800/40 border border-gray-700/50 rounded-3xl p-8 shadow-xl flex flex-col justify-between">
                    <div>
                        <div class="w-14 h-14 bg-primary-500/10 border border-primary-500/20 rounded-2xl flex items-center justify-center text-primary-400 text-2xl mb-6">💡</div>
                        <h3 class="text-xl font-bold text-white mb-3">Non-Dilutive Seed Funding</h3>
                        <p class="text-gray-400 text-sm leading-relaxed mb-6">Eligible student teams receive substantial proof-of-concept funding, prototype fabrication grants, and full intellectual property (IP) filing sponsorships.</p>
                    </div>
                    <button onclick="alert('SSIP Seed Grant application intake is open for registered students via the Student Portal.')" class="w-full py-3 bg-primary-600 hover:bg-primary-500 text-white font-semibold rounded-xl transition-all shadow-lg shadow-primary-500/20">Apply for Seed Grant</button>
                </div>

                <div class="bg-gray-800/40 border border-gray-700/50 rounded-3xl p-8 shadow-xl flex flex-col justify-between">
                    <div>
                        <div class="w-14 h-14 bg-purple-500/10 border border-purple-500/20 rounded-2xl flex items-center justify-center text-purple-400 text-2xl mb-6">🤝</div>
                        <h3 class="text-xl font-bold text-white mb-3">Global VC & Angel Mentorship</h3>
                        <p class="text-gray-400 text-sm leading-relaxed mb-6">Direct bi-weekly interaction loops with seasoned founders, legal compliance experts, and leading angel syndicates to refine go-to-market strategies.</p>
                    </div>
                    <button onclick="alert('Mentor appointment scheduler is managed via Moodle.')" class="w-full py-3 bg-gray-800 hover:bg-gray-700 text-white font-semibold rounded-xl border border-gray-700 transition-all">View Mentor Roster</button>
                </div>

                <div class="bg-gray-800/40 border border-gray-700/50 rounded-3xl p-8 shadow-xl flex flex-col justify-between">
                    <div>
                        <div class="w-14 h-14 bg-emerald-500/10 border border-emerald-500/20 rounded-2xl flex items-center justify-center text-emerald-400 text-2xl mb-6">🏢</div>
                        <h3 class="text-xl font-bold text-white mb-3">Premium Co-Working & Makerspace</h3>
                        <p class="text-gray-400 text-sm leading-relaxed mb-6">24/7 access to high-speed gigabit Wi-Fi, modern conference lounges, and fully loaded hardware prototyping makerspaces equipped with test benches.</p>
                    </div>
                    <button onclick="alert('Makerspace access passes are issued via the Academic Service Center (ASC).')" class="w-full py-3 bg-gray-800 hover:bg-gray-700 text-white font-semibold rounded-xl border border-gray-700 transition-all">Book Makerspace Desk</button>
                </div>
            </div>

            <!-- Success Stories -->
            <div class="bg-gray-800/20 border border-gray-800 rounded-3xl p-10 max-w-4xl mx-auto text-center space-y-6">
                <h3 class="text-2xl font-bold text-white">Our Incubated Portfolio Stars</h3>
                <p class="text-gray-400 text-sm leading-relaxed">Over 40+ deep-tech startups incubated at Lumina have gone on to raise external Series-A venture rounds, file international PCT patents, and generate significant societal impact in clean energy and healthcare.</p>
                <div class="pt-2">
                    <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 bg-primary-600 hover:bg-primary-500 text-white rounded-xl font-medium transition-all shadow-lg shadow-primary-500/20">Connect with Portfolio Startups</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Master Footer -->
    <x-footer />
</body>
</html>
