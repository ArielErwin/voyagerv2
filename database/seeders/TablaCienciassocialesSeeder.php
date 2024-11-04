<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TablaCienciassocialesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tablacienciassociales')->insert([
            ['nombre' => 'FACULTAD DE CIENCIAS SOCIALES Y HUMANISTICAS'],   
            ['nombre' => 'LINGÜISTICA E IDIOMAS'],
            ['nombre' => 'TRABAJO SOCIAL'],
            ['nombre' => 'TURISMO'],
            ['nombre' => 'CIENCIAS DE LA COMUNICACION'],
        ]);
    }
}
