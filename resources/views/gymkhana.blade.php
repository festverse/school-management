<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gymkhana - Lumina University</title>
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
                        primary: { 50: '#eff6ff', 100: '#dbeafe', 500: '#3b82f6', 600: '#2563eb', 900: '#1e3a8a' }
                    }
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
            <h1 class="text-4xl md:text-6xl font-display font-extrabold tracking-tight text-white mb-6">
                Lumina <span class="text-gradient">Gymkhana</span>
            </h1>
            <p class="max-w-2xl text-lg text-gray-400 mx-auto font-light">
                The epicenter of student governance, state-of-the-art sports complexes, cultural festivals, and cutting-edge technical clubs.
            </p>
        </div>
    </div>

    <!-- Content Section -->
    <div class="py-24 bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-20">
            <!-- Grid of Gymkhana Wings -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Sports Wing -->
                <div class="bg-gray-800/40 border border-gray-700/50 rounded-3xl p-8 hover:border-primary-500/50 transition-all duration-300 shadow-xl flex flex-col justify-between">
                    <div>
                        <div class="w-14 h-14 bg-primary-500/10 border border-primary-500/20 rounded-2xl flex items-center justify-center text-primary-400 text-2xl mb-6">⚽</div>
                        <h3 class="text-2xl font-bold text-white mb-4">Sports & Athletics</h3>
                        <p class="text-gray-400 text-sm leading-relaxed mb-6">Featuring Olympic-standard swimming pools, indoor badminton arenas, tennis courts, and fully equipped strength & conditioning gymnasiums.</p>
                    </div>
                    <button onclick="alert('Sports complex slot booking is open for registered students via the Student Portal.')" class="w-full py-3 bg-gray-800 hover:bg-gray-700 text-white font-semibold rounded-xl border border-gray-700 transition-all">Book Sports Arena Slot</button>
                </div>

                <!-- Cultural Wing -->
                <div class="bg-gray-800/40 border border-gray-700/50 rounded-3xl p-8 hover:border-purple-500/50 transition-all duration-300 shadow-xl flex flex-col justify-between">
                    <div>
                        <div class="w-14 h-14 bg-purple-500/10 border border-purple-500/20 rounded-2xl flex items-center justify-center text-purple-400 text-2xl mb-6">🎨</div>
                        <h3 class="text-2xl font-bold text-white mb-4">Cultural Societies</h3>
                        <p class="text-gray-400 text-sm leading-relaxed mb-6">Home to the Dramatics Society, Symphony Music Club, Choreography Squad, and the Literary & Debating Forum. Organize annual national cultural fests.</p>
                    </div>
                    <button onclick="alert('Audition schedules for Cultural Clubs are posted weekly on Moodle.')" class="w-full py-3 bg-gray-800 hover:bg-gray-700 text-white font-semibold rounded-xl border border-gray-700 transition-all">Join Cultural Societies</button>
                </div>

                <!-- Technical Wing -->
                <div class="bg-gray-800/40 border border-gray-700/50 rounded-3xl p-8 hover:border-emerald-500/50 transition-all duration-300 shadow-xl flex flex-col justify-between">
                    <div>
                        <div class="w-14 h-14 bg-emerald-500/10 border border-emerald-500/20 rounded-2xl flex items-center justify-center text-emerald-400 text-2xl mb-6">🚀</div>
                        <h3 class="text-2xl font-bold text-white mb-4">Technical Clubs</h3>
                        <p class="text-gray-400 text-sm leading-relaxed mb-6">Drive innovation through the Robotics Group, AI & Computer Vision Society, Aero-modeling Club, and the FinTech Research Alliance.</p>
                    </div>
                    <button onclick="alert('Hackathon registrations are managed via the IRBS Portal.')" class="w-full py-3 bg-gray-800 hover:bg-gray-700 text-white font-semibold rounded-xl border border-gray-700 transition-all">View Hackathons</button>
                </div>
            </div>

            <!-- Representative Section -->
            <div class="bg-gray-800/20 border border-gray-800 rounded-3xl p-12 text-center max-w-4xl mx-auto space-y-6 shadow-2xl">
                <h3 class="text-3xl font-display font-bold text-white">Student Gymkhana Council</h3>
                <p class="text-gray-400 max-w-2xl mx-auto font-light">Elected student representatives work alongside institutional administrative heads to ensure student welfare, allocate fest budgets, and maintain world-class campus living standards.</p>
                <div class="flex justify-center gap-6 pt-4">
                    <a href="{{ route('contact') }}" class="px-8 py-4 bg-primary-600 text-white font-semibold rounded-full hover:bg-primary-500 transition-all shadow-lg shadow-primary-500/25 hover:-translate-y-1">Contact Gymkhana President</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Master Footer -->
    <x-footer />
</body>
</html>
