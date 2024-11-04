<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TablaLlicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tablallica')->insert([
            ['nombre' => 'SEDE LLICA'],
            ['nombre' => 'AUXILIAR DE ENFERMERIA'],
            ['nombre' => 'MECANICA AUTOMOTRIZ'],
            
        ]);
    }
}
