<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RuangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 20; $i++) {
            if ($i < 10) {
                $r = '0' . $i;
            } else {
                $r = $i;
            }
        
            DB::table('ruangs')->insert([
                'id' => $i,
                'nama_ruang' => 'Ruang ' . $r,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
    }
}
