<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TablaMedicinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tablamedicina')->insert([
            ['nombre' => 'FACULTAD DE MEDICINA'],
            ['nombre' => 'MEDICINA'],
        ]);
    }
}
