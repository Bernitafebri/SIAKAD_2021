<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
                'name' => 'Admin Aplikasi',
                'level' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('admin'),
                'remember_token' => Str::random(68),
            ]
        );
        User::create([
                'name' => 'Dosen',
                'level' => 'dosen',
                'email' => 'dosen@dosen.com',
                'password' => bcrypt('dosen'),
                'remember_token' => Str::random(68),
            ]
        );
        User::create([
                'name' => 'Mahasiswa',
                'level' => 'mahasiswa',
                'email' => 'mahasiswa@mahasiswa.com',
                'password' => bcrypt('mahasiswa'),
                'remember_token' => Str::random(68),
            ]
        );
    }
}
