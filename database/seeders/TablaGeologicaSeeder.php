<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TablaGeologicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tablageologica')->insert([
            ['nombre' => 'FACULTAD DE INGENIERIA GEOLOGICA'],
            ['nombre' => 'INGENIERIA GEOLOGICA'],
            ['nombre' => 'INGENIERIA MEDIO AMBIENTAL'],
        ]);
    }
}
