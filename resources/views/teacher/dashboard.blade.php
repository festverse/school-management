<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Teacher Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex items-center gap-4">
                    <img src="https://randomuser.me/api/portraits/men/{{ Auth::id() % 90 }}.jpg" alt="Faculty Profile" class="w-16 h-16 rounded-full border-2 border-primary-500 object-cover">
                    <div>
                        <h3 class="text-xl font-bold">{{ __("Welcome back, ") }} {{ Auth::user()->name }}!</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Faculty & Course Director</p>
                    </div>
                </div>
            </div>

            <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-4">Your Classes This Semester</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($classes as $class)
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border-t-4 border-primary-500">
                        <div class="p-6">
                            <h4 class="text-lg font-bold text-gray-900 dark:text-white">{{ $class->course->name }}</h4>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">{{ $class->course->code }} | {{ $class->semester }} {{ $class->year }}</p>
                            
                            <div class="flex items-center gap-2 mb-4 text-sm text-gray-600 dark:text-gray-300">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                {{ $class->schedule }}
                            </div>

                            <div class="flex items-center justify-between mt-6 pt-4 border-t border-gray-200 dark:border-gray-700">
                                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">
                                    {{ $class->enrollments->count() }} Students Enrolled
                                </span>
                                <a href="#" class="text-primary-600 hover:text-primary-800 dark:text-primary-400 font-medium text-sm transition">Manage Grades &rarr;</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full bg-gray-50 dark:bg-gray-800 p-8 text-center rounded-lg border border-dashed border-gray-300 dark:border-gray-600">
                        <p class="text-gray-500 dark:text-gray-400">You currently have no classes assigned.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
