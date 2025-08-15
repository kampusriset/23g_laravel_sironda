@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
<div class="container mt-5">
    <h3 class="mb-3">Selamat datang, {{ $petugas->nama_lengkap }}!</h3>

    <div class="card">
        <div class="card-body">
            <p><strong>Username:</strong> {{ $petugas->username }}</p>
            <p><strong>Gender:</strong> {{ $petugas->gender == 'M' ? 'Laki-laki' : 'Perempuan' }}</p>
            <p><strong>Status:</strong> {{ $petugas->is_active == '1' ? 'Aktif' : 'Nonaktif' }}</p>
        </div>
    </div>

    <div class="mt-4 text-end">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>
</div>
@endsection