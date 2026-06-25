<x-app-layout>
    <x-slot name="header">
        <h2 class="font-serif font-bold text-2xl text-[#002855] leading-tight">
            {{ __('Faculty Portal Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-slate-50" x-data="{ tab: 'classes', showGradeModal: false, selectedCourse: '' }">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
            <!-- Faculty Banner -->
            <div class="bg-[#002855] border border-[#001a38] overflow-hidden shadow-2xl sm:rounded-2xl relative">
                <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-[#E51937]/20 to-transparent pointer-events-none"></div>
                <div class="p-6 md:p-8 flex flex-col md:flex-row items-center gap-6 relative z-10">
                    <img src="https://randomuser.me/api/portraits/men/{{ Auth::id() % 90 }}.jpg" alt="Faculty Profile" class="w-28 h-28 rounded-full border-4 border-[#E51937] shadow-xl object-cover">
                    <div class="text-center md:text-left">
                        <h2 class="text-3xl font-serif font-bold text-white tracking-tight">{{ Auth::user()->name }}</h2>
                        <p class="text-slate-200 font-medium text-lg mt-1">Senior Faculty & Course Director</p>
                        <div class="mt-3 inline-flex items-center px-4 py-1.5 rounded-full text-xs font-bold bg-[#E51937] text-white shadow-md gap-2">
                            <span class="w-2 h-2 rounded-full bg-white animate-pulse"></span>
                            Tenured Professor
                        </div>
                    </div>
                    <div class="md:ml-auto text-sm text-slate-200 space-y-3 text-center md:text-right border-t md:border-t-0 md:border-l border-[#003366] pt-4 md:pt-0 md:pl-8">
                        <div class="bg-[#001f42] px-5 py-2.5 rounded-xl border border-[#003366] shadow-inner">
                            <span class="text-slate-400 block text-xs uppercase font-bold tracking-wider">Department</span>
                            <span class="font-bold text-white text-base">Advanced Technologies</span>
                        </div>
                        <div class="bg-[#001f42] px-5 py-2.5 rounded-xl border border-[#003366] shadow-inner">
                            <span class="text-slate-400 block text-xs uppercase font-bold tracking-wider">Academic Email</span>
                            <span class="font-bold text-white text-sm">{{ Auth::user()->email }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Faculty Tabs -->
            <div class="flex overflow-x-auto space-x-2 bg-white p-2 rounded-2xl border border-slate-200 shadow-md">
                <button @click="tab = 'classes'" :class="{'bg-[#002855] text-white font-bold shadow-md': tab === 'classes', 'text-slate-600 hover:text-[#002855] hover:bg-slate-100': tab !== 'classes'}" class="flex-1 min-w-[150px] py-3 px-4 rounded-xl text-sm font-bold uppercase tracking-wider transition flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path></svg>
                    My Classes
                </button>
                <button @click="tab = 'attendance'" :class="{'bg-[#002855] text-white font-bold shadow-md': tab === 'attendance', 'text-slate-600 hover:text-[#002855] hover:bg-slate-100': tab !== 'attendance'}" class="flex-1 min-w-[150px] py-3 px-4 rounded-xl text-sm font-bold uppercase tracking-wider transition flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
                    Attendance Tracker
                </button>
                <button @click="tab = 'office_hours'" :class="{'bg-[#002855] text-white font-bold shadow-md': tab === 'office_hours', 'text-slate-600 hover:text-[#002855] hover:bg-slate-100': tab !== 'office_hours'}" class="flex-1 min-w-[150px] py-3 px-4 rounded-xl text-sm font-bold uppercase tracking-wider transition flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Office Hours
                </button>
                <button @click="tab = 'research'" :class="{'bg-[#002855] text-white font-bold shadow-md': tab === 'research', 'text-slate-600 hover:text-[#002855] hover:bg-slate-100': tab !== 'research'}" class="flex-1 min-w-[150px] py-3 px-4 rounded-xl text-sm font-bold uppercase tracking-wider transition flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                    Research & Grants
                </button>
            </div>

            <!-- TAB 1: My Classes -->
            <div x-show="tab === 'classes'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100" class="space-y-6">
                <div class="flex items-center justify-between">
                    <h3 class="text-2xl font-serif font-bold text-[#002855]">Your Classes This Semester</h3>
                    <span class="px-4 py-1.5 bg-[#002855] text-white font-bold text-sm rounded-xl shadow-sm">Active Roster</span>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @forelse($classes as $class)
                        <div class="bg-white overflow-hidden shadow-xl rounded-2xl border border-slate-200 hover:border-[#002855] transition flex flex-col justify-between">
                            <div class="p-6">
                                <span class="px-3 py-1 bg-slate-100 text-[#002855] text-xs font-bold rounded-lg border border-slate-200 mb-3 inline-block">{{ $class->semester }} {{ $class->year }}</span>
                                <h4 class="text-xl font-bold text-slate-900 mb-1">{{ $class->course->name }}</h4>
                                <p class="text-sm text-slate-600 font-semibold mb-4">{{ $class->course->code }}</p>
                                
                                <div class="flex items-center gap-2 mb-4 text-sm text-slate-500 font-medium">
                                    <svg class="w-4 h-4 text-[#E51937]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    {{ $class->schedule }}
                                </div>

                                <div class="flex items-center justify-between mt-6 pt-4 border-t border-slate-100 text-sm">
                                    <span class="font-bold text-slate-700">
                                        {{ $class->enrollments->count() }} Students Enrolled
                                    </span>
                                    <button @click="showGradeModal = true; selectedCourse = '{{ $class->course->name }}'" class="text-[#E51937] hover:text-[#B21B2A] font-bold flex items-center gap-1 transition">Manage Grades &rarr;</button>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-full bg-white p-12 text-center rounded-2xl border border-slate-200 shadow-xl">
                            <svg class="w-12 h-12 text-slate-400 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                            <p class="text-slate-500 font-medium text-base">You currently have no classes assigned for this term.</p>
                        </div>
                    @endforelse
                </div>
            </div>

            <!-- TAB 2: Attendance Tracker -->
            <div x-show="tab === 'attendance'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100" class="space-y-6" x-cloak>
                <h3 class="text-2xl font-serif font-bold text-[#002855]">Daily Attendance Log Portal</h3>
                <div class="bg-white border border-slate-200 p-8 rounded-2xl shadow-xl text-center">
                    <svg class="w-16 h-16 text-[#002855] mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
                    <h4 class="text-xl font-bold text-slate-900 mb-2">Automated RFID & Manual Attendance Check</h4>
                    <p class="text-slate-600 text-sm max-w-md mx-auto mb-6">Instantly log attendance for your active sections or sync with campus classroom entry access scanners.</p>
                    <button onclick="alert('Synchronizing biometric & classroom access logs... Attendance successfully recorded!')" class="py-3 px-8 bg-[#E51937] hover:bg-[#B21B2A] text-white font-bold rounded-xl shadow-lg transition">Log Today's Attendance</button>
                </div>
            </div>

            <!-- TAB 3: Office Hours -->
            <div x-show="tab === 'office_hours'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100" class="space-y-6" x-cloak>
                <h3 class="text-2xl font-serif font-bold text-[#002855]">Office Hours & Advising Appointments</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white border border-slate-200 p-6 rounded-2xl shadow-xl">
                        <h4 class="text-lg font-bold text-slate-900 mb-1">Current Availability Schedule</h4>
                        <p class="text-sm text-slate-600 mb-4">Students can book 15-minute consultation slots.</p>
                        <ul class="space-y-3 text-sm text-slate-700 font-medium">
                            <li class="flex items-center justify-between bg-slate-50 p-3 rounded-xl border border-slate-200">
                                <span>Mondays & Wednesdays</span>
                                <span class="text-[#002855] font-bold">1:00 PM - 3:00 PM</span>
                            </li>
                            <li class="flex items-center justify-between bg-slate-50 p-3 rounded-xl border border-slate-200">
                                <span>Thursdays</span>
                                <span class="text-[#002855] font-bold">10:00 AM - 12:00 PM</span>
                            </li>
                        </ul>
                    </div>
                    <div class="bg-white border border-slate-200 p-6 rounded-2xl shadow-xl flex flex-col justify-between">
                        <div>
                            <h4 class="text-lg font-bold text-slate-900 mb-1">Appointment Calendar Sync</h4>
                            <p class="text-sm text-slate-600 mb-6">Link your office hours directly with Microsoft Outlook or Google Workspace calendar slots.</p>
                        </div>
                        <button onclick="alert('OAuth Calendar sync completed! Appointments are now active.')" class="w-full py-3 bg-[#002855] hover:bg-[#001a38] text-white font-bold rounded-xl shadow-lg transition">Sync External Calendar</button>
                    </div>
                </div>
            </div>

            <!-- TAB 4: Research & Grants -->
            <div x-show="tab === 'research'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100" class="space-y-6" x-cloak>
                <h3 class="text-2xl font-serif font-bold text-[#002855]">Research Grants & Active Publications</h3>
                <div class="bg-white border border-slate-200 p-6 rounded-2xl shadow-xl flex items-center justify-between">
                    <div>
                        <span class="px-3 py-1 bg-emerald-100 text-emerald-800 text-xs font-bold rounded-lg border border-emerald-200 mb-2 inline-block">NSF Grant #8849-AI</span>
                        <h4 class="text-xl font-bold text-slate-900">Advanced Generative AI Foundation Models</h4>
                        <p class="text-sm text-slate-600">Awarded $450,000 for empirical research in agentic workflows and multi-modal autonomous evaluation.</p>
                    </div>
                    <button onclick="alert('Downloading Grant Report Summary...')" class="py-2.5 px-6 bg-[#002855] hover:bg-[#001a38] text-white font-bold rounded-xl shadow-lg transition whitespace-nowrap">View Abstract</button>
                </div>
            </div>
        </div>

        <!-- Simulated Grade Management Modal -->
        <div x-show="showGradeModal" class="fixed inset-0 z-50 overflow-y-auto flex items-center justify-center p-4 bg-black/60 backdrop-blur-sm" x-cloak>
            <div @click.away="showGradeModal = false" class="bg-white border border-slate-200 w-full max-w-lg rounded-2xl shadow-2xl p-6 space-y-6 text-left">
                <div class="flex items-center justify-between border-b border-slate-200 pb-4">
                    <h3 class="text-xl font-serif font-bold text-[#002855]" x-text="'Gradebook: ' + selectedCourse"></h3>
                    <button @click="showGradeModal = false" class="text-slate-400 hover:text-slate-600 font-bold text-lg">&times;</button>
                </div>
                <p class="text-sm text-slate-600">Enter midterm and final evaluation marks for enrolled scholars. Grades will automatically publish to student portals.</p>
                <div class="space-y-4">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Select Evaluation Weight</label>
                        <select class="w-full bg-slate-50 border border-slate-300 text-slate-900 rounded-xl p-3 focus:outline-none focus:border-[#002855]">
                            <option>Midterm Examination (30%)</option>
                            <option>Final Project Evaluation (50%)</option>
                            <option>Laboratory Participation (20%)</option>
                        </select>
                    </div>
                </div>
                <div class="flex justify-end space-x-3 pt-4 border-t border-slate-200">
                    <button @click="showGradeModal = false" class="px-5 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold rounded-xl transition">Cancel</button>
                    <button @click="showGradeModal = false; alert('Grades successfully published to student portals!')" class="px-5 py-2.5 bg-[#E51937] hover:bg-[#B21B2A] text-white font-bold rounded-xl shadow-lg transition">Publish Grades</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
