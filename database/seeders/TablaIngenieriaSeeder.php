<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TablaIngenieriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tablaingenieria')->insert([
            ['nombre' => 'FACULTAD DE INGENIERIA'],
            ['nombre' => 'CONTRUCCIONES CIVILES'],
            ['nombre' => 'INGENIERIA CIVIL'],
            ['nombre' => 'GEODESIA Y TOPOGRAFIA'],
        ]);
    }
}
