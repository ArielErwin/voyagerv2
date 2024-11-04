<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TablaVillazonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tablavillazon')->insert([
            ['nombre' => 'SEDE VILLAZON'],
            ['nombre' => 'INGENIERIA AGROPECUARIA'],
            ['nombre' => 'TECNICO SUPERIOR DE AGROPECUARIA'],
            ['nombre' => 'ENFERMERIA'],
        ]);
    }
}
