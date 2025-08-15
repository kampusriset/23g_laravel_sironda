@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
<div class="container mt-4">
    <h3 class="mb-4">Selamat datang, {{ $petugas->nama_lengkap }}!</h3>

    <div class="row">
        <div class="col-md-4">
            <div class="card border-primary mb-3">
                <div class="card-header bg-primary text-white">Informasi Akun</div>
                <div class="card-body">
                    <p><strong>Username:</strong> {{ $petugas->username }}</p>
                    <p><strong>Gender:</strong> {{ $petugas->gender == 'M' ? 'Laki-laki' : 'Perempuan' }}</p>
                    <p><strong>Status:</strong> {{ $petugas->is_active == '1' ? 'Aktif' : 'Nonaktif' }}</p>
                </div>
            </div>
        </div>

        {{-- Siap untuk modul tambahan --}}
        <div class="col-md-8">
            <div class="card border-success mb-3">
                <div class="card-header bg-success text-white">Aktivitas Ronda</div>
                <div class="card-body">
                    <p>Belum ada data ronda hari ini.</p>
                    {{-- Nanti bisa ditambahkan jumlah laporan, plot ronda, dll --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection