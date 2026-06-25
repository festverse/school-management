<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lumina University | Excellence in Truth and Service</title>
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
                    },
                    colors: {
                        bison: {
                            blue: '#002855',
                            red: '#E51937',
                            darkblue: '#001a38',
                            gold: '#FFB81C',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="antialiased bg-slate-50 text-slate-900 font-sans selection:bg-[#E51937] selection:text-white" x-data="{ highContrast: false, reduceMotion: false, showInquiryModal: false, showVideoModal: false }" :class="{ 'filter contrast-125': highContrast, 'scroll-smooth': !reduceMotion }">

    <!-- Floating Quick-Action Sidebar / Drawer -->
    <div x-data="{ openQuickActions: false }" class="fixed right-0 top-1/3 z-50 flex items-center">
        <!-- Main Pull Tab -->
        <button @click="openQuickActions = !openQuickActions" class="bg-[#E51937] hover:bg-[#B21B2A] text-white p-3 shadow-2xl flex flex-col items-center gap-2 rounded-l-xl transition-all duration-300 group border-l-2 border-y-2 border-white/20">
            <svg class="w-6 h-6 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
            <span class="writing-mode-vertical text-xs font-bold uppercase tracking-widest group-hover:scale-105 transition-transform" style="writing-mode: vertical-rl; text-orientation: mixed;">Experience & Actions</span>
        </button>

        <!-- Slide-out Drawer Panel -->
        <div x-show="openQuickActions" @click.away="openQuickActions = false" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" class="bg-[#002855] border-l-4 border-[#E51937] text-white w-80 p-6 shadow-2xl rounded-l-2xl absolute right-0 top-0 transform -translate-y-12">
            <div class="flex justify-between items-center pb-4 border-b border-white/10 mb-6">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-[#FFB81C]" fill="currentColor" viewBox="0 0 24 24"><path d="M12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/></svg>
                    <h3 class="font-serif font-bold text-lg tracking-wide">Quick Navigator</h3>
                </div>
                <button @click="openQuickActions = false" class="text-slate-400 hover:text-white p-1 rounded-lg bg-white/5 hover:bg-white/10 transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>
            <div class="space-y-4">
                <button @click="showVideoModal = true; openQuickActions = false" class="w-full text-left p-4 bg-white/5 hover:bg-white/10 border border-white/10 rounded-xl transition-all flex items-center gap-4 group">
                    <div class="p-2 bg-[#E51937] rounded-lg text-white group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-sm uppercase tracking-wider text-white group-hover:text-[#FFB81C] transition-colors">Immersive Campus Tour</h4>
                        <p class="text-xs text-slate-300 mt-0.5">Stream 4K Cinematic Experience</p>
                    </div>
                </button>
                <button @click="showInquiryModal = true; openQuickActions = false" class="w-full text-left p-4 bg-white/5 hover:bg-white/10 border border-white/10 rounded-xl transition-all flex items-center gap-4 group">
                    <div class="p-2 bg-[#003366] rounded-lg text-[#FFB81C] group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-sm uppercase tracking-wider text-white group-hover:text-[#FFB81C] transition-colors">Request Info Booklet</h4>
                        <p class="text-xs text-slate-300 mt-0.5">Connect with Admission Counselors</p>
                    </div>
                </button>
                <a href="{{ route('contact') }}" class="w-full text-left p-4 bg-white/5 hover:bg-white/10 border border-white/10 rounded-xl transition-all flex items-center gap-4 group block">
                    <div class="p-2 bg-[#E51937] rounded-lg text-white group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-sm uppercase tracking-wider text-white group-hover:text-[#FFB81C] transition-colors">Make A Gift</h4>
                        <p class="text-xs text-slate-300 mt-0.5">Invest in Truth & Service</p>
                    </div>
                </a>
                <a href="{{ route('admissions') }}" class="w-full text-left p-4 bg-white/5 hover:bg-white/10 border border-white/10 rounded-xl transition-all flex items-center gap-4 group block">
                    <div class="p-2 bg-[#003366] rounded-lg text-[#FFB81C] group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-sm uppercase tracking-wider text-white group-hover:text-[#FFB81C] transition-colors">Online Application</h4>
                        <p class="text-xs text-slate-300 mt-0.5">Begin Your Legacy Today</p>
                    </div>
                </a>
            </div>
            <div class="mt-8 pt-6 border-t border-white/10 text-center">
                <p class="text-[11px] text-slate-400 font-bold uppercase tracking-widest">Office of Undergraduate Admissions</p>
                <p class="text-xs text-[#FFB81C] font-bold mt-1">+1 (202) 806-6100</p>
            </div>
        </div>
    </div>

    <!-- Ambient Accessibility & Controls Widget -->
    <div x-data="{ openAccess: false }" class="fixed bottom-6 left-6 z-50">
        <div x-show="openAccess" @click.away="openAccess = false" x-transition class="mb-4 bg-[#002855] border-2 border-white/20 text-white p-6 rounded-2xl shadow-2xl w-80 space-y-6">
            <div class="flex justify-between items-center border-b border-white/10 pb-3">
                <h4 class="font-serif font-bold text-base text-[#FFB81C] flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
                    Immersive Display Controls
                </h4>
                <button @click="openAccess = false" class="text-slate-400 hover:text-white">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>
            <div class="space-y-4 text-sm font-medium">
                <div class="flex items-center justify-between p-2 rounded-lg bg-white/5">
                    <span>High Contrast Mode</span>
                    <button @click="highContrast = !highContrast" class="w-12 h-6 flex items-center rounded-full p-1 duration-300 cursor-pointer" :class="highContrast ? 'bg-[#E51937]' : 'bg-slate-600'">
                        <div class="bg-white w-4 h-4 rounded-full shadow-md transform duration-300" :class="highContrast ? 'translate-x-6' : 'translate-x-0'"></div>
                    </button>
                </div>
                <div class="flex items-center justify-between p-2 rounded-lg bg-white/5">
                    <span>Reduce Motion / Animations</span>
                    <button @click="reduceMotion = !reduceMotion" class="w-12 h-6 flex items-center rounded-full p-1 duration-300 cursor-pointer" :class="reduceMotion ? 'bg-[#E51937]' : 'bg-slate-600'">
                        <div class="bg-white w-4 h-4 rounded-full shadow-md transform duration-300" :class="reduceMotion ? 'translate-x-6' : 'translate-x-0'"></div>
                    </button>
                </div>
            </div>
            <p class="text-[11px] text-slate-300 leading-relaxed pt-2 border-t border-white/10">
                Engineered with elite interactive experience standards to ensure ultimate visual accessibility and engagement.
            </p>
        </div>
        <button @click="openAccess = !openAccess" class="flex items-center gap-3 bg-[#002855] hover:bg-[#001a38] text-white border border-white/20 px-5 py-3 rounded-full shadow-2xl hover:scale-105 transition-all duration-300 group">
            <svg class="w-5 h-5 text-[#FFB81C] group-hover:rotate-45 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
            <span class="text-xs font-bold uppercase tracking-wider">Immersive Controls</span>
        </button>
    </div>

    <!-- Live Breaking News & Research Alert Ticker -->
    <div x-data="{ 
        active: 0, 
        isPaused: false,
        announcements: [
            { tag: 'BREAKING', text: 'Lumina University Awarded $12M Quantum Defense Grant by Department of Defense', link: '{{ route('news-events') }}' },
            { tag: 'GLOBAL EXCELLENCE', text: 'Lumina Achieves Perfect QS Tier-1 World Ranking for Faculty Research & Impact', link: '{{ route('news-events') }}' },
            { tag: 'RESEARCH SPOTLIGHT', text: 'AI-Powered Mesoporous Carbon Nanomaterial Clinical Trials Begin This Fall', link: '{{ route('news-events') }}' },
            { tag: 'ADMISSIONS 2026', text: 'Applications Now Open for Undergraduate & Graduate Multi-Disciplinary Programs', link: '{{ route('admissions') }}' }
        ],
        init() {
            setInterval(() => {
                if (!this.isPaused) {
                    this.active = (this.active + 1) % this.announcements.length;
                }
            }, 5000);
        }
    }" class="bg-[#001a38] text-white border-b border-white/10 py-2.5 px-4 sm:px-8 lg:px-12 flex items-center justify-between z-50 relative shadow-md">
        <div class="flex items-center gap-4 overflow-hidden w-full">
            <div class="flex-shrink-0 flex items-center gap-2 bg-[#E51937] text-white px-3 py-1 rounded-full text-[10px] font-extrabold uppercase tracking-widest shadow">
                <span class="w-2 h-2 rounded-full bg-white animate-ping"></span>
                <span x-text="announcements[active].tag"></span>
            </div>
            <div class="truncate flex-1 text-xs font-bold tracking-wide text-slate-200 hover:text-white transition-colors cursor-pointer" @mouseenter="isPaused = true" @mouseleave="isPaused = false">
                <a :href="announcements[active].link" class="inline-flex items-center gap-2 hover:underline">
                    <span x-text="announcements[active].text"></span>
                    <svg class="w-3.5 h-3.5 text-[#FFB81C] inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
        </div>
        <div class="flex items-center gap-2 flex-shrink-0 pl-4">
            <button @click="active = (active - 1 + announcements.length) % announcements.length" class="p-1 hover:bg-white/10 rounded text-slate-400 hover:text-white transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            </button>
            <button @click="isPaused = !isPaused" class="p-1 hover:bg-white/10 rounded text-slate-400 hover:text-white transition-colors" :title="isPaused ? 'Play Ticker' : 'Pause Ticker'">
                <svg x-show="!isPaused" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9v6m4-6v6m7-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <svg x-show="isPaused" class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
            </button>
            <button @click="active = (active + 1) % announcements.length" class="p-1 hover:bg-white/10 rounded text-slate-400 hover:text-white transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </button>
        </div>
    </div>

    <!-- Auxiliary Top Bar -->
    <div class="bg-[#E51937] text-white text-xs font-bold uppercase tracking-widest py-2 px-4 sm:px-8 lg:px-12 flex justify-between items-center z-50 relative shadow-inner">
        <div class="hidden md:flex items-center space-x-6">
            <span>The Mecca of Excellence</span>
            <span>•</span>
            <span>Est. 1867</span>
            <span>•</span>
            <span>Legacy of Innovation</span>
        </div>
        <div class="flex items-center space-x-6 w-full md:w-auto justify-end">
            <a href="{{ route('admissions') }}" class="hover:underline transition-all">Apply</a>
            <a href="{{ route('virtual-tour') }}" class="hover:underline transition-all">Visit</a>
            <a href="{{ route('contact') }}" class="hover:underline transition-all">Give</a>
            <a href="#student-directory" class="hover:underline transition-all">Directory</a>
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
    <nav x-data="{ open: false, activeMenu: null }" class="bg-[#002855] border-b border-[#001a38] sticky top-0 z-40 shadow-lg transition-all duration-300">
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
                    <div class="relative group py-2">
                        <a href="{{ route('admissions') }}" class="hover:text-[#FFB81C] transition-colors inline-flex items-center gap-1">
                            Admission
                        </a>
                    </div>
                    <div class="relative group py-2">
                        <a href="{{ route('academics') }}" class="hover:text-[#FFB81C] transition-colors inline-flex items-center gap-1">
                            Academics
                        </a>
                    </div>
                    <div class="relative group py-2">
                        <a href="{{ route('irbs') }}" class="hover:text-[#FFB81C] transition-colors inline-flex items-center gap-1">
                            Research
                        </a>
                    </div>
                    <div class="relative group py-2">
                        <a href="{{ route('gymkhana') }}" class="hover:text-[#FFB81C] transition-colors inline-flex items-center gap-1">
                            Athletics & Clubs
                        </a>
                    </div>
                    <div class="relative group py-2">
                        <a href="{{ route('news-events') }}" class="hover:text-[#FFB81C] transition-colors inline-flex items-center gap-1">
                            News
                        </a>
                    </div>
                    <div class="relative group py-2">
                        <a href="{{ route('director-desk') }}" class="hover:text-[#FFB81C] transition-colors inline-flex items-center gap-1">
                            About
                        </a>
                    </div>
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
            <a href="{{ route('gymkhana') }}" class="block py-2 hover:text-[#FFB81C]">Athletics & Clubs</a>
            <a href="{{ route('news-events') }}" class="block py-2 hover:text-[#FFB81C]">News</a>
            <a href="{{ route('director-desk') }}" class="block py-2 hover:text-[#FFB81C]">About</a>
            <a href="{{ route('admissions') }}" class="block py-3 text-center bg-[#E51937] rounded-lg shadow font-bold text-white">Apply Now</a>
        </div>
    </nav>

    <!-- Immersive Cinematic Hero Section with High-End Interactive Controls -->
    <div x-data="{ 
        isPlaying: true, 
        isAudioMuted: true, 
        init() {
            this.$nextTick(() => {
                const vid = this.$refs.bgVideo;
                if (vid) {
                    vid.play().catch(e => {
                        console.log('Autoplay blocked by browser:', e);
                        this.isPlaying = false;
                    });
                }
            });
        },
        togglePlay() { 
            this.isPlaying = !this.isPlaying; 
            const vid = this.$refs.bgVideo; 
            if (vid) { this.isPlaying ? vid.play() : vid.pause(); } 
        },
        toggleAudio() {
            this.isAudioMuted = !this.isAudioMuted;
            const audio = this.$refs.ambientAudio;
            if (audio) { this.isAudioMuted ? audio.pause() : audio.play(); }
        }
    }" class="relative pt-32 pb-36 lg:pt-48 lg:pb-56 bg-[#002855] overflow-hidden flex items-center">
        
        <!-- Ambient Campus Audio Source -->
        <audio x-ref="ambientAudio" loop preload="auto">
            <source src="{{ asset('audio/ambient-campus.mp3') }}" type="audio/mpeg">
        </audio>

        <!-- Hero Background Media: Cinematic Video with Fallback -->
        <div class="absolute inset-0 z-0">
            <video x-ref="bgVideo" autoplay loop muted playsinline preload="auto" poster="https://images.unsplash.com/photo-1541336032412-2048a678540d?auto=format&fit=crop&q=80&w=2000" class="w-full h-full object-cover opacity-85 object-center filter contrast-110">
                <!-- High-End Local University Campus Cinematic Video -->
                <source src="{{ asset('videos/campus-tour.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="absolute inset-0 bg-gradient-to-r from-[#002855]/80 via-[#002855]/50 to-transparent"></div>
            <div class="absolute inset-0 bg-[#002855]/20 backdrop-contrast-105"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10 w-full">
            <div class="max-w-3xl space-y-8">
                <!-- High-End Dynamic Badge -->
                <div class="inline-flex items-center gap-3 px-4 py-2 bg-black/40 backdrop-blur-md text-white border border-white/20 rounded-full text-xs font-bold uppercase tracking-widest shadow-2xl">
                    <span class="w-2 h-2 rounded-full bg-[#E51937] animate-pulse"></span>
                    <span class="tracking-widest text-slate-100">Lumina Immersive Digital Experience</span>
                </div>

                <h1 class="text-5xl md:text-7xl font-serif font-black tracking-tight text-white leading-[1.1]">
                    Excellence in <br/>
                    <span class="text-[#FFB81C] bg-gradient-to-r from-[#FFB81C] to-amber-200 bg-clip-text text-transparent">Truth and Service</span>
                </h1>
                <p class="text-lg md:text-xl text-slate-200 font-normal leading-relaxed max-w-2xl">
                    Welcome to Lumina University. Founded on the legendary pillars of academic distinction, our private research institution prepares diverse, ambitious students to learn, lead, and embody global excellence.
                </p>
                
                <!-- Interactive Primary Actions -->
                <div class="flex flex-wrap gap-4 pt-4">
                    <a href="{{ route('academics') }}" class="px-8 py-4 text-sm font-bold uppercase tracking-wider text-white bg-[#E51937] hover:bg-[#B21B2A] rounded-xl transition-all shadow-2xl hover:-translate-y-1 flex items-center gap-2 group">
                        <span>Explore Our Programs</span>
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                    <button @click="showVideoModal = true" class="px-8 py-4 text-sm font-bold uppercase tracking-wider text-white bg-white/10 hover:bg-white/20 border border-white/30 rounded-xl transition-all backdrop-blur-md hover:-translate-y-1 flex items-center gap-3 group">
                        <div class="w-6 h-6 rounded-full bg-[#FFB81C] text-[#002855] flex items-center justify-center group-hover:scale-110 transition-transform">
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                        <span>Take Virtual Tour</span>
                    </button>
                </div>

                <!-- Interactive Ambient Hero Controls -->
                <div class="pt-8 border-t border-white/10 flex items-center gap-6 text-xs font-bold text-slate-300 uppercase tracking-widest">
                    <div class="flex items-center gap-3">
                        <button @click="togglePlay()" class="p-3 bg-white/10 hover:bg-white/20 border border-white/20 rounded-full text-white backdrop-blur-md transition-all flex items-center justify-center" :title="isPlaying ? 'Pause Background Video' : 'Play Background Video'">
                            <svg x-show="isPlaying" class="w-4 h-4 text-[#FFB81C]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9v6m4-6v6m7-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <svg x-show="!isPlaying" class="w-4 h-4 text-[#FFB81C]" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                        </button>
                        <span x-text="isPlaying ? 'Cinematic: Playing' : 'Cinematic: Paused'"></span>
                    </div>
                    <div class="flex items-center gap-3">
                        <button @click="toggleAudio()" class="p-3 bg-white/10 hover:bg-white/20 border border-white/20 rounded-full text-white backdrop-blur-md transition-all flex items-center justify-center" :title="isAudioMuted ? 'Unmute Ambient Audio' : 'Mute Ambient Audio'">
                            <svg x-show="isAudioMuted" class="w-4 h-4 text-[#E51937]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2"></path></svg>
                            <svg x-show="!isAudioMuted" class="w-4 h-4 text-[#FFB81C]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z"></path></svg>
                        </button>
                        <span x-text="isAudioMuted ? 'Ambient Audio: Muted' : 'Ambient Audio: Playing'"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Editorial Newsroom (Inspired by The Dig & HU2U) -->
    <div class="py-24 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            <div class="flex flex-col md:flex-row justify-between items-end border-b-2 border-[#002855] pb-6">
                <div>
                    <span class="text-xs font-bold text-[#E51937] uppercase tracking-widest mb-2 block">The Dig Newsroom</span>
                    <h2 class="text-4xl font-serif font-bold text-[#002855]">Latest News & Digital Publications</h2>
                </div>
                <a href="{{ route('news-events') }}" class="mt-6 md:mt-0 inline-flex items-center gap-2 text-[#002855] hover:text-[#E51937] font-bold text-sm uppercase tracking-wider transition-colors">
                    Explore The Dig Newsroom
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>

            <!-- Editorial News Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="bg-slate-50 border border-slate-200 rounded-xl overflow-hidden shadow-md flex flex-col group hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                    <div class="relative overflow-hidden h-56">
                        <img src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?auto=format&fit=crop&q=80&w=800" alt="Laboratory Research" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute top-4 left-4 bg-[#002855] text-white text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded shadow">Research</div>
                    </div>
                    <div class="p-8 flex-1 flex flex-col justify-between space-y-6">
                        <div>
                            <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2 block">June 24, 2026 • 5 Min Read</span>
                            <h3 class="text-xl font-serif font-bold text-[#002855] group-hover:text-[#E51937] transition-colors mb-3">AI-Powered Mesoporous Carbon Nanomaterials</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">Lumina researchers successfully synthesize next-generation carbon nanostructures capable of high-precision oncological drug delivery.</p>
                        </div>
                        <a href="{{ route('news-events') }}" class="inline-flex items-center gap-2 text-[#002855] font-bold text-sm hover:text-[#E51937] transition-colors">Read Full Article →</a>
                    </div>
                </div>

                <div class="bg-slate-50 border border-slate-200 rounded-xl overflow-hidden shadow-md flex flex-col group hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                    <div class="relative overflow-hidden h-56">
                        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&q=80&w=800" alt="Informatics Laboratory" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute top-4 left-4 bg-[#002855] text-white text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded shadow">HU2U Podcast</div>
                    </div>
                    <div class="p-8 flex-1 flex flex-col justify-between space-y-6">
                        <div>
                            <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2 block">May 18, 2026 • Episode 42</span>
                            <h3 class="text-xl font-serif font-bold text-[#002855] group-hover:text-[#E51937] transition-colors mb-3">$12M Grant Awarded for Quantum Fencing</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">The Department of Computer Science secures a multi-year national defense grant to establish lattice-based quantum cryptography protocols.</p>
                        </div>
                        <a href="{{ route('news-events') }}" class="inline-flex items-center gap-2 text-[#002855] font-bold text-sm hover:text-[#E51937] transition-colors">Listen to Podcast →</a>
                    </div>
                </div>

                <div class="bg-slate-50 border border-slate-200 rounded-xl overflow-hidden shadow-md flex flex-col group hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                    <div class="relative overflow-hidden h-56">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=800" alt="Students Collaboration" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute top-4 left-4 bg-[#002855] text-white text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded shadow">Global Impact</div>
                    </div>
                    <div class="p-8 flex-1 flex flex-col justify-between space-y-6">
                        <div>
                            <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2 block">April 30, 2026 • Press Release</span>
                            <h3 class="text-xl font-serif font-bold text-[#002855] group-hover:text-[#E51937] transition-colors mb-3">Lumina Achieves Perfect Global QS Tier-1 Rank</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">International academic evaluation councils rank Lumina University in the top 1% globally for faculty research citations and graduate employability.</p>
                        </div>
                        <a href="{{ route('news-events') }}" class="inline-flex items-center gap-2 text-[#002855] font-bold text-sm hover:text-[#E51937] transition-colors">View Institutional Audit →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Official Bulletin & Tenders -->
    <div class="py-24 bg-slate-100 border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            <div class="text-center max-w-3xl mx-auto">
                <span class="px-4 py-1.5 bg-[#002855] text-white rounded-full text-xs font-bold uppercase tracking-widest mb-4 inline-block">Institutional Bulletin</span>
                <h2 class="text-4xl font-serif font-bold text-[#002855] mb-4">Official Notices, Tenders & Careers</h2>
                <p class="text-slate-600 text-base leading-relaxed">Live announcements regarding faculty recruitment, public procurement tenders, student circulars, and ongoing national research projects.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Tenders & Procurement -->
                <div class="bg-white border border-slate-200 rounded-xl p-8 shadow-md flex flex-col justify-between group hover:shadow-xl transition-all duration-300">
                    <div>
                        <div class="flex items-center gap-3 mb-6 pb-4 border-b border-slate-100">
                            <svg class="w-7 h-7 text-[#002855] flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                                <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd" />
                            </svg>
                            <h3 class="text-xl font-serif font-bold text-[#002855]">Active Tenders & RFPs</h3>
                        </div>
                        <ul class="space-y-4 text-sm text-slate-700 mb-8 divide-y divide-slate-100">
                            <li class="pt-4 first:pt-0"><a href="{{ route('tenders') }}" class="hover:text-[#E51937] transition-colors block font-medium">LU/TEN/2026/089: 500-Node High Performance GPU Supercomputing Cluster</a></li>
                            <li class="pt-4"><a href="{{ route('tenders') }}" class="hover:text-[#E51937] transition-colors block font-medium">LU/TEN/2026/074: Construction of Advanced Mechatronics Lab Complex</a></li>
                            <li class="pt-4"><a href="{{ route('tenders') }}" class="hover:text-[#E51937] transition-colors block font-medium">LU/TEN/2026/062: AMC for Campus Optical Fiber Backbone Network</a></li>
                        </ul>
                    </div>
                    <a href="{{ route('tenders') }}" class="w-full py-3 bg-[#E51937] hover:bg-[#B21B2A] text-white font-bold text-sm uppercase tracking-wider rounded-lg shadow text-center block transition-all">View All Tenders</a>
                </div>

                <!-- Careers & Recruitment -->
                <div class="bg-white border border-slate-200 rounded-xl p-8 shadow-md flex flex-col justify-between group hover:shadow-xl transition-all duration-300">
                    <div>
                        <div class="flex items-center gap-3 mb-6 pb-4 border-b border-slate-100">
                            <svg class="w-7 h-7 text-[#002855] flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                            </svg>
                            <h3 class="text-xl font-serif font-bold text-[#002855]">Faculty & Staff Careers</h3>
                        </div>
                        <ul class="space-y-4 text-sm text-slate-700 mb-8 divide-y divide-slate-100">
                            <li class="pt-4 first:pt-0"><a href="{{ route('careers') }}" class="hover:text-[#E51937] transition-colors block font-medium">Assistant / Associate Professor in AI & Computer Vision (Tenure-Track)</a></li>
                            <li class="pt-4"><a href="{{ route('careers') }}" class="hover:text-[#E51937] transition-colors block font-medium">Principal Research Scientist - Mechatronics & Industrial IoT</a></li>
                            <li class="pt-4"><a href="{{ route('careers') }}" class="hover:text-[#E51937] transition-colors block font-medium">Chief Information Security Officer (CISO) - Campus Network Administration</a></li>
                        </ul>
                    </div>
                    <a href="{{ route('careers') }}" class="w-full py-3 bg-[#E51937] hover:bg-[#B21B2A] text-white font-bold text-sm uppercase tracking-wider rounded-lg shadow text-center block transition-all">Explore Open Positions</a>
                </div>

                <!-- General Circulars -->
                <div class="bg-white border border-slate-200 rounded-xl p-8 shadow-md flex flex-col justify-between group hover:shadow-xl transition-all duration-300">
                    <div>
                        <div class="flex items-center gap-3 mb-6 pb-4 border-b border-slate-100">
                            <svg class="w-7 h-7 text-[#002855] flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z" clip-rule="evenodd" />
                            </svg>
                            <h3 class="text-xl font-serif font-bold text-[#002855]">Student Circulars</h3>
                        </div>
                        <ul class="space-y-4 text-sm text-slate-700 mb-8 divide-y divide-slate-100">
                            <li class="pt-4 first:pt-0"><a href="{{ route('academics') }}" class="hover:text-[#E51937] transition-colors block font-medium">Important Notification: Autumn Semester 2026 Course Registration Schedule</a></li>
                            <li class="pt-4"><a href="{{ route('admissions') }}" class="hover:text-[#E51937] transition-colors block font-medium">Admissions 2026: Third Merit List & Fee Payment Deadlines</a></li>
                            <li class="pt-4"><a href="{{ route('asc') }}" class="hover:text-[#E51937] transition-colors block font-medium">ASC Guidelines for Issuance of Cryptographically Signed Transcripts</a></li>
                        </ul>
                    </div>
                    <a href="{{ route('academics') }}" class="w-full py-3 bg-[#E51937] hover:bg-[#B21B2A] text-white font-bold text-sm uppercase tracking-wider rounded-lg shadow text-center block transition-all">View Academic Circulars</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Interactive Tabbed Showcase: Academic Pillars & Centers of Excellence -->
    <div x-data="{ activeTab: 'coe' }" class="py-24 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            <div class="text-center max-w-3xl mx-auto">
                <span class="px-4 py-1.5 bg-[#E51937] text-white rounded-full text-xs font-bold uppercase tracking-widest mb-4 inline-block">Dynamic Institutional Showcase</span>
                <h2 class="text-4xl font-serif font-bold text-[#002855] mb-4">Pioneering Centers & Spotlights</h2>
                <p class="text-slate-600 text-base leading-relaxed">Explore our multi-disciplinary research facilities, student success stories, and global community engagement through our interactive showcase.</p>
                
                <!-- High-End Interactive Tab Buttons -->
                <div class="flex flex-wrap justify-center gap-2 mt-8 p-1.5 bg-slate-100 rounded-2xl border border-slate-200 shadow-inner">
                    <button @click="activeTab = 'coe'" class="px-6 py-3 rounded-xl text-xs font-bold uppercase tracking-wider transition-all duration-300" :class="activeTab === 'coe' ? 'bg-[#002855] text-white shadow-lg scale-105' : 'text-slate-600 hover:text-[#002855]'">
                        Centers of Excellence
                    </button>
                    <button @click="activeTab = 'impact'" class="px-6 py-3 rounded-xl text-xs font-bold uppercase tracking-wider transition-all duration-300" :class="activeTab === 'impact' ? 'bg-[#002855] text-white shadow-lg scale-105' : 'text-slate-600 hover:text-[#002855]'">
                        Global Research Impact
                    </button>
                    <button @click="activeTab = 'culture'" class="px-6 py-3 rounded-xl text-xs font-bold uppercase tracking-wider transition-all duration-300" :class="activeTab === 'culture' ? 'bg-[#002855] text-white shadow-lg scale-105' : 'text-slate-600 hover:text-[#002855]'">
                        Campus Culture & Life
                    </button>
                </div>
            </div>

            <!-- Tab Content 1: Centers of Excellence -->
            <div x-show="activeTab === 'coe'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0" class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- CoE Robotics -->
                <div class="bg-slate-50 border border-slate-200 rounded-xl overflow-hidden shadow-md flex flex-col group hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                    <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=800" alt="Advanced Manufacturing" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="p-8 flex-1 flex flex-col justify-between space-y-6">
                        <div>
                            <h3 class="text-2xl font-serif font-bold text-[#002855] mb-3">CoE in Advanced Manufacturing & Robotics</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">Pioneering multi-axis CNC precision machining, direct metal laser sintering (DMLS) 3D printing, and 6-axis industrial robotic arms for automated assembly.</p>
                        </div>
                        <a href="{{ route('coe-robotics') }}" class="w-full py-3.5 bg-[#002855] hover:bg-[#E51937] text-white font-bold uppercase tracking-wider text-sm rounded-lg text-center block shadow transition-all">Explore CoE Robotics</a>
                    </div>
                </div>

                <!-- CoE AI -->
                <div class="bg-slate-50 border border-slate-200 rounded-xl overflow-hidden shadow-md flex flex-col group hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                    <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&q=80&w=800" alt="Artificial Intelligence" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="p-8 flex-1 flex flex-col justify-between space-y-6">
                        <div>
                            <h3 class="text-2xl font-serif font-bold text-[#002855] mb-3">CoE in Artificial Intelligence & Machine Learning</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">Housing the 500-GPU PARAM-Lumina supercomputing cluster. Driving breakthroughs in foundation LLM pretraining, autonomous driving vision, and quantum simulation.</p>
                        </div>
                        <a href="{{ route('coe-ai') }}" class="w-full py-3.5 bg-[#002855] hover:bg-[#E51937] text-white font-bold uppercase tracking-wider text-sm rounded-lg text-center block shadow transition-all">Explore CoE AI</a>
                    </div>
                </div>

                <!-- CoE Smart Cities -->
                <div class="bg-slate-50 border border-slate-200 rounded-xl overflow-hidden shadow-md flex flex-col group hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=800" alt="Smart Cities" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="p-8 flex-1 flex flex-col justify-between space-y-6">
                        <div>
                            <h3 class="text-2xl font-serif font-bold text-[#002855] mb-3">CoE in Urban Infrastructure & Smart Cities</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">Developing smart metropolitan ecosystems through 6-DoF seismic earthquake shake tables, microscopic IoT traffic grid simulation, and satellite GIS intelligence.</p>
                        </div>
                        <a href="{{ route('coe-smart-cities') }}" class="w-full py-3.5 bg-[#002855] hover:bg-[#E51937] text-white font-bold uppercase tracking-wider text-sm rounded-lg text-center block shadow transition-all">Explore CoE Smart Cities</a>
                    </div>
                </div>
            </div>

            <!-- Tab Content 2: Global Research Impact -->
            <div x-show="activeTab === 'impact'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0" class="grid grid-cols-1 md:grid-cols-3 gap-10" style="display: none;">
                <div class="bg-slate-50 border border-slate-200 rounded-xl overflow-hidden shadow-md flex flex-col group hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                    <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&q=80&w=800" alt="Medical Innovation" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="p-8 flex-1 flex flex-col justify-between space-y-6">
                        <div>
                            <h3 class="text-2xl font-serif font-bold text-[#002855] mb-3">Bio-Medical Excellence & Nanotechnology</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">Partnering with leading federal health institutes to design bio-compatible nanobots capable of detecting cellular anomalies in real-time.</p>
                        </div>
                        <a href="{{ route('irbs') }}" class="w-full py-3.5 bg-[#E51937] hover:bg-[#B21B2A] text-white font-bold uppercase tracking-wider text-sm rounded-lg text-center block shadow transition-all">Review Research Publications</a>
                    </div>
                </div>
                <div class="bg-slate-50 border border-slate-200 rounded-xl overflow-hidden shadow-md flex flex-col group hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                    <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&q=80&w=800" alt="Quantum Satellite" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="p-8 flex-1 flex flex-col justify-between space-y-6">
                        <div>
                            <h3 class="text-2xl font-serif font-bold text-[#002855] mb-3">Satellite GIS & Global Climate Observation</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">Deploying state-of-the-art micro-satellites in low Earth orbit to gather high-precision meteorological data for global climate modeling.</p>
                        </div>
                        <a href="{{ route('irbs') }}" class="w-full py-3.5 bg-[#E51937] hover:bg-[#B21B2A] text-white font-bold uppercase tracking-wider text-sm rounded-lg text-center block shadow transition-all">Review Research Publications</a>
                    </div>
                </div>
                <div class="bg-slate-50 border border-slate-200 rounded-xl overflow-hidden shadow-md flex flex-col group hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=800" alt="Global Scholars" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="p-8 flex-1 flex flex-col justify-between space-y-6">
                        <div>
                            <h3 class="text-2xl font-serif font-bold text-[#002855] mb-3">Global Scholar Exchange & Treaties</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">Hosting world-renowned scholars and maintaining active bilateral agreements with top-tier universities across North America, Europe, and Asia.</p>
                        </div>
                        <a href="{{ route('irbs') }}" class="w-full py-3.5 bg-[#E51937] hover:bg-[#B21B2A] text-white font-bold uppercase tracking-wider text-sm rounded-lg text-center block shadow transition-all">Review Research Publications</a>
                    </div>
                </div>
            </div>

            <!-- Tab Content 3: Campus Culture & Life -->
            <div x-show="activeTab === 'culture'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0" class="grid grid-cols-1 md:grid-cols-3 gap-10" style="display: none;">
                <div class="bg-slate-50 border border-slate-200 rounded-xl overflow-hidden shadow-md flex flex-col group hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                    <img src="https://images.unsplash.com/photo-1523580846011-d3a5bc25702b?auto=format&fit=crop&q=80&w=800" alt="Graduation Celebration" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="p-8 flex-1 flex flex-col justify-between space-y-6">
                        <div>
                            <h3 class="text-2xl font-serif font-bold text-[#002855] mb-3">Historic Traditions & Academic Excellence</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">Steeped in vibrant institutional heritage, our student body celebrates multi-cultural events, rigorous debates, and lifelong community bonds.</p>
                        </div>
                        <a href="{{ route('gymkhana') }}" class="w-full py-3.5 bg-[#002855] hover:bg-[#E51937] text-white font-bold uppercase tracking-wider text-sm rounded-lg text-center block shadow transition-all">Explore Student Clubs</a>
                    </div>
                </div>
                <div class="bg-slate-50 border border-slate-200 rounded-xl overflow-hidden shadow-md flex flex-col group hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                    <img src="https://images.unsplash.com/photo-1517649763962-0c623266ddbe?auto=format&fit=crop&q=80&w=800" alt="High-Tech Athletics" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="p-8 flex-1 flex flex-col justify-between space-y-6">
                        <div>
                            <h3 class="text-2xl font-serif font-bold text-[#002855] mb-3">Championship Athletics & Recreation</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">Featuring Olympic-grade aquatic centers, expansive turf stadiums, and highly competitive varsity athletic programs that foster team leadership.</p>
                        </div>
                        <a href="{{ route('gymkhana') }}" class="w-full py-3.5 bg-[#002855] hover:bg-[#E51937] text-white font-bold uppercase tracking-wider text-sm rounded-lg text-center block shadow transition-all">Explore Student Clubs</a>
                    </div>
                </div>
                <div class="bg-slate-50 border border-slate-200 rounded-xl overflow-hidden shadow-md flex flex-col group hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&q=80&w=800" alt="Vibrant Library" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="p-8 flex-1 flex flex-col justify-between space-y-6">
                        <div>
                            <h3 class="text-2xl font-serif font-bold text-[#002855] mb-3">Dynamic Multi-Storey Innovation Commons</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">Open 24/7, our state-of-the-art academic libraries provide collaborative huddle rooms, AR/VR studios, and quiet research sanctuaries.</p>
                        </div>
                        <a href="{{ route('gymkhana') }}" class="w-full py-3.5 bg-[#002855] hover:bg-[#E51937] text-white font-bold uppercase tracking-wider text-sm rounded-lg text-center block shadow transition-all">Explore Student Clubs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vibrant Milestones & Numbers That Speak -->
    <div class="py-24 bg-[#002855] border-y border-[#001a38] text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            <div class="text-center max-w-3xl mx-auto">
                <span class="px-4 py-1.5 bg-[#E51937] text-white rounded-full text-xs font-bold uppercase tracking-widest mb-4 inline-block">Milestones & Achievements</span>
                <h2 class="text-4xl font-serif font-bold mb-4">Numbers That Speak</h2>
                <p class="text-slate-300 text-base">Lumina University stands proudly as a benchmark of research funding, faculty excellence, and industrial synergy in higher education.</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="bg-[#003366] border border-[#004080] rounded-2xl p-8 text-center shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between h-full">
                    <div class="flex-1 flex items-center justify-center mb-4">
                        <h3 class="text-4xl md:text-6xl font-serif font-black text-white">$5.5M+</h3>
                    </div>
                    <div class="min-h-[3.5rem] flex items-center justify-center">
                        <p class="text-[#FFB81C] font-semibold text-sm uppercase tracking-wider">Active Research Funding</p>
                    </div>
                </div>
                <div class="bg-[#003366] border border-[#004080] rounded-2xl p-8 text-center shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between h-full">
                    <div class="flex-1 flex items-center justify-center mb-4">
                        <h3 class="text-4xl md:text-6xl font-serif font-black text-white">100%</h3>
                    </div>
                    <div class="min-h-[3.5rem] flex items-center justify-center">
                        <p class="text-[#FFB81C] font-semibold text-sm uppercase tracking-wider">Ph.D. Holding Faculty</p>
                    </div>
                </div>
                <div class="bg-[#003366] border border-[#004080] rounded-2xl p-8 text-center shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between h-full">
                    <div class="flex-1 flex items-center justify-center mb-4">
                        <h3 class="text-4xl md:text-6xl font-serif font-black text-white">50+</h3>
                    </div>
                    <div class="min-h-[3.5rem] flex items-center justify-center">
                        <p class="text-[#FFB81C] font-semibold text-sm uppercase tracking-wider">Global Industrial MoUs</p>
                    </div>
                </div>
                <div class="bg-[#003366] border border-[#004080] rounded-2xl p-8 text-center shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between h-full">
                    <div class="flex-1 flex items-center justify-center mb-4">
                        <h3 class="text-4xl md:text-6xl font-serif font-black text-white">25+</h3>
                    </div>
                    <div class="min-h-[3.5rem] flex items-center justify-center">
                        <p class="text-[#FFB81C] font-semibold text-sm uppercase tracking-wider">High-Tech Laboratories</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Innovation & Incubation (SSIP) and Placement Desk -->
    <div class="py-24 bg-slate-100 border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- SSIP Incubation Card -->
                <div class="bg-white border border-slate-200 rounded-2xl p-12 shadow-lg flex flex-col justify-between space-y-8 hover:shadow-2xl transition-all duration-300">
                    <div class="space-y-6">
                        <span class="px-4 py-1.5 bg-[#E51937] text-white rounded-full text-xs font-bold uppercase tracking-widest inline-block">Student Startup & Innovation Policy (SSIP)</span>
                        <h3 class="text-3xl font-serif font-bold text-[#002855]">Lumina Innovation & Incubation Center</h3>
                        <p class="text-slate-600 text-base leading-relaxed">Empowering visionary student entrepreneurs with state-of-the-art makerspaces, elite venture capital mentorship, and non-dilutive seed grants up to ₹25 Lakhs. Over 40+ deep-tech startups successfully incubated.</p>
                    </div>
                    <a href="{{ route('incubation') }}" class="w-full py-4 bg-[#E51937] hover:bg-[#B21B2A] text-white font-bold uppercase tracking-wider text-sm rounded-lg text-center block shadow transition-all hover:-translate-y-1">Enter Incubation Portal</a>
                </div>

                <!-- Placement Desk Card -->
                <div class="bg-white border border-slate-200 rounded-2xl p-12 shadow-lg flex flex-col justify-between space-y-8 hover:shadow-2xl transition-all duration-300">
                    <div class="space-y-6">
                        <span class="px-4 py-1.5 bg-[#E51937] text-white rounded-full text-xs font-bold uppercase tracking-widest inline-block">Global Career Launchpad</span>
                        <h3 class="text-3xl font-serif font-bold text-[#002855]">Placement & Training Cell</h3>
                        <p class="text-slate-600 text-base leading-relaxed">Maintaining strong talent supply agreements with world leaders. Offering exceptional summer internships and full-time career packages with a record highest CTC of ₹62.5 LPA across 350+ global hiring partners.</p>
                    </div>
                    <a href="{{ route('placement-cell') }}" class="w-full py-4 bg-[#E51937] hover:bg-[#B21B2A] text-white font-bold uppercase tracking-wider text-sm rounded-lg text-center block shadow transition-all hover:-translate-y-1">View Placement Records</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Director General's Vision Desk -->
    <div class="py-24 bg-white border-b border-slate-200">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-slate-50 border border-slate-200 rounded-3xl p-12 shadow-xl flex flex-col md:flex-row gap-12 items-center">
                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=800" alt="Director General" class="w-52 h-52 rounded-full object-cover border-4 border-[#002855] shadow-xl flex-shrink-0">
                <div class="space-y-6">
                    <div>
                        <span class="px-3 py-1 bg-[#E51937] text-white rounded-full text-xs font-bold uppercase tracking-widest mb-3 inline-block">Executive Desk</span>
                        <h3 class="text-3xl font-serif font-bold text-[#002855] mb-1">Prof. Dr. Alistair Vance</h3>
                        <p class="text-[#E51937] font-bold text-sm tracking-wide">Director General, Lumina University (Ph.D., Stanford University)</p>
                    </div>
                    <blockquote class="text-slate-700 text-base leading-relaxed italic border-l-4 border-[#002855] pl-6 font-serif">
                        "Welcome to Lumina University, an elite temple of advanced technological learning and multi-disciplinary research. Our foundational ethos mirrors premier institutions worldwide—to forge resilient, highly skilled innovators capable of solving humanity's most complex infrastructure, manufacturing, and computing challenges."
                    </blockquote>
                    <div class="pt-2">
                        <a href="{{ route('director-desk') }}" class="inline-flex items-center gap-2 text-[#002855] hover:text-[#E51937] font-bold text-sm uppercase tracking-wider transition-colors">Read Full Strategic Message →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Student Directory Preview -->
    <div id="student-directory" class="py-24 bg-slate-50 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end border-b-2 border-[#002855] pb-6 mb-12">
                <div>
                    <span class="text-xs font-bold text-[#E51937] uppercase tracking-widest mb-2 block">Our Dynamic Community</span>
                    <h2 class="text-4xl font-serif font-bold text-[#002855]">Student Directory</h2>
                    <p class="text-slate-600 max-w-2xl mt-2 text-sm">Browse our diverse community of scholars, researchers, and innovators. Connect with peers across different departments and disciplines.</p>
                </div>
                <form action="{{ route('search-welcome') }}" method="GET" class="w-full md:w-auto mt-6 md:mt-0">
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                            <svg class="w-5 h-5 text-slate-400 group-focus-within:text-[#002855] transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </div>
                        <input type="text" name="search" class="block w-full md:w-80 p-3.5 pl-11 text-sm text-slate-900 bg-white border border-slate-300 rounded-lg shadow-sm focus:ring-2 focus:ring-[#002855] focus:border-[#002855] placeholder-slate-400 transition-all" placeholder="Search by name, course, or ID...">
                    </div>
                </form>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @forelse (((request()->routeIs('search-welcome') || request()->has('search')) ? $students : $students->take(8)) as $student)
                    <div class="group relative bg-white border border-slate-200 rounded-xl p-6 hover:border-[#002855] transition-all duration-300 hover:-translate-y-1 shadow-sm hover:shadow-xl">
                        <div class="flex items-start gap-4">
                            <img src="https://randomuser.me/api/portraits/{{ (strtolower($student->gender) === 'female') ? 'women' : 'men' }}/{{ $student->id % 90 }}.jpg" alt="{{ $student->fName }}" class="w-16 h-16 rounded-full object-cover border-2 border-slate-200 group-hover:border-[#002855] transition-colors">
                            <div>
                                <h3 class="text-lg font-serif font-bold text-[#002855] group-hover:text-[#E51937] transition-colors">{{ $student->fName }} {{ $student->lName }}</h3>
                                <p class="text-xs font-bold text-slate-600 mb-2">{{ $student->course }}</p>
                                
                                @if ($student->enrolled === 'Enrolled')
                                    <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-bold bg-green-100 text-green-800 border border-green-200">Active</span>
                                @else
                                    <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-bold bg-slate-100 text-slate-700 border border-slate-200">{{ $student->enrolled }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mt-6 pt-4 border-t border-slate-100 grid grid-cols-2 gap-y-2 gap-x-4 text-sm">
                            <div>
                                <span class="text-slate-400 text-[10px] font-bold block uppercase tracking-wider mb-0.5">Student ID</span>
                                <span class="text-slate-700 font-semibold">{{ $student->studentId }}</span>
                            </div>
                            <div>
                                <span class="text-slate-400 text-[10px] font-bold block uppercase tracking-wider mb-0.5">Year</span>
                                <span class="text-slate-700 font-semibold">{{ $student->age }}</span>
                            </div>
                            <div class="col-span-2">
                                <span class="text-slate-400 text-[10px] font-bold block uppercase tracking-wider mb-0.5">Location</span>
                                <span class="text-slate-700 font-semibold">{{ $student->city }}, {{ $student->province }}</span>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full py-12 text-center text-slate-500 bg-white rounded-xl border border-slate-200 border-dashed shadow-sm">
                        No students found in the directory.
                    </div>
                @endforelse
            </div>
            
            @if(request()->routeIs('search-welcome') || request()->has('search'))
                <div class="mt-12 pt-6 border-t border-slate-200 flex justify-center">
                    {{ $students->links() }}
                </div>
            @elseif($students->count() > 8)
            <div class="mt-12 text-center">
                <a href="{{ route('search-welcome') }}" class="inline-flex items-center gap-2 text-white bg-[#002855] hover:bg-[#E51937] font-bold text-sm uppercase tracking-wider px-8 py-4 rounded-lg shadow-lg transition-all hover:-translate-y-1">
                    View Full Directory 
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
            @endif
        </div>
    </div>

    <!-- Interactive Cinematic Modals -->
    <!-- Virtual Tour Video Modal -->
    <div x-show="showVideoModal" class="fixed inset-0 z-50 overflow-y-auto" style="display: none;">
        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div x-show="showVideoModal" @click="showVideoModal = false" x-transition:enter="transition-opacity ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 transition-opacity bg-black/80 backdrop-blur-sm"></div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>
            <div x-show="showVideoModal" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-[#002855] rounded-2xl shadow-2xl sm:my-8 sm:align-middle sm:max-w-4xl sm:w-full sm:p-6 border border-white/20">
                <div class="flex justify-between items-center pb-4 border-b border-white/10 mb-6">
                    <h3 class="text-2xl font-serif font-bold text-white flex items-center gap-3">
                        <svg class="w-8 h-8 text-[#FFB81C]" fill="currentColor" viewBox="0 0 24 24"><path d="M12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/></svg>
                        Lumina University Cinematic Campus Tour
                    </h3>
                    <button @click="showVideoModal = false" class="text-slate-400 hover:text-white p-2 rounded-lg bg-white/5 hover:bg-white/10 transition-all">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>
                <div class="relative aspect-video rounded-xl overflow-hidden shadow-2xl bg-black border border-white/10">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1&mute=1&loop=1&playlist=dQw4w9WgXcQ" title="Virtual Tour Stream" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="mt-6 flex flex-wrap justify-between items-center gap-4 pt-4 border-t border-white/10">
                    <p class="text-sm text-slate-300 font-medium">Ready to take the next step in your academic journey?</p>
                    <div class="flex gap-4">
                        <a href="{{ route('admissions') }}" class="px-6 py-3 bg-[#E51937] hover:bg-[#B21B2A] text-white font-bold text-sm uppercase tracking-wider rounded-xl shadow-lg transition-all">Begin Application</a>
                        <button @click="showVideoModal = false" class="px-6 py-3 bg-white/10 hover:bg-white/20 text-white font-bold text-sm uppercase tracking-wider rounded-xl transition-all border border-white/20">Close Experience</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Request Info Booklet Modal -->
    <div x-show="showInquiryModal" class="fixed inset-0 z-50 overflow-y-auto" style="display: none;">
        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div x-show="showInquiryModal" @click="showInquiryModal = false" x-transition:enter="transition-opacity ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 transition-opacity bg-black/80 backdrop-blur-sm"></div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>
            <div x-show="showInquiryModal" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-2xl shadow-2xl sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full sm:p-8 border border-slate-200">
                <div class="flex justify-between items-center pb-4 border-b border-slate-200 mb-6">
                    <div>
                        <span class="text-xs font-bold text-[#E51937] uppercase tracking-widest mb-1 block">Institutional Inquiry Desk</span>
                        <h3 class="text-2xl font-serif font-bold text-[#002855]">Request Information Booklet</h3>
                    </div>
                    <button @click="showInquiryModal = false" class="text-slate-400 hover:text-slate-600 p-2 rounded-lg bg-slate-100 hover:bg-slate-200 transition-all">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>
                <form action="{{ route('contact') }}" method="GET" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-[#002855] mb-2">First Name</label>
                            <input type="text" required class="w-full p-3.5 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 focus:ring-2 focus:ring-[#002855] focus:border-[#002855] transition-all font-medium" placeholder="John">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-[#002855] mb-2">Last Name</label>
                            <input type="text" required class="w-full p-3.5 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 focus:ring-2 focus:ring-[#002855] focus:border-[#002855] transition-all font-medium" placeholder="Doe">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-[#002855] mb-2">Email Address</label>
                        <input type="email" required class="w-full p-3.5 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 focus:ring-2 focus:ring-[#002855] focus:border-[#002855] transition-all font-medium" placeholder="student@example.com">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-[#002855] mb-2">Program of Interest</label>
                        <select class="w-full p-3.5 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 focus:ring-2 focus:ring-[#002855] focus:border-[#002855] transition-all font-medium">
                            <option>B.S. in Artificial Intelligence & Robotics</option>
                            <option>B.S. in Advanced Mechatronics</option>
                            <option>B.S. in Civil Engineering & Smart Cities</option>
                            <option>Ph.D. in Computer Science & Quantum Cryptography</option>
                            <option>M.B.A. in Deep-Tech Venture Incubation</option>
                        </select>
                    </div>
                    <div class="pt-4 border-t border-slate-200 flex justify-end gap-4">
                        <button type="button" @click="showInquiryModal = false" class="px-6 py-3.5 bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold text-sm uppercase tracking-wider rounded-xl transition-all">Cancel</button>
                        <button type="submit" class="px-8 py-3.5 bg-[#E51937] hover:bg-[#B21B2A] text-white font-bold text-sm uppercase tracking-wider rounded-xl shadow-lg transition-all hover:-translate-y-0.5">Submit Request</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Master Footer -->
    <x-footer />
</body>
</html>
