<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TablaTupizaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tablatupiza')->insert([
            ['nombre' => 'SEDE TUPIZA'],
            ['nombre' => 'VETERINARIA Y ZOOTECNIA'],
            ['nombre' => 'AUDITORIA CONTADURIA PUBLICA'],
            ['nombre' => 'DERECHO (PROGRAMA CICLICO)'],
            ['nombre' => 'INGENIERIA DE SISTEMAS (PROGRAMA CICLICO)'],
        ]);
    }
}
