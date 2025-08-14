<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Sironda')</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap.min.css') }}">
</head>
<body>
    @include('partials.navbar')

    <div class="container mt-4">
        @yield('content')
    </div>

    @include('partials.footer')
</body>
</html>