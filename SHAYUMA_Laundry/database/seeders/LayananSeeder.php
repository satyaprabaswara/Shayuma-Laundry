<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('layanans')->insert([
            ['nama'=>'Cuci Kering','harga_perkg'=>5000,'estimasi_hari'=>2],
            ['nama'=>'Cuci Setrika','harga_perkg'=>7000,'estimasi_hari'=>2],
        ]);
    }
}
