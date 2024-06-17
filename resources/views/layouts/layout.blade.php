<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <nav class="bg-gray-800 p-4">
        <div class="container mx-auto flex items-center justify-between">
            <div class="text-white text-lg font-semibold">IMC</div>
            <div>
                <a href="/" class="text-white px-4 hover:text-gray-300">Accueil</a>
                <a href="/simulateur" class="text-white px-4 hover:text-gray-300">Simulateur</a>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
