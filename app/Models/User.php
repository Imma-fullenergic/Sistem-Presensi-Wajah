<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public const ROLES = [
        'tu'         => 'Kepala Tata Usaha & Super Admin',
        'guru_bk'    => 'Guru Bimbingan Konseling (BK)',
        'guru_mapel' => 'Guru Mata Pelajaran / Produktif',
        'wali_kelas' => 'Wali Kelas',
        'orang_tua'  => 'Orang Tua / Wali Murid',
        'siswa'      => 'Siswa',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'role',
        'is_active',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_active'         => 'boolean',
    ];

    public function hasRole(string ...$roles): bool
    {
        return in_array($this->role, $roles, true);
    }

    public function roleLabel(): string
    {
        return self::ROLES[$this->role] ?? ucfirst((string) $this->role);
    }

    public function dashboardRoute(): string
    {
        return match ($this->role) {
            'tu'         => 'tu.dashboard',
            'guru_bk'    => 'bk.dashboard',
            'guru_mapel' => 'mapel.dashboard',
            'wali_kelas' => 'wali.dashboard',
            'orang_tua'  => 'ortu.dashboard',
            'siswa'      => 'siswa.dashboard',
            default      => 'login',
        };
    }
}
