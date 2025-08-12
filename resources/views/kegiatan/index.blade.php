@extends('layouts.app')

@section('title', 'kegiatan')

@section('content')
<div class="container">
    <h1>Daftar Kegiatan</h1>
    <a href="{{ route('kegiatan.create') }}" class="btn btn-primary mb-3">Tambah Kegiatan</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Kegiatan</th>
            <th>Deskripsi</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
        @foreach($kegiatan as $i => $a)
        <tr>
            <td>{{ $i+1 }}</td>
            <td>{{ $a->nama_kegiatan }}</td>
            <td>{{ $a->deskripsi }}</td>
            <td>{{ $a->tanggal }}</td>
            <td>
                <a href="{{ route('kegiatan.edit', $a->id) }}" class="btn btn-warning btn-sm">Edit</a>

                <form action="{{ route('kegiatan.destroy', $a->id) }}" method="POST" style="display:inline">
                    @csrf 
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
