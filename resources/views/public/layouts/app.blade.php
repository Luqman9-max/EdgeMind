<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Edge Mind — Clarity Through Pressure')</title>
    <meta name="description" content="@yield('meta_description', 'Edge Mind — Books that don\'t motivate. They confront. Curated self-development literature for the intellectually aggressive.')">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="noise-overlay">

    {{-- Navigation --}}
    @include('public.components.navbar')

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('public.components.footer')

</body>
</html>
