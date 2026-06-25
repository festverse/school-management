<section>
    <header>
        <h2 class="text-xl font-serif font-bold text-[#002855]">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-slate-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="current_password" :value="__('Current Password')" class="font-bold text-[#002855]" />
            <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full bg-slate-50 border border-slate-300 text-slate-900 rounded-xl p-3" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2 text-[#E51937]" />
        </div>

        <div>
            <x-input-label for="password" :value="__('New Password')" class="font-bold text-[#002855]" />
            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full bg-slate-50 border border-slate-300 text-slate-900 rounded-xl p-3" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2 text-[#E51937]" />
        </div>

        <div>
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="font-bold text-[#002855]" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full bg-slate-50 border border-slate-300 text-slate-900 rounded-xl p-3" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2 text-[#E51937]" />
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="px-6 py-3 bg-[#002855] hover:bg-[#001a38] text-white font-bold rounded-xl shadow transition">{{ __('Save Password') }}</button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm font-bold text-emerald-600"
                >{{ __('Password updated successfully.') }}</p>
            @endif
        </div>
    </form>
</section>
