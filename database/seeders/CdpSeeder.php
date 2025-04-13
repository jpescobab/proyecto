<?php

namespace Database\Seeders;

use App\Models\Cdp;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CdpSeeder extends Seeder
{
    public function run(): void
    {
        $file = database_path('seeders/data/CDP.csv');

        if (!File::exists($file)) {
            $this->command->error("Archivo CDP.csv no encontrado en: $file");
            return;
        }

        $csv = array_map('str_getcsv', file($file));
        $headers = array_map('trim', explode(';', array_shift($csv))); // Encabezados

        foreach ($csv as $row) {
            $data = array_combine($headers, array_map('trim', $row));

            // Limpieza y mapeo de datos según campos del modelo
            Cdp::create([
                'num_cdp'                     => $data['num_cdp'] ?? null,
                'fecha'                       => \Carbon\Carbon::createFromFormat('d-m-Y', $data['fecha'])->format('Y-m-d'),
                'id_proceso'                  => $data['id_proceso'] ?? null,
                'requerimiento'              => $data['requerimiento'] ?? null,
                'descripcion'                => $data['descripcion'] ?? null,
                'ccostos_id'                 => $data['ue'] ?? null,
                'moneda'                     => $data['moneda'] ?? null,
                'total_moneda_compra'        => str_replace('.', '', str_replace(',', '.', $data['total_moneda_compra'] ?? '0')),
                'paridad'                    => $data['paridad'] ?? null,
                'monto_total_impto_incluido' => preg_replace('/[^\d]/', '', $data[' monto_total_impto_incluido '] ?? '0'),
                'st'                         => $data[' st '] ?? null,
                'catalogo_id'                => $data['catalogo_id'] ?? null,
                'tipo_gasto1'                => $data['tipo_gasto1'] ?? null,
                'iniciativa_id'              => $data['iniciativa_id'] ?? null,
                'pp'                         => $data['pp'] ?? null,
                'tipo_gasto2'                => $data['tipo_gasto2'] ?? null,
                'cargado_cgu'                => $data['cargado_cgu'] ?? null,
                'comprometido_cgu'           => $data['comprometido_cgu'] ?? null,
                'total_compromiso'           => $data['total_compromiso'] ?? null,
                'num_compromiso'             => $data['num_compromiso'] ?? null,
                'observaciones'              => $data['observaciones'] ?? null,
                'validez'                    => $data['validez'] ?? null,
                'denominacion'               => $data['denominacion'] ?? null,
            ]);
        }
    }
}
