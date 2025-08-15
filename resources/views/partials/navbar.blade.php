<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/dashboard">
            <img src="{{ asset("assets/icon/LogoNav_sironda.png") }}" style="height: 32px; max-width: 120px; object-fit: contain;" class="img-fluid" alt="Logo SiRonda">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
            <ul class="navbar-nav nav-underline">
                <li class="nav-item"><a class="nav-link active" href="/dashboard">Beranda</a></li>
                <li class="nav-item"><a class="nav-link active" href="/petugas">Petugas</a></li>
                <li class="nav-item"><a class="nav-link active" href="/plot">Jadwal</a></li>
                <li class="nav-item"><a class="nav-link active" href="/laporan">Laporan</a></li>
                <li class="nav-item"><a class="nav-link active" href="/rekap">Rekap</a></li>

                @auth
                <li class="nav-item">
                    <span class="nav-link">👮 {{ Auth::user()->nama }}</span>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn btn-sm btn-outline-light ms-2">Logout</button>
                    </form>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>