<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;

class DashboardPelayananController extends Controller
{
    public function index()
    {
        return view('dashboard.pelayanan.pelayanan-dashboard', [
            'title' => 'Pelayanan',
            'pendaftaran' => Pendaftaran::with('pelayanan')->where('user_id', auth()->user()->id)->get()
        ]);
    }
    public function show(Pendaftaran $pendaftaran)
    {
        // dd($pendaftaran->with('pelayanan')->where('user_id', auth()->user()->id)->get());
        return view('dashboard.pelayanan.pelayanan-show', [
            'title' => 'Pelayanan',
            'pelayanan' => $pendaftaran->with('pelayanan')->where('user_id', auth()->user()->id)->get()
        ]);
    }
}
