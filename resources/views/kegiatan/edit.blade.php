@extends('layouts.app')

@section('title', 'Edit Kegiatan')

@section('content')
<div class="container">
    <h1>Edit Kegiatan</h1>
    <form action="{{ route('kegiatan.update', $kegiatan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama_kegiatan" class="form-label">Nama</label>
            <input type="text" 
                   name="nama_kegiatan"  
                   id="nama_kegiatan" 
                   value="{{ old('nama_kegiatan', $kegiatan->nama_kegiatan) }}" 
                   class="form-control" 
                   required>

            <label for="deskripsi" class="form-label mt-3">Deskripsi</label>
            <input type="text" 
                   name="deskripsi" 
                   id="deskripsi" 
                   value="{{ old('deskripsi', $kegiatan->deskripsi) }}" 
                   class="form-control">
        </div>

        <button type="submit" class="btn btn-success mt-3">Update</button>
    </form>
</div>
@endsection
