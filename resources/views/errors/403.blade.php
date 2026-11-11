<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>403 Akses Ditolak - Portal Presensi SMKN 3 Parepare</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>body{font-family:'Inter',ui-sans-serif,system-ui,sans-serif}</style>
</head>
<body class="min-h-screen bg-[#FAF8FF] text-[#131B2E] flex items-center justify-center p-4">
    <div class="max-w-md w-full bg-white rounded-3xl shadow-xl border border-[#E9EAF3] p-6 sm:p-8 text-center">
        <div class="mx-auto w-16 h-16 rounded-2xl bg-red-50 text-red-600 flex items-center justify-center text-3xl font-extrabold mb-4">
            🛡️
        </div>
        <span class="inline-flex items-center gap-1.5 rounded-full bg-red-100 px-3 py-1 text-[11px] font-bold uppercase tracking-wider text-red-700">
            Proteksi RBAC Aktif • Error 403
        </span>
        <h1 class="mt-3 text-xl font-extrabold text-[#17213A]">Akses Tidak Diizinkan</h1>
        <p class="mt-2 text-sm text-[#51586B] leading-relaxed">
            {{ $exception->getMessage() ?: 'Anda tidak memiliki hak akses ke halaman peran ini.' }}
        </p>

        @auth
            <div class="mt-5 rounded-2xl bg-[#F2F3FF] p-3.5 text-left text-xs">
                <div class="text-[#6F7488] font-bold uppercase tracking-wider text-[10px]">Akun Aktif Saat Ini</div>
                <div class="mt-1 font-bold text-[#17213A] text-sm">{{ auth()->user()->name }}</div>
                <div class="text-[#00288E] font-semibold">{{ auth()->user()->roleLabel() }} ({{ auth()->user()->username }})</div>
            </div>

            <div class="mt-6 flex flex-col sm:flex-row gap-2.5">
                <a href="{{ route(auth()->user()->dashboardRoute()) }}"
                   class="flex-1 inline-flex items-center justify-center h-11 rounded-xl bg-[#00288E] px-4 text-xs font-bold text-white shadow hover:bg-[#001f6e] transition">
                    ← Kembali ke Beranda Saya
                </a>
                <form method="POST" action="{{ route('logout') }}" class="sm:w-auto">
                    @csrf
                    <button type="submit"
                            class="w-full h-11 rounded-xl bg-red-50 px-4 text-xs font-bold text-red-700 hover:bg-red-100 transition">
                        Ganti Akun
                    </button>
                </form>
            </div>
        @else
            <div class="mt-6">
                <a href="{{ route('login') }}"
                   class="inline-flex items-center justify-center w-full h-11 rounded-xl bg-[#00288E] px-4 text-xs font-bold text-white shadow">
                    Masuk ke Portal
                </a>
            </div>
        @endauth
    </div>
</body>
</html>

