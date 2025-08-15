<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Sironda')</title>
    
    {{-- Vite CSS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @if (!in_array(Request::path(), ['login', 'register']))
        @include('partials.navbar')
    @endif

    <div class="container mt-4">
        @yield('content')
    </div>

    @include('partials.footer')
</body>
</html>
