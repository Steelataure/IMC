<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'IMC') }}</title>
    <link rel="icon" href="{{ asset('logo.png') }}" type="image/png">
    <link rel="apple-touch-icon" href="{{ asset('logo.png') }}">
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css" />
    <link href="https://cdn.datatables.net/2.0.8/js/dataTables.js" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">



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


</body>
</html>
