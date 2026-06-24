<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="space-y-6">
        @csrf

        <!-- Name -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-300 mb-2">{{ __('Full Name') }}</label>
            <input id="name" class="w-full p-4 bg-gray-950 border border-gray-700 rounded-xl text-white focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" placeholder="John Doe" />
            <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-400 text-sm" />
        </div>

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-300 mb-2">{{ __('Email Address') }}</label>
            <input id="email" class="w-full p-4 bg-gray-950 border border-gray-700 rounded-xl text-white focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" placeholder="name@demo.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-400 text-sm" />
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-gray-300 mb-2">{{ __('Password') }}</label>
            <input id="password" class="w-full p-4 bg-gray-950 border border-gray-700 rounded-xl text-white focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all" type="password" name="password" required autocomplete="new-password" placeholder="••••••••" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-400 text-sm" />
        </div>

        <!-- Confirm Password -->
        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-gray-300 mb-2">{{ __('Confirm Password') }}</label>
            <input id="password_confirmation" class="w-full p-4 bg-gray-950 border border-gray-700 rounded-xl text-white focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="••••••••" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-400 text-sm" />
        </div>

        <button type="submit" class="w-full py-4 text-base font-semibold text-white bg-primary-600 rounded-xl hover:bg-primary-500 transition-all shadow-lg shadow-primary-500/25 hover:shadow-primary-500/40 hover:-translate-y-0.5">
            {{ __('Complete Registration') }}
        </button>

        <p class="text-center text-sm text-gray-500 pt-4 border-t border-gray-800">
            Already registered? 
            <a href="{{ route('login') }}" class="font-medium text-primary-400 hover:text-primary-300 transition-colors">Log in</a>
        </p>
    </form>
</x-guest-layout>