<nav x-data="{ open: false }" class="bg-gray-900/50 backdrop-blur-md border-b border-gray-800 sticky top-0 z-50">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ url('/') }}" class="flex items-center gap-3 group">
                        <div class="text-3xl group-hover:scale-110 transition-transform duration-300">
                            🎓
                        </div>
                        <span class="text-xl font-bold bg-gradient-to-r from-white via-blue-200 to-indigo-300 bg-clip-text text-transparent">Lumina University</span>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <a href="{{ route('dashboard') }}" class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->routeIs('dashboard') ? 'border-blue-500 text-white font-semibold' : 'border-transparent text-gray-400 hover:text-gray-200 hover:border-gray-700' }} text-sm transition duration-150 ease-in-out">
                        {{ __('Dashboard') }}
                    </a>
                    @if(auth()->user()->role === 'admin')
                    <a href="{{ route('add-student') }}" class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->routeIs('add-student') ? 'border-blue-500 text-white font-semibold' : 'border-transparent text-gray-400 hover:text-gray-200 hover:border-gray-700' }} text-sm transition duration-150 ease-in-out">
                        {{ __('Add Student') }}
                    </a>
                    @endif
                    <a href="{{ url('/') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-gray-400 hover:text-gray-200 hover:border-gray-700 text-sm transition duration-150 ease-in-out">
                        {{ __('Home') }}
                    </a>
                </div>
            </div>

            <!-- Settings Dropdown & Logout Button -->
            <div class="hidden sm:flex sm:items-center sm:ml-6 space-x-4">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-4 py-2 border border-gray-700 text-sm leading-4 font-medium rounded-xl text-gray-300 bg-gray-800 hover:text-white hover:border-gray-600 focus:outline-none transition ease-in-out duration-150 shadow-sm">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-2">
                                <svg class="fill-current h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('dashboard')" class="text-gray-300 hover:bg-gray-800 hover:text-white transition font-medium">
                            {{ __('My Dashboard') }}
                        </x-dropdown-link>

                        <x-dropdown-link :href="route('profile.edit')" class="text-gray-300 hover:bg-gray-800 hover:text-white transition font-medium">
                            {{ __('Account Profile') }}
                        </x-dropdown-link>

                        <x-dropdown-link :href="route('academics')" class="text-gray-300 hover:bg-gray-800 hover:text-white transition font-medium">
                            {{ __('Academics Catalog') }}
                        </x-dropdown-link>

                        <x-dropdown-link :href="route('contact')" class="text-gray-300 hover:bg-gray-800 hover:text-white transition font-medium">
                            {{ __('Help & Support') }}
                        </x-dropdown-link>

                        <x-dropdown-link :href="url('/')" class="text-gray-300 hover:bg-gray-800 hover:text-white transition font-medium border-t border-gray-800">
                            {{ __('Main Home') }}
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown>

                <!-- Explicit Logout Button -->
                <form method="POST" action="{{ route('logout') }}" class="inline-flex">
                    @csrf
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600/80 hover:bg-red-600 text-white text-sm font-semibold rounded-xl shadow-lg shadow-red-600/30 transition duration-150 ease-in-out gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-800 focus:outline-none focus:bg-gray-800 focus:text-white transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-gray-900/95 backdrop-blur-md border-b border-gray-800">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-gray-300 hover:bg-gray-800 hover:text-white">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-800">
            <div class="px-4">
                <div class="font-medium text-base text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-400">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')" class="text-gray-300 hover:bg-gray-800 hover:text-white">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();" class="text-red-400 hover:bg-gray-800 hover:text-red-300">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
