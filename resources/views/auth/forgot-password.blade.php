<x-guest-layout>
    <div class="text-center pb-4 mb-6 border-b border-slate-200">
        <h2 class="text-2xl font-serif font-bold text-[#002855]">Password Recovery</h2>
        <p class="text-xs text-slate-500 mt-1 uppercase tracking-wider font-bold">Secure Verification & Reset Portal</p>
    </div>

    <div class="mb-6 text-sm text-slate-600 leading-relaxed font-medium">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-sm font-bold text-[#002855] mb-2">{{ __('Email Address') }}</label>
            <input id="email" class="w-full p-4 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 focus:ring-2 focus:ring-[#002855] focus:border-[#002855] transition-all font-medium" type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="student@demo.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-[#E51937] text-sm font-bold" />
        </div>

        <button type="submit" class="w-full py-4 text-sm font-bold uppercase tracking-wider text-white bg-[#E51937] hover:bg-[#B21B2A] rounded-xl transition-all shadow-lg hover:-translate-y-0.5">
            {{ __('Email Password Reset Link') }}
        </button>

        <p class="text-center text-sm text-slate-600 pt-4 border-t border-slate-200 font-medium">
            Remember your password? 
            <a href="{{ route('login') }}" class="font-bold text-[#002855] hover:text-[#E51937] transition-colors">Log in</a>
        </p>
    </form>
</x-guest-layout>
