<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TablaCienciaspurasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tablacienciaspuras')->insert([
            ['nombre' => 'FACULTAD DE CIENCIAS PURAS'],      
            ['nombre' => 'ESTADISTICA'],
            ['nombre' => 'FISICA'],
            ['nombre' => 'INGENIERIA INFORMATICA'],
            ['nombre' => 'MATEMATICA'],
            ['nombre' => 'QUIMICA'],
        ]);
    }
}
