<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class prodiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prodi')->insert(array(
            ['kd_prodi' => 'D3TI',
            'nama_prodi' => 'D3 Teknik Informatika',
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at'=> now()->format('Y-m-d H:i:s')
            ],
            ['kd_prodi' => 'D4RPL',
            'nama_prodi' => 'D4 REKAYASA PERANGKAT LUNAK',
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at'=> now()->format('Y-m-d H:i:s')
            ]
            ));
    }
}
