<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Student Portal') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Profile Banner -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 md:p-8 flex flex-col md:flex-row items-center gap-6">
                    <img src="{{ $profile ? asset('storage/images/' . $profile->studentImage) : asset('default.png') }}" alt="Profile" class="w-24 h-24 rounded-full border-4 border-gray-200 dark:border-gray-700 object-cover">
                    <div class="text-center md:text-left">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white">{{ Auth::user()->name }}</h2>
                        <p class="text-gray-500 dark:text-gray-400">{{ $profile ? $profile->course : 'Course Not Assigned' }}</p>
                        <div class="mt-2 inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ ($profile && $profile->enrolled === 'Enrolled') ? 'bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400' : 'bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300' }}">
                            {{ $profile ? $profile->enrolled : 'Status Unknown' }}
                        </div>
                    </div>
                    <div class="md:ml-auto text-sm text-gray-500 dark:text-gray-400 space-y-1 text-center md:text-right border-t md:border-t-0 md:border-l border-gray-200 dark:border-gray-700 pt-4 md:pt-0 md:pl-6">
                        <p><strong class="text-gray-700 dark:text-gray-300">Student ID:</strong> {{ $profile ? $profile->studentId : 'N/A' }}</p>
                        <p><strong class="text-gray-700 dark:text-gray-300">Email:</strong> {{ Auth::user()->email }}</p>
                    </div>
                </div>
            </div>

            <!-- Current Enrollments -->
            <h3 class="text-xl font-bold text-gray-800 dark:text-white pt-4">Your Courses</h3>
            
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-900">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Course</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Teacher</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Schedule</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Final Grade</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                            @forelse($enrollments as $enrollment)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900 dark:text-white">{{ $enrollment->courseClass->course->name }}</div>
                                        <div class="text-sm text-gray-500 dark:text-gray-400">{{ $enrollment->courseClass->course->code }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900 dark:text-white">{{ $enrollment->courseClass->teacher->name }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        {{ $enrollment->courseClass->schedule }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if($enrollment->grade)
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $enrollment->grade->grade >= 75 ? 'bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400' : 'bg-red-100 text-red-800 dark:bg-red-900/30 dark:text-red-400' }}">
                                                {{ $enrollment->grade->grade }}
                                            </span>
                                        @else
                                            <span class="text-sm text-gray-400 italic">Not Graded</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-6 py-8 text-center text-gray-500 dark:text-gray-400">
                                        You are not currently enrolled in any courses.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
