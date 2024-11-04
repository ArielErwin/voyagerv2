<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TablaUyuniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tablauyuni')->insert([
            ['nombre' => 'SEDE UYUNI'],
            ['nombre' => 'ECONOMIA'],
            ['nombre' => 'LINGÜISTICA E IDIOMAS'],
            ['nombre' => 'TURISMO'],
            ['nombre' => 'QUIMICA'],
        ]);
    }
}
