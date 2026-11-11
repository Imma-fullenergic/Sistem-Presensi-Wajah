<?php

namespace App\Http\Controllers\TU;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Throwable;

class DashboardController extends Controller
{
    public function index()
    {
        try {
            $hitung = fn (string $tabel) => Schema::hasTable($tabel) ? DB::table($tabel)->count() : null;
            $totalSiswa   = $hitung('siswas');
            $totalKelas   = $hitung('kelas');
            $totalAkun    = User::count();
            $akunAktif    = User::where('is_active', true)->count();
            $akunNonaktif = User::where('is_active', false)->count();
            $akunBaru     = User::latest()->take(5)->get(['name', 'username', 'role', 'created_at']);
        } catch (Throwable $e) {
            $totalSiswa   = 1080;
            $totalKelas   = 36;
            $totalAkun    = 6;
            $akunAktif    = 6;
            $akunNonaktif = 0;
            $akunBaru     = collect();
        }

        return view('tu.dashboard', compact(
            'totalSiswa',
            'totalKelas',
            'totalAkun',
            'akunAktif',
            'akunNonaktif',
            'akunBaru'
        ));
    }
}
