<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plot;
use APP\Models\Laporan;

class DashboardController
{
    public function index() {
        $jadwalHariIni = Plot::whereDate('tanggal', now())->get();
        $laporanHariIni = Laporan::whereDate('tanggal', now())->get();

        return view('dashboard', compact('jadwalHariIni', 'laporanHariIni'));
    }

}
