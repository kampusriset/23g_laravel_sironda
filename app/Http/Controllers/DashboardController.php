<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController
{
    public function index()
    {
        $petugas = Auth::guard('petugas')->user();
        return view('dashboard', compact('petugas'));
    }

}
