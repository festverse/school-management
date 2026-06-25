<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gymkhana | Lumina University</title>
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
            <span>Athletics & Cultural Societies</span>
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
                    <svg class="w-10 h-10 text-white group-hover:text-[#FFB81C] transition-all duration-300 group-hover:scale-110 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 3L1 9l11 6 9-4.91V17h2V9L12 3z" />
                        <path d="M21 12.27L12 17.18 3 12.27v4.18c0 2.22 4.03 4.05 9 4.05s9-1.83 9-4.05v-4.18z" />
                    </svg>
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
                    <a href="{{ route('gymkhana') }}" class="text-[#FFB81C] transition-colors font-bold">Athletics & Clubs</a>
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
            <a href="{{ route('irbs') }}" class="block py-2 hover:text-[#FFB81C]">Research</a>
            <a href="{{ route('gymkhana') }}" class="block py-2 text-[#FFB81C]">Athletics & Clubs</a>
            <a href="{{ route('news-events') }}" class="block py-2 hover:text-[#FFB81C]">News</a>
            <a href="{{ route('director-desk') }}" class="block py-2 hover:text-[#FFB81C]">About</a>
            <a href="{{ route('admissions') }}" class="block py-3 text-center bg-[#E51937] rounded-lg shadow font-bold text-white">Apply Now</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative pt-24 pb-28 bg-[#002855] text-white border-b border-[#001a38]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6">
            <span class="text-xs font-bold uppercase tracking-widest text-[#FFB81C] px-3 py-1 bg-[#001a38] rounded-full border border-slate-700 inline-block">Campus Vitality</span>
            <h1 class="text-5xl md:text-6xl font-serif font-black tracking-tight">
                Lumina <span class="text-[#FFB81C]">Gymkhana</span>
            </h1>
            <p class="max-w-3xl text-lg text-slate-200 mx-auto font-normal leading-relaxed">
                The epicenter of student governance, state-of-the-art sports complexes, cultural festivals, and cutting-edge technical clubs.
            </p>
        </div>
    </div>

    <!-- Content Section -->
    <div class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-20">
            <!-- Grid of Gymkhana Wings -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- Sports Wing -->
                <div class="bg-white border border-slate-200 rounded-2xl p-10 shadow-lg hover:shadow-2xl transition-all duration-300 flex flex-col justify-between hover:-translate-y-1">
                    <div>
                        <div class="w-16 h-16 bg-[#002855] text-white rounded-2xl flex items-center justify-center text-3xl mb-6 shadow-md">⚽</div>
                        <h3 class="text-2xl font-serif font-bold text-[#002855] mb-4">Sports & Athletics</h3>
                        <p class="text-slate-600 text-base leading-relaxed mb-8">Featuring Olympic-standard swimming pools, indoor badminton arenas, tennis courts, and fully equipped strength & conditioning gymnasiums.</p>
                    </div>
                    <button onclick="alert('Sports complex slot booking is open for registered students via the Student Portal.')" class="w-full py-4 bg-[#E51937] hover:bg-[#B21B2A] text-white font-bold text-sm uppercase tracking-wider rounded-lg transition-all shadow-lg hover:-translate-y-0.5">Book Sports Arena Slot</button>
                </div>

                <!-- Cultural Wing -->
                <div class="bg-white border border-slate-200 rounded-2xl p-10 shadow-lg hover:shadow-2xl transition-all duration-300 flex flex-col justify-between hover:-translate-y-1">
                    <div>
                        <div class="w-16 h-16 bg-[#002855] text-white rounded-2xl flex items-center justify-center text-3xl mb-6 shadow-md">🎨</div>
                        <h3 class="text-2xl font-serif font-bold text-[#002855] mb-4">Cultural Societies</h3>
                        <p class="text-slate-600 text-base leading-relaxed mb-8">Home to the Dramatics Society, Symphony Music Club, Choreography Squad, and the Literary & Debating Forum. Organize annual national cultural fests.</p>
                    </div>
                    <button onclick="alert('Audition schedules for Cultural Clubs are posted weekly on Moodle.')" class="w-full py-4 bg-[#002855] hover:bg-[#E51937] text-white font-bold text-sm uppercase tracking-wider rounded-lg transition-all shadow-lg hover:-translate-y-0.5">Join Cultural Societies</button>
                </div>

                <!-- Technical Wing -->
                <div class="bg-white border border-slate-200 rounded-2xl p-10 shadow-lg hover:shadow-2xl transition-all duration-300 flex flex-col justify-between hover:-translate-y-1">
                    <div>
                        <div class="w-16 h-16 bg-[#002855] text-white rounded-2xl flex items-center justify-center text-3xl mb-6 shadow-md">🚀</div>
                        <h3 class="text-2xl font-serif font-bold text-[#002855] mb-4">Technical Clubs</h3>
                        <p class="text-slate-600 text-base leading-relaxed mb-8">Drive innovation through the Robotics Group, AI & Computer Vision Society, Aero-modeling Club, and the FinTech Research Alliance.</p>
                    </div>
                    <button onclick="alert('Hackathon registrations are managed via the IRBS Portal.')" class="w-full py-4 bg-[#002855] hover:bg-[#E51937] text-white font-bold text-sm uppercase tracking-wider rounded-lg transition-all shadow-lg hover:-translate-y-0.5">View Hackathons</button>
                </div>
            </div>

            <!-- Representative Section -->
            <div class="bg-white border border-slate-200 rounded-2xl p-12 text-center max-w-4xl mx-auto space-y-6 shadow-xl">
                <h3 class="text-3xl font-serif font-bold text-[#002855]">Student Gymkhana Council</h3>
                <p class="text-slate-600 max-w-2xl mx-auto font-medium leading-relaxed">Elected student representatives work alongside institutional administrative heads to ensure student welfare, allocate fest budgets, and maintain world-class campus living standards.</p>
                <div class="flex justify-center gap-6 pt-4">
                    <a href="{{ route('contact') }}" class="px-8 py-4 bg-[#E51937] text-white font-bold text-sm uppercase tracking-wider rounded-lg hover:bg-[#B21B2A] transition-all shadow-lg hover:-translate-y-0.5">Contact Gymkhana President</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Master Footer -->
    <x-footer />
</body>
</html>
