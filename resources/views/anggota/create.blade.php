@extends('layouts.app')

@section('title', 'Tambah Anggota')

@section('content')
<div class="container">
    <h1>Tambah Anggota</h1>
    <form action="{{ route('anggota.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
