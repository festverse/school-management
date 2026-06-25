<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CoE in Advanced Manufacturing & Robotics - Lumina University</title>
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
            <span class="px-4 py-1.5 bg-blue-500/10 text-blue-400 border border-blue-500/20 rounded-full text-xs font-bold uppercase tracking-widest mb-6 inline-block">Center of Excellence</span>
            <h1 class="text-4xl md:text-6xl font-display font-extrabold tracking-tight text-white mb-6">
                Advanced Manufacturing <span class="text-gradient">& Robotics</span>
            </h1>
            <p class="max-w-2xl text-lg text-gray-400 mx-auto font-light">
                Established in collaboration with global industrial conglomerates to pioneer multi-axis CNC machining, additive 3D metal printing, and autonomous robotics.
            </p>
        </div>
    </div>

    <!-- Facilities Grid -->
    <div class="py-24 bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-800/40 border border-gray-700/50 rounded-3xl overflow-hidden shadow-xl flex flex-col group hover:border-primary-500/50 transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=800" alt="Robotics Assembly" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="p-8 flex-1 flex flex-col justify-between space-y-4">
                        <div>
                            <h3 class="text-xl font-bold text-white mb-2">6-Axis Industrial Robotic Arms</h3>
                            <p class="text-gray-400 text-sm leading-relaxed">Equipped with state-of-the-art force torque sensors and machine vision capabilities for precision assembly, welding, and automated packing research.</p>
                        </div>
                        <button onclick="alert('Industrial equipment booking is available for researchers via the IRBS portal.')" class="w-full py-2.5 bg-gray-800 hover:bg-gray-700 text-white font-medium rounded-xl border border-gray-700 transition-all text-sm">Check Equipment Availability</button>
                    </div>
                </div>

                <div class="bg-gray-800/40 border border-gray-700/50 rounded-3xl overflow-hidden shadow-xl flex flex-col group hover:border-purple-500/50 transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&q=80&w=800" alt="3D Metal Printing" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="p-8 flex-1 flex flex-col justify-between space-y-4">
                        <div>
                            <h3 class="text-xl font-bold text-white mb-2">Direct Metal Laser Sintering (DMLS)</h3>
                            <p class="text-gray-400 text-sm leading-relaxed">Industrial-grade additive manufacturing machines capable of fabricating complex high-strength aerospace components using titanium and inconel superalloys.</p>
                        </div>
                        <button onclick="alert('Industrial equipment booking is available for researchers via the IRBS portal.')" class="w-full py-2.5 bg-gray-800 hover:bg-gray-700 text-white font-medium rounded-xl border border-gray-700 transition-all text-sm">Check Equipment Availability</button>
                    </div>
                </div>

                <div class="bg-gray-800/40 border border-gray-700/50 rounded-3xl overflow-hidden shadow-xl flex flex-col group hover:border-emerald-500/50 transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1581092335397-9583fe92d232?auto=format&fit=crop&q=80&w=800" alt="CNC Machining" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="p-8 flex-1 flex flex-col justify-between space-y-4">
                        <div>
                            <h3 class="text-xl font-bold text-white mb-2">5-Axis Ultra-Precision CNC Machining</h3>
                            <p class="text-gray-400 text-sm leading-relaxed">Equipped with real-time tool wear monitoring AI sensors, used extensively for defense component prototyping and industrial consultancy.</p>
                        </div>
                        <button onclick="alert('Industrial equipment booking is available for researchers via the IRBS portal.')" class="w-full py-2.5 bg-gray-800 hover:bg-gray-700 text-white font-medium rounded-xl border border-gray-700 transition-all text-sm">Check Equipment Availability</button>
                    </div>
                </div>
            </div>

            <!-- Industrial Collaborations -->
            <div class="bg-gray-800/20 border border-gray-800 rounded-3xl p-10 max-w-4xl mx-auto text-center space-y-6">
                <h3 class="text-2xl font-bold text-white">Looking for Industrial Consultancy?</h3>
                <p class="text-gray-400 text-sm leading-relaxed">The CoE actively engages with automotive, defense, and heavy engineering sectors to solve complex manufacturing bottlenecks. Our expert professors and high-tech laboratories are available for corporate consultancy contracts.</p>
                <div class="pt-2">
                    <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 bg-primary-600 hover:bg-primary-500 text-white rounded-xl font-medium transition-all shadow-lg shadow-primary-500/20">Initiate Corporate Partnership</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Master Footer -->
    <x-footer />
</body>
</html>
