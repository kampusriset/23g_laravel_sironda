@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
<h3>Ringkasan Ronda Hari Ini</h3>

<h5>📅 Jadwal Ronda</h5>
<ul>
    @forelse($jadwalHariIni as $plot)
        <li>{{ $plot->petugas->nama }} - {{ $plot->shift }} ({{ $plot->tanggal }})</li>
    @empty
        <li>Tidak ada jadwal hari ini.</li>
    @endforelse
</ul>

<h5>📝 Laporan Masuk</h5>
<ul>
    @forelse($laporanHariIni as $laporan)
        <li>{{ $laporan->petugas->nama }} - {{ $laporan->isi }} ({{ $laporan->tanggal }})</li>
    @empty
        <li>Belum ada laporan hari ini.</li>
    @endforelse
</ul>
@endsection