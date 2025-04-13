<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('items')->insert([
            
            [
                'item' => '2201',
                'nombre' => 'Alimentos y Bebidas',
                'descripcion' => 'Alimentos y Bebidas',
            ],
            [
                'item' => '2202',
                'nombre' => 'Textiles, Vestuario y Calzado',
                'descripcion' => 'Textiles, Vestuario y Calzado',
            ],
            [
            'item' => '2203',
            'nombre' => 'Combustibles y Lubricantes',
            'descripcion' => 'Combustibles y Lubricantes',
        ],
            [
            'item' => '2204',
            'nombre' => 'Materiales de Uso o Consumo',
            'descripcion' => 'Materiales de Uso o Consumo',
        ],
            [
            'item' => '2205',
            'nombre' => 'Servicios Básicos',
            'descripcion' => 'Servicios Básicos',
        ],
            [
            'item' => '2206',
            'nombre' => 'Mantenimiento y Reparaciones',
            'descripcion' => 'Mantenimiento y Reparaciones',
        ],
            [
            'item' => '2207',
            'nombre' => 'Publicidad y Difusión',
            'descripcion' => 'Publicidad y Difusión',
        ],
            [
            'item' => '2208',
            'nombre' => 'Servicios Generales',
            'descripcion' => 'Servicios Generales',
        ],
            [
            'item' => '2209',
            'nombre' => 'Arriendos',
            'descripcion' => 'Arriendos',
        ],
            [
            'item' => '2210',
            'nombre' => 'Servicios Financieros y de Seguros',
            'descripcion' => 'Servicios Financieros y de Seguros',
        ],
            [
            'item' => '2211',
            'nombre' => 'Servicios Técnicos y Profesionales',
            'descripcion' => 'Servicios Técnicos y Profesionales',
        ],
            [
            'item' => '2212',
            'nombre' => 'Otros Gastos en Bienes y Servicios de Consumo',
            'descripcion' => 'Otros Gastos en Bienes y Servicios de Consumo',
        ]
        ]);
    }
}
