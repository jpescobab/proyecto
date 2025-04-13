<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CcostosSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('ccostos')->insert([
            [
                'ccosto' => '1400010201',
                'nombre' => 'CAPJ ZONAL COYHAIQUE',
                'cfinanciero' => '1400',
            ],
            [
                'ccosto' => '1400020301',
                'nombre' => 'CORTE DE APELACIONES DE COYHAIQUE',
                'cfinanciero' => '1400',
            ],
            [
                'ccosto' => '1400020401',
                'nombre' => 'PRIMER JUZGADO DE LETRAS DE COYHAIQUE',
                'cfinanciero' => '1400',
            ],
            [
                'ccosto' => '1400020601',
                'nombre' => 'JUZGADO DE LETRAS, GARANTIA Y FAMILIA DE CHILE CHICO',
                'cfinanciero' => '1400',
            ],
            [
                'ccosto' => '1400020602',
                'nombre' => 'JUZGADO DE LETRAS, GARANTIA Y FAMILIA PTO. CISNES',
                'cfinanciero' => '1400',
            ],
            [
                'ccosto' => '1400020603',
                'nombre' => 'JUZGADO DE LETRAS, GARANTIA Y FAMILIA DE COCHRANE',
                'cfinanciero' => '1400',
            ],
            [
                'ccosto' => '1401030801',
                'nombre' => 'JUZGADO DE GARANTIA',
                'cfinanciero' => '1401',
            ],
            [
                'ccosto' => '1402030901',
                'nombre' => 'TRIBUNAL DE JUICIO ORAL EN LO PENAL',
                'cfinanciero' => '1402',
            ],
            [
                'ccosto' => '1431031101',
                'nombre' => 'JUZGADO DE LETRAS DEL TRABAJO DE COYHAIQUE',
                'cfinanciero' => '1431',
            ],
            [
                'ccosto' => '1451031001',
                'nombre' => 'JUZGADO DE FAMILIA COYHAIQUE',
                'cfinanciero' => '1451',
            ],
            [
                'ccosto' => '1471031301',
                'nombre' => 'LETRAS GTÍA. Y FAMILIA AYSÉN',
                'cfinanciero' => '1471',
            ]
        ]);
    }
}
