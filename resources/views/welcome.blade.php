<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <div class="d-block">
                    <x-application-logo style="height: 27px;" />
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    @auth
                        <li class="nav-item">
                            <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                        </li>
                    @endif
                </ul>
                @guest
                <div class="d-flex">
                    <a href="{{ route('login') }}" class="btn btn-outline-primary text-nowrap mx-1 mx-lg-2 px-4 px-lg-5">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-outline-secondary text-nowrap mx-1 mx-lg-2 px-4 px-lg-5">Register</a>
                    @endif
                </div>
                @endif
            </div>
        </div>
    </nav>
    <main class="mt-4">
    </main>
    <footer>
        <div class="container">
            <span class="text-muted">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </span>
        </div>
    </footer>
</body>
</html>
