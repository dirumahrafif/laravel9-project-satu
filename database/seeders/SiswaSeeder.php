<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('siswa')->insert([
            'nama' => 'Ani',
            'nomor_induk' => '1000',
            'alamat' => 'Bantul',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('siswa')->insert([
            'nama' => 'Budi',
            'nomor_induk' => '1001',
            'alamat' => 'Sleman',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('siswa')->insert([
            'nama' => 'Candra',
            'nomor_induk' => '1002',
            'alamat' => 'Gunungkidul',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
