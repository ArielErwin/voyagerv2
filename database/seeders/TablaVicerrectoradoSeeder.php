<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablaVicerrectoradoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tablavicerrectorado')->insert([
            ['nombre' => 'VICERRECTORADO'],
            ['nombre' => 'COMISION ACADEMICA'],
            ['nombre' => 'COMISION DE BIENESTAR'],
            ['nombre' => 'D.I.C. Y T.'],
            ['nombre' => 'I.B.B.A'],
            ['nombre' => 'D.I.S.U.'],
            ['nombre' => 'DIRECCION DE POSTGRADO'],
            ['nombre' => 'IMPRENTA UNIVERSITARIA'],
            ['nombre' => 'UNIDAD DE CULTURA Y DEPORTE'],
            ['nombre' => 'VARIOS'],
        ]);
    }
}
