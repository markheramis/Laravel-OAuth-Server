<x-guest-layout>
    <x-slot name="title">
        {{ __('Authorization Request') }}
    </x-slot>

    <!-- Introduction -->


    <h3 class="text-center mt-3 mb-5"><strong>{{ $client->name }}</strong> would like to:</h3>
    @if (count($scopes) > 0)
        <ul class="mb-4">
            @foreach ($scopes as $scope)
                <li class="my-2">
                    {!! $scope->description !!}
                </li>
            @endforeach
        </ul>
    @endif
    <div class="d-flex justify-content-center gap-3 mb-3">
        <!-- Authorize Button -->
        <form method="post" action="{{ route('passport.authorizations.approve') }}">
            @csrf
            <input type="hidden" name="state" value="{{ $request->state }}">
            <input type="hidden" name="client_id" value="{{ $client->getKey() }}">
            <input type="hidden" name="auth_token" value="{{ $authToken }}">
            <x-primary-button style="min-width: 10rem;">
                Authorize
            </x-primary-button>
        </form>

        <!-- Cancel Button -->
        <form method="post" action="{{ route('passport.authorizations.deny') }}">
            @csrf
            @method('DELETE')
            <input type="hidden" name="state" value="{{ $request->state }}">
            <input type="hidden" name="client_id" value="{{ $client->getKey() }}">
            <input type="hidden" name="auth_token" value="{{ $authToken }}">
            <x-danger-button style="min-width: 10rem;">
                Cancel
            </x-danger-button>
        </form>
    </div>

    <a href="/" class="text-center d-block mb-2">Learn about permissions</a>

    <p class="mb-3">You can disconnect apps anytime in <a href="#">connected apps</a> within your account settings.</p>
</x-guest-layout>
