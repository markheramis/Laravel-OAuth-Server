<x-app-layout>
    <x-slot name="title">
        {{ __('Authorization Request') }}
    </x-slot>
    <div class="py-4">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <!-- Introduction -->
                    <p class="mb-4"><strong>{{ $client->name }}</strong> is requesting permission to access your
                        account.</p>
                    @if (count($scopes) > 0)
                        <ul class="list-group list-group-flush mb-4">
                            @foreach ($scopes as $scope)
                                <li class="list-group-item">
                                    <b>{{ Str::headline($scope->id) }}</b>: {{ $scope->description }}
                                </li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="d-flex justify-content-center gap-3">
                        <!-- Authorize Button -->
                        <form method="post" action="{{ route('passport.authorizations.approve') }}">
                            @csrf
                            <input type="hidden" name="state" value="{{ $request->state }}">
                            <input type="hidden" name="client_id" value="{{ $client->getKey() }}">
                            <input type="hidden" name="auth_token" value="{{ $authToken }}">
                            <x-primary-button>
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
                            <x-danger-button>
                                Cancel
                            </x-danger-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
