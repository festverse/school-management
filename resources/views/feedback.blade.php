<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Institutional Feedback Form - Lumina University</title>
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
                Institutional <span class="text-gradient">Feedback Form</span>
            </h1>
            <p class="max-w-2xl text-lg text-gray-400 mx-auto font-light">
                Your feedback directly shapes the future of Lumina University. Rate academic curriculum quality, campus infrastructure, and administrative support ecosystems.
            </p>
        </div>
    </div>

    <!-- Content Section -->
    <div class="py-24 bg-gray-900">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            <div class="bg-gray-800/40 border border-gray-700/50 rounded-3xl p-8 md:p-12 shadow-2xl">
                <form onsubmit="event.preventDefault(); alert('Thank you for your valuable feedback! Your evaluation has been recorded in the central institutional quality assessment database.');" class="space-y-6">
                    <h2 class="text-2xl font-display font-bold text-white mb-6">Submit Your Institutional Evaluation</h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">Category of Feedback</label>
                            <select class="w-full p-4 bg-gray-900 border border-gray-700 rounded-xl text-white focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all">
                                <option>Academic Curriculum & Lecture Quality</option>
                                <option>Campus Infrastructure & Laboratory Equipment</option>
                                <option>Library & Computational Resources</option>
                                <option>Dining, Living & Student Commons Amenities</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">Overall Satisfaction Rating</label>
                            <select class="w-full p-4 bg-gray-900 border border-gray-700 rounded-xl text-white focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all">
                                <option>⭐⭐⭐⭐⭐ Excellent (World-Class)</option>
                                <option>⭐⭐⭐⭐ Very Good</option>
                                <option>⭐⭐⭐ Satisfactory</option>
                                <option>⭐⭐ Needs Improvement</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">Constructive Suggestions & Comments</label>
                        <textarea rows="6" required class="w-full p-4 bg-gray-900 border border-gray-700 rounded-xl text-white focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all" placeholder="Provide actionable recommendations or specific observations regarding your campus experience..."></textarea>
                    </div>
                    <button type="submit" class="w-full py-4 text-base font-semibold text-white bg-primary-600 hover:bg-primary-500 rounded-xl transition-all shadow-lg shadow-primary-600/25 hover:-translate-y-0.5">
                        Submit Evaluation Survey
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Master Footer -->
    <x-footer />
</body>
</html>
