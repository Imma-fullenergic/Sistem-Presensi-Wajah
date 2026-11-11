<?php

namespace App\Http\Controllers\TU;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AkunController extends Controller
{
    private array $roles = ['tu','siswa','orang_tua','wali_kelas','guru_mapel','guru_bk'];

    public function index()
    {
        $akun = User::orderBy('role')->orderBy('name')->paginate(15);
        return view('tu.akun.index', compact('akun'));
    }

    public function create()
    {
        return view('tu.akun.create', ['roles' => $this->roles]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:50', 'alpha_dash', 'unique:users,username'],
            'role'     => ['required', Rule::in($this->roles)],
            'password' => ['required', 'string', 'min:8'],
        ]);

        User::create([
            'name'      => $data['name'],
            'username'  => $data['username'],
            'email'     => $data['username'] . '@sekolah.local',
            'role'      => $data['role'],
            'password'  => Hash::make($data['password']),
            'is_active' => true,
        ]);

        return redirect()->route('tu.akun.index')->with('status', 'Akun berhasil dibuat.');
    }

    public function toggle(User $user)
    {
        if ($user->id === auth()->id()) {
            return back()->withErrors(['akun' => 'Anda tidak bisa menonaktifkan akun sendiri.']);
        }
        $user->update(['is_active' => ! $user->is_active]);
        return back()->with('status', 'Status akun diperbarui.');
    }

    public function resetPassword(Request $request, User $user)
    {
        $data = $request->validate(['password' => ['required', 'string', 'min:8']]);
        $user->update(['password' => Hash::make($data['password'])]);
        return back()->with('status', 'Kata sandi direset.');
    }
}