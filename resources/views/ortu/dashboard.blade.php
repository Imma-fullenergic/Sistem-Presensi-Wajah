<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Orang Tua / Wali - UPT SMKN 3 Parepare</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Inter', ui-sans-serif, system-ui, sans-serif; background: #FAF8FF; color: #131B2E; }
    </style>
</head>
<body class="min-h-screen pb-28 lg:pb-10 antialiased">

    {{-- Top Header --}}
    <header class="sticky top-0 z-30 bg-white/95 backdrop-blur border-b border-[#E9EAF3] px-4 sm:px-6 lg:px-10 py-3">
        <div class="max-w-6xl mx-auto flex items-center justify-between gap-4">
            <div class="flex items-center gap-3">
                <img src="{{ asset('images/logo.svg') }}" alt="Logo" class="w-9 h-9 rounded-full object-contain">
                <div>
                    <div class="flex items-center gap-1.5">
                        <span class="text-[10px] font-extrabold uppercase tracking-wider text-[#00288E]">UPT SMKN 3 PAREPARE</span>
                        <span class="rounded-full bg-[#FED01B] px-2 py-0.5 text-[9px] font-extrabold text-[#342900]">WITA</span>
                    </div>
                    <div class="text-base sm:text-lg font-extrabold text-[#131B2E] leading-tight">Beranda</div>
                </div>
            </div>

            {{-- Desktop Nav (Visible on Laptop) --}}
            <nav class="hidden lg:flex items-center gap-1 rounded-2xl bg-[#F2F4FF] p-1">
                <a href="{{ route('ortu.dashboard') }}" class="px-4 py-1.5 rounded-xl bg-[#00288E] text-white text-xs font-extrabold shadow-xs">⊞ Beranda</a>
                <a href="#ajukan-izin" onclick="bukaModalIzinOrtu()" class="px-4 py-1.5 rounded-xl text-[#444653] hover:text-[#00288E] text-xs font-bold">☑️ Izin / Sakit</a>
                <a href="#jadwal-anak" class="px-4 py-1.5 rounded-xl text-[#444653] hover:text-[#00288E] text-xs font-bold">🕒 Riwayat &amp; Jadwal</a>
                <a href="#poin-anak" class="px-4 py-1.5 rounded-xl text-[#444653] hover:text-[#00288E] text-xs font-bold">👤 Profil Anak</a>
            </nav>

            <div class="flex items-center gap-2.5">
                <button type="button" class="relative w-9 h-9 rounded-full bg-[#F2F4FF] text-[#131B2E] flex items-center justify-center">
                    🔔<span class="absolute top-1.5 right-2 w-2 h-2 rounded-full bg-red-600"></span>
                </button>
                <div class="hidden sm:block text-right">
                    <div class="text-xs font-extrabold text-[#131B2E]">{{ auth()->user()->name }}</div>
                    <div class="text-[10px] font-semibold text-[#51586B]">Orang Tua / Wali Siswa</div>
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

    {{-- Main Container --}}
    <main class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-10 pt-4 space-y-5">

        {{-- Child Switcher Bar --}}
        <section class="rounded-2xl bg-[#F0F2FF] border border-[#DCE2FA] p-3.5">
            <div class="flex items-center justify-between text-[11px] font-extrabold mb-2.5">
                <span class="text-[#131B2E] uppercase tracking-wider">👨‍👩‍👧 MEMANTAU PRESENSI SISWA</span>
                <span class="text-[#00288E]">2 Anak Terdaftar</span>
            </div>
            <div class="grid grid-cols-2 sm:flex sm:items-center gap-2.5">
                <button type="button" id="tabHaura" onclick="pilihAnak('haura')"
                        class="flex items-center gap-2.5 rounded-xl bg-white p-2.5 shadow-sm border-2 border-[#00288E] text-left transition">
                    <div class="w-9 h-9 rounded-full bg-[#EAEDFF] text-[#00288E] font-extrabold text-xs flex items-center justify-center shrink-0">HM</div>
                    <div class="min-w-0">
                        <div class="text-xs font-extrabold text-[#131B2E] flex items-center gap-1 truncate">
                            <span>Haura M.</span><span class="text-[#00288E]">✓</span>
                        </div>
                        <div class="text-[10.5px] font-semibold text-[#51586B]">11 DKV 1</div>
                    </div>
                </button>

                <button type="button" id="tabRizky" onclick="pilihAnak('rizky')"
                        class="flex items-center gap-2.5 rounded-xl bg-white/60 hover:bg-white p-2.5 border border-transparent text-left transition">
                    <div class="w-9 h-9 rounded-full bg-slate-200 text-slate-700 font-extrabold text-xs flex items-center justify-center shrink-0">MR</div>
                    <div class="min-w-0">
                        <div class="text-xs font-extrabold text-[#131B2E] truncate">Muh. Rizky</div>
                        <div class="text-[10.5px] font-semibold text-[#51586B]">10 RPL 2</div>
                    </div>
                </button>
            </div>
        </section>

        {{-- Greeting Row --}}
        <section class="flex items-center justify-between gap-3">
            <div>
                <h1 class="text-xl sm:text-2xl font-extrabold text-[#131B2E]">
                    Selamat pagi, {{ auth()->user()->name }} 👋
                </h1>
                <p class="text-xs sm:text-sm text-[#51586B]">Rabu, 4 November 2026 • Wilayah Parepare</p>
            </div>
            <div class="rounded-2xl bg-[#EAEDFF] px-3.5 py-2 text-center shrink-0">
                <div class="text-sm sm:text-base font-black text-[#00288E] leading-none">07:10</div>
                <div class="text-[9px] font-extrabold text-[#131B2E] mt-0.5">WITA</div>
            </div>
        </section>

        {{-- Responsive 2-Column Layout on Laptop --}}
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 items-start">

            {{-- Left Column: Student Live Status + Quick Actions --}}
            <div class="lg:col-span-6 space-y-4">

                {{-- Main Student Card --}}
                <article class="rounded-3xl bg-white border border-[#E9EAF3] p-5 shadow-sm space-y-3.5">
                    <div class="flex items-center justify-between gap-3">
                        <div class="flex items-center gap-3">
                            <div id="avatarAnak" class="w-12 h-12 rounded-full bg-gradient-to-br from-[#00288E] to-[#1D49B6] text-white font-extrabold text-sm flex items-center justify-center shrink-0 shadow">
                                HM
                            </div>
                            <div>
                                <h2 id="namaAnak" class="text-base sm:text-lg font-extrabold text-[#131B2E]">Haura Mukrimah Rahman</h2>
                                <p id="nisnAnak" class="text-xs text-[#51586B]">NISN: 241031060 • Konsentrasi DKV</p>
                            </div>
                        </div>
                        <span class="w-8 h-8 rounded-full bg-[#EAEDFF] text-[#00288E] flex items-center justify-center font-bold text-sm">✓</span>
                    </div>

                    {{-- Green Gate Status Box --}}
                    <div class="rounded-2xl bg-emerald-50 border border-emerald-200 p-3.5">
                        <div class="flex items-center justify-between">
                            <span id="waktuHadirAnak" class="text-xs sm:text-sm font-extrabold text-emerald-800">
                                ✓ Hadir Tepat Waktu — 06.52 WITA
                            </span>
                            <span class="rounded-full bg-emerald-600 px-2.5 py-0.5 text-[10px] font-extrabold text-white">Valid</span>
                        </div>
                        <p class="mt-1 text-xs text-emerald-900/80">
                            Tap Gerbang Utama SMKN 3 Parepare via Biometrik Wajah AI Terverifikasi.
                        </p>
                    </div>

                    {{-- Checkout Lock Status Box --}}
                    <div class="rounded-2xl bg-[#F5F7FF] border border-[#E5E9F8] p-3.5 flex items-center justify-between gap-3">
                        <div class="flex items-center gap-3">
                            <span class="text-base">🔒</span>
                            <div>
                                <div class="text-xs font-extrabold text-[#131B2E]">Presensi Pulang: Belum Waktu</div>
                                <div class="text-[11px] text-[#51586B]">Jadwal kepulangan 16.15 WITA (Gerbang Terkunci)</div>
                            </div>
                        </div>
                        <span class="text-slate-400">⏳</span>
                    </div>

                    {{-- Geofencing & WA Box --}}
                    <div class="rounded-2xl bg-[#F5F7FF] border border-[#E5E9F8] p-3.5 space-y-2 text-[11.5px]">
                        <div class="flex items-start gap-2.5">
                            <span class="text-[#00288E]">🎯</span>
                            <span class="font-semibold text-[#131B2E]">Geofencing Radar OK (Akurasi Presisi Radius 14 meter dari Titik Nol Gerbang)</span>
                        </div>
                        <div class="flex items-start gap-2.5">
                            <span class="text-emerald-600">💬</span>
                            <span class="text-[#444653]">Notifikasi WhatsApp otomatis terkirim ke <strong class="text-[#131B2E]">0812-4239-****</strong></span>
                        </div>
                    </div>
                </article>

                {{-- 2 Primary Action Buttons --}}
                <div id="ajukan-izin" class="grid grid-cols-2 gap-3">
                    <button type="button" onclick="bukaModalIzinOrtu()"
                            class="h-12 rounded-2xl bg-[#00288E] hover:bg-[#001F6E] text-white text-xs sm:text-sm font-extrabold shadow flex items-center justify-center gap-2 transition">
                        <span>📝</span><span>+ Ajukan Izin / Sakit</span>
                    </button>
                    <button type="button" onclick="alert('Membuka ruang percakapan WhatsApp dengan Wali Kelas XI DKV 1 (Andi Muh. Iqbal, S.Pd.)...')"
                            class="h-12 rounded-2xl bg-emerald-100 hover:bg-emerald-200 text-emerald-900 text-xs sm:text-sm font-extrabold flex items-center justify-center gap-2 transition">
                        <span>💬</span><span>Hubungi Wali Kelas</span>
                    </button>
                </div>
            </div>

            {{-- Right Column: Jadwal Kelas Hari Ini + Metrics + Pengumuman Akademik --}}
            <div class="lg:col-span-6 space-y-4">

                {{-- Jadwal Kelas Hari Ini --}}
                <section id="jadwal-anak" class="rounded-3xl bg-white border border-[#E9EAF3] p-5 shadow-xs">
                    <div class="flex items-center justify-between mb-3.5">
                        <h2 class="text-base font-extrabold text-[#131B2E] flex items-center gap-2">
                            <span>📅</span><span>Jadwal Kelas Hari Ini</span>
                        </h2>
                        <span id="badgeKelasAnak" class="rounded-full bg-[#EAEDFF] px-3 py-1 text-[11px] font-extrabold text-[#00288E]">11 DKV 1</span>
                    </div>

                    <div class="space-y-3">
                        <div class="rounded-2xl bg-[#F5F7FF] border-l-4 border-[#00288E] p-3.5">
                            <div class="flex flex-wrap items-center justify-between gap-1 text-[10.5px] font-extrabold">
                                <span class="text-[#00288E]">JAM KE 2-7 (08.00 - 14.00 WITA)</span>
                                <span class="text-emerald-700">✓ Hadir di Lab DKV 2</span>
                            </div>
                            <h3 id="mapel1Anak" class="mt-1.5 text-sm font-extrabold text-[#131B2E]">
                                KK Desain Komunikasi Visual (Praktik Vokasi)
                            </h3>
                            <p id="guru1Anak" class="mt-0.5 text-xs text-[#51586B]">👤 Nurhana Dattar, S.Kom.</p>
                            <div class="mt-2 flex items-center gap-1.5 text-[11px] font-bold text-[#131B2E]">
                                <span class="w-2 h-2 rounded-full bg-emerald-600"></span>
                                <span>Sesi modul: Ilustrasi Digital &amp; Rendering Vektor</span>
                            </div>
                        </div>

                        <div class="rounded-2xl bg-[#FAF9FF] border border-[#E9EAF3] p-3.5">
                            <div class="flex flex-wrap items-center justify-between gap-1 text-[10.5px] font-bold">
                                <span class="text-[#646B7E]">JAM KE 8-10 (14.00 - 16.15 WITA)</span>
                                <span class="rounded-full bg-[#EAEDFF] px-2.5 py-0.5 text-[10px] font-bold text-[#444653]">? Menunggu Sesi</span>
                            </div>
                            <h3 class="mt-1.5 text-sm font-extrabold text-[#131B2E]">
                                Pendidikan Agama Islam &amp; Budi Pekerti
                            </h3>
                            <p class="mt-0.5 text-xs text-[#51586B]">👤 Idar, S.Ag. • Ruang Teori 11-DKV</p>
                        </div>
                    </div>
                </section>

                {{-- 2 Metric Cards: Kehadiran Bulan Ini & Poin Kedisiplinan --}}
                <section id="poin-anak" class="grid grid-cols-2 gap-3.5">
                    <article class="rounded-3xl bg-white border border-[#E9EAF3] p-4 shadow-xs">
                        <div class="flex items-center justify-between text-[10px] font-extrabold uppercase tracking-wider text-[#51586B]">
                            <span>KEHADIRAN BULAN INI</span>
                            <span class="text-[#00288E] text-sm">◔</span>
                        </div>
                        <div class="mt-2 text-2xl sm:text-3xl font-black text-[#131B2E]">98.2%</div>
                        <div class="text-xs text-[#51586B] mt-0.5">21 dari 22 hari masuk</div>
                        <div class="mt-2.5 h-2 w-full rounded-full bg-[#E9EAFF] overflow-hidden">
                            <div class="h-full bg-[#00288E] rounded-full" style="width:98.2%"></div>
                        </div>
                        <div class="mt-2 text-[10.5px] font-extrabold text-emerald-700">↗ Di atas standar Dapodik</div>
                    </article>

                    <article class="rounded-3xl bg-white border border-[#E9EAF3] p-4 shadow-xs">
                        <div class="flex items-center justify-between text-[10px] font-extrabold uppercase tracking-wider text-[#51586B]">
                            <span>POIN KEDISIPLINAN</span>
                            <span class="text-amber-700 text-sm">🛡️</span>
                        </div>
                        <div class="mt-2 text-2xl sm:text-3xl font-black text-[#9A6B00]">5 <span class="text-xs font-bold text-[#51586B]">/ 100 Poin</span></div>
                        <div class="text-xs font-extrabold text-[#9A6B00] mt-0.5">Zona Aman (Tertib)</div>
                        <div class="mt-2.5 h-2 w-full rounded-full bg-slate-100 overflow-hidden">
                            <div class="h-full bg-amber-500 rounded-full" style="width:5%"></div>
                        </div>
                        <div class="mt-2 text-[10.5px] font-extrabold text-[#00288E]">Lihat Rincian ›</div>
                    </article>
                </section>

                {{-- Dark Blue Academic Announcement Card --}}
                <section class="rounded-3xl bg-gradient-to-br from-[#00288E] to-[#153EAA] text-white p-5 shadow-md">
                    <div class="flex items-start gap-3.5">
                        <div class="w-10 h-10 rounded-2xl bg-white/15 flex items-center justify-center text-lg shrink-0">📢</div>
                        <div class="flex-1">
                            <div class="flex items-center justify-between text-[10px] font-extrabold uppercase tracking-wider">
                                <span class="text-[#FED01B]">PENGUMUMAN AKADEMIK</span>
                                <span class="text-[#DDE1FF]">UPT SMKN 3</span>
                            </div>
                            <h3 class="mt-1 text-base sm:text-lg font-extrabold leading-snug">
                                Ujian Sumatif Semester Ganjil Dimulai 23 Nov 2026
                            </h3>
                            <p class="mt-1.5 text-xs text-[#DDE1FF] leading-relaxed">
                                Batas minimal kehadiran siswa untuk mencetak Kartu Ujian adalah <strong class="text-white">90%</strong>. Harap terus pantau presensi putra-putri Anda.
                            </p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>

    {{-- Modal Ajukan Izin / Sakit --}}
    <div id="modalIzinOrtu" class="fixed inset-0 z-50 bg-slate-900/50 backdrop-blur-xs hidden items-center justify-center p-4">
        <div class="bg-white rounded-3xl max-w-md w-full p-6 shadow-2xl border border-[#E9EAF3]">
            <div class="flex items-center justify-between">
                <h3 class="text-base font-extrabold text-[#131B2E]">📝 Ajukan Izin / Sakit Siswa</h3>
                <button type="button" onclick="tutupModalIzinOrtu()" class="w-8 h-8 rounded-full bg-slate-100 text-slate-600 font-bold">✕</button>
            </div>
            <p class="mt-1 text-xs text-[#51586B]">Pengajuan akan langsung diteruskan ke Wali Kelas untuk diverifikasi.</p>
            <div class="mt-4 space-y-3 text-xs">
                <div>
                    <label class="font-bold block mb-1">Pilih Anak</label>
                    <select class="w-full rounded-xl border border-[#D7D8E4] bg-[#F8F9FF] px-3 py-2.5 font-semibold">
                        <option>Haura Mukrimah Rahman (11 DKV 1)</option>
                        <option>Muh. Rizky (10 RPL 2)</option>
                    </select>
                </div>
                <div>
                    <label class="font-bold block mb-1">Jenis Pengajuan</label>
                    <select class="w-full rounded-xl border border-[#D7D8E4] bg-[#F8F9FF] px-3 py-2.5 font-semibold">
                        <option>Sakit (Dengan Surat Dokter / Istirahat)</option>
                        <option>Izin Keperluan Keluarga</option>
                    </select>
                </div>
                <div>
                    <label class="font-bold block mb-1">Keterangan Singkat</label>
                    <textarea rows="3" placeholder="Tuliskan alasan izin atau sakit..." class="w-full rounded-xl border border-[#D7D8E4] bg-[#F8F9FF] p-3"></textarea>
                </div>
            </div>
            <div class="mt-5 flex gap-2">
                <button type="button" onclick="kirimIzinOrtu()" class="flex-1 h-11 rounded-xl bg-[#00288E] text-white text-xs font-extrabold">
                    Kirim ke Wali Kelas
                </button>
                <button type="button" onclick="tutupModalIzinOrtu()" class="h-11 px-4 rounded-xl bg-slate-100 text-xs font-bold text-slate-700">
                    Batal
                </button>
            </div>
        </div>
    </div>

    {{-- Bottom Navigation Bar (Mobile) --}}
    <nav class="lg:hidden fixed bottom-3 inset-x-4 z-40 bg-white/95 backdrop-blur rounded-3xl shadow-xl border border-[#E4E7F5] px-3 py-2 flex items-center justify-around">
        <a href="{{ route('ortu.dashboard') }}" class="flex flex-col items-center justify-center w-16 h-12 rounded-2xl bg-[#00288E] text-white font-extrabold text-[11px] shadow">
            <span class="text-sm">⊞</span><span>Beranda</span>
        </a>
        <button type="button" onclick="bukaModalIzinOrtu()" class="flex flex-col items-center gap-0.5 text-[#646B7E] font-semibold text-[11px]">
            <span class="text-base">☑️</span><span>Izin</span>
        </button>
        <a href="#jadwal-anak" class="flex flex-col items-center gap-0.5 text-[#646B7E] font-semibold text-[11px]">
            <span class="text-base">🕒</span><span>Riwayat</span>
        </a>
        <a href="#poin-anak" class="flex flex-col items-center gap-0.5 text-[#646B7E] font-semibold text-[11px]">
            <span class="text-base">👤</span><span>Profil</span>
        </a>
    </nav>

    <script>
        function pilihAnak(kode) {
            const tabH = document.getElementById('tabHaura');
            const tabR = document.getElementById('tabRizky');
            if (kode === 'rizky') {
                tabR.className = 'flex items-center gap-2.5 rounded-xl bg-white p-2.5 shadow-sm border-2 border-[#00288E] text-left transition';
                tabH.className = 'flex items-center gap-2.5 rounded-xl bg-white/60 hover:bg-white p-2.5 border border-transparent text-left transition';
                document.getElementById('avatarAnak').textContent = 'MR';
                document.getElementById('namaAnak').textContent = 'Muhammad Rizky Rahman';
                document.getElementById('nisnAnak').textContent = 'NISN: 251044012 • Konsentrasi RPL';
                document.getElementById('waktuHadirAnak').textContent = '✓ Hadir Tepat Waktu — 06.58 WITA';
                document.getElementById('badgeKelasAnak').textContent = '10 RPL 2';
                document.getElementById('mapel1Anak').textContent = 'Dasar Pemrograman & Algoritma (Praktik Lab)';
                document.getElementById('guru1Anak').textContent = '👤 Hendra Wijaya, S.Kom.';
            } else {
                tabH.className = 'flex items-center gap-2.5 rounded-xl bg-white p-2.5 shadow-sm border-2 border-[#00288E] text-left transition';
                tabR.className = 'flex items-center gap-2.5 rounded-xl bg-white/60 hover:bg-white p-2.5 border border-transparent text-left transition';
                document.getElementById('avatarAnak').textContent = 'HM';
                document.getElementById('namaAnak').textContent = 'Haura Mukrimah Rahman';
                document.getElementById('nisnAnak').textContent = 'NISN: 241031060 • Konsentrasi DKV';
                document.getElementById('waktuHadirAnak').textContent = '✓ Hadir Tepat Waktu — 06.52 WITA';
                document.getElementById('badgeKelasAnak').textContent = '11 DKV 1';
                document.getElementById('mapel1Anak').textContent = 'KK Desain Komunikasi Visual (Praktik Vokasi)';
                document.getElementById('guru1Anak').textContent = '👤 Nurhana Dattar, S.Kom.';
            }
        }
        function bukaModalIzinOrtu() {
            const m = document.getElementById('modalIzinOrtu');
            m.classList.remove('hidden');
            m.classList.add('flex');
        }
        function tutupModalIzinOrtu() {
            const m = document.getElementById('modalIzinOrtu');
            m.classList.add('hidden');
            m.classList.remove('flex');
        }
        function kirimIzinOrtu() {
            tutupModalIzinOrtu();
            alert('Pengajuan izin berhasil dikirim ke Wali Kelas.');
        }
    </script>
</body>
</html>

