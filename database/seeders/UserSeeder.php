<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $akun = [
            ['Muhammad Irfan, S.Kom.',  'tu_demo',    'tu'],
            ['Haura Mukrimah Rahman',   'siswa_demo', 'siswa'],
            ['Pak Rahman',              'ortu_demo',  'orang_tua'],
            ['Andi Muh. Iqbal, S.Pd.',  'wali_demo',  'wali_kelas'],
            ['Nurhana Dattar, S.Kom.',  'mapel_demo', 'guru_mapel'],
            ['Dra. Hj. Ratnawati',      'bk_demo',    'guru_bk'],
        ];

        foreach ($akun as [$nama, $username, $role]) {
            User::updateOrCreate(
                ['username' => $username],
                [
                    'name'      => $nama,
                    'email'     => $username . '@demo.test',
                    'password'  => Hash::make('password123'),
                    'role'      => $role,
                    'is_active' => true,
                ]
            );
        }
    }
}
