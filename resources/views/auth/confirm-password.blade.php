<x-guest-layout>
    <div class="text-center pb-4 mb-6 border-b border-slate-200">
        <h2 class="text-2xl font-serif font-bold text-[#002855]">Secure Authorization Required</h2>
        <p class="text-xs text-slate-500 mt-1 uppercase tracking-wider font-bold">Institutional Security Verification</p>
    </div>

    <div class="mb-6 text-sm text-slate-600 leading-relaxed font-medium">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}" class="space-y-6">
        @csrf

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-bold text-[#002855] mb-2">{{ __('Password') }}</label>
            <input id="password" class="w-full p-4 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 focus:ring-2 focus:ring-[#002855] focus:border-[#002855] transition-all font-medium" type="password" name="password" required autocomplete="current-password" placeholder="••••••••" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-[#E51937] text-sm font-bold" />
        </div>

        <button type="submit" class="w-full py-4 text-sm font-bold uppercase tracking-wider text-white bg-[#E51937] hover:bg-[#B21B2A] rounded-xl transition-all shadow-lg hover:-translate-y-0.5">
            {{ __('Confirm Identity') }}
        </button>
    </form>
</x-guest-layout>
