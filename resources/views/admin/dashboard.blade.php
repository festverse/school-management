<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Welcome back, Administrator!") }}
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-blue-500 rounded-lg p-6 text-white shadow-lg">
                    <h3 class="text-lg font-bold">Total Students</h3>
                    <p class="text-4xl mt-2 font-extrabold">{{ $stats['total_students'] }}</p>
                </div>
                <div class="bg-green-500 rounded-lg p-6 text-white shadow-lg">
                    <h3 class="text-lg font-bold">Total Teachers</h3>
                    <p class="text-4xl mt-2 font-extrabold">{{ $stats['total_teachers'] }}</p>
                </div>
                <div class="bg-purple-500 rounded-lg p-6 text-white shadow-lg">
                    <h3 class="text-lg font-bold">Total Courses</h3>
                    <p class="text-4xl mt-2 font-extrabold">{{ $stats['total_courses'] }}</p>
                </div>
                <div class="bg-orange-500 rounded-lg p-6 text-white shadow-lg">
                    <h3 class="text-lg font-bold">Departments</h3>
                    <p class="text-4xl mt-2 font-extrabold">{{ $stats['total_departments'] }}</p>
                </div>
            </div>
            
            <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 border-b border-gray-200 dark:border-gray-700">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">Quick Actions</h3>
                        <div class="space-y-3">
                            <a href="#" class="block px-4 py-3 bg-gray-50 dark:bg-gray-700 rounded-md hover:bg-gray-100 dark:hover:bg-gray-600 transition">Manage Users</a>
                            <a href="#" class="block px-4 py-3 bg-gray-50 dark:bg-gray-700 rounded-md hover:bg-gray-100 dark:hover:bg-gray-600 transition">Manage Departments</a>
                            <a href="#" class="block px-4 py-3 bg-gray-50 dark:bg-gray-700 rounded-md hover:bg-gray-100 dark:hover:bg-gray-600 transition">View System Logs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
