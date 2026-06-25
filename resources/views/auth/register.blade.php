<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="space-y-6">
        @csrf

        <div class="text-center pb-2 border-b border-slate-200">
            <h2 class="text-2xl font-serif font-bold text-[#002855]">Student Portal Registration</h2>
            <p class="text-xs text-slate-500 mt-1 uppercase tracking-wider font-bold">Instantly Generates University Profile & Identification</p>
        </div>

        <!-- Name -->
        <div>
            <label for="name" class="block text-sm font-bold text-[#002855] mb-2">{{ __('Full Name') }}</label>
            <input id="name" class="w-full p-4 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 focus:ring-2 focus:ring-[#002855] focus:border-[#002855] transition-all font-medium" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" placeholder="John Doe" />
            <x-input-error :messages="$errors->get('name')" class="mt-2 text-[#E51937] text-sm font-bold" />
        </div>

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-sm font-bold text-[#002855] mb-2">{{ __('Email Address') }}</label>
            <input id="email" class="w-full p-4 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 focus:ring-2 focus:ring-[#002855] focus:border-[#002855] transition-all font-medium" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" placeholder="name@demo.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-[#E51937] text-sm font-bold" />
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-bold text-[#002855] mb-2">{{ __('Password') }}</label>
            <input id="password" class="w-full p-4 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 focus:ring-2 focus:ring-[#002855] focus:border-[#002855] transition-all font-medium" type="password" name="password" required autocomplete="new-password" placeholder="••••••••" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-[#E51937] text-sm font-bold" />
        </div>

        <!-- Confirm Password -->
        <div>
            <label for="password_confirmation" class="block text-sm font-bold text-[#002855] mb-2">{{ __('Confirm Password') }}</label>
            <input id="password_confirmation" class="w-full p-4 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 focus:ring-2 focus:ring-[#002855] focus:border-[#002855] transition-all font-medium" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="••••••••" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-[#E51937] text-sm font-bold" />
        </div>

        <button type="submit" class="w-full py-4 text-sm font-bold uppercase tracking-wider text-white bg-[#E51937] hover:bg-[#B21B2A] rounded-xl transition-all shadow-lg hover:-translate-y-0.5">
            {{ __('Complete Registration') }}
        </button>

        <p class="text-center text-sm text-slate-600 pt-4 border-t border-slate-200 font-medium">
            Already registered? 
            <a href="{{ route('login') }}" class="font-bold text-[#002855] hover:text-[#E51937] transition-colors">Log in</a>
        </p>
    </form>
</x-guest-layout>