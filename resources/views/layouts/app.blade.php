<!DOCTYPE html>
<html lang="es" class="no-js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="theme-color" content="#050505">

    <title>@yield('title', 'Treemix Profesional · Biotecnología premium para cultivos')</title>
    <meta name="description" content="@yield('meta_description', 'Línea profesional de Treemix. Biotecnología desarrollada en laboratorio para cultivos de alto rendimiento. Elaborado en Buenos Aires, Argentina.')">

    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', 'Treemix Profesional')">
    <meta property="og:description" content="@yield('meta_description', 'Biotecnología premium para cultivos.')">
    <meta property="og:image" content="{{ asset('treemix.webp') }}">

    <link rel="icon" type="image/png" href="{{ asset('treemix.webp') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script>document.documentElement.classList.remove('no-js');</script>
</head>
<body>

    @include('partials.nav')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>
