<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/dashboard">Sironda</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="/petugas">Petugas</a></li>
                <li class="nav-item"><a class="nav-link" href="/plot">Jadwal</a></li>
                <li class="nav-item"><a class="nav-link" href="/laporan">Laporan</a></li>
                <li class="nav-item"><a class="nav-link" href="/rekap">Rekap</a></li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item">
                    <span class="nav-link">👮 {{ Auth::user()->nama }}</span>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn btn-sm btn-outline-light">Logout</button>
                    </form>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>