<x-guest-layout>
    <div class="text-center pb-4 mb-6 border-b border-slate-200">
        <h2 class="text-2xl font-serif font-bold text-[#002855]">Email Verification Required</h2>
        <p class="text-xs text-slate-500 mt-1 uppercase tracking-wider font-bold">Please Verify Your Institutional Email Address</p>
    </div>

    <div class="mb-6 text-sm text-slate-600 leading-relaxed font-medium">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 rounded-xl font-bold text-sm text-emerald-700 shadow-sm">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="space-y-4">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="w-full py-4 text-sm font-bold uppercase tracking-wider text-white bg-[#E51937] hover:bg-[#B21B2A] rounded-xl transition-all shadow-lg hover:-translate-y-0.5">
                {{ __('Resend Verification Email') }}
            </button>
        </form>

        <form method="POST" action="{{ route('logout') }}" class="text-center pt-4 border-t border-slate-200">
            @csrf
            <button type="submit" class="text-sm font-bold text-[#002855] hover:text-[#E51937] transition-colors">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout>
