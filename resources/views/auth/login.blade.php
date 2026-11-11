<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Masuk - Portal Akademik Presensi Siswa UPT SMKN 3 Parepare</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', ui-sans-serif, system-ui, -apple-system, sans-serif;
            background: radial-gradient(circle at 75% 45%, #1A49C4 0%, #1037A0 45%, #0B297E 100%);
        }
    </style>
</head>
<body class="min-h-screen text-white antialiased flex flex-col items-center justify-between px-4 py-8 sm:py-10">

    <div class="w-full max-w-[430px] my-auto flex flex-col items-center">

        {{-- Top Branding Section --}}
        <div class="flex flex-col items-center text-center mb-6">
            {{-- Circular Logo with subtle outer ring --}}
            <div class="h-[74px] w-[74px] rounded-full bg-white/10 p-1.5 shadow-lg ring-1 ring-white/20 flex items-center justify-center">
                <img src="{{ asset('images/logo.svg') }}"
                     alt="Logo UPT SMKN 3 Parepare"
                     class="h-full w-full rounded-full object-contain">
            </div>

            {{-- Golden Badge --}}
            <div class="mt-4 inline-flex items-center gap-1.5 rounded-full bg-[#F7BD1E] px-3.5 py-1 text-[10.5px] font-extrabold uppercase tracking-wider text-[#1F1600] shadow-sm">
                <svg class="w-3 h-3 text-[#1F1600]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round">
                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                </svg>
                <span>UPT SMKN 3 PAREPARE</span>
            </div>

            {{-- Main Title & Subtitle --}}
            <h1 class="mt-3 text-[22px] sm:text-[26px] font-extrabold tracking-tight text-white leading-tight">
                Portal Akademik Presensi Siswa
            </h1>
            <p class="mt-1.5 text-[12.5px] sm:text-[13.5px] font-normal text-[#BDD0FF]">
                Presensi Jujur &amp; Real-time Berbasis Biometrik Wajah
            </p>

            {{-- Timezone Pill --}}
            <div class="mt-3 inline-flex items-center gap-2 rounded-full bg-white/10 border border-white/15 px-3.5 py-1 text-[11px] font-medium text-[#E5EDFF] backdrop-blur-xs">
                <span class="h-2 w-2 rounded-full bg-[#22C55E] shadow-[0_0_8px_#22C55E]"></span>
                <span>Zona WITA • Parepare, Sulawesi Selatan</span>
            </div>
        </div>

        {{-- White Login Card --}}
        <main class="w-full rounded-[24px] bg-white p-6 sm:p-8 text-[#111827] shadow-[0_20px_50px_rgba(4,15,55,0.38)]">
            <h2 class="text-[19px] font-extrabold text-[#111827] tracking-tight">Masuk ke Akun Anda</h2>
            <p class="mt-1 text-[12px] text-[#6B7280]">
                Gunakan username dan kata sandi yang diberikan oleh Tata Usaha.
            </p>

            <form method="POST" action="{{ route('login') }}" class="mt-5 space-y-4">
                @csrf

                {{-- Field: Username / Identitas --}}
                <div>
                    <label for="username" class="mb-1.5 block text-[11.5px] font-bold text-[#1F2937]">
                        Username / Identitas
                    </label>
                    <div class="relative">
                        <span class="pointer-events-none absolute left-3.5 top-1/2 -translate-y-1/2 text-[#6B7280]">
                            <svg class="w-[17px] h-[17px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <circle cx="12" cy="10" r="3"></circle>
                                <path d="M7 20.662V19a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v1.662"></path>
                            </svg>
                        </span>
                        <input id="username"
                               name="username"
                               type="text"
                               value="{{ old('username') }}"
                               required
                               autofocus
                               autocomplete="username"
                               placeholder="NISN / NIP / Email / No. HP"
                               class="block h-11 w-full rounded-xl border border-[#E5E9F2] bg-[#F4F6FB] pl-10 pr-4 text-[12.5px] text-[#111827] placeholder-[#9CA3AF] focus:border-[#1D58E8] focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#1D58E8]/20 transition">
                    </div>
                    <p class="mt-1.5 flex items-center gap-1.5 text-[11px] font-medium text-[#6B7280]">
                        <span class="text-[#1D58E8] text-[10px]">✦</span>
                        <span>Peran (Siswa, Ortu, Guru, BK, TU) otomatis dikenali</span>
                    </p>
                    @error('username')
                        <p class="mt-1 text-[11.5px] font-semibold text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Field: Kata Sandi --}}
                <div>
                    <div class="mb-1.5 flex items-center justify-between">
                        <label for="password" class="block text-[11.5px] font-bold text-[#1F2937]">
                            Kata Sandi
                        </label>
                        <a href="{{ route('password.request') }}" class="text-[11px] font-bold text-[#1D58E8] hover:underline">
                            Lupa kata sandi?
                        </a>
                    </div>
                    <div class="relative">
                        <span class="pointer-events-none absolute left-3.5 top-1/2 -translate-y-1/2 text-[#6B7280]">
                            <svg class="w-[17px] h-[17px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                <path d="M7 11V7a5 5 0 0 1 9.9-1"></path>
                            </svg>
                        </span>
                        <input id="password"
                               name="password"
                               type="password"
                               required
                               autocomplete="current-password"
                               placeholder="Masukkan kata sandi akun"
                               class="block h-11 w-full rounded-xl border border-[#E5E9F2] bg-[#F4F6FB] pl-10 pr-10 text-[12.5px] text-[#111827] placeholder-[#9CA3AF] focus:border-[#1D58E8] focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#1D58E8]/20 transition">
                        <button type="button"
                                id="togglePw"
                                aria-label="Tampilkan kata sandi"
                                class="absolute right-3 top-1/2 -translate-y-1/2 p-1 text-[#9CA3AF] hover:text-[#4B5563] transition">
                            <svg id="eyeOffIcon" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path>
                                <line x1="1" y1="1" x2="23" y2="23"></line>
                            </svg>
                            <svg id="eyeOnIcon" class="w-4 h-4 hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                        </button>
                    </div>
                    @error('password')
                        <p class="mt-1 text-[11.5px] font-semibold text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Remember Me Checkbox --}}
                <div class="pt-0.5">
                    <label class="inline-flex items-center gap-2 cursor-pointer select-none">
                        <input type="checkbox"
                               name="remember"
                               class="h-4 w-4 rounded border-[#D1D5DB] text-[#002B8F] focus:ring-[#002B8F]">
                        <span class="text-[12px] font-medium text-[#374151]">Ingat sesi di komputer ini</span>
                    </label>
                </div>

                {{-- Submit Button --}}
                <button type="submit"
                        class="flex h-11 w-full items-center justify-center gap-2 rounded-xl bg-[#002B8F] text-[13px] font-bold text-white shadow-[0_6px_16px_rgba(0,43,143,0.35)] hover:bg-[#002070] focus:outline-none focus:ring-2 focus:ring-[#002B8F] focus:ring-offset-2 transition">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                        <polyline points="10 17 15 12 10 7"></polyline>
                        <line x1="15" y1="12" x2="3" y2="12"></line>
                    </svg>
                    <span>Masuk ke Portal</span>
                </button>
            </form>

            {{-- Bottom Info Callout inside Card --}}
            <div class="mt-5 flex items-start gap-3 rounded-2xl border border-[#E5ECF9] bg-[#F5F8FF] p-3.5">
                <div class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-[#1D58E8] text-[11px] font-extrabold text-white">
                    i
                </div>
                <div>
                    <p class="text-[11.5px] font-bold text-[#111827]">Belum memiliki akun?</p>
                    <p class="mt-0.5 text-[11px] leading-[16px] text-[#6B7280]">
                        Seluruh akun siswa, orang tua, dan pengajar dibuat dan diverifikasi langsung oleh Bagian Tata Usaha.
                    </p>
                </div>
            </div>
        </main>

        {{-- Footer Security & Legal Info --}}
        <footer class="mt-6 flex flex-col items-center text-center">
            <div class="inline-flex items-center gap-1.5 rounded-full bg-[#092268]/80 border border-white/10 px-3.5 py-1 text-[10.5px] font-medium text-[#CBD5E1]">
                <svg class="w-3.5 h-3.5 text-[#22C55E]" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2L4 5v6.09c0 5.05 3.41 9.76 8 10.91 4.59-1.15 8-5.86 8-10.91V5l-8-3zm-1.06 13.54L7.4 12l1.41-1.41 2.12 2.12 4.24-4.24 1.41 1.41-5.64 5.66z"/>
                </svg>
                <span>v2.4.0 • Keamanan TLS 1.3 Terenkripsi</span>
            </div>

            <p class="mt-3 max-w-[340px] text-[10.5px] leading-[15px] text-[#93B0F5]">
                Data biometrik wajah dilindungi secara ketat sesuai UU No. 27 Tahun 2022 tentang Pelindungan Data Pribadi
            </p>
            <p class="mt-2 text-[10px] text-[#7897E8]">
                © 2026 UPT SMKN 3 Parepare. Seluruh hak cipta dilindungi.
            </p>
        </footer>

    </div>

    <script>
        document.getElementById('togglePw').addEventListener('click', function () {
            const input = document.getElementById('password');
            const eyeOff = document.getElementById('eyeOffIcon');
            const eyeOn = document.getElementById('eyeOnIcon');
            const isPassword = input.type === 'password';
            input.type = isPassword ? 'text' : 'password';
            eyeOff.classList.toggle('hidden', isPassword);
            eyeOn.classList.toggle('hidden', !isPassword);
        });
    </script>
</body>
</html>
