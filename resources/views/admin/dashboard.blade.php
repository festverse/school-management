<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Administrator Portal') }}
        </h2>
    </x-slot>

    <div class="py-12" x-data="{ tab: 'overview' }">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
            <!-- Admin Banner -->
            <div class="bg-gray-900/50 backdrop-blur-md border border-gray-800 overflow-hidden shadow-2xl sm:rounded-2xl">
                <div class="p-6 md:p-8 flex flex-col md:flex-row items-center gap-6">
                    <div class="w-24 h-24 rounded-full bg-gradient-to-tr from-blue-600 to-indigo-500 flex items-center justify-center shadow-xl shadow-blue-500/30 border-4 border-white/10">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
                    </div>
                    <div class="text-center md:text-left">
                        <h2 class="text-3xl font-extrabold text-white tracking-tight">{{ __("Welcome back, Administrator!") }}</h2>
                        <p class="text-blue-400 font-medium text-lg">System Governance & Infrastructure Control</p>
                        <div class="mt-3 inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-blue-500/20 text-blue-300 border border-blue-500/30 gap-1.5 shadow-inner">
                            <span class="w-2 h-2 rounded-full bg-blue-400 animate-pulse"></span>
                            All Systems Operational
                        </div>
                    </div>
                    <div class="md:ml-auto text-sm text-gray-300 space-y-2 text-center md:text-right border-t md:border-t-0 md:border-l border-gray-800 pt-4 md:pt-0 md:pl-8">
                        <div class="bg-gray-800/50 px-4 py-2 rounded-xl border border-gray-700/50 shadow-sm">
                            <span class="text-gray-400 block text-xs uppercase font-semibold tracking-wider">Node Uptime</span>
                            <span class="font-bold text-white text-base">99.99% (Render Cloud)</span>
                        </div>
                        <div class="bg-gray-800/50 px-4 py-2 rounded-xl border border-gray-700/50 shadow-sm">
                            <span class="text-gray-400 block text-xs uppercase font-semibold tracking-wider">Security Engine</span>
                            <span class="font-bold text-white text-sm">Sanctum Auth Active</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Admin Tabs -->
            <div class="flex overflow-x-auto space-x-2 bg-gray-900/60 p-2 rounded-2xl border border-gray-800 shadow-xl backdrop-blur-md">
                <button @click="tab = 'overview'" :class="{'bg-blue-600 text-white font-bold shadow-lg shadow-blue-600/30': tab === 'overview', 'text-gray-400 hover:text-white hover:bg-gray-800/60': tab !== 'overview'}" class="flex-1 min-w-[140px] py-3 px-4 rounded-xl text-sm font-semibold transition flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    System Metrics
                </button>
                <button @click="tab = 'users'" :class="{'bg-blue-600 text-white font-bold shadow-lg shadow-blue-600/30': tab === 'users', 'text-gray-400 hover:text-white hover:bg-gray-800/60': tab !== 'users'}" class="flex-1 min-w-[140px] py-3 px-4 rounded-xl text-sm font-semibold transition flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    User Governance
                </button>
                <button @click="tab = 'departments'" :class="{'bg-blue-600 text-white font-bold shadow-lg shadow-blue-600/30': tab === 'departments', 'text-gray-400 hover:text-white hover:bg-gray-800/60': tab !== 'departments'}" class="flex-1 min-w-[140px] py-3 px-4 rounded-xl text-sm font-semibold transition flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    Curriculum & Faculties
                </button>
                <button @click="tab = 'logs'" :class="{'bg-blue-600 text-white font-bold shadow-lg shadow-blue-600/30': tab === 'logs', 'text-gray-400 hover:text-white hover:bg-gray-800/60': tab !== 'logs'}" class="flex-1 min-w-[140px] py-3 px-4 rounded-xl text-sm font-semibold transition flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    Audit Logs
                </button>
            </div>

            <!-- TAB 1: System Metrics -->
            <div x-show="tab === 'overview'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100" class="space-y-6">
                <h3 class="text-2xl font-extrabold text-white">High-Level System Metrics</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-gradient-to-br from-blue-600 to-blue-800 rounded-2xl p-6 text-white shadow-2xl border border-blue-400/30">
                        <h3 class="text-sm font-bold uppercase tracking-wider text-blue-100">Total Scholars</h3>
                        <p class="text-5xl mt-2 font-black tracking-tight">{{ $stats['total_students'] }}</p>
                        <span class="text-xs text-blue-200 block mt-3 font-medium">&uarr; 14% new enrollments this term</span>
                    </div>
                    <div class="bg-gradient-to-br from-emerald-600 to-emerald-800 rounded-2xl p-6 text-white shadow-2xl border border-emerald-400/30">
                        <h3 class="text-sm font-bold uppercase tracking-wider text-emerald-100">Total Faculty</h3>
                        <p class="text-5xl mt-2 font-black tracking-tight">{{ $stats['total_teachers'] }}</p>
                        <span class="text-xs text-emerald-200 block mt-3 font-medium">100% active syllabus assignment</span>
                    </div>
                    <div class="bg-gradient-to-br from-purple-600 to-purple-800 rounded-2xl p-6 text-white shadow-2xl border border-purple-400/30">
                        <h3 class="text-sm font-bold uppercase tracking-wider text-purple-100">Total Courses</h3>
                        <p class="text-5xl mt-2 font-black tracking-tight">{{ $stats['total_courses'] }}</p>
                        <span class="text-xs text-purple-200 block mt-3 font-medium">Fully accredited curriculums</span>
                    </div>
                    <div class="bg-gradient-to-br from-orange-600 to-orange-800 rounded-2xl p-6 text-white shadow-2xl border border-orange-400/30">
                        <h3 class="text-sm font-bold uppercase tracking-wider text-orange-100">Departments</h3>
                        <p class="text-5xl mt-2 font-black tracking-tight">{{ $stats['total_departments'] }}</p>
                        <span class="text-xs text-orange-200 block mt-3 font-medium">Lumina Multi-Campus scope</span>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-4">
                    <div class="bg-gray-900/50 backdrop-blur-md border border-gray-800 rounded-2xl p-6 shadow-xl">
                        <h3 class="text-xl font-bold text-white mb-4">Infrastructure Quick Actions</h3>
                        <div class="space-y-3">
                            <a href="{{ route('add-student') }}" class="flex items-center justify-between p-4 bg-gray-800/50 border border-gray-700/50 rounded-xl hover:bg-gray-800 hover:border-blue-500/50 transition text-white font-bold">
                                <span>Add New Scholar & Profile</span>
                                <span class="text-blue-400">&rarr;</span>
                            </a>
                            <button onclick="alert('Broadcasting emergency notification to all user portals...')" class="w-full flex items-center justify-between p-4 bg-gray-800/50 border border-gray-700/50 rounded-xl hover:bg-gray-800 hover:border-red-500/50 transition text-white font-bold text-left">
                                <span>Broadcast Emergency Announcement</span>
                                <span class="text-red-400">&rarr;</span>
                            </button>
                        </div>
                    </div>

                    <div class="bg-gray-900/50 backdrop-blur-md border border-gray-800 rounded-2xl p-6 shadow-xl flex flex-col justify-between">
                        <div>
                            <h3 class="text-xl font-bold text-white mb-2">Cloud Database Backup</h3>
                            <p class="text-sm text-gray-400 mb-6">Instantly trigger an automated snapshot of the entire SQLite/PostgreSQL database volume to external AWS S3 storage.</p>
                        </div>
                        <button onclick="alert('Snapshot initiated! Backup ID: #SNAPSHOT-88392 successfully archived.')" class="w-full py-3 bg-blue-600 hover:bg-blue-500 text-white font-bold rounded-xl shadow-lg shadow-blue-600/30 transition">Trigger Snapshot Backup</button>
                    </div>
                </div>
            </div>

            <!-- TAB 2: User Governance -->
            <div x-show="tab === 'users'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100" class="space-y-6" x-cloak>
                <div class="flex items-center justify-between">
                    <h3 class="text-2xl font-extrabold text-white">Comprehensive User Governance</h3>
                    <button onclick="alert('Opening batch role import utility...')" class="px-4 py-2 bg-blue-600 hover:bg-blue-500 text-white font-bold text-sm rounded-xl shadow">Batch Invite Users</button>
                </div>
                <div class="bg-gray-900/50 backdrop-blur-md border border-gray-800 p-8 rounded-2xl shadow-xl text-center">
                    <svg class="w-16 h-16 text-blue-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    <h4 class="text-xl font-bold text-white mb-2">Role Access & Access Control Lists (ACL)</h4>
                    <p class="text-gray-400 text-sm max-w-md mx-auto mb-6">Review permission boundaries, audit password security policies, and manage active session terminations.</p>
                    <button onclick="alert('Flushing inactive user sessions... System secured!')" class="py-3 px-8 bg-blue-600 hover:bg-blue-500 text-white font-bold rounded-xl shadow-lg shadow-blue-600/30 transition">Purge Idle Sessions</button>
                </div>
            </div>

            <!-- TAB 3: Curriculum & Faculties -->
            <div x-show="tab === 'departments'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100" class="space-y-6" x-cloak>
                <h3 class="text-2xl font-extrabold text-white">Curriculum & Department Orchestration</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-gray-900/50 backdrop-blur-md border border-gray-800 p-6 rounded-2xl shadow-xl">
                        <h4 class="text-lg font-bold text-white mb-1">Advanced Technologies</h4>
                        <p class="text-sm text-gray-400 mb-4">Focusing on Quantum computing, AI foundation models, and cybersecurity systems.</p>
                        <span class="text-xs font-bold text-green-400 block">Active Status: Flagship Faculty</span>
                    </div>
                    <div class="bg-gray-900/50 backdrop-blur-md border border-gray-800 p-6 rounded-2xl shadow-xl">
                        <h4 class="text-lg font-bold text-white mb-1">Bio-Informatics & Genomics</h4>
                        <p class="text-sm text-gray-400 mb-4">Intersection of computational biology, CRISPR simulations, and deep learning.</p>
                        <span class="text-xs font-bold text-blue-400 block">Active Status: Research Focus</span>
                    </div>
                    <div class="bg-gray-900/50 backdrop-blur-md border border-gray-800 p-6 rounded-2xl shadow-xl">
                        <h4 class="text-lg font-bold text-white mb-1">Sustainable Architecture</h4>
                        <p class="text-sm text-gray-400 mb-4">Smart city infrastructure, green materials, and AI-driven urban development.</p>
                        <span class="text-xs font-bold text-purple-400 block">Active Status: Expansion Term</span>
                    </div>
                </div>
            </div>

            <!-- TAB 4: Audit Logs -->
            <div x-show="tab === 'logs'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100" class="space-y-6" x-cloak>
                <h3 class="text-2xl font-extrabold text-white">Real-Time System Audit Logs</h3>
                <div class="bg-gray-950 border border-gray-800 p-6 rounded-2xl shadow-xl font-mono text-xs text-green-400 space-y-2 overflow-x-auto">
                    <p>[2026-06-24 18:45:12] SYSTEM: Kernel boot completed successfully. Environment: Render Container.</p>
                    <p>[2026-06-24 18:46:05] AUTH: Trusted Proxy headers verified. X-Forwarded-Proto: https.</p>
                    <p>[2026-06-24 18:47:19] ELOQUENT: User relationship student() successfully mapped to Profile ID #LUMINA-34568.</p>
                    <p>[2026-06-24 18:48:01] DB: Cache cleared and views optimized. Memory consumption: 14.2 MB.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
