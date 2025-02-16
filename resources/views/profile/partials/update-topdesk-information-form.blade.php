<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('TopDesk Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update you TopDesk credentials") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.updateTopDesk') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="topdesk_url" :value="__('URL')" />
            <x-text-input id="topdesk_url" name="topdesk_url" type="text" class="block w-full mt-1" :value="old('topdesk_url', $user->topdesk_url)" />
            <x-input-error class="mt-2" :messages="$errors->get('topdesk_url')" />
        </div>

        <div>
            <x-input-label for="topdesk_username" :value="__('Username')" />
            <x-text-input id="topdesk_username" name="topdesk_username" type="text" class="block w-full mt-1" :value="old('topdesk_username', $user->topdesk_username)" />
            <x-input-error class="mt-2" :messages="$errors->get('topdesk_username')" />
        </div>

        <div>
            <x-input-label for="topdesk_password" :value="__('Password')" />
            <x-text-input id="topdesk_password" name="topdesk_password" type="password" class="block w-full mt-1" :value="old('topdesk_password', $user->topdesk_password)" />
            <x-input-error class="mt-2" :messages="$errors->get('topdesk_password')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'topdesk-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
