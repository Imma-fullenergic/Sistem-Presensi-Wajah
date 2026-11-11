<x-tu-layout judul="Buat Akun Pengguna">
    <div class="mx-auto max-w-xl">
        <form method="POST" action="{{ route('tu.akun.store') }}" class="space-y-4 rounded-2xl bg-white border border-[#E9EAF3] p-6 shadow-xs">
            @csrf
            <div>
                <h1 class="text-xl font-extrabold text-[#131B2E]">Buat Akun Pengguna Baru</h1>
                <p class="text-xs text-[#51586B]">Akun yang dibuat langsung dapat digunakan pada halaman Login Satu Pintu sesuai perannya.</p>
            </div>

            <div>
                <label class="block text-xs font-bold text-[#131B2E] mb-1">Nama Lengkap</label>
                <input name="name" value="{{ old('name') }}" required placeholder="Contoh: Drs. Baharuddin, M.Pd."
                       class="w-full rounded-xl border border-[#D7D8E4] bg-[#F8F9FF] px-3.5 py-2.5 text-sm">
                <x-input-error :messages="$errors->get('name')" />
            </div>

            <div>
                <label class="block text-xs font-bold text-[#131B2E] mb-1">Username / Identitas Login</label>
                <input name="username" value="{{ old('username') }}" required placeholder="Contoh: guru_produktif01"
                       class="w-full rounded-xl border border-[#D7D8E4] bg-[#F8F9FF] px-3.5 py-2.5 text-sm">
                <x-input-error :messages="$errors->get('username')" />
            </div>

            <div>
                <label class="block text-xs font-bold text-[#131B2E] mb-1">Peran Pengguna (Role RBAC)</label>
                <select name="role" required class="w-full rounded-xl border border-[#D7D8E4] bg-[#F8F9FF] px-3.5 py-2.5 text-sm font-semibold">
                    @foreach(\App\Models\User::ROLES as $kode => $label)
                        <option value="{{ $kode }}" @selected(old('role') === $kode)>{{ $label }} ({{ $kode }})</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block text-xs font-bold text-[#131B2E] mb-1">Kata Sandi Awal (Minimal 8 Karakter)</label>
                <input type="text" name="password" required minlength="8" value="password123"
                       class="w-full rounded-xl border border-[#D7D8E4] bg-[#F8F9FF] px-3.5 py-2.5 text-sm">
                <x-input-error :messages="$errors->get('password')" />
            </div>

            <div class="pt-2 flex items-center gap-3">
                <button class="rounded-xl bg-[#00288E] px-5 py-2.5 text-xs font-extrabold text-white shadow">Simpan Akun</button>
                <a href="{{ route('tu.akun.index') }}" class="text-xs font-bold text-[#51586B]">Batal</a>
            </div>
        </form>
    </div>
</x-tu-layout>
