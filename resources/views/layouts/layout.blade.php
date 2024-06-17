<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'IMC') }}</title>
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.0.8/js/dataTables.js" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" rel="stylesheet">

</head>
<body class="bg-gray-100 font-sans antialiased">

    <nav class="bg-gray-800 text-white shadow-md">
        <div class="container mx-auto px-4 py-2 flex items-center justify-between">
            <div class="text-lg font-semibold">IMC</div>
            <div>
                <a href="/" class="px-4 hover:text-gray-300">Accueil</a>
                <a href="/imc" class="px-4 hover:text-gray-300">Simulateur</a>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-8">
        @yield('content')
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
