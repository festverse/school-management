<section class="space-y-6">
    <header>
        <h2 class="text-xl font-serif font-bold text-[#E51937]">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-slate-600">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <button
        type="button"
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        class="px-6 py-3 bg-[#E51937] hover:bg-[#B21B2A] text-white font-bold rounded-xl shadow transition"
    >{{ __('Delete Account') }}</button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6 bg-white rounded-2xl">
            @csrf
            @method('delete')

            <h2 class="text-xl font-serif font-bold text-[#002855]">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm text-slate-600">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <label for="password" class="block text-sm font-bold text-[#002855] mb-2">{{ __('Password') }}</label>

                <input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4 bg-slate-50 border border-slate-300 text-slate-900 rounded-xl p-3"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2 text-[#E51937]" />
            </div>

            <div class="mt-6 flex justify-end space-x-3">
                <button type="button" x-on:click="$dispatch('close')" class="px-5 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold rounded-xl transition">
                    {{ __('Cancel') }}
                </button>

                <button type="submit" class="px-5 py-2.5 bg-[#E51937] hover:bg-[#B21B2A] text-white font-bold rounded-xl shadow transition">
                    {{ __('Delete Account') }}
                </button>
            </div>
        </form>
    </x-modal>
</section>
