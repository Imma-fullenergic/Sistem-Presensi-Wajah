<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TU\AkunController;
use App\Http\Controllers\TU\DashboardController as TUDashboardController;
use App\Http\Controllers\BK\DashboardController as BKDashboardController;
use App\Http\Controllers\Mapel\DashboardController as MapelDashboardController;
use App\Http\Controllers\Wali\DashboardController as WaliDashboardController;
use App\Http\Controllers\Ortu\DashboardController as OrtuDashboardController;
use App\Http\Controllers\Siswa\DashboardController as SiswaDashboardController;

Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route(auth()->user()->dashboardRoute());
    }
    return redirect()->route('login');
});

Route::middleware('auth')->group(function () {

    // Mengarahkan ke beranda sesuai peran (RBAC)
    Route::get('/dashboard', function () {
        $user = auth()->user();
        return redirect()->route($user->dashboardRoute());
    })->name('dashboard');

    // Beranda masing-masing Role dengan proteksi Middleware RBAC
    Route::get('/tu',    [TUDashboardController::class, 'index'])->middleware('role:tu')->name('tu.dashboard');
    Route::get('/bk',    [BKDashboardController::class, 'index'])->middleware('role:guru_bk')->name('bk.dashboard');
    Route::get('/mapel', [MapelDashboardController::class, 'index'])->middleware('role:guru_mapel')->name('mapel.dashboard');
    Route::get('/wali',  [WaliDashboardController::class, 'index'])->middleware('role:wali_kelas')->name('wali.dashboard');
    Route::get('/ortu',  [OrtuDashboardController::class, 'index'])->middleware('role:orang_tua')->name('ortu.dashboard');
    Route::get('/siswa', [SiswaDashboardController::class, 'index'])->middleware('role:siswa')->name('siswa.dashboard');

    // Kelola akun (khusus Role TU)
    Route::middleware('role:tu')->prefix('tu/akun')->name('tu.akun.')->group(function () {
        Route::get('/', [AkunController::class, 'index'])->name('index');
        Route::get('/buat', [AkunController::class, 'create'])->name('create');
        Route::post('/', [AkunController::class, 'store'])->name('store');
        Route::patch('/{user}/toggle', [AkunController::class, 'toggle'])->name('toggle');
        Route::patch('/{user}/reset', [AkunController::class, 'resetPassword'])->name('reset');
    });

    // Profil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

require __DIR__ . '/auth.php';
