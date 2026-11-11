<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Guru Mapel - UPT SMKN 3 Parepare</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Inter', ui-sans-serif, system-ui, sans-serif; background: #FAF8FF; color: #131B2E; }
    </style>
</head>
<body class="min-h-screen pb-24 lg:pb-10 antialiased">

    {{-- Top Navigation Header (Responsive Mobile & Laptop) --}}
    <header class="sticky top-0 z-30 bg-white/95 backdrop-blur border-b border-[#E9EAF3] px-4 sm:px-6 lg:px-10 py-3">
        <div class="max-w-6xl mx-auto flex items-center justify-between gap-4">
            <div class="flex items-center gap-3">
                <img src="{{ asset('images/logo.svg') }}" alt="Logo" class="w-9 h-9 rounded-full object-contain">
                <div>
                    <div class="text-[10px] font-extrabold uppercase tracking-wider text-[#00288E]">UPT SMKN 3 PAREPARE</div>
                    <div class="text-base sm:text-lg font-extrabold text-[#131B2E] leading-tight">Beranda</div>
                </div>
            </div>

            {{-- Desktop Navigation Links (Visible on Laptop) --}}
            <nav class="hidden lg:flex items-center gap-1 rounded-2xl bg-[#F2F4FF] p-1">
                <a href="{{ route('mapel.dashboard') }}" class="px-4 py-1.5 rounded-xl bg-[#00288E] text-white text-xs font-extrabold shadow-xs">🏠 Beranda</a>
                <a href="#sesi-aktif" class="px-4 py-1.5 rounded-xl text-[#444653] hover:text-[#00288E] text-xs font-bold">☑️ Presensi</a>
                <a href="#jadwal-berikutnya" class="px-4 py-1.5 rounded-xl text-[#444653] hover:text-[#00288E] text-xs font-bold">📅 Jadwal</a>
                <a href="#rekap-sesi" class="px-4 py-1.5 rounded-xl text-[#444653] hover:text-[#00288E] text-xs font-bold">🕒 Riwayat</a>
                <a href="#rombel-diampu" class="px-4 py-1.5 rounded-xl text-[#444653] hover:text-[#00288E] text-xs font-bold">🎓 Rombel</a>
            </nav>

            <div class="flex items-center gap-2.5">
                <button type="button" class="relative w-9 h-9 rounded-full bg-[#F2F4FF] text-[#131B2E] flex items-center justify-center">
                    🔔
                </button>
                <div class="hidden sm:block text-right">
                    <div class="text-xs font-extrabold text-[#131B2E]">{{ auth()->user()->name }}</div>
                    <div class="text-[10px] font-semibold text-[#51586B]">Kode Guru: DK3 • Produktif DKV</div>
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

    {{-- Main Container (Single Column on Mobile, Multi-Column Grid on Laptop) --}}
    <main class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-10 pt-4 space-y-5">

        {{-- Greeting & Top Summary --}}
        <section class="flex flex-col lg:flex-row lg:items-end justify-between gap-4">
            <div>
                <div class="flex flex-wrap items-center gap-2">
                    <span class="inline-flex items-center gap-1.5 rounded-full bg-[#EAEDFF] px-3 py-1 text-[11px] font-bold text-[#131B2E]">
                        📅 Rabu, 4 Nov 2026 • 07:10 WITA
                    </span>
                    <span class="inline-flex items-center gap-1.5 text-[11px] font-extrabold text-[#9A6B00]">
                        <span class="w-2 h-2 rounded-full bg-[#FED01B]"></span>
                        WITA (Zona Waktu Sekolah)
                    </span>
                </div>
                <h1 class="mt-2.5 text-2xl sm:text-3xl font-extrabold text-[#131B2E] tracking-tight">
                    Selamat Pagi, Ibu Nurhana 👋
                </h1>
                <p class="mt-0.5 text-xs sm:text-sm text-[#51586B]">
                    Kode Guru: <strong class="text-[#131B2E]">DK3</strong> • Guru Produktif Konsentrasi DKV
                </p>
            </div>

            {{-- 3 Quick Stat Boxes --}}
            <div class="grid grid-cols-3 gap-2.5 sm:gap-3 lg:w-[420px]">
                <div class="rounded-2xl bg-white border border-[#E9EAF3] p-3.5 shadow-xs">
                    <div class="flex items-center justify-between text-[11px] font-semibold text-[#51586B]">
                        <span>Beban Ajar</span><span class="text-[#00288E]">🕒</span>
                    </div>
                    <div class="mt-2 text-xl sm:text-2xl font-black text-[#131B2E]">28 <span class="text-[11px] font-semibold text-[#51586B]">Jam/Mg</span></div>
                </div>
                <div class="rounded-2xl bg-white border border-[#E9EAF3] p-3.5 shadow-xs">
                    <div class="flex items-center justify-between text-[11px] font-semibold text-[#51586B]">
                        <span>Rombel</span><span class="text-[#00288E]">👥</span>
                    </div>
                    <div class="mt-2 text-xl sm:text-2xl font-black text-[#131B2E]">4 <span class="text-[11px] font-semibold text-[#51586B]">Kelas Aktif</span></div>
                </div>
                <div class="rounded-2xl bg-white border border-[#E9EAF3] p-3.5 shadow-xs">
                    <div class="flex items-center justify-between text-[11px] font-semibold text-[#51586B]">
                        <span>Hari Ini</span><span class="text-[#9A6B00]">📋</span>
                    </div>
                    <div class="mt-1 text-xl sm:text-2xl font-black text-[#9A6B00]">2 <span class="text-[11px] font-semibold text-[#131B2E]">Sesi</span></div>
                    <div class="text-[10px] font-semibold text-[#51586B]">Mengajar</div>
                </div>
            </div>
        </section>

        {{-- Responsive 2-Column Content Grid on Laptop --}}
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 items-start">

            {{-- Left Column (Active Session + Next Session) --}}
            <div class="lg:col-span-7 space-y-5">

                {{-- Sesi Berikutnya Card --}}
                <section id="sesi-aktif">
                    <div class="flex items-center justify-between mb-2.5">
                        <div class="flex items-center gap-2 text-xs font-extrabold uppercase tracking-wider text-[#00288E]">
                            <span class="w-2.5 h-2.5 rounded-full bg-[#00288E]"></span>
                            <span>SESI BERIKUTNYA</span>
                        </div>
                        <span class="inline-flex items-center gap-1 rounded-full bg-[#FED01B] px-3 py-1 text-[11px] font-extrabold text-[#342900]">
                            ⚡ Mulai 5 Menit Lagi
                        </span>
                    </div>

                    <article class="rounded-3xl bg-white border border-[#E2E6F5] p-5 shadow-sm">
                        <div class="flex items-center gap-2.5">
                            <span class="rounded-xl bg-[#00288E] px-3 py-1 text-xs font-extrabold text-white">XI DKV 1</span>
                            <span class="text-xs font-semibold text-[#51586B]">Blok Praktik Vokasi</span>
                        </div>

                        <h2 class="mt-3 text-lg sm:text-xl font-extrabold text-[#131B2E] leading-snug">
                            Mapel KK Desain<br class=" sm:hidden"> Komunikasi Visual
                        </h2>

                        <div class="mt-3.5 rounded-2xl bg-[#F5F7FF] p-3.5 space-y-2 text-xs">
                            <div class="flex items-center gap-2.5 text-[#131B2E]">
                                <span class="text-[#00288E]">🕒</span>
                                <span><strong>Jam Ke-2 s.d. 7</strong> (08.00 – 14.00 WITA)</span>
                            </div>
                            <div class="flex items-center gap-2.5 text-[#131B2E]">
                                <span class="text-[#00288E]">🖥️</span>
                                <span>Ruang Praktik: <strong>Lab Komputer DKV 2</strong></span>
                            </div>
                            <div class="mt-2 pt-2 border-t border-[#E4E8FA] flex items-center justify-between rounded-xl bg-[#EAEDFF] px-3 py-2">
                                <span class="font-bold text-[#131B2E]">👤✓ Gate Scan Pagi Ini:</span>
                                <span class="font-extrabold text-[#00288E]">32 / 33 Siswa Masuk Gerbang</span>
                            </div>
                        </div>

                        <div id="statusPresensiGuru" class="mt-3.5 rounded-xl bg-rose-50 border border-rose-100 px-3.5 py-2.5 flex items-center justify-between text-xs">
                            <span class="font-extrabold text-rose-700">📋 Presensi Guru: Belum Diisi</span>
                            <span class="font-semibold text-rose-600">Perlu Tindakan</span>
                        </div>

                        <button type="button" onclick="bukaModalPresensiKelas()"
                                class="mt-3.5 w-full h-12 rounded-2xl bg-[#00288E] hover:bg-[#001F6E] text-white text-xs sm:text-sm font-extrabold shadow-md flex items-center justify-center gap-2 transition">
                            <span>☑️ Buka &amp; Isi Presensi Siswa (XI DKV 1)</span>
                            <span>→</span>
                        </button>
                    </article>
                </section>

                {{-- Jadwal Sesi Selanjutnya (Hari Ini) --}}
                <section id="jadwal-berikutnya">
                    <h2 class="text-sm sm:text-base font-extrabold text-[#131B2E] flex items-center gap-2 mb-2.5">
                        <span>📅</span><span>Jadwal Sesi Selanjutnya (Hari Ini)</span>
                    </h2>

                    <article class="rounded-2xl bg-white border border-[#E9EAF3] p-4 shadow-xs">
                        <div class="flex items-center justify-between gap-2 text-[11px]">
                            <span class="rounded-lg bg-[#EAEDFF] px-2.5 py-1 font-extrabold text-[#00288E]">
                                Jam Ke-8 s.d. 10 (14.00 – 16.15 WITA)
                            </span>
                            <span class="font-bold text-[#131B2E]">Lab DKV 1</span>
                        </div>
                        <div class="mt-2.5 flex items-center justify-between">
                            <h3 class="text-base font-extrabold text-[#131B2E]">XII DKV 1</h3>
                            <span class="rounded-full bg-[#F2F4FF] px-2.5 py-0.5 text-[10px] font-bold text-[#51586B]">Sesi Sore</span>
                        </div>
                        <p class="mt-1 text-xs text-[#51586B]">Pendampingan Portofolio &amp; Laporan Magang (Prakerin)</p>
                        <div class="mt-2.5 text-[11px] font-medium text-[#757684]">
                            ◷ Presensi dibuka otomatis pukul 13.50 WITA
                        </div>
                    </article>
                </section>

                {{-- Info Sinkronisasi Otomatis Gerbang Utama --}}
                <section class="rounded-2xl bg-[#DCE4FF]/70 border border-[#C5D2FF] p-4 flex items-start gap-3">
                    <div class="w-9 h-9 rounded-xl bg-[#00288E] text-white flex items-center justify-center shrink-0 text-sm">☑️</div>
                    <div>
                        <h3 class="text-xs sm:text-sm font-extrabold text-[#131B2E]">Sinkronisasi Otomatis Gerbang Utama</h3>
                        <p class="mt-1 text-xs text-[#303950] leading-relaxed">
                            Siswa yang telah tap biometrik di gerbang SMKN 3 namun tidak diverifikasi hadir di lab kejuruan oleh guru mata pelajaran akan otomatis diberi tanda <strong class="text-rose-700 underline">Dugaan Bolos</strong> dan diteruskan ke Wali Kelas (Andi Muh. Iqbal, S.Pd.).
                        </p>
                    </div>
                </section>
            </div>

            {{-- Right Column (Status & Rekap Sesi Terkini + Rombel DKV yang Diampu) --}}
            <div class="lg:col-span-5 space-y-5">

                {{-- Status & Rekap Sesi Terkini --}}
                <section id="rekap-sesi">
                    <div class="flex items-center justify-between mb-2.5">
                        <h2 class="text-sm sm:text-base font-extrabold text-[#131B2E] flex items-center gap-2">
                            <span>🕒</span><span>Status &amp; Rekap Sesi Terkini</span>
                        </h2>
                        <span class="text-xs font-extrabold text-[#00288E]">Lihat Semua</span>
                    </div>

                    <div class="space-y-3">
                        {{-- Item 1 --}}
                        <article class="rounded-2xl bg-white border border-[#E9EAF3] p-4 shadow-xs flex items-center justify-between gap-3">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-full bg-rose-50 text-rose-600 flex items-center justify-center font-bold text-sm">📝</div>
                                <div>
                                    <h3 class="text-xs sm:text-sm font-extrabold text-[#131B2E]">XI DKV 1 • Mapel KK DKV</h3>
                                    <p class="text-[11px] text-[#51586B]">Rabu, 4 Nov (Jam 2–7)</p>
                                </div>
                            </div>
                            <span class="rounded-full bg-rose-50 px-2.5 py-1 text-[10px] font-extrabold text-rose-700">◷ Belum Diisi</span>
                        </article>

                        {{-- Item 2 with Anomaly Alert --}}
                        <article class="rounded-2xl bg-white border border-[#E9EAF3] p-4 shadow-xs space-y-3">
                            <div class="flex items-center justify-between gap-3">
                                <div class="flex items-center gap-3">
                                    <div class="w-9 h-9 rounded-full bg-[#EAEDFF] text-[#00288E] flex items-center justify-center font-bold text-sm">✓</div>
                                    <div>
                                        <h3 class="text-xs sm:text-sm font-extrabold text-[#131B2E]">XI DKV 1 • Kreatif &amp; Wirausaha</h3>
                                        <p class="text-[11px] text-[#51586B]">Selasa, 3 Nov (Jam 8–10)</p>
                                    </div>
                                </div>
                                <span class="rounded-full bg-[#EAEDFF] px-2.5 py-1 text-[10px] font-extrabold text-[#00288E]">✓ Tervalidasi</span>
                            </div>

                            <div class="rounded-xl bg-rose-50/90 border border-rose-100 p-3 text-[11.5px] leading-relaxed">
                                <div class="font-extrabold text-rose-700">⚠ 1 Catatan Anomali Kelas: Muh. Fikri Al-Ghazali</div>
                                <p class="text-[#444653] mt-0.5">
                                    Tap gerbang 06:48 WITA, namun tidak berada di lab saat sesi berlangsung. Terkirim ke Wali Kelas.
                                </p>
                            </div>
                        </article>

                        {{-- Item 3 --}}
                        <article class="rounded-2xl bg-white border border-[#E9EAF3] p-4 shadow-xs flex items-center justify-between gap-3">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-full bg-[#F2F4FF] text-[#51586B] flex items-center justify-center font-bold text-sm">☆</div>
                                <div>
                                    <h3 class="text-xs sm:text-sm font-extrabold text-[#131B2E]">Senin, 2 Nov 2026</h3>
                                    <p class="text-[11px] text-[#51586B]">Jadwal Teori Normatif / Tidak Ada Jam Mengajar DK3</p>
                                </div>
                            </div>
                            <span class="text-[10.5px] font-bold text-[#51586B] shrink-0">Libur Tatap Muka</span>
                        </article>
                    </div>
                </section>

                {{-- Rombel DKV yang Diampu --}}
                <section id="rombel-diampu">
                    <div class="flex items-center justify-between mb-2.5">
                        <h2 class="text-sm sm:text-base font-extrabold text-[#131B2E] flex items-center gap-2">
                            <span>🎓</span><span>Rombel DKV yang Diampu</span>
                        </h2>
                        <span class="text-[10.5px] font-semibold text-[#51586B]">Semester Ganjil 2026/2027</span>
                    </div>

                    <div class="grid grid-cols-2 gap-3">
                        <div class="rounded-2xl bg-white border border-[#E9EAF3] p-3.5 shadow-xs">
                            <div class="flex items-center justify-between">
                                <span class="text-sm font-extrabold text-[#00288E]">11 DKV 1</span>
                                <span class="w-2 h-2 rounded-full bg-[#FED01B]"></span>
                            </div>
                            <p class="mt-1 text-[11px] text-[#51586B]">33 Siswa • Desain Vektor &amp; Raster</p>
                            <div class="mt-2.5 text-[10px] font-bold text-[#131B2E]">Wali Kelas: A. M. Iqbal, S.Pd.</div>
                        </div>

                        <div class="rounded-2xl bg-white border border-[#E9EAF3] p-3.5 shadow-xs">
                            <div class="flex items-center justify-between">
                                <span class="text-sm font-extrabold text-[#131B2E]">11 DKV 2</span>
                                <span class="w-2 h-2 rounded-full bg-slate-300"></span>
                            </div>
                            <p class="mt-1 text-[11px] text-[#51586B]">34 Siswa • Tipografi &amp; Layout</p>
                            <div class="mt-2.5 text-[10px] font-bold text-[#131B2E]">Jadwal: Kamis (Jam 1–7)</div>
                        </div>

                        <div class="rounded-2xl bg-white border border-[#E9EAF3] p-3.5 shadow-xs">
                            <div class="flex items-center justify-between">
                                <span class="text-sm font-extrabold text-[#131B2E]">12 DKV 1</span>
                                <span class="w-2 h-2 rounded-full bg-[#FED01B]"></span>
                            </div>
                            <p class="mt-1 text-[11px] text-[#51586B]">31 Siswa • Portfolio &amp; Proyek DKV</p>
                            <div class="mt-2.5 text-[10px] font-bold text-[#131B2E]">Jadwal: Rabu (Sore) &amp; Jumat</div>
                        </div>

                        <div class="rounded-2xl bg-white border border-[#E9EAF3] p-3.5 shadow-xs">
                            <div class="flex items-center justify-between">
                                <span class="text-sm font-extrabold text-[#131B2E]">10 DKV 1</span>
                                <span class="w-2 h-2 rounded-full bg-slate-300"></span>
                            </div>
                            <p class="mt-1 text-[11px] text-[#51586B]">36 Siswa • Dasar Seni &amp; Visual</p>
                            <div class="mt-2.5 text-[10px] font-bold text-[#131B2E]">Jadwal: Selasa (Jam 1–4)</div>
                        </div>
                    </div>
                </section>

                {{-- Help Footer Card --}}
                <section class="rounded-2xl bg-[#F2F4FF] border border-[#E2E6F5] p-3.5 flex items-center justify-between gap-3">
                    <div class="flex items-center gap-2.5 text-xs font-semibold text-[#131B2E]">
                        <span class="text-[#00288E]">❓</span>
                        <span>Bantuan teknis aplikasi presensi kejuruan?</span>
                    </div>
                    <button type="button" onclick="alert('Menghubungkan ke Helpdesk IT UPT SMKN 3 Parepare...')" class="shrink-0 rounded-xl bg-[#DCE4FF] px-3.5 py-2 text-xs font-extrabold text-[#00288E] hover:bg-[#C8D4FF]">
                        Hubungi IT
                    </button>
                </section>
            </div>
        </div>
    </main>

    {{-- Modal Presensi Siswa XI DKV 1 --}}
    <div id="modalPresensi" class="fixed inset-0 z-50 bg-slate-900/50 backdrop-blur-xs hidden items-center justify-center p-4">
        <div class="bg-white rounded-3xl max-w-lg w-full p-6 shadow-2xl border border-[#E9EAF3]">
            <div class="flex items-center justify-between">
                <div>
                    <span class="rounded-lg bg-[#00288E] px-2.5 py-0.5 text-[10px] font-extrabold text-white">XI DKV 1</span>
                    <h3 class="mt-1 text-base font-extrabold text-[#131B2E]">Verifikasi Presensi Lab Komputer DKV 2</h3>
                </div>
                <button type="button" onclick="tutupModalPresensi()" class="w-8 h-8 rounded-full bg-slate-100 text-slate-600 font-bold">✕</button>
            </div>
            <p class="mt-2 text-xs text-[#51586B]">
                32 dari 33 siswa telah terdeteksi hadir di Gerbang Utama pagi ini. Konfirmasi kehadiran sesi praktik:
            </p>
            <div class="mt-4 max-h-60 overflow-y-auto divide-y divide-slate-100 border rounded-2xl p-3 text-xs space-y-2">
                <div class="flex items-center justify-between py-1.5">
                    <div><strong>Haura Mukrimah Rahman</strong> <span class="text-slate-400">(241031060)</span></div>
                    <span class="rounded-full bg-emerald-100 px-2.5 py-0.5 text-[10px] font-extrabold text-emerald-800">✓ Hadir Lab</span>
                </div>
                <div class="flex items-center justify-between py-1.5">
                    <div><strong>Andi Nurhaliza Pratama</strong> <span class="text-slate-400">(0072819201)</span></div>
                    <span class="rounded-full bg-amber-100 px-2.5 py-0.5 text-[10px] font-extrabold text-amber-800">◷ Terlambat 07.24</span>
                </div>
                <div class="flex items-center justify-between py-1.5">
                    <div><strong>Muh. Fikri Al-Ghazali</strong> <span class="text-slate-400">(241031055)</span></div>
                    <span class="rounded-full bg-rose-100 px-2.5 py-0.5 text-[10px] font-extrabold text-rose-800">⚠ Cek Kehadiran</span>
                </div>
            </div>
            <div class="mt-5 flex gap-2.5">
                <button type="button" onclick="simpanPresensiKelas()" class="flex-1 h-11 rounded-xl bg-[#00288E] text-white text-xs font-extrabold shadow">
                    ✓ Validasi &amp; Simpan Presensi (32 Hadir)
                </button>
                <button type="button" onclick="tutupModalPresensi()" class="h-11 px-4 rounded-xl bg-slate-100 text-xs font-bold text-slate-700">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    {{-- Bottom Navigation Bar (Visible on Mobile/Phone) --}}
    <nav class="lg:hidden fixed bottom-3 inset-x-4 z-40 bg-white/95 backdrop-blur rounded-2xl shadow-xl border border-[#E4E7F5] px-3 py-2 flex items-center justify-around">
        <a href="{{ route('mapel.dashboard') }}" class="flex flex-col items-center gap-0.5 text-[#00288E] font-extrabold text-[11px]">
            <span class="text-base">🏠</span><span>Beranda</span>
        </a>
        <a href="#sesi-aktif" onclick="bukaModalPresensiKelas()" class="flex flex-col items-center gap-0.5 text-[#646B7E] font-semibold text-[11px]">
            <span class="text-base">☑️</span><span>Presensi</span>
        </a>
        <a href="#jadwal-berikutnya" class="flex flex-col items-center gap-0.5 text-[#646B7E] font-semibold text-[11px]">
            <span class="text-base">📅</span><span>Jadwal</span>
        </a>
        <a href="#rekap-sesi" class="flex flex-col items-center gap-0.5 text-[#646B7E] font-semibold text-[11px]">
            <span class="text-base">🕒</span><span>Riwayat</span>
        </a>
        <a href="#rombel-diampu" class="flex flex-col items-center gap-0.5 text-[#646B7E] font-semibold text-[11px]">
            <span class="text-base">👤</span><span>Profil</span>
        </a>
    </nav>

    <script>
        function bukaModalPresensiKelas() {
            const m = document.getElementById('modalPresensi');
            m.classList.remove('hidden');
            m.classList.add('flex');
        }
        function tutupModalPresensi() {
            const m = document.getElementById('modalPresensi');
            m.classList.add('hidden');
            m.classList.remove('flex');
        }
        function simpanPresensiKelas() {
            const bar = document.getElementById('statusPresensiGuru');
            bar.className = 'mt-3.5 rounded-xl bg-emerald-50 border border-emerald-200 px-3.5 py-2.5 flex items-center justify-between text-xs';
            bar.innerHTML = '<span class="font-extrabold text-emerald-800">✓ Presensi Guru & Siswa: Tervalidasi</span><span class="font-semibold text-emerald-700">Tersimpan</span>';
            tutupModalPresensi();
        }
    </script>
</body>
</html>

