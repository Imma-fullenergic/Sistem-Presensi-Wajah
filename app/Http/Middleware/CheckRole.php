<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle(Request $request, Closure $next, string ...$roles): Response
    {
        $user = $request->user();

        if (! $user) {
            return redirect()->route('login');
        }

        if (! $user->is_active) {
            Auth::guard('web')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()->route('login')->withErrors([
                'username' => 'Akun Anda telah dinonaktifkan oleh Tata Usaha.',
            ]);
        }

        if (! $user->hasRole(...$roles)) {
            abort(403, 'Akses Ditolak (RBAC): Peran Anda (' . $user->roleLabel() . ') tidak memiliki izin untuk mengakses halaman ini.');
        }

        return $next($request);
    }
}
