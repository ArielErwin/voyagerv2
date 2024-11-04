<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TablaMineraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tablaminera')->insert([
            ['nombre' => 'FACULTAD DE INGENIERIA MINERA'],
            ['nombre' => 'INGENIERIA MINERA'],
            ['nombre' => 'INGENIERIA DE PROCESOS DE M.P.M.'],
        ]);
    }
}
