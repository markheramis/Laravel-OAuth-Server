<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        {{ config('app.name', 'Laravel') }}
        @isset($title)
            | {{ $title }}
        @endisset
    </title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    @vite(['resources/scss/app.scss'])
</head>

<body>
    <div class="min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div>
            <a href="/">
                <x-application-logo class="img-fluid" style="width: 5rem; height: 5rem;" />
            </a>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="card mt-4 shadow">
                        <div class="card-body">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</body>

</html>
