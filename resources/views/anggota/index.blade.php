@extends('layouts.app')

@section('title', 'Anggota')

@section('content')
<div class="container">
    <h1>Daftar Anggota</h1>
    <a href="{{ route('anggota.create') }}" class="btn btn-primary mb-3">Tambah Anggota</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
        @foreach($anggota as $i => $a)
        <tr>
            <td>{{ $i+1 }}</td>
            <td>{{ $a->nama }}</td>
            <td>
                <a href="{{ route('anggota.edit', $a->id) }}" class="btn btn-warning btn-sm">Edit</a>

                <form action="{{ route('anggota.destroy', $a->id) }}" method="POST" style="display:inline">
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
