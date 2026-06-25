<nav x-data="{ open: false }" class="bg-[#002855] border-b border-[#001a38] sticky top-0 z-50 shadow-md">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ url('/') }}" class="flex items-center gap-3 group">
                        <svg class="w-10 h-10 text-white group-hover:text-[#FFB81C] transition-all duration-300 group-hover:scale-110 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 3L1 9l11 6 9-4.91V17h2V9L12 3z" />
                            <path d="M21 12.27L12 17.18 3 12.27v4.18c0 2.22 4.03 4.05 9 4.05s9-1.83 9-4.05v-4.18z" />
                        </svg>
                        <span class="text-2xl font-serif font-bold text-white tracking-tight">Lumina University</span>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <a href="{{ route('dashboard') }}" class="inline-flex items-center px-1 pt-1 border-b-4 {{ request()->routeIs('dashboard') ? 'border-[#E51937] text-white font-bold' : 'border-transparent text-slate-200 hover:text-white hover:border-slate-300' }} text-sm uppercase tracking-wider font-semibold transition duration-150 ease-in-out">
                        {{ __('Dashboard') }}
                    </a>
                    @if(auth()->user()->role === 'admin')
                    <a href="{{ route('add-student') }}" class="inline-flex items-center px-1 pt-1 border-b-4 {{ request()->routeIs('add-student') ? 'border-[#E51937] text-white font-bold' : 'border-transparent text-slate-200 hover:text-white hover:border-slate-300' }} text-sm uppercase tracking-wider font-semibold transition duration-150 ease-in-out">
                        {{ __('Add Student') }}
                    </a>
                    @endif
                    <a href="{{ url('/') }}" class="inline-flex items-center px-1 pt-1 border-b-4 border-transparent text-slate-200 hover:text-white hover:border-slate-300 text-sm uppercase tracking-wider font-semibold transition duration-150 ease-in-out">
                        {{ __('Home') }}
                    </a>
                </div>
            </div>

            <!-- Settings Dropdown & Logout Button -->
            <div class="hidden sm:flex sm:items-center sm:ml-6 space-x-4">
                <x-dropdown align="right" width="56">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-4 py-2.5 border border-slate-300 text-sm leading-4 font-semibold rounded-lg text-white bg-[#003366] hover:bg-[#004080] focus:outline-none transition ease-in-out duration-150 shadow-sm gap-2">
                            <div>{{ Auth::user()->name }}</div>

                            <div>
                                <svg class="fill-current h-4 w-4 text-slate-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Direct list items without redundant wrapping div to prevent double layer -->
                        <a href="{{ route('dashboard') }}" class="block px-4 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-100 hover:text-[#002855] transition">
                            📊 {{ __('My Dashboard') }}
                        </a>

                        <a href="{{ route('profile.edit') }}" class="block px-4 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-100 hover:text-[#002855] transition">
                            👤 {{ __('Account Profile') }}
                        </a>

                        <a href="{{ route('academics') }}" class="block px-4 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-100 hover:text-[#002855] transition border-t border-slate-100">
                            📖 {{ __('Academics Catalog') }}
                        </a>

                        <a href="{{ route('library') }}" class="block px-4 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-100 hover:text-[#002855] transition">
                            📚 {{ __('University Library') }}
                        </a>

                        <a href="{{ route('irbs') }}" class="block px-4 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-100 hover:text-[#002855] transition">
                            🔬 {{ __('Research Archive') }}
                        </a>

                        <a href="{{ route('moodle') }}" class="block px-4 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-100 hover:text-[#002855] transition">
                            💻 {{ __('Moodle LMS') }}
                        </a>

                        <a href="{{ route('contact') }}" class="block px-4 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-100 hover:text-[#002855] transition border-t border-slate-100">
                            ✉ {{ __('Help & Support') }}
                        </a>

                        <a href="{{ url('/') }}" class="block px-4 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-100 hover:text-[#002855] transition border-t border-slate-100">
                            🏠 {{ __('Main Home') }}
                        </a>
                    </x-slot>
                </x-dropdown>

                <!-- Explicit Logout Button -->
                <form method="POST" action="{{ route('logout') }}" class="inline-flex">
                    @csrf
                    <button type="submit" class="inline-flex items-center px-5 py-2.5 bg-[#E51937] hover:bg-[#B21B2A] text-white text-sm font-bold uppercase tracking-wider rounded-lg shadow-md transition duration-150 ease-in-out gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-slate-200 hover:text-white hover:bg-[#003366] focus:outline-none focus:bg-[#003366] focus:text-white transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-[#001f42] border-b border-[#001428]">
        <div class="pt-2 pb-3 space-y-1">
            <a href="{{ route('dashboard') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('dashboard') ? 'border-[#E51937] text-white bg-[#002855] font-bold' : 'border-transparent text-slate-300 hover:text-white hover:bg-[#002855]' }} text-base font-medium">
                {{ __('Dashboard') }}
            </a>
            @if(auth()->user()->role === 'admin')
            <a href="{{ route('add-student') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('add-student') ? 'border-[#E51937] text-white bg-[#002855] font-bold' : 'border-transparent text-slate-300 hover:text-white hover:bg-[#002855]' }} text-base font-medium">
                {{ __('Add Student') }}
            </a>
            @endif
            <a href="{{ url('/') }}" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-slate-300 hover:text-white hover:bg-[#002855] text-base font-medium">
                {{ __('Home') }}
            </a>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-[#001428]">
            <div class="px-4">
                <div class="font-bold text-base text-white">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-slate-300">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <a href="{{ route('profile.edit') }}" class="block pl-3 pr-4 py-2 text-base font-medium text-slate-300 hover:text-white hover:bg-[#002855]">
                    {{ __('Profile') }}
                </a>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-left block pl-3 pr-4 py-2 text-base font-bold text-[#E51937] hover:text-red-400 hover:bg-[#002855]">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>
