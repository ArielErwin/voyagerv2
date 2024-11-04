<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TabladsaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tabladsa')->insert([
            ['nombre' => 'D.S.A'],
            ['nombre' => 'INFORMES'],
            ['nombre' => 'CIRCULARES'],
            ['nombre' => 'CITACIONES'],
            ['nombre' => 'NOTAS DE INSTRUCCION'],
            ['nombre' => 'CERTIFICADOS'],
            ['nombre' => 'OTROS'],
            ['nombre' => 'DPTO. BIBLIOTECA'],
            ['nombre' => 'DPTO. BIENESTAR'],
            ['nombre' => 'COORDINACION A.'],
            ['nombre' => 'D.A.R.'],
            ['nombre' => 'DATA'],
        ]);
    }
}
