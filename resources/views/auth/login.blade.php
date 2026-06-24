<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-300 mb-2">{{ __('Email Address') }}</label>
            <input id="email" class="w-full p-4 bg-gray-950 border border-gray-700 rounded-xl text-white focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" placeholder="name@demo.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-400 text-sm" />
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-gray-300 mb-2">{{ __('Password') }}</label>
            <input id="password" class="w-full p-4 bg-gray-950 border border-gray-700 rounded-xl text-white focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all" type="password" name="password" required autocomplete="current-password" placeholder="••••••••" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-400 text-sm" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between">
            <label for="remember_me" class="inline-flex items-center group cursor-pointer">
                <input id="remember_me" type="checkbox" class="rounded bg-gray-950 border-gray-700 text-primary-600 focus:ring-primary-500" name="remember">
                <span class="ml-2 text-sm text-gray-400 group-hover:text-gray-300 transition-colors">{{ __('Remember me') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-sm font-medium text-primary-400 hover:text-primary-300 transition-colors" href="{{ route('password.request') }}">
                    {{ __('Forgot password?') }}
                </a>
            @endif
        </div>

        <button type="submit" class="w-full py-4 text-base font-semibold text-white bg-primary-600 rounded-xl hover:bg-primary-500 transition-all shadow-lg shadow-primary-500/25 hover:shadow-primary-500/40 hover:-translate-y-0.5">
            {{ __('Log in to Portal') }}
        </button>

        @if (Route::has('register'))
            <p class="text-center text-sm text-gray-500 pt-4 border-t border-gray-800">
                Don't have a portal account? 
                <a href="{{ route('register') }}" class="font-medium text-primary-400 hover:text-primary-300 transition-colors">Apply Now</a>
            </p>
        @endif
    </form>
</x-guest-layout>