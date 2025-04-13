<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadosSeeder extends Seeder
{
   
    public function run(): void
    {
        DB::table('estados')->insert([
    [
        'id' => 1,
        'nombre' => 'DIGITADO',
        'descripcion' => 'DIGITADO',
        'tabla_referencia'=>"",
    ] ,
    [
        'id' => 2,
        'nombre' => 'IMPORTADO',
        'descripcion' => 'IMPORTACION MASIVA',
        'tabla_referencia'=>"",
    ] ,
    [
        'id' => 3,
        'nombre' => 'PREAFECTACION',
        'descripcion' => 'FICHA INICIO',
        'tabla_referencia'=>"",
    ] ,
    [
        'id' => 4,
        'nombre' => 'REVISION',
        'descripcion' => 'EN REVISION',
        'tabla_referencia'=>"",
    ] ,
    [
        'id' => 5,
        'nombre' => 'APROBADO',
        'descripcion' => 'APROBADO',
        'tabla_referencia'=>"",
    ] ,
    [
        'id' => 6,
        'nombre' => 'RECHAZADO',
        'descripcion' => 'RECHAZADO',
        'tabla_referencia'=>"",
    ] ,
    
    [
        'id' => 7,
        'nombre' => 'AFECTACION',
        'descripcion' => 'ORDEN DE COMPRA',
        'tabla_referencia'=>"",
    ] ,

    [
        'id' => 8,
        'nombre' => 'OBLIGACION',
        'descripcion' => 'CERTIFICADO DE DISPONIBILIDAD PRESUPUESTARIA',
        'tabla_referencia'=>"",
    ] ,
    [
        'id' => 9,
        'nombre' => 'PAGADA',
        'descripcion' => 'EGRESO',
        'tabla_referencia'=>"",
    ] ,
    [
        'id' => 10,
        'nombre' => 'TERMINADA',
        'descripcion' => 'EBOOK',
        'tabla_referencia'=>"",
    ],    

    ]);
}
}
