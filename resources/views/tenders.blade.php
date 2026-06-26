<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tenders & Public Procurement | Lumina University</title>
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
    @include('components.smooth-scroll')
</head>
<body class="antialiased bg-slate-50 text-slate-900 font-sans selection:bg-[#E51937] selection:text-white">
    <!-- Auxiliary Top Bar -->
    <div class="bg-[#E51937] text-white text-xs font-bold uppercase tracking-widest py-2 px-4 sm:px-8 lg:px-12 flex justify-between items-center z-50 relative shadow-inner">
        <div class="hidden md:flex items-center space-x-6">
            <span>The Mecca of Excellence</span>
            <span>•</span>
            <span>Est. 1867</span>
            <span>•</span>
            <span>Institutional Operations</span>
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
                    <a href="{{ route('gymkhana') }}" class="hover:text-[#FFB81C] transition-colors">Athletics & Clubs</a>
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
            <a href="{{ route('gymkhana') }}" class="block py-2 hover:text-[#FFB81C]">Athletics & Clubs</a>
            <a href="{{ route('news-events') }}" class="block py-2 hover:text-[#FFB81C]">News</a>
            <a href="{{ route('director-desk') }}" class="block py-2 hover:text-[#FFB81C]">About</a>
            <a href="{{ route('admissions') }}" class="block py-3 text-center bg-[#E51937] rounded-lg shadow font-bold text-white">Apply Now</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative pt-24 pb-28 bg-[#002855] text-white border-b border-[#001a38]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6">
            <span class="text-xs font-bold uppercase tracking-widest text-[#FFB81C] px-3 py-1 bg-[#001a38] rounded-full border border-slate-700 inline-block">Institutional Bulletin</span>
            <h1 class="text-5xl md:text-6xl font-serif font-black tracking-tight">
                Tenders & <span class="text-[#FFB81C]">Public Procurement</span>
            </h1>
            <p class="max-w-3xl text-lg text-slate-200 mx-auto font-normal leading-relaxed">
                Official institutional notice board for open tenders, Request for Proposals (RFPs), laboratory equipment procurement, and infrastructure development contracts.
            </p>
        </div>
    </div>

    <!-- Tenders Table Section -->
    <div class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            <div class="bg-white border border-slate-200 rounded-2xl overflow-hidden shadow-lg p-8 md:p-12">
                <h2 class="text-3xl font-serif font-bold text-[#002855] mb-8">Active Tenders (2026-2027)</h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b-2 border-[#002855] text-[#002855] text-sm font-bold uppercase tracking-wider">
                                <th class="py-4 px-6">Tender No. / Ref ID</th>
                                <th class="py-4 px-6">Name of Work / Procurement</th>
                                <th class="py-4 px-6">Estimated Cost</th>
                                <th class="py-4 px-6">Closing Date</th>
                                <th class="py-4 px-6">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200 text-sm text-slate-700">
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="py-5 px-6 font-bold text-[#002855]">LU/TEN/2026/089</td>
                                <td class="py-5 px-6 font-medium">Supply, Installation, and Commissioning of 500-Node High Performance GPU Supercomputing Cluster for AI CoE.</td>
                                <td class="py-5 px-6 font-bold text-[#E51937]">₹14,50,00,000</td>
                                <td class="py-5 px-6 text-slate-500 font-medium">15th August 2026, 17:00 IST</td>
                                <td class="py-5 px-6"><button onclick="alert('Tender document encryption key verified. Downloading official RFP zip file...')" class="px-5 py-2.5 bg-[#002855] hover:bg-[#E51937] text-white rounded-lg font-bold text-xs uppercase tracking-wider transition-all shadow">Download RFP</button></td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="py-5 px-6 font-bold text-[#002855]">LU/TEN/2026/074</td>
                                <td class="py-5 px-6 font-medium">Construction of Advanced Mechatronics & Robotics Laboratory Complex (Package-II Building Works).</td>
                                <td class="py-5 px-6 font-bold text-[#E51937]">₹28,80,00,000</td>
                                <td class="py-5 px-6 text-slate-500 font-medium">30th July 2026, 15:00 IST</td>
                                <td class="py-5 px-6"><button onclick="alert('Tender document encryption key verified. Downloading official RFP zip file...')" class="px-5 py-2.5 bg-[#002855] hover:bg-[#E51937] text-white rounded-lg font-bold text-xs uppercase tracking-wider transition-all shadow">Download RFP</button></td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="py-5 px-6 font-bold text-[#002855]">LU/TEN/2026/062</td>
                                <td class="py-5 px-6 font-medium">Annual Maintenance Contract (AMC) for Campus-Wide Optical Fiber Gigabit Backbone Network & Cisco Core Switches.</td>
                                <td class="py-5 px-6 font-bold text-[#E51937]">₹3,20,00,000</td>
                                <td class="py-5 px-6 text-slate-500 font-medium">22nd July 2026, 14:00 IST</td>
                                <td class="py-5 px-6"><button onclick="alert('Tender document encryption key verified. Downloading official RFP zip file...')" class="px-5 py-2.5 bg-[#002855] hover:bg-[#E51937] text-white rounded-lg font-bold text-xs uppercase tracking-wider transition-all shadow">Download RFP</button></td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="py-5 px-6 font-bold text-[#002855]">LU/TEN/2026/051</td>
                                <td class="py-5 px-6 font-medium">Procurement of Cryogenic Electron Microscope (Cryo-EM) for Nanotechnology Research Center.</td>
                                <td class="py-5 px-6 font-bold text-[#E51937]">₹18,00,00,000</td>
                                <td class="py-5 px-6 text-slate-500 font-medium">10th July 2026, 17:00 IST</td>
                                <td class="py-5 px-6"><button onclick="alert('Tender document encryption key verified. Downloading official RFP zip file...')" class="px-5 py-2.5 bg-[#002855] hover:bg-[#E51937] text-white rounded-lg font-bold text-xs uppercase tracking-wider transition-all shadow">Download RFP</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Pre-Bid Guidelines -->
            <div class="bg-white border border-slate-200 rounded-2xl p-10 max-w-4xl mx-auto text-center space-y-6 shadow-md">
                <h3 class="text-2xl font-serif font-bold text-[#002855]">Important Instructions for Bidders</h3>
                <p class="text-slate-600 text-sm leading-relaxed">All registered vendors and engineering contractors must submit their technical bids and commercial quotations via the national e-Procurement portal. Earnest Money Deposit (EMD) must be submitted via bank guarantee in favor of the Registrar, Lumina University.</p>
                <div class="pt-2">
                    <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-4 bg-[#E51937] hover:bg-[#B21B2A] text-white rounded-lg font-bold text-sm uppercase tracking-wider transition-all shadow-lg hover:-translate-y-0.5">Contact Tender Office</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Master Footer -->
    <x-footer />
</body>
</html>
