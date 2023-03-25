<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav>
        <!-- Aquí iría el código para tu menú de navegación -->
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Aquí iría el código para el pie de página -->
    </footer>
</body>
</html>
