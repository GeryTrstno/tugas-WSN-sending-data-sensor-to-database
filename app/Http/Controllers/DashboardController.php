<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sensor;

class DashboardController extends Controller
{
    public function show()
    {
        // Ambil data sensor untuk ditampilkan di dashboard
        $sensors = Sensor::all();
        return view('dashboard', compact('sensors'));
    }

    public function clearAllData(Request $request)
    {
        // Hapus semua data sensor
        Sensor::truncate();

        // Kembali ke halaman dashboard dengan pesan sukses
        return redirect()->route('dashboard')->with('message', 'Semua data berhasil dihapus.');
    }
}
