<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TablaEconomicasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tablaeconomicas')->insert([
            ['nombre' => 'FACULTAD DE CIENCIAS ECONOMICAS FINANCIERAS Y ADMINISTRATIVAS'],
            ['nombre' => 'ADMINISTRACION DE EMPRESAS'],
            ['nombre' => 'AUDITORIA-CONTADURIA PUBLICA'],
            ['nombre' => 'CONTABILIDAD Y FINANZAS'],
            ['nombre' => 'INGENIERIA COMERCIAL'],
            ['nombre' => 'ECONOMICA'],
        ]);
    }
}
