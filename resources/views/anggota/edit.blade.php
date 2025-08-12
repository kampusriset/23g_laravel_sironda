@extends('layouts.app')

@section('title', 'Edit Anggota')

@section('content')
<div class="container">
    <h1>Edit Anggota</h1>
    <form action="{{ route('anggota.update', $anggota->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" id="nama" value="{{ $anggota->nama }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
