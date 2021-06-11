<?php

namespace Database\Seeders;
use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mahasiswa::truncate();
        Mahasiswa::create([
            'nama' => 'Afrina',
            'nim' => '2111111121',
            'gender' => 'Perempuan',
            'address' => 'Semarang',
            'noHP' => '0293823093',
            'semester' => '6',
            'prodi' => 'Teknik Komputer',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        Mahasiswa::create([
            'nama' => 'Ayunda',
            'nim' => '131333333313',
            'gender' => 'Perempuan',
            'address' => 'Semarang',
            'noHP' => '0865654876765',
            'semester' => '6',
            'prodi' => 'Teknik Komputer',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        Mahasiswa::create([
            'nama' => 'Bernita',
            'nim' => '22421323233',
            'gender' => 'Perempuan',
            'address' => 'Grobogan',
            'noHP' => '0283982389238',
            'semester' => '6',
            'prodi' => 'Teknik Komputer',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        Mahasiswa::create([
            'nama' => 'Zolan',
            'nim' => '1324231113',
            'gender' => 'Perempuan',
            'address' => 'Semarang',
            'noHP' => '028323882342',
            'semester' => '6',
            'prodi' => 'Teknik Komputer',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
            ]
        );
    }
}
