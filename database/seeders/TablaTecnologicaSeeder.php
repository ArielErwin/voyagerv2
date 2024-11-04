<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TablaTecnologicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tablatecnologica')->insert([
            ['nombre' => 'FACULTAD DE INGENIERIA TECNOLOGICA'],
            ['nombre' => 'INGENIERIA ELECTRICA'],
            ['nombre' => 'INGENIERIA ELECTRONICA'],
            ['nombre' => 'INGENIERIA MECANICA'],
            ['nombre' => 'INGENIERIA MECATRONICA'],
            ['nombre' => 'MECATRONICA AUTOMOTRIZ-TECNICO SUPERIOR'],
            ['nombre' => 'ELECTRICIDAD-TECNICO SUPERIOR'],
            ['nombre' => 'ELECTRONICA-TECNICO SUPERIOR'],
            ['nombre' => 'MECANICA-TECNICO SUPERIOR'],
            ['nombre' => 'MECANICA AUTOMOTRIZ-TECNICO MEDIO'],
            ['nombre' => 'ELECTRICIDAD-TECNICO MEDIO'],
            ['nombre' => 'ELECTRONICA-TECNICO MEDIO'],
            ['nombre' => 'MECANICA-TECNICO MEDIO'],
        ]);
    }
}
