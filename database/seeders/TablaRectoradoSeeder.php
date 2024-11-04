<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
class TablaRectoradoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tablarectorado')->insert([
            ['nombre' => 'RECTORADO'],
            ['nombre' => 'SECRETARIA GENERAL'],
            ['nombre' => 'SECRETARIA GENERAL DEPTO. TITULOS'],
            ['nombre' => 'ASESORIA JURIDICA'],
            ['nombre' => 'RELACIONES PUBLICAS'],
            ['nombre' => 'AUDITORIA INTERNA'],
            ['nombre' => 'DIRECCION DE PLANIFICACION'],
            ['nombre' => 'DIRECCION DE EVALUACION Y ACREDITACION'],
            ['nombre' => 'VARIOS'],
        ]);
        
    }
}
