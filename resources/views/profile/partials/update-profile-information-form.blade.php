<section>
    <header>
        <h2 class="text-xl font-serif font-bold text-[#002855]">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-slate-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" class="font-bold text-[#002855]" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full bg-slate-50 border border-slate-300 text-slate-900 rounded-xl p-3" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2 text-[#E51937]" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" class="font-bold text-[#002855]" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full bg-slate-50 border border-slate-300 text-slate-900 rounded-xl p-3" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2 text-[#E51937]" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-slate-700">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-[#002855] hover:text-[#E51937] rounded-md focus:outline-none transition-colors">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-emerald-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="px-6 py-3 bg-[#002855] hover:bg-[#001a38] text-white font-bold rounded-xl shadow transition">{{ __('Save Changes') }}</button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm font-bold text-emerald-600"
                >{{ __('Saved successfully.') }}</p>
            @endif
        </div>
    </form>
</section>
