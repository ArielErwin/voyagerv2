<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TablaUnciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tablauncia')->insert([
            ['nombre' => 'SEDE UNCIA'],
            ['nombre' => 'ECONOMIA'],
            ['nombre' => 'TRABAJO SOCIAL'],
            ['nombre' => 'DERECHO'],
            ['nombre' => 'LINGÜISTICA E IDIOMAS'],
        ]);
    }
}
