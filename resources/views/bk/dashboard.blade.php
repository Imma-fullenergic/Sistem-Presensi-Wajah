<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Guru BK - UPT SMKN 3 Parepare</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Inter', ui-sans-serif, system-ui, sans-serif; background: #FAF8FF; color: #131B2E; }
    </style>
</head>
<body class="min-h-screen flex flex-col lg:flex-row antialiased">

    {{-- Mobile Overlay --}}
    <div id="bkOverlay" class="fixed inset-0 bg-slate-900/50 backdrop-blur-xs z-30 hidden lg:hidden" onclick="toggleBkMenu()"></div>

    {{-- Left Sidebar (Fixed on Laptop, Drawer on Mobile) --}}
    <aside id="bkSidebar" class="fixed inset-y-0 left-0 z-40 w-[268px] bg-gradient-to-b from-[#072985] via-[#133AA3] to-[#0E3192] text-[#DCE5FF] flex flex-col justify-between transform -translate-x-full lg:translate-x-0 transition-transform duration-200 ease-in-out shrink-0">
        <div>
            {{-- Brand --}}
            <div class="px-5 py-5 flex items-center gap-3 border-b border-white/10">
                <div class="w-10 h-10 rounded-full bg-white p-0.5 shrink-0 flex items-center justify-center">
                    <img src="{{ asset('images/logo.svg') }}" alt="Logo" class="w-full h-full object-contain">
                </div>
                <div class="min-w-0">
                    <div class="text-[10px] font-bold tracking-wider text-[#AEBFFF] uppercase">UPT SMKN 3 PAREPARE</div>
                    <div class="text-sm font-extrabold text-white truncate">Bimbingan Konseling</div>
                </div>
                <button type="button" onclick="toggleBkMenu()" class="lg:hidden ml-auto w-8 h-8 rounded-lg bg-white/10 text-white flex items-center justify-center">✕</button>
            </div>

            {{-- Navigation --}}
            <div class="px-3.5 py-4">
                <div class="px-3 mb-2 text-[10px] font-extrabold uppercase tracking-wider text-[#A9BBF5]">Menu Utama</div>
                <nav class="space-y-1 text-[13px] font-medium">
                    <a href="{{ route('bk.dashboard') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl bg-[#0049BE]/90 text-white font-bold border-l-4 border-[#FFDC72]">
                        <span>⊞</span><span>Dashboard</span>
                    </a>
                    <a href="#tabel-risiko" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-[#C8D4FF] hover:bg-white/10 hover:text-white transition">
                        <span>⚠️</span><span>Siswa Berisiko</span>
                    </a>
                    <a href="#tabel-risiko" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-[#C8D4FF] hover:bg-white/10 hover:text-white transition">
                        <span>⚖️</span><span>Poin &amp; Pelanggaran</span>
                    </a>
                    <a href="#eskalasi" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-[#C8D4FF] hover:bg-white/10 hover:text-white transition">
                        <span>✉️</span><span>Sanksi &amp; Surat Peringatan</span>
                    </a>
                    <span class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-[#C8D4FF]/80 cursor-default">
                        <span>📋</span><span>Dispensasi Kolektif</span>
                    </span>
                    <span class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-[#C8D4FF]/80 cursor-default">
                        <span>📊</span><span>Laporan</span>
                    </span>
                    <span class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-[#C8D4FF]/80 cursor-default">
                        <span>👤</span><span>Profil</span>
                    </span>
                </nav>
            </div>
        </div>

        {{-- Footer --}}
        <div class="p-4">
            <div class="rounded-xl bg-[#042069]/80 border border-white/10 p-3.5">
                <div class="flex items-center justify-between">
                    <span class="text-[10px] font-extrabold tracking-wider text-[#A9BBF5]">TAHUN AJARAN</span>
                    <span class="rounded-full bg-[#FFDC72] px-2 py-0.5 text-[10px] font-extrabold text-[#332800]">Aktif</span>
                </div>
                <div class="mt-1.5 text-xs font-extrabold text-white">Semester Ganjil 2026/2027</div>
                <div class="mt-0.5 text-[11px] text-[#BDCBFF]">◷ Zona WITA (UTC+8)</div>
            </div>
        </div>
    </aside>

    {{-- Main Content Area --}}
    <div class="flex-1 lg:ml-[268px] flex flex-col min-w-0">

        {{-- Topbar --}}
        <header class="sticky top-0 z-20 bg-white/90 backdrop-blur border-b border-[#EFEDF7] px-4 sm:px-6 py-3 flex flex-wrap items-center justify-between gap-3">
            <div class="flex items-center gap-3">
                <button type="button" onclick="toggleBkMenu()" class="lg:hidden w-9 h-9 rounded-xl bg-[#EDF0FF] text-[#092F98] font-bold flex items-center justify-center">☰</button>
                <div>
                    <div class="text-[10px] font-extrabold uppercase tracking-wider text-[#092F98]">SMK NEGERI 3 PAREPARE</div>
                    <div class="text-xs sm:text-sm font-extrabold text-[#131B2E]">PORTAL GURU BIMBINGAN KONSELING (BK)</div>
                </div>
            </div>

            <div class="flex items-center gap-2.5 sm:gap-3 ml-auto">
                <div class="hidden md:flex items-center gap-2 rounded-xl border border-[#D7D8E4] bg-[#F8F9FF] px-3 py-1.5 w-64">
                    <span class="text-xs text-slate-400">🔍</span>
                    <input type="search" id="topSearchBk" oninput="filterSiswaBk(this.value)" placeholder="Cari nama siswa, NISN, atau kelas..." class="w-full bg-transparent text-xs focus:outline-none">
                </div>

                <div class="hidden sm:flex items-center gap-1.5 rounded-xl bg-[#F0F2FF] px-3 py-1.5 text-[11px] font-extrabold text-[#0B369C]">
                    <span>◷</span>
                    <span id="bkClock">{{ now()->timezone('Asia/Makassar')->format('H:i:s') }} WITA</span>
                </div>

                <button type="button" class="relative w-9 h-9 rounded-xl bg-[#F1F3FF] flex items-center justify-center text-sm">
                    🔔<span class="absolute top-1.5 right-2 w-2 h-2 rounded-full bg-red-600"></span>
                </button>

                <div class="hidden sm:flex items-center gap-2.5 pl-1">
                    <div class="text-right">
                        <div class="text-xs font-extrabold text-[#131B2E]">{{ auth()->user()->name }}</div>
                        <div class="text-[10px] font-semibold text-[#646B7E]">Koordinator BK Tingkat XI</div>
                    </div>
                    <div class="w-9 h-9 rounded-full bg-[#0C3298] text-white text-xs font-extrabold flex items-center justify-center">
                        {{ strtoupper(substr(auth()->user()->name, 0, 2)) }}
                    </div>
                </div>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="h-9 px-3 rounded-xl bg-red-50 text-red-700 text-xs font-extrabold hover:bg-red-100 transition">
                        Keluar
                    </button>
                </form>
            </div>
        </header>

        {{-- Page Body --}}
        <main class="p-4 sm:p-6 space-y-5 max-w-7xl w-full mx-auto">

            {{-- Page Title & Actions --}}
            <section class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
                <div>
                    <div class="flex flex-wrap items-center gap-2 text-[11px] font-extrabold">
                        <span class="inline-flex items-center gap-1.5 rounded-full bg-[#E9EDFF] px-3 py-1 text-[#092F98]">
                            🤖 MODUL AI BK TERPADU
                        </span>
                        <span class="text-emerald-700 font-semibold">● Data diperbarui: Hari ini, 07:42 WITA</span>
                    </div>
                    <h1 class="mt-2 text-xl sm:text-2xl font-extrabold text-[#131B2E] tracking-tight">
                        Klasifikasi &amp; Pemantauan Siswa Berisiko Presensi
                    </h1>
                    <p class="mt-1 text-xs sm:text-sm text-[#51586B]">
                        Sistem Deteksi Dini Anomali Kehadiran &amp; Bimbingan Restoratif UPT SMKN 3 Parepare • Semester Ganjil TA 2026/2027
                    </p>
                </div>

                <div class="flex flex-wrap items-center gap-2.5">
                    <button type="button" onclick="window.print()" class="inline-flex items-center gap-2 rounded-xl border border-[#C8D4FF] bg-[#EDF0FF] px-4 py-2.5 text-xs font-extrabold text-[#092F98] hover:bg-[#DCE4FF] transition">
                        ⬇ Unduh Rekap Intervensi (.PDF)
                    </button>
                    <button type="button" onclick="alert('Sinkronisasi Data Absensi Gerbang & Klasifikasi AI C4.5 berhasil diperbarui.')" class="inline-flex items-center gap-2 rounded-xl bg-[#092F98] px-4 py-2.5 text-xs font-extrabold text-white shadow hover:bg-[#062270] transition">
                        ↻ Sinkronkan Data Absensi &amp; AI
                    </button>
                </div>
            </section>

            {{-- Prinsip Bimbingan Restoratif Banner --}}
            <section class="rounded-2xl bg-[#EEF2FF] border border-[#D8E0FF] p-4 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                <div class="flex items-start gap-3">
                    <div class="w-9 h-9 rounded-xl bg-white text-[#092F98] flex items-center justify-center font-extrabold shrink-0 shadow-xs">⚖️</div>
                    <div>
                        <div class="text-[10px] font-extrabold uppercase tracking-wider text-[#092F98]">PRINSIP BIMBINGAN RESTORATIF</div>
                        <div class="text-xs sm:text-sm font-extrabold text-[#131B2E] mt-0.5">
                            "Hasil klasifikasi hanya alat bantu pembinaan, bukan sanksi otomatis."
                        </div>
                        <p class="text-[11px] text-[#51586B] mt-0.5 leading-relaxed">
                            Keputusan pemberian sanksi, pemanggilan orang tua, dan pembinaan karakter sepenuhnya merupakan wewenang profesional Guru BK dan Wali Kelas berdasarkan dialog evaluatif dan bukti lapangan.
                        </p>
                    </div>
                </div>
                <span class="shrink-0 self-start sm:self-center rounded-lg bg-white px-3 py-1.5 text-[10px] font-bold text-[#51586B] border border-[#E2E8F0]">
                    Permendikbud No. 111/2014
                </span>
            </section>

            {{-- 3 Risk Classification Cards --}}
            <section class="grid grid-cols-1 md:grid-cols-3 gap-4">
                {{-- Risiko Rendah --}}
                <article class="rounded-2xl bg-gradient-to-br from-white via-white to-emerald-50/60 border border-emerald-100 p-5 shadow-xs flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between">
                            <span class="inline-flex items-center gap-1 rounded-full bg-emerald-100 px-2.5 py-1 text-[10px] font-extrabold text-emerald-800">
                                ✓ Kondusif
                            </span>
                            <span class="text-[11px] font-bold text-[#646B7E]">88.3% Total Siswa</span>
                        </div>
                        <div class="mt-3 flex items-baseline gap-1.5">
                            <span class="text-3xl font-black text-[#131B2E]">318</span>
                            <span class="text-xs font-bold text-[#51586B]">Siswa</span>
                        </div>
                        <h2 class="mt-1 text-sm font-extrabold text-emerald-700">Risiko Rendah (Zona Aman)</h2>
                        <p class="mt-2 text-[11.5px] text-[#51586B] leading-relaxed">
                            Akumulasi &lt; 30 Poin, tingkat presensi ≥ 95%, tidak ada tren alpa berulang. Kedisiplinan bengkel dan teori berjalan optimal.
                        </p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-emerald-100/80 flex items-center justify-between text-[11px] font-extrabold text-emerald-700">
                        <span>✓ Monitoring Rutin Bulanan</span>
                        <span>→</span>
                    </div>
                </article>

                {{-- Risiko Sedang --}}
                <article class="rounded-2xl bg-gradient-to-br from-white via-white to-amber-50/70 border border-amber-200/80 p-5 shadow-xs flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between">
                            <span class="inline-flex items-center gap-1 rounded-full bg-amber-100 px-2.5 py-1 text-[10px] font-extrabold text-amber-900">
                                ◷ Perlu Pendampingan
                            </span>
                            <span class="text-[11px] font-bold text-[#646B7E]">7.8% Total Siswa</span>
                        </div>
                        <div class="mt-3 flex items-baseline gap-1.5">
                            <span class="text-3xl font-black text-[#131B2E]">28</span>
                            <span class="text-xs font-bold text-[#51586B]">Siswa</span>
                        </div>
                        <h2 class="mt-1 text-sm font-extrabold text-amber-800">Risiko Sedang (Waspada Intervensi)</h2>
                        <p class="mt-2 text-[11.5px] text-[#51586B] leading-relaxed">
                            30–99 Poin, sering terlambat gerbang &gt;3x atau 1–2 kali alpa tanpa izin sah. Perlu edukasi kendala transportasi atau bengkel.
                        </p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-amber-200/60 flex items-center justify-between text-[11px] font-extrabold text-amber-800">
                        <span>📅 Jadwalkan Konseling Siswa</span>
                        <span>→</span>
                    </div>
                </article>

                {{-- Risiko Tinggi --}}
                <article class="rounded-2xl bg-gradient-to-br from-white via-white to-rose-50/70 border border-rose-200/80 p-5 shadow-xs flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between">
                            <span class="inline-flex items-center gap-1 rounded-full bg-rose-100 px-2.5 py-1 text-[10px] font-extrabold text-rose-800">
                                ▲ Tindakan Segera
                            </span>
                            <span class="text-[11px] font-bold text-[#646B7E]">3.9% Total Siswa</span>
                        </div>
                        <div class="mt-3 flex items-baseline gap-1.5">
                            <span class="text-3xl font-black text-rose-600">14</span>
                            <span class="text-xs font-bold text-[#51586B]">Siswa</span>
                        </div>
                        <h2 class="mt-1 text-sm font-extrabold text-rose-700">Risiko Tinggi (Intervensi Intensif)</h2>
                        <p class="mt-2 text-[11.5px] text-[#51586B] leading-relaxed">
                            ≥ 100 Poin atau Alpa ≥ 3x berurutan dalam 2 minggu. Direkomendasikan koordinasi wali kelas, home visit, dan pemanggilan orang tua.
                        </p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-rose-200/60 flex items-center justify-between text-[11px] font-extrabold text-rose-700">
                        <span>❗ Eskalasi Surat Peringatan (SP)</span>
                        <span>→</span>
                    </div>
                </article>
            </section>

            {{-- Middle 2 Panels: ML Accuracy & Counseling Status --}}
            <section class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                {{-- ML Model Panel --}}
                <article class="rounded-2xl bg-white border border-[#E9EAF3] p-5 shadow-xs">
                    <div class="flex items-start justify-between gap-2">
                        <div class="flex items-center gap-2.5">
                            <div class="w-9 h-9 rounded-xl bg-[#E9EDFF] text-[#092F98] flex items-center justify-center font-bold">📈</div>
                            <div>
                                <h2 class="text-sm font-extrabold text-[#131B2E]">Akurasi Model Machine Learning Klasifikasi</h2>
                                <p class="text-[11px] text-[#777D91]">Evaluasi dataset presensi historis 3 semester terakhir</p>
                            </div>
                        </div>
                        <span class="rounded-lg bg-[#E9EDFF] px-2.5 py-1 text-[10px] font-extrabold text-[#092F98]">Versi 2.4 - C4.5</span>
                    </div>

                    <div class="mt-4 grid grid-cols-2 gap-3 rounded-xl bg-[#F8F9FF] p-3.5 border border-[#EDF0F8]">
                        <div>
                            <div class="text-[10px] font-extrabold uppercase text-[#6F7488]">ALGORITMA AKTIF</div>
                            <div class="mt-1 text-2xl font-black text-[#092F98]">94.2% <span class="text-[11px] font-bold text-[#51586B]">F1-Score</span></div>
                            <div class="text-[11px] font-semibold text-[#51586B]">Decision Tree Merdeka C4.5</div>
                        </div>
                        <div>
                            <div class="text-[10px] font-extrabold uppercase text-[#6F7488]">KOMPARASI AMBANG</div>
                            <div class="mt-1 text-2xl font-black text-[#646B7E]">78.5% <span class="text-[11px] font-bold">Baseline</span></div>
                            <div class="text-[11px] font-semibold text-[#646B7E]">Metode Rule Ambang Sederhana</div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <div class="flex justify-between text-[11px] font-bold mb-1.5">
                            <span class="text-[#092F98]">Peningkatan Reliabilitas Rekomendasi</span>
                            <span class="text-emerald-700">+15.7% Sensitivitas Deteksi Dini</span>
                        </div>
                        <div class="h-2.5 w-full rounded-full bg-[#E9EAFF] overflow-hidden">
                            <div class="h-full bg-[#092F98] rounded-full" style="width: 94.2%"></div>
                        </div>
                        <div class="mt-2.5 flex items-center justify-between text-[11px] text-[#646B7E]">
                            <span>⚙ Dilatih dengan 1.240 record presensi riil siswa vokasi</span>
                            <span class="font-extrabold text-[#092F98]">Parameter Model</span>
                        </div>
                    </div>
                </article>

                {{-- Status Intervensi Konseling Panel --}}
                <article class="rounded-2xl bg-white border border-[#E9EAF3] p-5 shadow-xs">
                    <div class="flex items-start justify-between gap-2">
                        <div class="flex items-center gap-2.5">
                            <div class="w-9 h-9 rounded-xl bg-[#E9EDFF] text-[#092F98] flex items-center justify-center font-bold">☑️</div>
                            <div>
                                <h2 class="text-sm font-extrabold text-[#131B2E]">Status Intervensi Konseling Bulan Ini</h2>
                                <p class="text-[11px] text-[#777D91]">Realisasi penanganan siswa oleh tim guru BK SMKN 3 Parepare</p>
                            </div>
                        </div>
                        <span class="rounded-lg bg-[#F1F3FF] px-2.5 py-1 text-[10px] font-extrabold text-[#303950]">November 2026</span>
                    </div>

                    <div class="mt-4 grid grid-cols-3 gap-2.5">
                        <div class="rounded-xl bg-emerald-50/70 border border-emerald-100 p-3">
                            <div class="flex items-center justify-between text-[10px] font-extrabold text-emerald-700">
                                <span>✓</span><span>50%</span>
                            </div>
                            <div class="mt-1 text-xl font-black text-[#131B2E]">9</div>
                            <div class="text-[10.5px] font-semibold text-[#51586B] leading-tight mt-0.5">Selesai Bimbingan Restoratif</div>
                        </div>
                        <div class="rounded-xl bg-amber-50/70 border border-amber-100 p-3">
                            <div class="flex items-center justify-between text-[10px] font-extrabold text-amber-800">
                                <span>📅</span><span>28%</span>
                            </div>
                            <div class="mt-1 text-xl font-black text-[#131B2E]">5</div>
                            <div class="text-[10.5px] font-semibold text-[#51586B] leading-tight mt-0.5">Dalam Penjadwalan Temu BK</div>
                        </div>
                        <div class="rounded-xl bg-rose-50/70 border border-rose-100 p-3">
                            <div class="flex items-center justify-between text-[10px] font-extrabold text-rose-700">
                                <span>✉️</span><span>22%</span>
                            </div>
                            <div class="mt-1 text-xl font-black text-[#131B2E]">4</div>
                            <div class="text-[10.5px] font-semibold text-[#51586B] leading-tight mt-0.5">Surat Peringatan &amp; Ortu Terbit</div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <div class="flex justify-between text-[11px] font-bold mb-1.5">
                            <span class="text-[#51586B]">Tingkat Penyelesaian Kasus Bulan Berjalan</span>
                            <span class="text-[#092F98]">18 Total Sasaran Kasus</span>
                        </div>
                        <div class="h-2.5 w-full rounded-full bg-slate-100 overflow-hidden flex">
                            <div class="h-full bg-emerald-500" style="width: 50%"></div>
                            <div class="h-full bg-amber-400" style="width: 28%"></div>
                            <div class="h-full bg-rose-500" style="width: 22%"></div>
                        </div>
                        <div class="mt-2.5 flex items-center justify-between text-[11px] text-[#646B7E]">
                            <span>✓ Tidak ada kasus tertunda &gt;14 hari kerja</span>
                            <span class="font-extrabold text-[#092F98]">Kelola Agenda Konseling →</span>
                        </div>
                    </div>
                </article>
            </section>

            {{-- Table Section: Daftar Siswa Berisiko & Rekomendasi Tindakan --}}
            <section id="tabel-risiko" class="rounded-2xl bg-white border border-[#E9EAF3] p-5 shadow-xs">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                    <div>
                        <h2 class="text-base font-extrabold text-[#131B2E]">Daftar Siswa Berisiko &amp; Rekomendasi Tindakan</h2>
                        <p class="text-xs text-[#777D91]">Menampilkan rekam jejak poin pelanggaran tata tertib dan presensi siswa</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <button type="button" onclick="alert('Mengekspor data ke format Excel (.XLSX)...')" class="rounded-xl border border-[#D7D8E4] bg-[#F8F9FF] px-3 py-2 text-xs font-extrabold text-[#092F98] hover:bg-[#EAEDFF]">
                            📊 Ekspor Excel (.XLSX)
                        </button>
                        <button type="button" onclick="window.print()" class="rounded-xl border border-[#D7D8E4] bg-[#F8F9FF] px-3 py-2 text-xs font-extrabold text-[#092F98] hover:bg-[#EAEDFF]">
                            🖨️ Cetak Rekap
                        </button>
                    </div>
                </div>

                {{-- Filter Controls --}}
                <div class="mt-4 grid grid-cols-1 sm:grid-cols-3 gap-3">
                    <div class="flex items-center gap-2 rounded-xl border border-[#D7D8E4] bg-[#F8F9FF] px-3.5 py-2">
                        <span class="text-xs text-slate-400">🔍</span>
                        <input type="search" id="tableSearchBk" oninput="filterSiswaBk(this.value)" placeholder="Cari nama siswa, NISN, atau kelas..." class="w-full bg-transparent text-xs focus:outline-none">
                    </div>
                    <select id="filterKelasBk" onchange="applyFilterBk()" class="rounded-xl border border-[#D7D8E4] bg-[#F8F9FF] px-3.5 py-2 text-xs font-bold text-[#131B2E] focus:outline-none">
                        <option value="">🌪️ Semua Kelas (Tingkat X, XI, XII)</option>
                        <option value="11 DKV 1">Tingkat XI - DKV 1 (Desain Komunikasi Visual)</option>
                        <option value="11 TKJ 2">Tingkat XI - TKJ 2 (Teknik Komputer &amp; Jaringan)</option>
                        <option value="10 RPL 1">Tingkat X - RPL 1 (Rekayasa Perangkat Lunak)</option>
                    </select>
                    <select id="filterStatusBk" onchange="applyFilterBk()" class="rounded-xl border border-[#D7D8E4] bg-[#F8F9FF] px-3.5 py-2 text-xs font-bold text-[#131B2E] focus:outline-none">
                        <option value="">🛡️ Semua Status Risiko</option>
                        <option value="Risiko Tinggi">▲ Risiko Tinggi</option>
                        <option value="Risiko Sedang">◷ Risiko Sedang</option>
                        <option value="Risiko Rendah">✓ Risiko Rendah</option>
                    </select>
                </div>

                {{-- Table --}}
                @php
                    $siswaBk = [
                        [
                            'inisial' => 'AF', 'warna' => 'bg-blue-100 text-blue-800',
                            'nama' => 'Ahmad Fauzan', 'nisn' => '241031011', 'kelas' => '11 DKV 1',
                            'wali' => 'Drs. M. Basri, S.Pd.', 'nip_wali' => 'NIP. 19780210...',
                            'poin' => 80, 'poin_cls' => 'bg-rose-100 text-rose-700',
                            'terlambat' => '4x', 'alpa' => '4x',
                            'risiko' => 'Risiko Tinggi', 'risiko_cls' => 'bg-rose-100 text-rose-800',
                            'pemicu' => 'Alpa 4 hari di jam produktif & poin > 50',
                            'rekomendasi' => '↗ Tren bolos beruntun pada hari Kamis', 'rek_cls' => 'text-rose-600'
                        ],
                        [
                            'inisial' => 'MF', 'warna' => 'bg-amber-200 text-amber-900',
                            'nama' => 'Muh. Fikri Al-Ghazali', 'nisn' => '241031055', 'kelas' => '11 DKV 1',
                            'wali' => 'Drs. M. Basri, S.Pd.', 'nip_wali' => 'NIP. 19780210...',
                            'poin' => 45, 'poin_cls' => 'bg-amber-100 text-amber-800',
                            'terlambat' => '5x', 'alpa' => '1x',
                            'risiko' => 'Risiko Sedang', 'risiko_cls' => 'bg-amber-100 text-amber-900',
                            'pemicu' => 'Dugaan bolos lab kejuruan & terlambat gerbang berulang',
                            'rekomendasi' => '⚠ Terlambat rata-rata 20 menit jam ke-1', 'rek_cls' => 'text-amber-700'
                        ],
                        [
                            'inisial' => 'SP', 'warna' => 'bg-rose-100 text-rose-800',
                            'nama' => 'Sandi Pratama', 'nisn' => '241032044', 'kelas' => '11 TKJ 2',
                            'wali' => 'Hasnawati, S.Kom.', 'nip_wali' => 'NIP. 19820514...',
                            'poin' => 120, 'poin_cls' => 'bg-rose-100 text-rose-700',
                            'terlambat' => '7x', 'alpa' => '5x',
                            'risiko' => 'Risiko Tinggi', 'risiko_cls' => 'bg-rose-100 text-rose-800',
                            'pemicu' => 'Alpa ≥ 3x dalam 2 pekan & akumulasi > 100',
                            'rekomendasi' => '❗ Rekomendasi: Terbitkan SP-2 & Panggil Orang Tua', 'rek_cls' => 'text-rose-600'
                        ],
                        [
                            'inisial' => 'RA', 'warna' => 'bg-indigo-100 text-indigo-800',
                            'nama' => 'Rezky Aditya', 'nisn' => '241033019', 'kelas' => '10 RPL 1',
                            'wali' => 'Andi Irma, S.Pd.', 'nip_wali' => 'NIP. 19850322...',
                            'poin' => 75, 'poin_cls' => 'bg-amber-100 text-amber-800',
                            'terlambat' => '6x', 'alpa' => '2x',
                            'risiko' => 'Risiko Sedang', 'risiko_cls' => 'bg-amber-100 text-amber-900',
                            'pemicu' => 'Keterlambatan jam pertama 6 hari berturut-turut',
                            'rekomendasi' => '◷ Kendala akses transportasi (Domisili Bacukiki)', 'rek_cls' => 'text-amber-700'
                        ],
                        [
                            'inisial' => 'HM', 'warna' => 'bg-emerald-100 text-emerald-800',
                            'nama' => 'Haura Mukrimah Rahman', 'nisn' => '241031060', 'kelas' => '11 DKV 1',
                            'wali' => 'Drs. M. Basri, S.Pd.', 'nip_wali' => 'NIP. 19780210...',
                            'poin' => 5, 'poin_cls' => 'bg-emerald-50 text-emerald-700',
                            'terlambat' => '1x', 'alpa' => '0x',
                            'risiko' => 'Risiko Rendah', 'risiko_cls' => 'bg-emerald-100 text-emerald-800',
                            'pemicu' => '1x Terlambat karena hujan deras (Restoratif selesai)',
                            'rekomendasi' => '✓ Tugas kompensasi literasi perpustakaan tuntas', 'rek_cls' => 'text-emerald-700'
                        ],
                        [
                            'inisial' => 'SN', 'warna' => 'bg-emerald-100 text-emerald-800',
                            'nama' => 'Siti Nurhaliza', 'nisn' => '241031082', 'kelas' => '11 DKV 1',
                            'wali' => 'Drs. M. Basri, S.Pd.', 'nip_wali' => 'NIP. 19780210...',
                            'poin' => 0, 'poin_cls' => 'bg-slate-100 text-slate-700',
                            'terlambat' => '0x', 'alpa' => '0x',
                            'risiko' => 'Risiko Rendah', 'risiko_cls' => 'bg-emerald-100 text-emerald-800',
                            'pemicu' => 'Sakit terverifikasi surat dokter, rekam disiplin prima',
                            'rekomendasi' => '✓ Keterangan dokter telah divalidasi di sistem presensi', 'rek_cls' => 'text-emerald-700'
                        ],
                    ];
                @endphp

                <div class="mt-4 overflow-x-auto">
                    <table class="w-full min-w-[760px] text-left border-collapse">
                        <thead>
                            <tr class="bg-[#F2F4FF] text-[10px] font-extrabold uppercase tracking-wider text-[#202943]">
                                <th class="p-3 rounded-l-xl">Identitas Siswa</th>
                                <th class="p-3">Wali Kelas</th>
                                <th class="p-3 text-center">Poin Disiplin</th>
                                <th class="p-3 text-center">Terlambat</th>
                                <th class="p-3 text-center">Alpa (TK)</th>
                                <th class="p-3">Kategori Risiko</th>
                                <th class="p-3 rounded-r-xl">Aturan / Pemicu &amp; Rekomendasi</th>
                            </tr>
                        </thead>
                        <tbody id="bkTableBody" class="divide-y divide-[#EDF0F8] text-xs">
                            @foreach($siswaBk as $s)
                                <tr class="bk-row hover:bg-[#FAF8FF] transition"
                                    data-search="{{ strtolower($s['nama'] . ' ' . $s['nisn'] . ' ' . $s['kelas']) }}"
                                    data-kelas="{{ $s['kelas'] }}"
                                    data-risiko="{{ $s['risiko'] }}">
                                    <td class="p-3">
                                        <div class="flex items-center gap-2.5">
                                            <div class="w-8 h-8 rounded-full {{ $s['warna'] }} flex items-center justify-center text-[11px] font-extrabold shrink-0">
                                                {{ $s['inisial'] }}
                                            </div>
                                            <div>
                                                <div class="font-extrabold text-[#131B2E]">{{ $s['nama'] }}</div>
                                                <div class="text-[10.5px] text-[#777D91]">NISN: {{ $s['nisn'] }} • <span class="font-bold text-[#092F98]">{{ $s['kelas'] }}</span></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-3">
                                        <div class="font-bold text-[#131B2E]">{{ $s['wali'] }}</div>
                                        <div class="text-[10px] text-[#777D91]">{{ $s['nip_wali'] }}</div>
                                    </td>
                                    <td class="p-3 text-center">
                                        <span class="inline-block rounded-lg px-2 py-1 text-[11px] font-extrabold {{ $s['poin_cls'] }}">
                                            {{ $s['poin'] }} Poin
                                        </span>
                                    </td>
                                    <td class="p-3 text-center font-bold text-amber-700">{{ $s['terlambat'] }}</td>
                                    <td class="p-3 text-center font-bold text-rose-600">{{ $s['alpa'] }}</td>
                                    <td class="p-3">
                                        <span class="inline-flex items-center gap-1 rounded-full px-2.5 py-1 text-[10.5px] font-extrabold {{ $s['risiko_cls'] }}">
                                            {{ $s['risiko'] }}
                                        </span>
                                    </td>
                                    <td class="p-3 max-w-xs">
                                        <div class="font-bold text-[#131B2E] text-[11px]">{{ $s['pemicu'] }}</div>
                                        <div class="text-[10.5px] font-semibold {{ $s['rek_cls'] }} mt-0.5">{{ $s['rekomendasi'] }}</div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="mt-4 flex flex-col sm:flex-row sm:items-center justify-between gap-2 text-[11px] text-[#646B7E]">
                    <span>Menampilkan <strong>1 – 6</strong> dari <strong>360</strong> total siswa terdaftar • <span class="text-[#092F98] font-bold">Data Tersinkronisasi Dapodik &amp; Presensi Kejuruan</span></span>
                    <div class="flex items-center gap-1">
                        <span class="px-2.5 py-1 rounded-lg bg-slate-100 text-slate-400">‹ Sebelumnya</span>
                        <span class="px-2.5 py-1 rounded-lg bg-[#092F98] text-white font-bold">1</span>
                        <span class="px-2.5 py-1 rounded-lg bg-[#F2F4FF] text-[#131B2E] font-bold">2</span>
                        <span class="px-2.5 py-1 rounded-lg bg-[#F2F4FF] text-[#131B2E] font-bold">3</span>
                        <span class="px-2.5 py-1 rounded-lg bg-[#F2F4FF] text-[#131B2E] font-bold">Berikutnya ›</span>
                    </div>
                </div>
            </section>

            {{-- Bottom Callout Banner --}}
            <section id="eskalasi" class="rounded-2xl bg-white border border-[#E9EAF3] p-5 shadow-xs flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div class="flex items-start gap-3.5">
                    <div class="w-10 h-10 rounded-xl bg-[#092F98] text-white flex items-center justify-center font-bold shrink-0">🛡️</div>
                    <div>
                        <h3 class="text-sm font-extrabold text-[#131B2E]">Protokol Eskalasi Kasus Presensi Tingkat XI</h3>
                        <p class="text-xs text-[#51586B] mt-0.5 max-w-xl">
                            Penyelesaian kasus memprioritaskan konseling individual dan kontrak belajar sebelum penerbitan Surat Peringatan (SP) atau rekomendasi skorsing praktik bengkel.
                        </p>
                    </div>
                </div>
                <div class="flex flex-wrap items-center gap-2.5">
                    <button type="button" onclick="alert('Membuka Buku Pedoman Tata Tertib UPT SMKN 3 Parepare...')" class="rounded-xl border border-[#D7D8E4] bg-white px-3.5 py-2.5 text-xs font-extrabold text-[#131B2E] hover:bg-slate-50">
                        📖 Buku Pedoman Tata Tertib
                    </button>
                    <button type="button" onclick="alert('Formulir Berita Acara Konseling Baru siap diisi.')" class="rounded-xl bg-[#092F98] px-4 py-2.5 text-xs font-extrabold text-white shadow hover:bg-[#062270]">
                        ➕ Buat Berita Acara Konseling Baru
                    </button>
                </div>
            </section>
        </main>
    </div>

    <script>
        function toggleBkMenu() {
            const sb = document.getElementById('bkSidebar');
            const ov = document.getElementById('bkOverlay');
            sb.classList.toggle('-translate-x-full');
            ov.classList.toggle('hidden');
        }

        function filterSiswaBk(val) {
            document.getElementById('tableSearchBk').value = val;
            applyFilterBk();
        }

        function applyFilterBk() {
            const q = (document.getElementById('tableSearchBk').value || '').toLowerCase();
            const kls = document.getElementById('filterKelasBk').value;
            const rsk = document.getElementById('filterStatusBk').value;

            document.querySelectorAll('.bk-row').forEach(row => {
                const matchQ = !q || row.dataset.search.includes(q);
                const matchK = !kls || row.dataset.kelas === kls;
                const matchR = !rsk || row.dataset.risiko === rsk;
                row.style.display = (matchQ && matchK && matchR) ? '' : 'none';
            });
        }

        setInterval(() => {
            const el = document.getElementById('bkClock');
            if (el) {
                el.textContent = new Intl.DateTimeFormat('id-ID', {
                    timeZone: 'Asia/Makassar', hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: false
                }).format(new Date()).replace(/\./g, ':') + ' WITA';
            }
        }, 1000);
    </script>
</body>
</html>

