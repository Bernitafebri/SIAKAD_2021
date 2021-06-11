<?php

namespace Database\Seeders;
use App\Models\MataKuliah;
use Illuminate\Database\Seeder;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MataKuliah::truncate();
        MataKuliah::create([
            'kode' => '1212',
            'nama_matkul' => 'Dasar Komputer Pemrograman',
            'sks' => '2',
            'semester' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        MataKuliah::create([
            'kode' => '3333',
            'nama_matkul' => 'B. Indonesia',
            'sks' => '2',
            'semester' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
            ]
        );
    }
}
