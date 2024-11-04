<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TablaVicecarrerasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tablavicecarreras')->insert([
            ['nombre' => 'VICERRECTORADO'],
            ['nombre' => 'INGENIERIA DE SISTEMAS'],
            ['nombre' => 'ODONTOLOGIA'],
            ['nombre' => 'INGENIERIA EN DISEÑO PROGRAMACION DIGITAL'],
            ['nombre' => 'DISEÑO COMPUTARIZADO'],
        ]);
    
    }
}
