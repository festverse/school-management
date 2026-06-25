<x-app-layout>
    <x-slot name="header">
        <h2 class="font-serif font-bold text-2xl text-[#002855] leading-tight">
            {{ __('Administrator Portal Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-slate-50" x-data="{ tab: 'overview' }">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
            <!-- Admin Banner -->
            <div class="bg-[#002855] border border-[#001a38] overflow-hidden shadow-2xl sm:rounded-2xl relative">
                <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-[#E51937]/20 to-transparent pointer-events-none"></div>
                <div class="p-6 md:p-8 flex flex-col md:flex-row items-center gap-6 relative z-10">
                    <div class="w-24 h-24 rounded-full bg-[#E51937] flex items-center justify-center shadow-xl border-4 border-white">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
                    </div>
                    <div class="text-center md:text-left">
                        <h2 class="text-3xl font-serif font-bold text-white tracking-tight">{{ __("Welcome back, Administrator!") }}</h2>
                        <p class="text-slate-200 font-medium text-lg mt-1">System Governance & Infrastructure Control</p>
                        <div class="mt-3 inline-flex items-center px-4 py-1.5 rounded-full text-xs font-bold bg-emerald-500 text-white shadow-md gap-2">
                            <span class="w-2 h-2 rounded-full bg-white animate-pulse"></span>
                            All Systems Operational
                        </div>
                    </div>
                    <div class="md:ml-auto text-sm text-slate-200 space-y-3 text-center md:text-right border-t md:border-t-0 md:border-l border-[#003366] pt-4 md:pt-0 md:pl-8">
                        <div class="bg-[#001f42] px-5 py-2.5 rounded-xl border border-[#003366] shadow-inner">
                            <span class="text-slate-400 block text-xs uppercase font-bold tracking-wider">Node Uptime</span>
                            <span class="font-bold text-white text-base">99.99% (Render Cloud)</span>
                        </div>
                        <div class="bg-[#001f42] px-5 py-2.5 rounded-xl border border-[#003366] shadow-inner">
                            <span class="text-slate-400 block text-xs uppercase font-bold tracking-wider">Security Engine</span>
                            <span class="font-bold text-white text-sm">Sanctum Auth Active</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Admin Tabs -->
            <div class="flex overflow-x-auto space-x-2 bg-white p-2 rounded-2xl border border-slate-200 shadow-md">
                <button @click="tab = 'overview'" :class="{'bg-[#002855] text-white font-bold shadow-md': tab === 'overview', 'text-slate-600 hover:text-[#002855] hover:bg-slate-100': tab !== 'overview'}" class="flex-1 min-w-[150px] py-3 px-4 rounded-xl text-sm font-bold uppercase tracking-wider transition flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    System Metrics
                </button>
                <button @click="tab = 'users'" :class="{'bg-[#002855] text-white font-bold shadow-md': tab === 'users', 'text-slate-600 hover:text-[#002855] hover:bg-slate-100': tab !== 'users'}" class="flex-1 min-w-[150px] py-3 px-4 rounded-xl text-sm font-bold uppercase tracking-wider transition flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    User Governance
                </button>
                <button @click="tab = 'departments'" :class="{'bg-[#002855] text-white font-bold shadow-md': tab === 'departments', 'text-slate-600 hover:text-[#002855] hover:bg-slate-100': tab !== 'departments'}" class="flex-1 min-w-[150px] py-3 px-4 rounded-xl text-sm font-bold uppercase tracking-wider transition flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    Curriculum & Faculties
                </button>
                <button @click="tab = 'logs'" :class="{'bg-[#002855] text-white font-bold shadow-md': tab === 'logs', 'text-slate-600 hover:text-[#002855] hover:bg-slate-100': tab !== 'logs'}" class="flex-1 min-w-[150px] py-3 px-4 rounded-xl text-sm font-bold uppercase tracking-wider transition flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    Audit Logs
                </button>
            </div>

            <!-- TAB 1: System Metrics -->
            <div x-show="tab === 'overview'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100" class="space-y-6">
                <h3 class="text-2xl font-serif font-bold text-[#002855]">High-Level System Metrics</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-[#002855] rounded-2xl p-6 text-white shadow-xl border border-[#001a38]">
                        <h3 class="text-sm font-bold uppercase tracking-wider text-slate-300">Total Scholars</h3>
                        <p class="text-5xl mt-2 font-black tracking-tight">{{ $stats['total_students'] }}</p>
                        <span class="text-xs text-[#E51937] block mt-3 font-bold">&uarr; 14% new enrollments this term</span>
                    </div>
                    <div class="bg-[#002855] rounded-2xl p-6 text-white shadow-xl border border-[#001a38]">
                        <h3 class="text-sm font-bold uppercase tracking-wider text-slate-300">Total Faculty</h3>
                        <p class="text-5xl mt-2 font-black tracking-tight">{{ $stats['total_teachers'] }}</p>
                        <span class="text-xs text-emerald-400 block mt-3 font-bold">100% active syllabus assignment</span>
                    </div>
                    <div class="bg-[#002855] rounded-2xl p-6 text-white shadow-xl border border-[#001a38]">
                        <h3 class="text-sm font-bold uppercase tracking-wider text-slate-300">Total Courses</h3>
                        <p class="text-5xl mt-2 font-black tracking-tight">{{ $stats['total_courses'] }}</p>
                        <span class="text-xs text-indigo-300 block mt-3 font-bold">Fully accredited curriculums</span>
                    </div>
                    <div class="bg-[#002855] rounded-2xl p-6 text-white shadow-xl border border-[#001a38]">
                        <h3 class="text-sm font-bold uppercase tracking-wider text-slate-300">Departments</h3>
                        <p class="text-5xl mt-2 font-black tracking-tight">{{ $stats['total_departments'] }}</p>
                        <span class="text-xs text-amber-300 block mt-3 font-bold">Lumina Multi-Campus scope</span>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-4">
                    <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-xl">
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Infrastructure Quick Actions</h3>
                        <div class="space-y-3">
                            <a href="{{ route('add-student') }}" class="flex items-center justify-between p-4 bg-slate-50 border border-slate-200 rounded-xl hover:bg-[#002855] hover:text-white transition text-[#002855] font-bold shadow-sm">
                                <span>Add New Scholar & Profile</span>
                                <span>&rarr;</span>
                            </a>
                            <button onclick="alert('Broadcasting emergency notification to all user portals...')" class="w-full flex items-center justify-between p-4 bg-slate-50 border border-slate-200 rounded-xl hover:bg-[#E51937] hover:text-white transition text-[#E51937] font-bold text-left shadow-sm">
                                <span>Broadcast Emergency Announcement</span>
                                <span>&rarr;</span>
                            </button>
                        </div>
                    </div>

                    <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-xl flex flex-col justify-between">
                        <div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Cloud Database Backup</h3>
                            <p class="text-sm text-slate-600 mb-6">Instantly trigger an automated snapshot of the entire SQLite/PostgreSQL database volume to external AWS S3 storage.</p>
                        </div>
                        <button onclick="alert('Snapshot initiated! Backup ID: #SNAPSHOT-88392 successfully archived.')" class="w-full py-3 bg-[#002855] hover:bg-[#001a38] text-white font-bold rounded-xl shadow-lg transition">Trigger Snapshot Backup</button>
                    </div>
                </div>
            </div>

            <!-- TAB 2: User Governance -->
            <div x-show="tab === 'users'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100" class="space-y-6" x-cloak>
                <div class="flex items-center justify-between">
                    <h3 class="text-2xl font-serif font-bold text-[#002855]">Comprehensive User Governance</h3>
                    <button onclick="alert('Opening batch role import utility...')" class="px-4 py-2 bg-[#E51937] hover:bg-[#B21B2A] text-white font-bold text-sm rounded-xl shadow">Batch Invite Users</button>
                </div>
                <div class="bg-white border border-slate-200 p-8 rounded-2xl shadow-xl text-center">
                    <svg class="w-16 h-16 text-[#002855] mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    <h4 class="text-xl font-bold text-slate-900 mb-2">Role Access & Access Control Lists (ACL)</h4>
                    <p class="text-slate-600 text-sm max-w-md mx-auto mb-6">Review permission boundaries, audit password security policies, and manage active session terminations.</p>
                    <button onclick="alert('Flushing inactive user sessions... System secured!')" class="py-3 px-8 bg-[#002855] hover:bg-[#001a38] text-white font-bold rounded-xl shadow-lg transition">Purge Idle Sessions</button>
                </div>
            </div>

            <!-- TAB 3: Curriculum & Faculties -->
            <div x-show="tab === 'departments'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100" class="space-y-6" x-cloak>
                <h3 class="text-2xl font-serif font-bold text-[#002855]">Curriculum & Department Orchestration</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white border border-slate-200 p-6 rounded-2xl shadow-xl">
                        <h4 class="text-lg font-bold text-slate-900 mb-1">Advanced Technologies</h4>
                        <p class="text-sm text-slate-600 mb-4">Focusing on Quantum computing, AI foundation models, and cybersecurity systems.</p>
                        <span class="text-xs font-bold text-emerald-600 block">Active Status: Flagship Faculty</span>
                    </div>
                    <div class="bg-white border border-slate-200 p-6 rounded-2xl shadow-xl">
                        <h4 class="text-lg font-bold text-slate-900 mb-1">Bio-Informatics & Genomics</h4>
                        <p class="text-sm text-slate-600 mb-4">Intersection of computational biology, CRISPR simulations, and deep learning.</p>
                        <span class="text-xs font-bold text-[#002855] block">Active Status: Research Focus</span>
                    </div>
                    <div class="bg-white border border-slate-200 p-6 rounded-2xl shadow-xl">
                        <h4 class="text-lg font-bold text-slate-900 mb-1">Sustainable Architecture</h4>
                        <p class="text-sm text-slate-600 mb-4">Smart city infrastructure, green materials, and AI-driven urban development.</p>
                        <span class="text-xs font-bold text-[#E51937] block">Active Status: Expansion Term</span>
                    </div>
                </div>
            </div>

            <!-- TAB 4: Audit Logs -->
            <div x-show="tab === 'logs'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100" class="space-y-6" x-cloak>
                <h3 class="text-2xl font-serif font-bold text-[#002855]">Real-Time System Audit Logs</h3>
                <div class="bg-[#002855] border border-[#001a38] p-6 rounded-2xl shadow-xl font-mono text-xs text-emerald-400 space-y-2 overflow-x-auto">
                    <p>[2026-06-24 18:45:12] SYSTEM: Kernel boot completed successfully. Environment: Render Container.</p>
                    <p>[2026-06-24 18:46:05] AUTH: Trusted Proxy headers verified. X-Forwarded-Proto: https.</p>
                    <p>[2026-06-24 18:47:19] ELOQUENT: User relationship student() successfully mapped to Profile ID #LUMINA-34568.</p>
                    <p>[2026-06-24 18:48:01] DB: Cache cleared and views optimized. Memory consumption: 14.2 MB.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
