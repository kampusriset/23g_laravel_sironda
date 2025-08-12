@extends('layouts.app')

@section('title', 'Tambah Kegiatan')

@section('content')
<div class="container">
    <h1>Tambah Kegiatan</h1>
    <form action="{{ route('kegiatan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama_kegiatan" id="nama_kegiatan" class="form-control" required>
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="text" name="deskripsi" id="deskripsi" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
