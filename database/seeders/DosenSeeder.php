<?php

namespace Database\Seeders;
use App\Models\Dosen;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dosen::truncate();
        Dosen::create([
            'nama' => 'Alim',
            'nip' => '12345678',
            'gender' => 'Laki-Laki',
            'address' => 'Jl. Ahmad Yani no. 56, Semarang',
            'noHP' => '098393023232',
            'pengampu_matkul' => 'B. Indonesia',
            'prodi' => 'Teknik Komputer',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
            ]
        );
    }
}
