<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TablaSaludSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tablasalud')->insert([
            ['nombre' => 'FACULTAD DE CIENCIAS DE LA SALUD'],
            ['nombre' => 'ENFERMERIA'],
            ['nombre' => 'AUXILIAR DE ENFERMERIA'],
        ]);
    }
}
