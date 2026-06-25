<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-6" id="loginForm">
        @csrf

        <div class="text-center pb-2 border-b border-slate-200">
            <h2 class="text-2xl font-serif font-bold text-[#002855]">University Portal Login</h2>
            <p class="text-xs text-slate-500 mt-1 uppercase tracking-wider font-bold">Secure Institutional Single Sign-On (SSO)</p>
        </div>

        <!-- Quick Demo Selectors -->
        <div class="space-y-2 pt-2">
            <p class="text-xs font-bold text-slate-700 uppercase tracking-wider text-center">Quick Select Demo Accounts</p>
            <div class="grid grid-cols-2 gap-2">
                <button type="button" onclick="document.getElementById('email').value='student@demo.com'; document.getElementById('password').value='student123';" class="p-2 bg-slate-100 hover:bg-[#002855] hover:text-white text-[#002855] text-xs font-bold rounded-lg border border-slate-300 transition-all shadow-sm flex flex-col items-center justify-center">
                    <span>Demo Student</span>
                    <span class="text-[10px] font-normal opacity-80">student@demo.com</span>
                </button>
                <button type="button" onclick="document.getElementById('email').value='upv5603@gmail.com'; document.getElementById('password').value='password123';" class="p-2 bg-slate-100 hover:bg-[#002855] hover:text-white text-[#002855] text-xs font-bold rounded-lg border border-slate-300 transition-all shadow-sm flex flex-col items-center justify-center">
                    <span>Utsav Vasava (Student)</span>
                    <span class="text-[10px] font-normal opacity-80">upv5603@gmail.com</span>
                </button>
                <button type="button" onclick="document.getElementById('email').value='teacher1@demo.com'; document.getElementById('password').value='teacher123';" class="p-2 bg-slate-100 hover:bg-[#002855] hover:text-white text-[#002855] text-xs font-bold rounded-lg border border-slate-300 transition-all shadow-sm flex flex-col items-center justify-center">
                    <span>Demo Teacher</span>
                    <span class="text-[10px] font-normal opacity-80">teacher1@demo.com</span>
                </button>
                <button type="button" onclick="document.getElementById('email').value='admin@demo.com'; document.getElementById('password').value='admin123';" class="p-2 bg-slate-100 hover:bg-[#002855] hover:text-white text-[#002855] text-xs font-bold rounded-lg border border-slate-300 transition-all shadow-sm flex flex-col items-center justify-center">
                    <span>System Admin</span>
                    <span class="text-[10px] font-normal opacity-80">admin@demo.com</span>
                </button>
            </div>
        </div>

        <!-- Email Address -->
        <div class="pt-2">
            <label for="email" class="block text-sm font-bold text-[#002855] mb-2">{{ __('Email Address') }}</label>
            <input id="email" class="w-full p-4 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 focus:ring-2 focus:ring-[#002855] focus:border-[#002855] transition-all font-medium" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" placeholder="student@demo.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-[#E51937] text-sm font-bold" />
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-bold text-[#002855] mb-2">{{ __('Password') }}</label>
            <input id="password" class="w-full p-4 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 focus:ring-2 focus:ring-[#002855] focus:border-[#002855] transition-all font-medium" type="password" name="password" required autocomplete="current-password" placeholder="••••••••" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-[#E51937] text-sm font-bold" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between">
            <label for="remember_me" class="inline-flex items-center group cursor-pointer">
                <input id="remember_me" type="checkbox" class="rounded bg-slate-100 border-slate-300 text-[#002855] focus:ring-[#002855]" name="remember">
                <span class="ml-2 text-sm text-slate-600 group-hover:text-[#002855] transition-colors font-medium">{{ __('Remember me') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-sm font-bold text-[#002855] hover:text-[#E51937] transition-colors" href="{{ route('password.request') }}">
                    {{ __('Forgot password?') }}
                </a>
            @endif
        </div>

        <button type="submit" class="w-full py-4 text-sm font-bold uppercase tracking-wider text-white bg-[#E51937] hover:bg-[#B21B2A] rounded-xl transition-all shadow-lg hover:-translate-y-0.5">
            {{ __('Log in to Portal') }}
        </button>

        @if (Route::has('register'))
            <p class="text-center text-sm text-slate-600 pt-4 border-t border-slate-200 font-medium">
                Don't have a portal account? 
                <a href="{{ route('register') }}" class="font-bold text-[#002855] hover:text-[#E51937] transition-colors">Apply Now</a>
            </p>
        @endif
    </form>
</x-guest-layout>