<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Siswa - UPT SMKN 3 Parepare</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Inter', ui-sans-serif, system-ui, sans-serif; background: #FAF8FF; color: #131B2E; }
    </style>
</head>
<body class="min-h-screen pb-28 lg:pb-12 antialiased">

    {{-- Top Header --}}
    <header class="sticky top-0 z-30 bg-white/95 backdrop-blur border-b border-[#E9EAF3] px-4 sm:px-6 lg:px-10 py-3">
        <div class="max-w-6xl mx-auto flex items-center justify-between gap-4">
            <div class="flex items-center gap-3">
                <img src="{{ asset('images/logo.svg') }}" alt="Logo" class="w-9 h-9 rounded-full object-contain">
                <div>
                    <div class="text-[10px] font-extrabold uppercase tracking-wider text-[#00288E]">UPT SMKN 3 PAREPARE</div>
                    <div class="text-base sm:text-lg font-extrabold text-[#131B2E] leading-tight">Beranda</div>
                </div>
            </div>

            {{-- Desktop Nav (Visible on Laptop) --}}
            <nav class="hidden lg:flex items-center gap-1 rounded-2xl bg-[#F2F4FF] p-1">
                <a href="{{ route('siswa.dashboard') }}" class="px-4 py-1.5 rounded-xl bg-[#00288E] text-white text-xs font-extrabold shadow-xs">🏠 Beranda</a>
                <a href="#jadwal-mapel" class="px-4 py-1.5 rounded-xl text-[#444653] hover:text-[#00288E] text-xs font-bold">📅 Jadwal</a>
                <button type="button" onclick="bukaScannerWajah()" class="px-4 py-1.5 rounded-xl bg-[#FED01B] text-[#342900] text-xs font-extrabold">📷 Scan Biometrik</button>
                <a href="#statistik-siswa" class="px-4 py-1.5 rounded-xl text-[#444653] hover:text-[#00288E] text-xs font-bold">🕒 Riwayat</a>
                <a href="#profil-siswa" class="px-4 py-1.5 rounded-xl text-[#444653] hover:text-[#00288E] text-xs font-bold">🪪 Profil</a>
            </nav>

            <div class="flex items-center gap-2.5">
                <button type="button" class="relative w-9 h-9 rounded-full bg-[#F2F4FF] text-[#131B2E] flex items-center justify-center">
                    🔔
                </button>
                <div class="hidden sm:block text-right">
                    <div class="text-xs font-extrabold text-[#131B2E]">{{ auth()->user()->name }}</div>
                    <div class="text-[10px] font-semibold text-[#51586B]">NISN: 241031060 • XI DKV 1</div>
                </div>
                <div class="w-9 h-9 rounded-full bg-[#00288E] text-white text-xs font-extrabold flex items-center justify-center">
                    👤
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="h-9 px-3 rounded-xl bg-red-50 text-red-700 text-xs font-extrabold hover:bg-red-100 transition">
                        Keluar
                    </button>
                </form>
            </div>
        </div>
    </header>

    {{-- Main Container (Single Column on Mobile, 2-Column Grid on Laptop) --}}
    <main class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-10 pt-4 space-y-4 sm:space-y-5">

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 items-start">

            {{-- Left Column (Profile Greeting + Pilot Banner + Presensi Masuk Card + 3 Mini Cards) --}}
            <div class="lg:col-span-6 space-y-4">

                {{-- Greeting Profile Card --}}
                <section id="profil-siswa" class="rounded-3xl bg-white border border-[#E9EAF3] p-4 sm:p-5 shadow-xs flex items-center gap-3.5">
                    <div class="relative shrink-0">
                        <div class="w-14 h-14 rounded-full bg-gradient-to-br from-[#00288E] to-[#2348B2] text-white font-black text-base flex items-center justify-center shadow">
                            HM
                        </div>
                        <span class="absolute bottom-0 right-0 w-3.5 h-3.5 rounded-full bg-emerald-500 border-2 border-white"></span>
                    </div>
                    <div class="min-w-0">
                        <h1 class="text-lg sm:text-xl font-extrabold text-[#131B2E] truncate">
                            Selamat pagi, Haura 👋
                        </h1>
                        <div class="text-xs font-bold text-[#00288E]">Kelas XI DKV 1 • SMKN 3 Parepare</div>
                        <div class="mt-0.5 text-[11px] font-medium text-[#51586B]">
                            ◷ Rabu, 4 Nov 2026 • <span id="jamSiswa">06.58 WITA</span>
                        </div>
                    </div>
                </section>

                {{-- Pilot Presensi Biometrik Card --}}
                <section class="rounded-3xl bg-[#E6EBFF] border border-[#CFD8FF] p-4 flex items-start gap-3.5">
                    <div class="w-10 h-10 rounded-2xl bg-[#FED01B] text-[#342900] flex items-center justify-center font-black text-base shrink-0 shadow-xs">
                        ★
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center gap-2">
                            <span class="text-xs font-extrabold uppercase tracking-wider text-[#131B2E]">PILOT PRESENSI BIOMETRIK</span>
                            <span class="rounded-full bg-[#FED01B] px-2.5 py-0.5 text-[10px] font-extrabold text-[#342900]">Aktif</span>
                        </div>
                        <p class="mt-1 text-xs text-[#303950] leading-relaxed">
                            Periode 2–15 Nov 2026. Lakukan presensi mandiri sebelum <strong class="text-[#131B2E]">07.15 WITA</strong> untuk kepatuhan presensi industri.
                        </p>
                    </div>
                </section>

                {{-- Presensi Masuk Hari Ini Card --}}
                <section class="rounded-3xl bg-white border border-[#E9EAF3] p-5 shadow-sm space-y-3.5">
                    <div class="flex items-center justify-between gap-2">
                        <div class="flex items-center gap-2">
                            <span id="dotStatusMasuk" class="w-2.5 h-2.5 rounded-full bg-[#FED01B]"></span>
                            <h2 class="text-sm sm:text-base font-extrabold text-[#131B2E]">Presensi Masuk Hari Ini</h2>
                        </div>
                        <button type="button" id="btnSimulasiHadir" onclick="toggleSimulasiHadir()"
                                class="rounded-xl bg-[#EAEDFF] hover:bg-[#DCE2FF] px-3 py-1.5 text-[11px] font-extrabold text-[#00288E] flex items-center gap-1.5 transition">
                            <span>⇄</span>
                            <span id="labelSimulasi">Simulasi Sudah Hadir</span>
                        </button>
                    </div>

                    {{-- 2 Time Windows --}}
                    <div class="grid grid-cols-2 gap-2.5">
                        <div class="rounded-2xl bg-[#F5F7FF] p-3">
                            <div class="text-[11px] font-semibold text-[#51586B] flex items-center gap-1">
                                <span class="text-[#00288E]">✓</span><span>Tepat Waktu</span>
                            </div>
                            <div class="mt-1 text-xs sm:text-sm font-extrabold text-[#131B2E]">06.30 – 07.15 WITA</div>
                        </div>
                        <div class="rounded-2xl bg-[#F5F7FF] p-3">
                            <div class="text-[11px] font-semibold text-[#51586B] flex items-center gap-1">
                                <span class="text-amber-700">◷</span><span>Terlambat</span>
                            </div>
                            <div class="mt-1 text-xs sm:text-sm font-extrabold text-[#131B2E]">07.16 – 08.00 WITA</div>
                        </div>
                    </div>

                    {{-- Countdown / Status Bar --}}
                    <div id="boxCountdown" class="rounded-2xl bg-[#EAEDFF] p-3.5 flex items-center justify-between gap-3">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-full bg-white text-[#00288E] flex items-center justify-center font-bold text-sm shadow-xs">⏱️</div>
                            <div>
                                <div id="judulCountdown" class="text-[11px] font-semibold text-[#51586B]">Batas Tepat Waktu</div>
                                <div id="isiCountdown" class="text-base sm:text-lg font-black text-[#131B2E]">Sisa 17 Menit</div>
                            </div>
                        </div>
                        <span id="pillCountdown" class="rounded-lg bg-[#FED01B] px-2.5 py-1 text-[11px] font-extrabold text-[#342900]">
                            07.15 WITA
                        </span>
                    </div>

                    {{-- Primary CTA Button --}}
                    <button type="button" id="btnAbsenSekarang" onclick="bukaScannerWajah()"
                            class="w-full h-12 rounded-2xl bg-[#00288E] hover:bg-[#001F6E] text-white text-sm font-extrabold shadow-md flex items-center justify-center gap-2 transition">
                        <span>😊</span>
                        <span id="teksBtnAbsen">Absen Masuk Sekarang</span>
                    </button>
                </section>

                {{-- 3 Mini Stat Cards --}}
                <section id="statistik-siswa" class="grid grid-cols-3 gap-2.5 sm:gap-3">
                    <div class="rounded-2xl bg-white border border-[#E9EAF3] p-3.5 shadow-xs">
                        <div class="w-8 h-8 rounded-xl bg-[#F2F4FF] text-[#51586B] flex items-center justify-center text-xs">🔒</div>
                        <div class="mt-2.5 text-[11px] font-semibold text-[#51586B] leading-tight">Presensi Pulang</div>
                        <div class="mt-1 text-xs sm:text-sm font-extrabold text-[#131B2E]">16.15 WITA</div>
                        <div class="mt-1 text-[10px] text-[#757684]">Terkunci</div>
                    </div>

                    <div class="rounded-2xl bg-white border border-[#E9EAF3] p-3.5 shadow-xs">
                        <div class="w-8 h-8 rounded-xl bg-amber-50 text-amber-700 flex items-center justify-center text-xs">⚠️</div>
                        <div class="mt-2.5 text-[11px] font-semibold text-[#51586B] leading-tight">Poin Disiplin</div>
                        <div class="mt-1 text-xs sm:text-sm font-extrabold text-[#9A6B00]">5 Poin</div>
                        <div class="mt-1 text-[10px] font-extrabold text-[#00288E]">Detail →</div>
                    </div>

                    <div class="rounded-2xl bg-white border border-[#E9EAF3] p-3.5 shadow-xs">
                        <div class="w-8 h-8 rounded-xl bg-[#EAEDFF] text-[#00288E] flex items-center justify-center text-xs">📈</div>
                        <div class="mt-2.5 text-[11px] font-semibold text-[#51586B] leading-tight">Kehadiran</div>
                        <div class="mt-1 text-xs sm:text-sm font-extrabold text-[#00288E]">98.2%</div>
                        <div class="mt-1 text-[10px] text-[#51586B]">21 / 22 Hari</div>
                    </div>
                </section>
            </div>

            {{-- Right Column (Pelajaran Berikutnya + Jadwal Mapel Hari Ini) --}}
            <div class="lg:col-span-6 space-y-4">

                {{-- Pelajaran Berikutnya Card --}}
                <section class="rounded-3xl bg-white border border-[#E9EAF3] p-5 shadow-xs">
                    <div class="flex items-center justify-between gap-2">
                        <div class="flex items-center gap-1.5 text-[11px] font-extrabold uppercase tracking-wider text-[#51586B]">
                            <span class="text-[#00288E]">📅</span>
                            <span>PELAJARAN BERIKUTNYA</span>
                        </div>
                        <span class="rounded-full bg-[#FED01B]/80 px-3 py-1 text-[10.5px] font-extrabold text-[#342900]">
                            Mulai 17 Menit Lagi
                        </span>
                    </div>

                    <h2 class="mt-3 text-base sm:text-lg font-extrabold text-[#131B2E]">
                        Mapel KK Desain Komunikasi Visual
                    </h2>

                    <div class="mt-2.5 space-y-1.5 text-xs text-[#51586B]">
                        <div class="flex items-center gap-2">
                            <span class="text-[#00288E]">◷</span>
                            <span>Jam 1–7 (07.15 – 14.00 WITA)</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-[#00288E]">📍</span>
                            <span>Lab Komputer DKV 2</span>
                        </div>
                    </div>

                    <div class="mt-4 rounded-2xl bg-[#F5F7FF] p-3 flex items-center justify-between gap-3">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-full bg-[#00288E] text-white font-extrabold text-xs flex items-center justify-center">
                                ND
                            </div>
                            <div>
                                <div class="text-[10px] font-semibold text-[#51586B]">Guru Pengampu</div>
                                <div class="text-xs font-extrabold text-[#131B2E]">Nurhana Dattar, S.Kom.</div>
                            </div>
                        </div>
                        <span class="w-8 h-8 rounded-xl bg-white text-[#00288E] flex items-center justify-center shadow-xs text-xs">📁</span>
                    </div>
                </section>

                {{-- Jadwal Mapel Hari Ini Card --}}
                <section id="jadwal-mapel" class="rounded-3xl bg-white border border-[#E9EAF3] p-5 shadow-xs">
                    <div class="flex items-center justify-between mb-3.5">
                        <h2 class="text-base font-extrabold text-[#131B2E] flex items-center gap-2">
                            <span>📋</span><span>Jadwal Mapel Hari Ini</span>
                        </h2>
                        <span class="text-xs font-semibold text-[#51586B]">2 Sesi Terjadwal</span>
                    </div>

                    <div class="space-y-3">
                        <div class="rounded-2xl bg-[#F5F7FF] p-3.5 flex items-center justify-between gap-3">
                            <div class="flex items-center gap-3 min-w-0">
                                <div class="w-10 h-10 rounded-full bg-white text-[#00288E] flex items-center justify-center shadow-xs shrink-0">
                                    🎨
                                </div>
                                <div class="min-w-0">
                                    <h3 class="text-xs sm:text-sm font-extrabold text-[#131B2E] truncate">KK Desain Komunikasi Visual</h3>
                                    <p class="text-[11px] text-[#51586B]">Nurhana Dattar, S.Kom.</p>
                                    <p class="text-[10.5px] font-semibold text-[#757684] mt-0.5">Jam 1–7 • 07.15 WITA</p>
                                </div>
                            </div>
                            <div class="text-right shrink-0">
                                <span id="badgeLabSiswa" class="inline-block rounded-full bg-[#DCE4FF] px-2.5 py-1 text-[10px] font-extrabold text-[#00288E]">
                                    ⏳ Menunggu
                                </span>
                                <div class="text-[10px] text-[#757684] mt-1">Presensi di lab</div>
                            </div>
                        </div>

                        <div class="rounded-2xl bg-[#F5F7FF] p-3.5 flex items-center justify-between gap-3">
                            <div class="flex items-center gap-3 min-w-0">
                                <div class="w-10 h-10 rounded-full bg-white text-[#00288E] flex items-center justify-center shadow-xs shrink-0">
                                    📖
                                </div>
                                <div class="min-w-0">
                                    <h3 class="text-xs sm:text-sm font-extrabold text-[#131B2E] truncate">Pendidikan Agama Islam</h3>
                                    <p class="text-[11px] text-[#51586B]">Idar, S.Ag., M.Pd.</p>
                                    <p class="text-[10.5px] font-semibold text-[#757684] mt-0.5">Jam 8–10 • 14.00 WITA</p>
                                </div>
                            </div>
                            <div class="text-right shrink-0">
                                <span class="inline-block rounded-full bg-white px-2.5 py-1 text-[10px] font-bold text-[#51586B] border border-[#E2E6F5]">
                                    📅 Terjadwal
                                </span>
                                <div class="text-[10px] text-[#757684] mt-1">Ruang Teori 11</div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>

    {{-- Modal Biometric Face Scan Simulation --}}
    <div id="modalScannerWajah" class="fixed inset-0 z-50 bg-slate-900/60 backdrop-blur-xs hidden items-center justify-center p-4">
        <div class="bg-white rounded-3xl max-w-sm w-full p-6 text-center shadow-2xl border border-[#E9EAF3]">
            <span class="inline-flex items-center gap-1.5 rounded-full bg-[#EAEDFF] px-3 py-1 text-[10px] font-extrabold text-[#00288E]">
                🎯 RADAR GEOFENCING: 14m DARI GERBANG
            </span>
            <h3 class="mt-2 text-base font-extrabold text-[#131B2E]">Pemindaian Biometrik Wajah AI</h3>
            <p class="mt-1 text-xs text-[#51586B]">Posisikan wajah di dalam bingkai deteksi untuk verifikasi kehadiran</p>

            <div class="my-5 mx-auto w-44 h-44 rounded-full border-4 border-dashed border-[#00288E] bg-[#F2F4FF] flex flex-col items-center justify-center relative">
                <div class="text-4xl">😊</div>
                <div class="mt-2 text-[11px] font-extrabold text-[#00288E]">Haura M. Rahman</div>
                <div class="text-[10px] text-emerald-700 font-bold">Liveness Check: 99.4%</div>
            </div>

            <div class="flex flex-col gap-2">
                <button type="button" onclick="konfirmasiAbsenWajah()" class="w-full h-11 rounded-xl bg-[#00288E] text-white text-xs font-extrabold shadow">
                    ✓ Verifikasi &amp; Kirim Presensi Masuk
                </button>
                <button type="button" onclick="tutupScannerWajah()" class="w-full h-10 rounded-xl bg-slate-100 text-xs font-bold text-slate-600">
                    Batal
                </button>
            </div>
        </div>
    </div>

    {{-- Bottom Navigation Bar with Floating Center Scan Button (Visible on Mobile/Phone) --}}
    <nav class="lg:hidden fixed bottom-3 inset-x-4 z-40 bg-white/95 backdrop-blur rounded-3xl shadow-xl border border-[#E4E7F5] px-3 py-2 flex items-center justify-around">
        <a href="{{ route('siswa.dashboard') }}" class="flex flex-col items-center gap-0.5 text-[#00288E] font-extrabold text-[11px]">
            <span class="text-base">🏠</span><span>Beranda</span>
        </a>
        <a href="#jadwal-mapel" class="flex flex-col items-center gap-0.5 text-[#646B7E] font-semibold text-[11px]">
            <span class="text-base">📅</span><span>Jadwal</span>
        </a>

        {{-- Floating Center Biometric Scan Button --}}
        <div class="relative -top-5 flex flex-col items-center">
            <button type="button" onclick="bukaScannerWajah()"
                    class="w-14 h-14 rounded-full bg-[#00288E] text-white shadow-lg border-4 border-white flex items-center justify-center text-lg relative">
                <span>📷</span>
                <span class="absolute -top-1 -right-1 w-5 h-5 rounded-full bg-[#FED01B] text-[#342900] text-[10px] font-black flex items-center justify-center">★</span>
            </button>
            <span class="mt-0.5 text-[10.5px] font-extrabold text-[#00288E]">Presensi</span>
        </div>

        <a href="#statistik-siswa" class="flex flex-col items-center gap-0.5 text-[#646B7E] font-semibold text-[11px]">
            <span class="text-base">🕒</span><span>Riwayat</span>
        </a>
        <a href="#profil-siswa" class="flex flex-col items-center gap-0.5 text-[#646B7E] font-semibold text-[11px]">
            <span class="text-base">🪪</span><span>Profil</span>
        </a>
    </nav>

    <script>
        let sudahHadir = false;

        function toggleSimulasiHadir() {
            sudahHadir = !sudahHadir;
            renderStatusHadir();
        }

        function renderStatusHadir() {
            const dot = document.getElementById('dotStatusMasuk');
            const labelSim = document.getElementById('labelSimulasi');
            const box = document.getElementById('boxCountdown');
            const judul = document.getElementById('judulCountdown');
            const isi = document.getElementById('isiCountdown');
            const pill = document.getElementById('pillCountdown');
            const btn = document.getElementById('btnAbsenSekarang');
            const teksBtn = document.getElementById('teksBtnAbsen');
            const badgeLab = document.getElementById('badgeLabSiswa');

            if (sudahHadir) {
                dot.className = 'w-2.5 h-2.5 rounded-full bg-emerald-500';
                labelSim.textContent = 'Reset ke Belum Hadir';
                box.className = 'rounded-2xl bg-emerald-50 border border-emerald-200 p-3.5 flex items-center justify-between gap-3';
                judul.textContent = 'Status Presensi Gerbang';
                isi.textContent = 'Hadir Tepat Waktu (06.52 WITA)';
                isi.className = 'text-sm sm:text-base font-black text-emerald-800';
                pill.textContent = '✓ Terverifikasi';
                pill.className = 'rounded-lg bg-emerald-600 px-2.5 py-1 text-[11px] font-extrabold text-white';
                btn.className = 'w-full h-12 rounded-2xl bg-emerald-600 text-white text-sm font-extrabold shadow flex items-center justify-center gap-2';
                teksBtn.textContent = '✓ Sudah Absen Masuk (Notifikasi WA Terkirim)';
                badgeLab.textContent = '✓ Hadir di Lab';
                badgeLab.className = 'inline-block rounded-full bg-emerald-100 px-2.5 py-1 text-[10px] font-extrabold text-emerald-800';
            } else {
                dot.className = 'w-2.5 h-2.5 rounded-full bg-[#FED01B]';
                labelSim.textContent = 'Simulasi Sudah Hadir';
                box.className = 'rounded-2xl bg-[#EAEDFF] p-3.5 flex items-center justify-between gap-3';
                judul.textContent = 'Batas Tepat Waktu';
                isi.textContent = 'Sisa 17 Menit';
                isi.className = 'text-base sm:text-lg font-black text-[#131B2E]';
                pill.textContent = '07.15 WITA';
                pill.className = 'rounded-lg bg-[#FED01B] px-2.5 py-1 text-[11px] font-extrabold text-[#342900]';
                btn.className = 'w-full h-12 rounded-2xl bg-[#00288E] hover:bg-[#001F6E] text-white text-sm font-extrabold shadow-md flex items-center justify-center gap-2 transition';
                teksBtn.textContent = 'Absen Masuk Sekarang';
                badgeLab.textContent = '⏳ Menunggu';
                badgeLab.className = 'inline-block rounded-full bg-[#DCE4FF] px-2.5 py-1 text-[10px] font-extrabold text-[#00288E]';
            }
        }

        function bukaScannerWajah() {
            const m = document.getElementById('modalScannerWajah');
            m.classList.remove('hidden');
            m.classList.add('flex');
        }

        function tutupScannerWajah() {
            const m = document.getElementById('modalScannerWajah');
            m.classList.add('hidden');
            m.classList.remove('flex');
        }

        function konfirmasiAbsenWajah() {
            sudahHadir = true;
            renderStatusHadir();
            tutupScannerWajah();
        }
    </script>
</body>
</html>

