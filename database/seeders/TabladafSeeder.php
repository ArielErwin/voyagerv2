<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TabladafSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tabladaf')->insert([
            ['nombre' => 'D.A.F.'],
            ['nombre' => 'DEPARTAMENTO DE INFRAESTRUCTURA'],
            ['nombre' => 'DPTO. DE PERSONAL'],
            ['nombre' => 'F.U.D.'],
            ['nombre' => 'S.S.U.'],
            ['nombre' => 'S.T.U.'],
        ]);
    }
}
