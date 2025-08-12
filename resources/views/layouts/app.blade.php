<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link rel="icon" type="iamges/png" href="{{ asset('assets/icon/favicon.png') }}">
</head>
<body>

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Konten Halaman --}}
    <div>
        @yield('content')
    </div>

    {{-- Footer --}}
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2025 Pos Ronda Kampung Aman. Dibuat dengan semangat gotong royong.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>