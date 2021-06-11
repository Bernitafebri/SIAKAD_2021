<?php

namespace Database\Seeders;
use App\Models\Hari;
use Illuminate\Database\Seeder;

class HariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hari::truncate();
        Hari::create([
            'nama_hari' => 'Senin',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        Hari::create([
            'nama_hari' => 'Selasa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        Hari::create([
            'nama_hari' => 'Rabu',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        Hari::create([
            'nama_hari' => 'Kamis',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        Hari::create([
            'nama_hari' => 'Jumat',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        Hari::create([
            'nama_hari' => 'Sabtu',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        Hari::create([
            'nama_hari' => 'Minggu',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        
    }
}
