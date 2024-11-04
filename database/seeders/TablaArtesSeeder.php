<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TablaArtesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tablaartes')->insert([
            ['nombre' => 'FACULTAD DE ARTES'],
            ['nombre' => 'ARTES MUSICALES'],
            ['nombre' => 'ARTES PLASTICAS'],
            ['nombre' => 'ARQUITECTURA'],
        ]);
    }
}
