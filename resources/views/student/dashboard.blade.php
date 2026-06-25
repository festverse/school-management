<x-app-layout>
    <x-slot name="header">
        <h2 class="font-serif font-bold text-2xl text-[#002855] leading-tight">
            {{ __('Student Portal Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-slate-50" x-data="{ tab: 'courses' }">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
            <!-- Profile Banner -->
            <div class="bg-[#002855] border border-[#001a38] overflow-hidden shadow-2xl sm:rounded-2xl relative">
                <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-[#E51937]/20 to-transparent pointer-events-none"></div>
                <div class="p-6 md:p-8 flex flex-col md:flex-row items-center gap-6 relative z-10">
                    <img src="https://randomuser.me/api/portraits/{{ ($profile && strtolower($profile->gender) === 'female') ? 'women' : 'men' }}/{{ ($profile ? $profile->id : 1) % 90 }}.jpg" alt="Profile" class="w-28 h-28 rounded-full border-4 border-[#E51937] shadow-xl object-cover">
                    <div class="text-center md:text-left">
                        <h2 class="text-3xl font-serif font-bold text-white tracking-tight">{{ Auth::user()->name }}</h2>
                        <p class="text-slate-200 font-medium text-lg mt-1">{{ $profile ? $profile->course : 'Course Not Assigned' }}</p>
                        <div class="mt-3 inline-flex items-center px-4 py-1.5 rounded-full text-xs font-bold {{ ($profile && $profile->enrolled === 'Enrolled') ? 'bg-emerald-500 text-white shadow-md' : 'bg-slate-700 text-slate-300' }} gap-2">
                            <span class="w-2 h-2 rounded-full {{ ($profile && $profile->enrolled === 'Enrolled') ? 'bg-white animate-pulse' : 'bg-slate-400' }}"></span>
                            {{ $profile ? $profile->enrolled : 'Status Unknown' }}
                        </div>
                    </div>
                    <div class="md:ml-auto text-sm text-slate-200 space-y-3 text-center md:text-right border-t md:border-t-0 md:border-l border-[#003366] pt-4 md:pt-0 md:pl-8">
                        <div class="bg-[#001f42] px-5 py-2.5 rounded-xl border border-[#003366] shadow-inner">
                            <span class="text-slate-400 block text-xs uppercase font-bold tracking-wider">Student ID</span>
                            <span class="font-bold text-white text-base">{{ $profile ? $profile->studentId : 'N/A' }}</span>
                        </div>
                        <div class="bg-[#001f42] px-5 py-2.5 rounded-xl border border-[#003366] shadow-inner">
                            <span class="text-slate-400 block text-xs uppercase font-bold tracking-wider">Official Email</span>
                            <span class="font-bold text-white text-sm">{{ Auth::user()->email }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Feature Navigation Tabs -->
            <div class="flex overflow-x-auto space-x-2 bg-white p-2 rounded-2xl border border-slate-200 shadow-md">
                <button @click="tab = 'courses'" :class="{'bg-[#002855] text-white font-bold shadow-md': tab === 'courses', 'text-slate-600 hover:text-[#002855] hover:bg-slate-100': tab !== 'courses'}" class="flex-1 min-w-[150px] py-3 px-4 rounded-xl text-sm font-bold uppercase tracking-wider transition flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path></svg>
                    My Courses
                </button>
                <button @click="tab = 'schedule'" :class="{'bg-[#002855] text-white font-bold shadow-md': tab === 'schedule', 'text-slate-600 hover:text-[#002855] hover:bg-slate-100': tab !== 'schedule'}" class="flex-1 min-w-[150px] py-3 px-4 rounded-xl text-sm font-bold uppercase tracking-wider transition flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    Timetable
                </button>
                <button @click="tab = 'library'" :class="{'bg-[#002855] text-white font-bold shadow-md': tab === 'library', 'text-slate-600 hover:text-[#002855] hover:bg-slate-100': tab !== 'library'}" class="flex-1 min-w-[150px] py-3 px-4 rounded-xl text-sm font-bold uppercase tracking-wider transition flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    Library & Resources
                </button>
                <button @click="tab = 'finance'" :class="{'bg-[#002855] text-white font-bold shadow-md': tab === 'finance', 'text-slate-600 hover:text-[#002855] hover:bg-slate-100': tab !== 'finance'}" class="flex-1 min-w-[150px] py-3 px-4 rounded-xl text-sm font-bold uppercase tracking-wider transition flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    Financial Aid
                </button>
                <button @click="tab = 'clubs'" :class="{'bg-[#002855] text-white font-bold shadow-md': tab === 'clubs', 'text-slate-600 hover:text-[#002855] hover:bg-slate-100': tab !== 'clubs'}" class="flex-1 min-w-[150px] py-3 px-4 rounded-xl text-sm font-bold uppercase tracking-wider transition flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    Clubs & Support
                </button>
            </div>

            <!-- TAB 1: My Courses -->
            <div x-show="tab === 'courses'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100" class="space-y-6">
                <div class="flex items-center justify-between">
                    <h3 class="text-2xl font-serif font-bold text-[#002855]">Current Enrollments & Grades</h3>
                    <span class="px-4 py-1.5 bg-[#E51937] text-white font-bold text-sm rounded-xl shadow">GPA: 3.85 / 4.0 (Dean's List)</span>
                </div>
                
                <div class="bg-white border border-slate-200 overflow-hidden shadow-xl sm:rounded-2xl">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-slate-200">
                            <thead class="bg-slate-50">
                                <tr>
                                    <th class="px-6 py-4 text-left text-xs font-bold text-[#002855] uppercase tracking-wider">Course</th>
                                    <th class="px-6 py-4 text-left text-xs font-bold text-[#002855] uppercase tracking-wider">Teacher</th>
                                    <th class="px-6 py-4 text-left text-xs font-bold text-[#002855] uppercase tracking-wider">Schedule</th>
                                    <th class="px-6 py-4 text-left text-xs font-bold text-[#002855] uppercase tracking-wider">Final Grade</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-200 bg-white">
                                @forelse($enrollments as $enrollment)
                                    <tr class="hover:bg-slate-50 transition">
                                        <td class="px-6 py-5 whitespace-nowrap">
                                            <div class="text-base font-bold text-slate-900">{{ $enrollment->courseClass->course->name }}</div>
                                            <div class="text-xs text-slate-500 font-semibold">{{ $enrollment->courseClass->course->code }}</div>
                                        </td>
                                        <td class="px-6 py-5 whitespace-nowrap">
                                            <div class="text-sm font-semibold text-slate-700 flex items-center gap-2">
                                                <span class="w-7 h-7 rounded-full bg-[#002855] flex items-center justify-center text-xs text-white font-bold">
                                                    {{ substr($enrollment->courseClass->teacher->name, 0, 1) }}
                                                </span>
                                                {{ $enrollment->courseClass->teacher->name }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-5 whitespace-nowrap text-sm text-slate-600 font-medium">
                                            {{ $enrollment->courseClass->schedule }}
                                        </td>
                                        <td class="px-6 py-5 whitespace-nowrap">
                                            @if($enrollment->grade)
                                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-extrabold {{ $enrollment->grade->grade >= 75 ? 'bg-emerald-100 text-emerald-800 border border-emerald-200' : 'bg-red-100 text-red-800 border border-red-200' }} shadow-sm">
                                                    {{ $enrollment->grade->grade }}
                                                </span>
                                            @else
                                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-amber-100 text-amber-800 border border-amber-200 shadow-sm">
                                                    In Progress
                                                </span>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-6 py-12 text-center text-slate-500 font-medium text-base">
                                            <svg class="w-12 h-12 text-slate-400 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                            You are not currently enrolled in any courses for this semester.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- TAB 2: Timetable -->
            <div x-show="tab === 'schedule'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100" class="space-y-6" x-cloak>
                <h3 class="text-2xl font-serif font-bold text-[#002855]">Weekly Academic Timetable</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white border border-slate-200 p-6 rounded-2xl shadow-xl hover:border-[#002855] transition">
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-3 py-1 bg-slate-100 text-[#002855] text-xs font-bold rounded-lg border border-slate-200">Monday & Wednesday</span>
                            <span class="text-slate-500 text-xs font-semibold">10:00 AM - 11:30 AM</span>
                        </div>
                        <h4 class="text-lg font-bold text-slate-900 mb-1">Quantum Computing Foundations</h4>
                        <p class="text-sm text-slate-600 mb-4">Room: Hall of Informatics (304)</p>
                        <div class="flex items-center justify-between text-xs text-slate-500 border-t border-slate-100 pt-3">
                            <span>Prof. Marcus Vance</span>
                            <span class="text-emerald-600 font-bold">On Schedule</span>
                        </div>
                    </div>

                    <div class="bg-white border border-slate-200 p-6 rounded-2xl shadow-xl hover:border-[#002855] transition">
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-3 py-1 bg-slate-100 text-[#002855] text-xs font-bold rounded-lg border border-slate-200">Tuesday & Thursday</span>
                            <span class="text-slate-500 text-xs font-semibold">02:00 PM - 03:30 PM</span>
                        </div>
                        <h4 class="text-lg font-bold text-slate-900 mb-1">Machine Learning & Neural Nets</h4>
                        <p class="text-sm text-slate-600 mb-4">Room: AI Research Lab (102)</p>
                        <div class="flex items-center justify-between text-xs text-slate-500 border-t border-slate-100 pt-3">
                            <span>Prof. Elena Rostova</span>
                            <span class="text-emerald-600 font-bold">On Schedule</span>
                        </div>
                    </div>

                    <div class="bg-white border border-slate-200 p-6 rounded-2xl shadow-xl hover:border-[#002855] transition">
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-3 py-1 bg-slate-100 text-[#002855] text-xs font-bold rounded-lg border border-slate-200">Friday Practicum</span>
                            <span class="text-slate-500 text-xs font-semibold">09:00 AM - 12:00 PM</span>
                        </div>
                        <h4 class="text-lg font-bold text-slate-900 mb-1">Applied Bio-Informatics Lab</h4>
                        <p class="text-sm text-slate-600 mb-4">Room: Life Sciences Complex (401)</p>
                        <div class="flex items-center justify-between text-xs text-slate-500 border-t border-slate-100 pt-3">
                            <span>Dr. Aris Thorne</span>
                            <span class="text-[#002855] font-bold">Lab Session</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TAB 3: Library & Resources -->
            <div x-show="tab === 'library'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100" class="space-y-6" x-cloak>
                <h3 class="text-2xl font-serif font-bold text-[#002855]">Digital Library & Research Database</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white border border-slate-200 p-6 rounded-2xl shadow-xl flex flex-col justify-between">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-slate-100 border border-slate-200 flex items-center justify-center text-[#002855] mb-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                            </div>
                            <h4 class="text-lg font-bold text-slate-900 mb-2">IEEE Xplore & ACM Digital Library</h4>
                            <p class="text-sm text-slate-600 mb-6">Full university access to world-class journals, conference proceedings, and computer science standards.</p>
                        </div>
                        <a href="https://ieeexplore.ieee.org" target="_blank" class="w-full py-3 bg-[#002855] hover:bg-[#001a38] text-white text-sm font-bold rounded-xl shadow-lg transition text-center block">Access Portal &rarr;</a>
                    </div>

                    <div class="bg-white border border-slate-200 p-6 rounded-2xl shadow-xl flex flex-col justify-between">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-slate-100 border border-slate-200 flex items-center justify-center text-[#002855] mb-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                            </div>
                            <h4 class="text-lg font-bold text-slate-900 mb-2">ScienceDirect Premium</h4>
                            <p class="text-sm text-slate-600 mb-6">Explore scientific, technical, and medical research published across thousands of peer-reviewed journals.</p>
                        </div>
                        <a href="https://www.sciencedirect.com" target="_blank" class="w-full py-3 bg-[#002855] hover:bg-[#001a38] text-white text-sm font-bold rounded-xl shadow-lg transition text-center block">Access Portal &rarr;</a>
                    </div>

                    <div class="bg-white border border-slate-200 p-6 rounded-2xl shadow-xl flex flex-col justify-between">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-slate-100 border border-slate-200 flex items-center justify-center text-[#002855] mb-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                            </div>
                            <h4 class="text-lg font-bold text-slate-900 mb-2">Campus E-Book Repository</h4>
                            <p class="text-sm text-slate-600 mb-6">Download fully licensed academic textbooks, lab workbooks, and programming manuals directly to your device.</p>
                        </div>
                        <button onclick="alert('Downloading course catalog index...')" class="w-full py-3 bg-[#E51937] hover:bg-[#B21B2A] text-white text-sm font-bold rounded-xl shadow-lg transition text-center block">Browse E-Books &rarr;</button>
                    </div>
                </div>
            </div>

            <!-- TAB 4: Financial Aid -->
            <div x-show="tab === 'finance'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100" class="space-y-6" x-cloak>
                <div class="flex items-center justify-between">
                    <h3 class="text-2xl font-serif font-bold text-[#002855]">Financial Aid & Account Summary</h3>
                    <span class="px-4 py-1.5 bg-emerald-100 text-emerald-800 font-bold text-sm rounded-xl border border-emerald-200 shadow-sm">Status: Paid in Full</span>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white border border-slate-200 p-6 rounded-2xl shadow-xl">
                        <span class="text-slate-500 text-xs font-bold uppercase tracking-wider block mb-1">Scholarship Grant</span>
                        <h4 class="text-3xl font-extrabold text-[#002855] mb-2">$12,500.00</h4>
                        <p class="text-sm text-emerald-600 font-semibold">Lumina Merit Award (Active)</p>
                    </div>
                    <div class="bg-white border border-slate-200 p-6 rounded-2xl shadow-xl">
                        <span class="text-slate-500 text-xs font-bold uppercase tracking-wider block mb-1">Semester Tuition Fee</span>
                        <h4 class="text-3xl font-extrabold text-[#002855] mb-2">$0.00</h4>
                        <p class="text-sm text-[#002855] font-semibold">Covered by Fellowship</p>
                    </div>
                    <div class="bg-white border border-slate-200 p-6 rounded-2xl shadow-xl flex flex-col justify-center">
                        <button onclick="alert('Generating official bursar invoice PDF...')" class="w-full py-3.5 bg-[#E51937] hover:bg-[#B21B2A] text-white font-bold rounded-xl shadow-lg transition flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                            Download Statement
                        </button>
                    </div>
                </div>
            </div>

            <!-- TAB 5: Clubs & Support -->
            <div x-show="tab === 'clubs'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100" class="space-y-6" x-cloak>
                <h3 class="text-2xl font-serif font-bold text-[#002855]">Student Organizations & Advising Support</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white border border-slate-200 p-6 rounded-2xl shadow-xl flex items-center justify-between">
                        <div>
                            <span class="px-3 py-1 bg-slate-100 text-[#002855] text-xs font-bold rounded-lg border border-slate-200 mb-2 inline-block">Tech Society</span>
                            <h4 class="text-lg font-bold text-slate-900">Autonomous Robotics & AI Club</h4>
                            <p class="text-sm text-slate-600">Weekly lab workshops, hackathons, and hardware building sessions.</p>
                        </div>
                        <button onclick="alert('Request sent to club leadership! You will receive an invitation email shortly.')" class="py-2.5 px-6 bg-[#002855] hover:bg-[#001a38] text-white font-bold rounded-xl shadow-lg transition whitespace-nowrap">Join Club</button>
                    </div>

                    <div class="bg-white border border-slate-200 p-6 rounded-2xl shadow-xl flex items-center justify-between">
                        <div>
                            <span class="px-3 py-1 bg-slate-100 text-[#E51937] text-xs font-bold rounded-lg border border-slate-200 mb-2 inline-block">Advising Services</span>
                            <h4 class="text-lg font-bold text-slate-900">Academic Dean Counseling</h4>
                            <p class="text-sm text-slate-600">Book an appointment with your academic advisor for career guidance.</p>
                        </div>
                        <button onclick="alert('Opening counseling booking portal...')" class="py-2.5 px-6 bg-[#E51937] hover:bg-[#B21B2A] text-white font-bold rounded-xl shadow-lg transition whitespace-nowrap">Book Session</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
