<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Careers & Faculty Recruitment - Lumina University</title>
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
            <h1 class="text-4xl md:text-6xl font-display font-extrabold tracking-tight text-white mb-6">
                Careers & <span class="text-gradient">Faculty Recruitment</span>
            </h1>
            <p class="max-w-2xl text-lg text-gray-400 mx-auto font-light">
                Join our elite academic community of 100% Ph.D. holding professors, pioneering researchers, and passionate administrative leaders.
            </p>
        </div>
    </div>

    <!-- Job Openings Grid -->
    <div class="py-24 bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Posting 1 -->
                <div class="bg-gray-800/40 border border-gray-700/50 rounded-3xl p-8 shadow-xl flex flex-col justify-between hover:border-primary-500/50 transition-all duration-300 hover:-translate-y-1">
                    <div>
                        <div class="flex justify-between items-start mb-6">
                            <span class="px-3 py-1 bg-primary-500/10 text-primary-400 border border-primary-500/20 rounded-full text-xs font-bold uppercase tracking-wider">Faculty | Tenure-Track</span>
                            <span class="text-gray-400 text-sm">Post Date: June 15, 2026</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3">Assistant / Associate Professor in AI & Computer Vision</h3>
                        <p class="text-gray-400 text-sm leading-relaxed mb-6">Department of Computer Science & Engineering is seeking exceptional candidates with Ph.D. from premier global institutions and excellent publication record in top tier conferences (CVPR, NeurIPS, ICCV).</p>
                    </div>
                    <button onclick="alert('Redirecting to the Academic Faculty Recruitment Portal for CV upload...')" class="w-full py-3 bg-primary-600 hover:bg-primary-500 text-white font-semibold rounded-xl transition-all shadow-lg shadow-primary-500/20">Apply Online</button>
                </div>

                <!-- Posting 2 -->
                <div class="bg-gray-800/40 border border-gray-700/50 rounded-3xl p-8 shadow-xl flex flex-col justify-between hover:border-purple-500/50 transition-all duration-300 hover:-translate-y-1">
                    <div>
                        <div class="flex justify-between items-start mb-6">
                            <span class="px-3 py-1 bg-purple-500/10 text-purple-400 border border-purple-500/20 rounded-full text-xs font-bold uppercase tracking-wider">Research | CoE Lead</span>
                            <span class="text-gray-400 text-sm">Post Date: June 10, 2026</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3">Principal Research Scientist - Mechatronics & Industrial IoT</h3>
                        <p class="text-gray-400 text-sm leading-relaxed mb-6">Lead the newly established Center of Excellence in Advanced Manufacturing. Responsibilities include industrial consultancy, patent generation, and supervising doctoral dissertations.</p>
                    </div>
                    <button onclick="alert('Redirecting to the Academic Faculty Recruitment Portal for CV upload...')" class="w-full py-3 bg-primary-600 hover:bg-primary-500 text-white font-semibold rounded-xl transition-all shadow-lg shadow-primary-500/20">Apply Online</button>
                </div>

                <!-- Posting 3 -->
                <div class="bg-gray-800/40 border border-gray-700/50 rounded-3xl p-8 shadow-xl flex flex-col justify-between hover:border-emerald-500/50 transition-all duration-300 hover:-translate-y-1">
                    <div>
                        <div class="flex justify-between items-start mb-6">
                            <span class="px-3 py-1 bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 rounded-full text-xs font-bold uppercase tracking-wider">Administration | Full-Time</span>
                            <span class="text-gray-400 text-sm">Post Date: May 28, 2026</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3">Chief Information Security Officer (CISO)</h3>
                        <p class="text-gray-400 text-sm leading-relaxed mb-6">Administer campus-wide network infrastructure, maintain zero-trust cloud application security, and manage institutional compliance with national cybersecurity frameworks.</p>
                    </div>
                    <button onclick="alert('Redirecting to the Staff & Administrative Portal for application submission...')" class="w-full py-3 bg-primary-600 hover:bg-primary-500 text-white font-semibold rounded-xl transition-all shadow-lg shadow-primary-500/20">Apply Online</button>
                </div>

                <!-- Posting 4 -->
                <div class="bg-gray-800/40 border border-gray-700/50 rounded-3xl p-8 shadow-xl flex flex-col justify-between hover:border-blue-500/50 transition-all duration-300 hover:-translate-y-1">
                    <div>
                        <div class="flex justify-between items-start mb-6">
                            <span class="px-3 py-1 bg-blue-500/10 text-blue-400 border border-blue-500/20 rounded-full text-xs font-bold uppercase tracking-wider">Research | Fellowship</span>
                            <span class="text-gray-400 text-sm">Post Date: Open Rolling</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3">Lumina Postdoctoral Research Fellowships (2026-2028)</h3>
                        <p class="text-gray-400 text-sm leading-relaxed mb-6">Fully funded 2-year fellowship program offering world-class lab spaces, substantial contingency grants (₹5 Lakhs/year), and direct mentorship under elite Tier-1 professors.</p>
                    </div>
                    <button onclick="alert('Redirecting to the Postdoctoral Fellowship Application Desk...')" class="w-full py-3 bg-primary-600 hover:bg-primary-500 text-white font-semibold rounded-xl transition-all shadow-lg shadow-primary-500/20">Apply Online</button>
                </div>
            </div>

            <!-- HR Callout -->
            <div class="bg-gray-800/20 border border-gray-800 rounded-3xl p-10 max-w-4xl mx-auto text-center space-y-6">
                <h3 class="text-2xl font-bold text-white">Equal Opportunity & Inclusion</h3>
                <p class="text-gray-400 text-sm leading-relaxed">Lumina University is an Equal Opportunity Employer committed to building a culturally diverse faculty and staff. We strongly encourage applications from female scholars, underrepresented groups, and individuals with disabilities.</p>
                <div class="pt-2">
                    <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 bg-gray-800 hover:bg-gray-700 border border-gray-700 text-white rounded-xl font-medium transition-all">Contact Human Resources</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Master Footer -->
    <x-footer />
</body>
</html>
