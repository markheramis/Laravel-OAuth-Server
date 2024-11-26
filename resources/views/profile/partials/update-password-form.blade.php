<section>
    <header>
        <h2 class="h4 mb-3">
            {{ __('Update Password') }}
        </h2>
        <p class="text-muted mb-3">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>
    <form method="post" action="{{ route('password.update') }}" class="mb-4">
        @csrf
        @method('put')
        <div class="mb-3">
            <x-input-label for="update_password_current_password" :value="__('Current Password')" />
            <x-text-input id="update_password_current_password" name="current_password" type="password" class="w-100"
                autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>
        <div class="mb-3">
            <x-input-label for="update_password_password" :value="__('New Password')" />
            <x-text-input id="update_password_password" name="password" type="password" class="w-100"
                autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>
        <div class="mb-3">
            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password"
                class="w-100" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>
        <div class="d-flex align-items-center">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-muted ms-3 mb-0">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
