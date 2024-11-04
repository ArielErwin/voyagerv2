<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TablaAgricolasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tablaagricolas')->insert([
            ['nombre' => 'FACULTAD DE CIENCIAS AGRICOLAS Y PECUARIAS'],
            ['nombre' => 'INGENIERIA AGRONOMICA'],
            ['nombre' => 'INGENIERIA DE DESARROLLO RURAL'],
            ['nombre' => 'INGENIERIA AGROINDUSTRIAL'],
        ]);
    }
}
