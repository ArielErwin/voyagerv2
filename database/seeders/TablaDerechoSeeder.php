<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TablaDerechoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tabladerecho')->insert([
            ['nombre' => 'FACULTAD DE DERECHO'],
            ['nombre' => 'DERECHO'],
        ]);
    }
}
