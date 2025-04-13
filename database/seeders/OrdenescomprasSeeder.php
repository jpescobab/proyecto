<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdenescomprasSeeder extends Seeder
{
    public function run(): void
    {
        // Obtener RUTs válidos desde proveedores
        $rutValidos = DB::table('proveedores')->pluck('rutproveedor')->toArray();

        $ordenes = [];
        $insertados = 0;
        $ignorados = 0;

        if (in_array('88417000-1', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-40-CM25',
                'nombre' => 'PASAJE AEREO CARLA FERNANDEZ',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SKY AIRLINE S A',
                'rutproveedor' => '88417000-1',
                'fecha_creacion' => '2025-04-07',
                'fecha_envio' => '2025-04-07',
                'monto_neto' => 1475820.0,
                'descuentos' => 0.0,
                'cargos' => 133000.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1608820.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77800032-6', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-39-AG25',
                'nombre' => 'COFFE BREAK, ICA.',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'PASTELERÍA VALENTINA DÍAZ QUILAPI E.I.R.L.',
                'rutproveedor' => '77800032-6',
                'fecha_creacion' => '2025-04-04',
                'fecha_envio' => '2025-04-04',
                'monto_neto' => 1092440.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 2075636.0,
                'impuesto_especifico' => 0.0,
                'total' => 13000036.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76045356-0', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-38-AG25',
                'nombre' => 'REVISION PASTILLAS DE FRENOS',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'IMPORTADORA TRANSWORLD SUPPLY LTDA.',
                'rutproveedor' => '76045356-0',
                'fecha_creacion' => '2025-04-04',
                'fecha_envio' => '2025-04-04',
                'monto_neto' => 400000.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 76000.0,
                'impuesto_especifico' => 0.0,
                'total' => 476000.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('78035852-1', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-37-AG25',
                'nombre' => '4 LAVADOS DE VEHICULOS',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'ARRIENDO, TRANSPORTE Y ASEO SPA',
                'rutproveedor' => '78035852-1',
                'fecha_creacion' => '2025-04-02',
                'fecha_envio' => '2025-04-02',
                'monto_neto' => 902000.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 171380.0,
                'impuesto_especifico' => 0.0,
                'total' => 1073380.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('88417000-1', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-36-CM25',
                'nombre' => 'PASAJE AEREO RODRIGO LOYOLA',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SKY AIRLINE S A',
                'rutproveedor' => '88417000-1',
                'fecha_creacion' => '2025-04-01',
                'fecha_envio' => '2025-04-01',
                'monto_neto' => 800910.0,
                'descuentos' => 0.0,
                'cargos' => 75470.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 876380.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('88417000-1', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-35-CM25',
                'nombre' => 'PASAJE AEREO GONZALO RIQUELME',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SKY AIRLINE S A',
                'rutproveedor' => '88417000-1',
                'fecha_creacion' => '2025-03-25',
                'fecha_envio' => '2025-03-25',
                'monto_neto' => 1799820.0,
                'descuentos' => 0.0,
                'cargos' => 133000.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1932820.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('89862200-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-34-CM25',
                'nombre' => 'PASAJE AEREO FLORENTINA REZUC',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'LATAM AIRLINES GROUP S.A.',
                'rutproveedor' => '89862200-2',
                'fecha_creacion' => '2025-03-21',
                'fecha_envio' => '2025-03-21',
                'monto_neto' => 3248820.0,
                'descuentos' => 0.0,
                'cargos' => 133000.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 3381820.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77634019-7', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-33-AG25',
                'nombre' => 'AUDIFONOS ALAMBRICOS',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SFC AYSEN LIMITADA',
                'rutproveedor' => '77634019-7',
                'fecha_creacion' => '2025-03-21',
                'fecha_envio' => '2025-03-21',
                'monto_neto' => 1008420.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 1915998.0,
                'impuesto_especifico' => 0.0,
                'total' => 12000198.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('88417000-1', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-32-CM25',
                'nombre' => 'PASAJE AEREO DAPHNE JARA',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SKY AIRLINE S A',
                'rutproveedor' => '88417000-1',
                'fecha_creacion' => '2025-03-20',
                'fecha_envio' => '2025-03-20',
                'monto_neto' => 2213820.0,
                'descuentos' => 0.0,
                'cargos' => 133000.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 2346820.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('88417000-1', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-31-CM25',
                'nombre' => 'PASAJE AEREO MARCO ROBLES',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SKY AIRLINE S A',
                'rutproveedor' => '88417000-1',
                'fecha_creacion' => '2025-03-20',
                'fecha_envio' => '2025-03-20',
                'monto_neto' => 1808820.0,
                'descuentos' => 0.0,
                'cargos' => 133000.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1941820.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('89862200-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-30-CM25',
                'nombre' => 'PASAJE AEREO SANDRA ALTAMIRANO',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'LATAM AIRLINES GROUP S.A.',
                'rutproveedor' => '89862200-2',
                'fecha_creacion' => '2025-03-19',
                'fecha_envio' => '2025-03-19',
                'monto_neto' => 2026550.0,
                'descuentos' => 0.0,
                'cargos' => 133000.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 2159550.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('88417000-1', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-29-CM25',
                'nombre' => 'PASAJE AEREO MILKA SOZA',
                'tipo' => 'Convenio Marco',
                'estado' => 'Autorizada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SKY AIRLINE S A',
                'rutproveedor' => '88417000-1',
                'fecha_creacion' => '2025-03-19',
                'fecha_envio' => '2025-03-19',
                'monto_neto' => 2375820.0,
                'descuentos' => 0.0,
                'cargos' => 133000.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 2508820.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76347899-8', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-28-AG25',
                'nombre' => 'AUDIFONOS ALAMBRICOS',
                'tipo' => '-',
                'estado' => 'No aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'COMERCIAL FUENTES MAGANA LIMITADA',
                'rutproveedor' => '76347899-8',
                'fecha_creacion' => '2025-03-17',
                'fecha_envio' => '2025-03-18',
                'monto_neto' => 1305000.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 247950.0,
                'impuesto_especifico' => 0.0,
                'total' => 1552950.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('89862200-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-27-CM25',
                'nombre' => 'PASAJE AEREO MARIA ISABEL ZAPATA',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'LATAM AIRLINES GROUP S.A.',
                'rutproveedor' => '89862200-2',
                'fecha_creacion' => '2025-03-13',
                'fecha_envio' => '2025-03-13',
                'monto_neto' => 2022230.0,
                'descuentos' => 0.0,
                'cargos' => 133000.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 2155230.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76626828-5', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-26-AG25',
                'nombre' => 'MATERIALES DE ASEO',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'COMERCIAL GONZALO ANDRES NAVARRETE ARAVENA EMPRESA INDIVIDUAL DE RESPO',
                'rutproveedor' => '76626828-5',
                'fecha_creacion' => '2025-03-13',
                'fecha_envio' => '2025-03-13',
                'monto_neto' => 15113190.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 28715061.0,
                'impuesto_especifico' => 0.0,
                'total' => 179846961.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('88417000-1', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-25-CM25',
                'nombre' => 'PASAJE AEREO YENIFER FIGUEROA',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SKY AIRLINE S A',
                'rutproveedor' => '88417000-1',
                'fecha_creacion' => '2025-03-13',
                'fecha_envio' => '2025-03-13',
                'monto_neto' => 1664820.0,
                'descuentos' => 0.0,
                'cargos' => 133000.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1797820.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('89862200-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-24-CM25',
                'nombre' => 'PASAJE AEREO ALVARO GUTIERREZ',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'LATAM AIRLINES GROUP S.A.',
                'rutproveedor' => '89862200-2',
                'fecha_creacion' => '2025-03-12',
                'fecha_envio' => '2025-03-12',
                'monto_neto' => 1638910.0,
                'descuentos' => 0.0,
                'cargos' => 133000.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1771910.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('88417000-1', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-23-CM25',
                'nombre' => 'PASAJE AEREO CRISTIAN GOMEZ',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SKY AIRLINE S A',
                'rutproveedor' => '88417000-1',
                'fecha_creacion' => '2025-03-12',
                'fecha_envio' => '2025-03-12',
                'monto_neto' => 1403820.0,
                'descuentos' => 0.0,
                'cargos' => 133000.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1536820.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76036795-8', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-22-AG25',
                'nombre' => 'MATERIALES DE OFICINA',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SOTOCOPIAS COMPUTACION LIMITADA',
                'rutproveedor' => '76036795-8',
                'fecha_creacion' => '2025-03-11',
                'fecha_envio' => '2025-03-12',
                'monto_neto' => 19584790.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 37211101.0,
                'impuesto_especifico' => 0.0,
                'total' => 233059001.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('89862200-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-21-CM25',
                'nombre' => 'PASAJE AEREO MIRIAM MUÑOZ',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'LATAM AIRLINES GROUP S.A.',
                'rutproveedor' => '89862200-2',
                'fecha_creacion' => '2025-03-11',
                'fecha_envio' => '2025-03-11',
                'monto_neto' => 2631320.0,
                'descuentos' => 0.0,
                'cargos' => 133000.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 2764320.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('88417000-1', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-20-CM25',
                'nombre' => 'PASAJE AEREO XIMENA RAMIS',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SKY AIRLINE S A',
                'rutproveedor' => '88417000-1',
                'fecha_creacion' => '2025-03-11',
                'fecha_envio' => '2025-03-11',
                'monto_neto' => 1664820.0,
                'descuentos' => 0.0,
                'cargos' => 133000.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1797820.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('88417000-1', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-19-CM25',
                'nombre' => 'PASAJE AEREO SR. ANTONIO VILLARROEL',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SKY AIRLINE S A',
                'rutproveedor' => '88417000-1',
                'fecha_creacion' => '2025-03-10',
                'fecha_envio' => '2025-03-10',
                'monto_neto' => 2096820.0,
                'descuentos' => 0.0,
                'cargos' => 133000.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 2229820.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('78035852-1', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-18-AG25',
                'nombre' => 'Compra ágil: 2182-12-COT25 arriendo de Vehiculó Fiscalía Judicial',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'ARRIENDO, TRANSPORTE Y ASEO SPA',
                'rutproveedor' => '78035852-1',
                'fecha_creacion' => '2025-03-10',
                'fecha_envio' => '2025-03-10',
                'monto_neto' => 4000000.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 760000.0,
                'impuesto_especifico' => 0.0,
                'total' => 4760000.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('88417000-1', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-17-CM25',
                'nombre' => 'PASAJE AEREO SR. GUILLERMO QUILALEO',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SKY AIRLINE S A',
                'rutproveedor' => '88417000-1',
                'fecha_creacion' => '2025-03-10',
                'fecha_envio' => '2025-03-10',
                'monto_neto' => 1466820.0,
                'descuentos' => 0.0,
                'cargos' => 133000.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1599820.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('88417000-1', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-16-CM25',
                'nombre' => 'Orden de Compra: 2182-16-CM25 PASAJE SR. RODRIGO LOYOLA',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SKY AIRLINE S A',
                'rutproveedor' => '88417000-1',
                'fecha_creacion' => '2025-03-06',
                'fecha_envio' => '2025-03-06',
                'monto_neto' => 1043910.0,
                'descuentos' => 0.0,
                'cargos' => 57530.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1101440.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76295154-1', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-15-AG25',
                'nombre' => 'Compra ágil: COMBUSTIBLE GENERADOR ICA 2182-11-COT25',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'Servicentro aysen Patagonia Ltda',
                'rutproveedor' => '76295154-1',
                'fecha_creacion' => '2025-03-04',
                'fecha_envio' => '2025-03-04',
                'monto_neto' => 1210800.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 230052.0,
                'impuesto_especifico' => 0.0,
                'total' => 1440852.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('89862200-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-14-CM25',
                'nombre' => 'Orden de Compra: 2182-14-CM25 PASAJE SR. GERARDO ROJAS',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'LATAM AIRLINES GROUP S.A.',
                'rutproveedor' => '89862200-2',
                'fecha_creacion' => '2025-03-03',
                'fecha_envio' => '2025-03-03',
                'monto_neto' => 3001910.0,
                'descuentos' => 0.0,
                'cargos' => 57530.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 3059440.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77271309-6', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-13-AG25',
                'nombre' => 'MUDANZA COYHAIQUE - VIÑA DEL MAR',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'COMERCIALIZADORA TRANS SERVICE SPA',
                'rutproveedor' => '77271309-6',
                'fecha_creacion' => '2025-02-25',
                'fecha_envio' => '2025-02-25',
                'monto_neto' => 23000000.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 4370000.0,
                'impuesto_especifico' => 0.0,
                'total' => 27370000.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('99520000-7', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-12-CM25',
                'nombre' => 'CARGA COMBUSTIBLE CUPON ELECTRONICO',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'COPEC S.A.',
                'rutproveedor' => '99520000-7',
                'fecha_creacion' => '2025-02-24',
                'fecha_envio' => '2025-02-24',
                'monto_neto' => 21138000.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 21138000.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('11717210-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-11-SE25',
                'nombre' => 'REPARACION DE PAVIMENTO DE LA ICA',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SAVIA DEL TRÁNSITO HUENTEO HERRERA',
                'rutproveedor' => '11717210-4',
                'fecha_creacion' => '2025-02-24',
                'fecha_envio' => '2025-02-24',
                'monto_neto' => 7605.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 144495.0,
                'impuesto_especifico' => 0.0,
                'total' => 904995.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77852553-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-10-AG25',
                'nombre' => 'BANDERAS INSTITUCIONALES',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'IMPOGOB SPA',
                'rutproveedor' => '77852553-4',
                'fecha_creacion' => '2025-02-21',
                'fecha_envio' => '2025-02-21',
                'monto_neto' => 2520000.0,
                'descuentos' => 0.0,
                'cargos' => 149040.0,
                'iva' => 5071176.0,
                'impuesto_especifico' => 0.0,
                'total' => 31761576.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76618239-9', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-9-SE25',
                'nombre' => 'AGUA PURIFICADA ENERO 2025',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Enviada a proveedor',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'COMERCIALIZADORA LOS CIPRESES JOSE NAVARRO GONZALE',
                'rutproveedor' => '76618239-9',
                'fecha_creacion' => '2025-02-21',
                'fecha_envio' => '2025-02-21',
                'monto_neto' => 22344.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 22344.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77511893-8', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-8-AG25',
                'nombre' => 'TRASLADO DE MATERIALES',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'TRANSPORTES ALASH SPA',
                'rutproveedor' => '77511893-8',
                'fecha_creacion' => '2025-02-20',
                'fecha_envio' => '2025-02-20',
                'monto_neto' => 1200000.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 228000.0,
                'impuesto_especifico' => 0.0,
                'total' => 1428000.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77225200-5', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-7-AG25',
                'nombre' => 'OC ARRIENDO DE VEHICULO 1er JUZGADO DE LETRAS: 2182-7-COT25',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'ARRENDADORA DE VEHICULOS SOCIEDAD ANONIMA',
                'rutproveedor' => '77225200-5',
                'fecha_creacion' => '2025-02-10',
                'fecha_envio' => '2025-02-10',
                'monto_neto' => 1677680.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 3187592.0,
                'impuesto_especifico' => 0.0,
                'total' => 19964392.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('99520000-7', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-6-AG25',
                'nombre' => 'OC COMBUSTIBLE CAMIONETA CAPJ: 2182-6-COT25',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'COPEC S.A.',
                'rutproveedor' => '99520000-7',
                'fecha_creacion' => '2025-02-10',
                'fecha_envio' => '2025-02-10',
                'monto_neto' => 8403360.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 15966384.0,
                'impuesto_especifico' => 0.0,
                'total' => 99999984.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('78070172-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-5-AG25',
                'nombre' => 'TRASLADO DE MUEBLES',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'GRUPO MAQ CHILE SPA',
                'rutproveedor' => '78070172-2',
                'fecha_creacion' => '2025-01-30',
                'fecha_envio' => '2025-01-31',
                'monto_neto' => 2090000.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 397100.0,
                'impuesto_especifico' => 0.0,
                'total' => 2487100.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77271309-6', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-4-AG25',
                'nombre' => 'Orden de Compra generada por invitación a compra ágil: 2182-2-COT25',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'COMERCIALIZADORA TRANS SERVICE SPA',
                'rutproveedor' => '77271309-6',
                'fecha_creacion' => '2025-01-21',
                'fecha_envio' => '2025-01-29',
                'monto_neto' => 42000000.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 7980000.0,
                'impuesto_especifico' => 0.0,
                'total' => 49980000.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77239958-8', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-3-AG25',
                'nombre' => 'TRASLADO DE MUEBLES',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'NEXMAQ SPA',
                'rutproveedor' => '77239958-8',
                'fecha_creacion' => '2025-01-21',
                'fecha_envio' => '2025-01-21',
                'monto_neto' => 4100000.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 779000.0,
                'impuesto_especifico' => 0.0,
                'total' => 4879000.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76618239-9', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-2-SE25',
                'nombre' => 'AGUA PURIFICADA DICIEMBRE 2024',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'COMERCIALIZADORA LOS CIPRESES JOSE NAVARRO GONZALE',
                'rutproveedor' => '76618239-9',
                'fecha_creacion' => '2025-01-14',
                'fecha_envio' => '2025-01-15',
                'monto_neto' => 61152.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 1161888.0,
                'impuesto_especifico' => 0.0,
                'total' => 7277088.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77225200-5', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-1-AG25',
                'nombre' => 'ARRIENDO DE CAMIONETA 4X4',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'ARRENDADORA DE VEHICULOS SOCIEDAD ANONIMA',
                'rutproveedor' => '77225200-5',
                'fecha_creacion' => '2025-01-09',
                'fecha_envio' => '2025-01-09',
                'monto_neto' => 1722680.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 3273092.0,
                'impuesto_especifico' => 0.0,
                'total' => 20499892.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('9728223-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-236-SE24',
                'nombre' => 'INSTALACION DE AIRE ACONDICIONADO EN CISNES',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'LUIS PATRICIO VALDÉS GUTIÉRREZ',
                'rutproveedor' => '9728223-4',
                'fecha_creacion' => '2024-12-27',
                'fecha_envio' => '2024-12-30',
                'monto_neto' => 25648.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 487312.0,
                'impuesto_especifico' => 0.0,
                'total' => 3052112.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('9728223-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-235-SE24',
                'nombre' => 'REPARACIONES ELECTRICAS JURISDICCION',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'LUIS PATRICIO VALDÉS GUTIÉRREZ',
                'rutproveedor' => '9728223-4',
                'fecha_creacion' => '2024-12-27',
                'fecha_envio' => '2024-12-27',
                'monto_neto' => 700108.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 13302052.0,
                'impuesto_especifico' => 0.0,
                'total' => 83312852.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('9728223-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-234-SE24',
                'nombre' => 'SUMINISTRO E INSTALACION DE VENTILADORES ELECTRICO',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'LUIS PATRICIO VALDÉS GUTIÉRREZ',
                'rutproveedor' => '9728223-4',
                'fecha_creacion' => '2024-12-24',
                'fecha_envio' => '2024-12-26',
                'monto_neto' => 11127.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 211413.0,
                'impuesto_especifico' => 0.0,
                'total' => 1324113.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77160299-1', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-233-AG24',
                'nombre' => 'KIT FUSOR HP',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'MAIN TECNOLOGÍAS SPA',
                'rutproveedor' => '77160299-1',
                'fecha_creacion' => '2024-12-20',
                'fecha_envio' => '2024-12-23',
                'monto_neto' => 2100000.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 399000.0,
                'impuesto_especifico' => 0.0,
                'total' => 2499000.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76295154-1', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-232-AG24',
                'nombre' => 'SUMINISTRO DE COMBLUSTIBLE PARA CALEFACCION',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'Servicentro aysen Patagonia Ltda',
                'rutproveedor' => '76295154-1',
                'fecha_creacion' => '2024-12-19',
                'fecha_envio' => '2024-12-20',
                'monto_neto' => 52941180.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 100588242.0,
                'impuesto_especifico' => 0.0,
                'total' => 630000042.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('9728223-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-231-SE24',
                'nombre' => 'REPARACION MOTOBOMBA ICA',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'LUIS PATRICIO VALDÉS GUTIÉRREZ',
                'rutproveedor' => '9728223-4',
                'fecha_creacion' => '2024-12-16',
                'fecha_envio' => '2024-12-16',
                'monto_neto' => 2967.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 56373.0,
                'impuesto_especifico' => 0.0,
                'total' => 353073.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('99520000-7', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-230-CM24',
                'nombre' => 'Orden de Compra: 2182-230-CM24',
                'tipo' => 'Convenio Marco',
                'estado' => 'Eliminada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'COPEC S.A.',
                'rutproveedor' => '99520000-7',
                'fecha_creacion' => '2024-12-16',
                'fecha_envio' => '2024-12-16',
                'monto_neto' => 24000000.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 24000000.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('99520000-7', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-229-AG24',
                'nombre' => 'DIESEL PARA CUPON ELECTRONICO',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'COPEC S.A.',
                'rutproveedor' => '99520000-7',
                'fecha_creacion' => '2024-12-10',
                'fecha_envio' => '2024-12-10',
                'monto_neto' => 4201680.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 7983192.0,
                'impuesto_especifico' => 0.0,
                'total' => 49999992.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('12975530-k', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-228-SE24',
                'nombre' => 'REPARACIONES PREVENTIVAS DE CALDERAS JGDOS.',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'MARCIAL ROBERTO MORENO GATICA',
                'rutproveedor' => '12975530-k',
                'fecha_creacion' => '2024-12-10',
                'fecha_envio' => '2024-12-17',
                'monto_neto' => 2443.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 46417.0,
                'impuesto_especifico' => 0.0,
                'total' => 290717.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76618239-9', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-227-SE24',
                'nombre' => 'AGUA PURIFICADA NOVIEMBRE 2024',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'COMERCIALIZADORA LOS CIPRESES JOSE NAVARRO GONZALE',
                'rutproveedor' => '76618239-9',
                'fecha_creacion' => '2024-12-09',
                'fecha_envio' => '2024-12-09',
                'monto_neto' => 45864.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 871416.0,
                'impuesto_especifico' => 0.0,
                'total' => 5457816.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('7191242-6', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-226-AG24',
                'nombre' => 'KIT MANTENIMIENTO KYOCERA',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'ALVARO JOSE DEL CAMPO SAEZ',
                'rutproveedor' => '7191242-6',
                'fecha_creacion' => '2024-12-09',
                'fecha_envio' => '2024-12-09',
                'monto_neto' => 2237000.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 425030.0,
                'impuesto_especifico' => 0.0,
                'total' => 2662030.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77225200-5', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-225-AG24',
                'nombre' => 'ARRIENDO DE CAMIONETA 4X4',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'ARRENDADORA DE VEHICULOS SOCIEDAD ANONIMA',
                'rutproveedor' => '77225200-5',
                'fecha_creacion' => '2024-12-04',
                'fecha_envio' => '2024-12-04',
                'monto_neto' => 2684870.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 5101253.0,
                'impuesto_especifico' => 0.0,
                'total' => 31949953.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('13969655-7', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-224-SE24',
                'nombre' => 'CORTE DE PASTO RECINTO OGANA DEL PODER JUDICIAL',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'ALEX DAVID MILLALONCO RIVAS',
                'rutproveedor' => '13969655-7',
                'fecha_creacion' => '2024-12-03',
                'fecha_envio' => '2024-12-09',
                'monto_neto' => 192034.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 3648646.0,
                'impuesto_especifico' => 0.0,
                'total' => 22852046.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('11717210-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-223-SE24',
                'nombre' => 'CAMBIO CERRADURA PUERTA DE OFICINA',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SAVIA DEL TRÁNSITO HUENTEO HERRERA',
                'rutproveedor' => '11717210-4',
                'fecha_creacion' => '2024-12-02',
                'fecha_envio' => '2024-12-09',
                'monto_neto' => 25.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 25.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77803824-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-222-AG24',
                'nombre' => 'Orden de Compra generada por invitación a compra ágil: 2182-103-COT24',
                'tipo' => '-',
                'estado' => 'Enviada a proveedor',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SERVICIO DE LAVADO DE VEHÍCULOS AUTOMOTORES PABLO IGNACIO AGUILAR OJEDA E.I.R.L.',
                'rutproveedor' => '77803824-2',
                'fecha_creacion' => '2024-12-02',
                'fecha_envio' => '2024-12-03',
                'monto_neto' => 8403361.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 159663859.0,
                'impuesto_especifico' => 0.0,
                'total' => 999999959.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76499318-7', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-221-SE24',
                'nombre' => 'REPARACION CALEFACTORES 1er JUZGADO',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'Constructora EHG Limitada',
                'rutproveedor' => '76499318-7',
                'fecha_creacion' => '2024-11-29',
                'fecha_envio' => '2024-11-29',
                'monto_neto' => 36135.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 686565.0,
                'impuesto_especifico' => 0.0,
                'total' => 4300065.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('9728223-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-220-SE24',
                'nombre' => 'REPARACION DE MOTOBOMBA ICA',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'LUIS PATRICIO VALDÉS GUTIÉRREZ',
                'rutproveedor' => '9728223-4',
                'fecha_creacion' => '2024-11-28',
                'fecha_envio' => '2024-11-29',
                'monto_neto' => 3019.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 57361.0,
                'impuesto_especifico' => 0.0,
                'total' => 359261.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('89862200-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-219-CM24',
                'nombre' => 'PASAJE AEREO JUAN PATRICIO SILVA',
                'tipo' => 'Convenio Marco',
                'estado' => 'Cancelada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'LATAM AIRLINES GROUP S.A.',
                'rutproveedor' => '89862200-2',
                'fecha_creacion' => '2024-11-28',
                'fecha_envio' => '2024-11-28',
                'monto_neto' => 1529410.0,
                'descuentos' => 0.0,
                'cargos' => 74720.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1604130.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('88417000-1', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-218-CM24',
                'nombre' => 'PASAJE AEREO JUAN SILVA',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SKY AIRLINE S A',
                'rutproveedor' => '88417000-1',
                'fecha_creacion' => '2024-11-28',
                'fecha_envio' => '2024-11-28',
                'monto_neto' => 296910.0,
                'descuentos' => 0.0,
                'cargos' => 74720.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 371630.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77298976-8', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-217-AG24',
                'nombre' => 'Orden de Compra generada por invitación a compra ágil: 2182-97-COT24',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SOCIEDAD HERRERA MARTINEZ SPA',
                'rutproveedor' => '77298976-8',
                'fecha_creacion' => '2024-11-27',
                'fecha_envio' => '2024-11-29',
                'monto_neto' => 15752000.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 2992880.0,
                'impuesto_especifico' => 0.0,
                'total' => 18744880.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76045356-0', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-216-AG24',
                'nombre' => 'MANTENCION CAMIONETA CAPJ. 130.000 KMS',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'IMPORTADORA TRANSWORLD SUPPLY LTDA.',
                'rutproveedor' => '76045356-0',
                'fecha_creacion' => '2024-11-27',
                'fecha_envio' => '2024-11-27',
                'monto_neto' => 2407000.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 457330.0,
                'impuesto_especifico' => 0.0,
                'total' => 2864330.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76618239-9', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-215-SE24',
                'nombre' => 'AGUA PURIFICADA OCTUBRE 2024',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'COMERCIALIZADORA LOS CIPRESES JOSE NAVARRO GONZALE',
                'rutproveedor' => '76618239-9',
                'fecha_creacion' => '2024-11-26',
                'fecha_envio' => '2024-11-26',
                'monto_neto' => 48216.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 916104.0,
                'impuesto_especifico' => 0.0,
                'total' => 5737704.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77634019-7', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-214-AG24',
                'nombre' => 'Orden de Compra generada por invitación a compra ágil: 2182-95-COT24',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SFC AYSEN LIMITADA',
                'rutproveedor' => '77634019-7',
                'fecha_creacion' => '2024-11-25',
                'fecha_envio' => '2024-11-26',
                'monto_neto' => 706970.0,
                'descuentos' => 0.0,
                'cargos' => 117560.0,
                'iva' => 1566607.0,
                'impuesto_especifico' => 0.0,
                'total' => 9811907.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77943232-7', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-213-AG24',
                'nombre' => 'Orden de Compra generada por invitación a compra ágil: 2182-92-COT24',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'MIX VENTA SPA',
                'rutproveedor' => '77943232-7',
                'fecha_creacion' => '2024-11-21',
                'fecha_envio' => '2024-11-26',
                'monto_neto' => 9619900.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 1827781.0,
                'impuesto_especifico' => 0.0,
                'total' => 11447681.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('11717210-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-212-SE24',
                'nombre' => 'PINTURA EXTERIOR TRIBUNAL ORAL Y GARANTIA COYHAIQU',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SAVIA DEL TRÁNSITO HUENTEO HERRERA',
                'rutproveedor' => '11717210-4',
                'fecha_creacion' => '2024-11-20',
                'fecha_envio' => '2024-11-26',
                'monto_neto' => 194958.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 3704202.0,
                'impuesto_especifico' => 0.0,
                'total' => 23200002.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76671543-5', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-211-AG24',
                'nombre' => 'Orden de Compra generada por invitación a compra ágil: 2182-94-COT24',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'Calidad, Certificación y Asesoría SPA',
                'rutproveedor' => '76671543-5',
                'fecha_creacion' => '2024-11-18',
                'fecha_envio' => '2024-11-19',
                'monto_neto' => 4400000.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 836000.0,
                'impuesto_especifico' => 0.0,
                'total' => 5236000.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('11717210-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-210-SE24',
                'nombre' => 'MANTENCION DE PINTURA PRIMER JUZGADO DE LETRAS',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SAVIA DEL TRÁNSITO HUENTEO HERRERA',
                'rutproveedor' => '11717210-4',
                'fecha_creacion' => '2024-11-18',
                'fecha_envio' => '2024-11-18',
                'monto_neto' => 1144958.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 21754202.0,
                'impuesto_especifico' => 0.0,
                'total' => 136250002.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77225200-5', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-209-AG24',
                'nombre' => 'Orden de Compra generada por invitación a compra ágil: 2182-93-COT24',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'ARRENDADORA DE VEHICULOS SOCIEDAD ANONIMA',
                'rutproveedor' => '77225200-5',
                'fecha_creacion' => '2024-11-13',
                'fecha_envio' => '2024-11-13',
                'monto_neto' => 3852600.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 731994.0,
                'impuesto_especifico' => 0.0,
                'total' => 4584594.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('9728223-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-208-SE24',
                'nombre' => 'ORDEN DE COMPRA DESDE 2182-18-LE24',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'LUIS PATRICIO VALDÉS GUTIÉRREZ',
                'rutproveedor' => '9728223-4',
                'fecha_creacion' => '2024-11-12',
                'fecha_envio' => '2024-11-12',
                'monto_neto' => 363583360.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 690808384.0,
                'impuesto_especifico' => 0.0,
                'total' => 4326641984.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76347072-5', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-207-AG24',
                'nombre' => 'Orden de Compra generada por invitación a compra ágil: 2182-90-COT24',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'VENTAS DE CORTINAJES ALICE YANELA ALVARADO HUENUQUEO EMPRESA INDIVID',
                'rutproveedor' => '76347072-5',
                'fecha_creacion' => '2024-11-11',
                'fecha_envio' => '2024-11-18',
                'monto_neto' => 2971200.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 564528.0,
                'impuesto_especifico' => 0.0,
                'total' => 3535728.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77465261-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-206-AG24',
                'nombre' => 'Orden de Compra generada por invitación a compra ágil: 2182-85-COT24',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'MAGNOTEC IMPORTACIONES SPA',
                'rutproveedor' => '77465261-2',
                'fecha_creacion' => '2024-11-08',
                'fecha_envio' => '2024-11-12',
                'monto_neto' => 4754610.0,
                'descuentos' => 0.0,
                'cargos' => 158990.0,
                'iva' => 933584.0,
                'impuesto_especifico' => 0.0,
                'total' => 5847184.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77725041-8', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-205-AG24',
                'nombre' => 'INSUMOS DE COMPUTACION',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'R&E SUMINISTROS SPA',
                'rutproveedor' => '77725041-8',
                'fecha_creacion' => '2024-11-07',
                'fecha_envio' => '2024-11-07',
                'monto_neto' => 6940000.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 1318600.0,
                'impuesto_especifico' => 0.0,
                'total' => 8258600.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76036795-8', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-204-AG24',
                'nombre' => 'MATERIALES DE OFICINA',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SOTOCOPIAS COMPUTACION LIMITADA',
                'rutproveedor' => '76036795-8',
                'fecha_creacion' => '2024-11-06',
                'fecha_envio' => '2024-11-06',
                'monto_neto' => 12135340.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 23057146.0,
                'impuesto_especifico' => 0.0,
                'total' => 144410546.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76879641-6', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-203-AG24',
                'nombre' => 'Orden de Compra generada por invitación a compra ágil: 2182-82-COT24',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AEME SPA',
                'rutproveedor' => '76879641-6',
                'fecha_creacion' => '2024-11-06',
                'fecha_envio' => '2024-11-18',
                'monto_neto' => 12090000.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 2297100.0,
                'impuesto_especifico' => 0.0,
                'total' => 14387100.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('12975530-k', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-202-AG24',
                'nombre' => 'EQUIPO AIRE ACONDICIONADO',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'MARCIAL ROBERTO MORENO GATICA',
                'rutproveedor' => '12975530-k',
                'fecha_creacion' => '2024-11-06',
                'fecha_envio' => '2024-11-06',
                'monto_neto' => 5882020.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 11175838.0,
                'impuesto_especifico' => 0.0,
                'total' => 69996038.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-201-CM24',
                'nombre' => 'PASAJE AEREO RUDY HALD',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-10-28',
                'fecha_envio' => '2024-10-28',
                'monto_neto' => 1577440.0,
                'descuentos' => 0.0,
                'cargos' => 49670.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1627110.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77225200-5', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-200-AG24',
                'nombre' => 'ARRIENDO VEHICULO 4X4, JUZGADO DE LETRAS DE COCHRANE',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'ARRENDADORA DE VEHICULOS SOCIEDAD ANONIMA',
                'rutproveedor' => '77225200-5',
                'fecha_creacion' => '2024-10-28',
                'fecha_envio' => '2024-10-28',
                'monto_neto' => 9798400.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 1861696.0,
                'impuesto_especifico' => 0.0,
                'total' => 11660096.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77225200-5', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-199-AG24',
                'nombre' => 'ARRIENDO VEHICULO 4X4, 1° JUZGADO DE LETRAS DE COYHAIQUE',
                'tipo' => '-',
                'estado' => 'Cancelada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'ARRENDADORA DE VEHICULOS SOCIEDAD ANONIMA',
                'rutproveedor' => '77225200-5',
                'fecha_creacion' => '2024-10-28',
                'fecha_envio' => '2024-10-28',
                'monto_neto' => 1488120.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 2827428.0,
                'impuesto_especifico' => 0.0,
                'total' => 17708628.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77734231-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-198-AG24',
                'nombre' => 'Orden de Compra generada por invitación a compra ágil: 2182-78-COT24',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'INVERSIONES MOLINAS LIMITADA',
                'rutproveedor' => '77734231-2',
                'fecha_creacion' => '2024-10-25',
                'fecha_envio' => '2024-10-28',
                'monto_neto' => 759600.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 144324.0,
                'impuesto_especifico' => 0.0,
                'total' => 903924.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77813822-0', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-197-AG24',
                'nombre' => 'COFFE BREAK, JUZGADO PUERTO CISNES',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'TETERÍA Y CAFETERÍA FUSIONARTÉ SPA',
                'rutproveedor' => '77813822-0',
                'fecha_creacion' => '2024-10-25',
                'fecha_envio' => '2024-10-25',
                'monto_neto' => 1500000.0,
                'descuentos' => 0.0,
                'cargos' => 350000.0,
                'iva' => 351500.0,
                'impuesto_especifico' => 0.0,
                'total' => 2201500.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-196-CM24',
                'nombre' => 'PASAJE AEREO ANDREA GOMEZ',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-10-25',
                'fecha_envio' => '2024-10-25',
                'monto_neto' => 1935680.0,
                'descuentos' => 0.0,
                'cargos' => 49670.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1985350.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-195-CM24',
                'nombre' => 'PASAJE AEREO NATALIA RENCORET',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-10-24',
                'fecha_envio' => '2024-10-24',
                'monto_neto' => 2768740.0,
                'descuentos' => 0.0,
                'cargos' => 49670.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 2818410.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76998795-9', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-194-AG24',
                'nombre' => 'Orden de Compra generada por invitación a compra ágil: 2182-79-COT24',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'RESTAURANTE VERONICA VOHS GARRIDO E.I.R.L.',
                'rutproveedor' => '76998795-9',
                'fecha_creacion' => '2024-10-23',
                'fecha_envio' => '2024-10-23',
                'monto_neto' => 10588240.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 20117656.0,
                'impuesto_especifico' => 0.0,
                'total' => 126000056.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-193-CM24',
                'nombre' => 'PASAJE AEREO LUISA CORNEJO',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-10-22',
                'fecha_envio' => '2024-10-22',
                'monto_neto' => 1769520.0,
                'descuentos' => 0.0,
                'cargos' => 49670.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1819190.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77323146-K', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-192-AG24',
                'nombre' => 'SERVICIO COFFEE BREAK',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'REPOSTERÍA ISABEL PONCE BALBOA E.I.R.L.',
                'rutproveedor' => '77323146-K',
                'fecha_creacion' => '2024-10-21',
                'fecha_envio' => '2024-10-22',
                'monto_neto' => 4700000.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 893000.0,
                'impuesto_especifico' => 0.0,
                'total' => 5593000.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76148628-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-191-CM24',
                'nombre' => 'Suministro de equipo de Aire Acondicionado.',
                'tipo' => 'Convenio Marco',
                'estado' => 'No aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SOCIEDAD COMERCIAL SERI SPA',
                'rutproveedor' => '76148628-4',
                'fecha_creacion' => '2024-10-21',
                'fecha_envio' => '2024-10-22',
                'monto_neto' => 5952490.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 11309731.0,
                'impuesto_especifico' => 0.0,
                'total' => 70834631.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-190-CM24',
                'nombre' => 'PASAJE AEREO ALADINO RIVERA',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-10-18',
                'fecha_envio' => '2024-10-18',
                'monto_neto' => 3185880.0,
                'descuentos' => 0.0,
                'cargos' => 49670.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 3235550.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76618239-9', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-189-SE24',
                'nombre' => 'ORDEN DE COMPRA DESDE 2182-17-LE24',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'COMERCIALIZADORA LOS CIPRESES JOSE NAVARRO GONZALE',
                'rutproveedor' => '76618239-9',
                'fecha_creacion' => '2024-10-17',
                'fecha_envio' => '2025-01-10',
                'monto_neto' => 5378.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 102182.0,
                'impuesto_especifico' => 0.0,
                'total' => 639982.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-188-CM24',
                'nombre' => 'PASAJE AEREO ORLANDO MUÑOZ',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-10-16',
                'fecha_envio' => '2024-10-16',
                'monto_neto' => 2432760.0,
                'descuentos' => 0.0,
                'cargos' => 49670.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 2482430.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76618239-9', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-187-SE24',
                'nombre' => 'RECARGA DE AGUA PURIFICADA SEP 2024',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'COMERCIALIZADORA LOS CIPRESES JOSE NAVARRO GONZALE',
                'rutproveedor' => '76618239-9',
                'fecha_creacion' => '2024-10-16',
                'fecha_envio' => '2024-10-17',
                'monto_neto' => 76505.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 1453595.0,
                'impuesto_especifico' => 0.0,
                'total' => 9104095.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-186-CM24',
                'nombre' => 'PASAJE AEREO JAVIERA ALARCON',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-10-16',
                'fecha_envio' => '2024-10-16',
                'monto_neto' => 4943480.0,
                'descuentos' => 0.0,
                'cargos' => 49670.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 4993150.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-185-CM24',
                'nombre' => 'PASAJE AEREO DALIA ILLEZCA',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-10-15',
                'fecha_envio' => '2024-10-15',
                'monto_neto' => 4942960.0,
                'descuentos' => 0.0,
                'cargos' => 49670.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 4992630.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('11717210-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-184-SE24',
                'nombre' => 'REPARACION DE LETREROS DE JUZGADO DE COCHRANE',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SAVIA DEL TRÁNSITO HUENTEO HERRERA',
                'rutproveedor' => '11717210-4',
                'fecha_creacion' => '2024-10-15',
                'fecha_envio' => '2024-10-17',
                'monto_neto' => 1745.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 33155.0,
                'impuesto_especifico' => 0.0,
                'total' => 207655.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-183-CM24',
                'nombre' => 'PASAJE AEREO MARCIAL MANSILLA',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-10-14',
                'fecha_envio' => '2024-10-14',
                'monto_neto' => 3373800.0,
                'descuentos' => 0.0,
                'cargos' => 49670.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 3423470.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-182-CM24',
                'nombre' => 'PASAJE AEREO OSCAR BARRIA',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-10-11',
                'fecha_envio' => '2024-10-11',
                'monto_neto' => 1751680.0,
                'descuentos' => 0.0,
                'cargos' => 49670.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1801350.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-181-CM24',
                'nombre' => 'PASAJE AEREO ANA MARIA BARRIA',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-10-11',
                'fecha_envio' => '2024-10-11',
                'monto_neto' => 3064320.0,
                'descuentos' => 0.0,
                'cargos' => 49670.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 3113990.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-180-CM24',
                'nombre' => 'PASAJE AEREO CATALINA JAÑA',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-10-11',
                'fecha_envio' => '2024-10-11',
                'monto_neto' => 2198660.0,
                'descuentos' => 0.0,
                'cargos' => 49670.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 2248330.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-179-CM24',
                'nombre' => 'PASAJE AEREO ENNIO JARA',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-10-11',
                'fecha_envio' => '2024-10-11',
                'monto_neto' => 2322080.0,
                'descuentos' => 0.0,
                'cargos' => 49670.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 2371750.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-178-CM24',
                'nombre' => 'PASAJE AEREO LUIS CASTILLO',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-10-10',
                'fecha_envio' => '2024-10-10',
                'monto_neto' => 2105480.0,
                'descuentos' => 0.0,
                'cargos' => 49670.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 2155150.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-177-CM24',
                'nombre' => 'PASAJE AEREO GUILLERMO QUILALEO',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-10-10',
                'fecha_envio' => '2024-10-10',
                'monto_neto' => 3168580.0,
                'descuentos' => 0.0,
                'cargos' => 49670.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 3218250.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-176-CM24',
                'nombre' => 'PASAJE AEREO MARIO DEVAUD',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-10-09',
                'fecha_envio' => '2024-10-09',
                'monto_neto' => 3203250.0,
                'descuentos' => 0.0,
                'cargos' => 49670.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 3252920.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('78350640-8', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-175-AG24',
                'nombre' => 'Orden de Compra generada por invitación a compra ágil: 2182-75-COT24',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'GUIC ZOLEZZI Y CIA. LIMITADA',
                'rutproveedor' => '78350640-8',
                'fecha_creacion' => '2024-10-09',
                'fecha_envio' => '2024-10-10',
                'monto_neto' => 1295900.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 246221.0,
                'impuesto_especifico' => 0.0,
                'total' => 1542121.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-174-CM24',
                'nombre' => 'PASAJE AEREO RODRIGO GREZ',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-10-07',
                'fecha_envio' => '2024-10-07',
                'monto_neto' => 1968450.0,
                'descuentos' => 0.0,
                'cargos' => 49670.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 2018120.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77018060-0', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-173-CM24',
                'nombre' => 'Orden de Compra: 2182-173-CM24',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'COMERCIAL E INDUSTRIAL MUEBLES ASENJO LIMITADA',
                'rutproveedor' => '77018060-0',
                'fecha_creacion' => '2024-10-07',
                'fecha_envio' => '2024-10-07',
                'monto_neto' => 111500850.0,
                'descuentos' => 22300170.0,
                'cargos' => 0.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 89200680.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76499318-7', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-172-SE24',
                'nombre' => 'CAMBIO CABLEADO DE EQUIPOS TERMOACUMULADORES',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'Constructora EHG Limitada',
                'rutproveedor' => '76499318-7',
                'fecha_creacion' => '2024-10-03',
                'fecha_envio' => '2024-10-03',
                'monto_neto' => 3069606.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 58322514.0,
                'impuesto_especifico' => 0.0,
                'total' => 365283114.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-171-CM24',
                'nombre' => 'PASAJE AEREO JAVIERA ALARCON',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-09-26',
                'fecha_envio' => '2024-09-26',
                'monto_neto' => 2298990.0,
                'descuentos' => 0.0,
                'cargos' => 49670.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 2348660.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('9728223-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-170-SE24',
                'nombre' => 'ORDEN DE COMPRA DESDE 2182-14-LP24',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'LUIS PATRICIO VALDÉS GUTIÉRREZ',
                'rutproveedor' => '9728223-4',
                'fecha_creacion' => '2024-09-25',
                'fecha_envio' => '2024-10-15',
                'monto_neto' => 660714750.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 1255358025.0,
                'impuesto_especifico' => 0.0,
                'total' => 7862505525.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('99520000-7', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-169-AG24',
                'nombre' => 'RECARGA DIESEL CUPON ELECTRONICO',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'COPEC S.A.',
                'rutproveedor' => '99520000-7',
                'fecha_creacion' => '2024-09-24',
                'fecha_envio' => '2024-09-24',
                'monto_neto' => 4200426439.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 7980810235.0,
                'impuesto_especifico' => 0.0,
                'total' => 4998507463.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('96988790-8', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-168-AG24',
                'nombre' => 'Orden de Compra generada por invitación a compra ágil: 2182-70-COT24',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SITE CHILE S A',
                'rutproveedor' => '96988790-8',
                'fecha_creacion' => '2024-09-23',
                'fecha_envio' => '2024-09-24',
                'monto_neto' => 1200000.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 228000.0,
                'impuesto_especifico' => 0.0,
                'total' => 1428000.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77547811-K', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-167-AG24',
                'nombre' => 'Orden de Compra generada por invitación a compra ágil: 2182-71-COT24',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'PERCYBAL VEGA INGENIERIA Y CONSTRUCCION SPA',
                'rutproveedor' => '77547811-K',
                'fecha_creacion' => '2024-09-23',
                'fecha_envio' => '2024-09-24',
                'monto_neto' => 1000000.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 190000.0,
                'impuesto_especifico' => 0.0,
                'total' => 1190000.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('9728223-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-166-SE24',
                'nombre' => 'ORDEN DE COMPRA DESDE 2182-11-LP24',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Guardada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'LUIS PATRICIO VALDÉS GUTIÉRREZ',
                'rutproveedor' => '9728223-4',
                'fecha_creacion' => '2024-09-23',
                'fecha_envio' => '2024-09-23',
                'monto_neto' => 546669250.0,
                'descuentos' => 0,
                'cargos' => 0,
                'iva' => 1038671575.0,
                'impuesto_especifico' => 0.0,
                'total' => 6505364075.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('83547100-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-165-AG24',
                'nombre' => 'ARRIENDO VEHICULO 4X4',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AUTORENTAS DEL PACIFICO SPA',
                'rutproveedor' => '83547100-4',
                'fecha_creacion' => '2024-09-23',
                'fecha_envio' => '2024-09-23',
                'monto_neto' => 5468960.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 10391024.0,
                'impuesto_especifico' => 0.0,
                'total' => 65080624.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('6090213-5', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-164-AG24',
                'nombre' => 'DESMONTAJE Y MONTAJE DE NEUMATICOS',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SERGIO NEFTALI VEGA MUNOZ',
                'rutproveedor' => '6090213-5',
                'fecha_creacion' => '2024-09-17',
                'fecha_envio' => '2024-09-17',
                'monto_neto' => 840000.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 159600.0,
                'impuesto_especifico' => 0.0,
                'total' => 999600.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('9728223-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-163-SE24',
                'nombre' => 'ORDEN DE COMPRA DESDE 2182-15-L124',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'LUIS PATRICIO VALDÉS GUTIÉRREZ',
                'rutproveedor' => '9728223-4',
                'fecha_creacion' => '2024-09-17',
                'fecha_envio' => '2024-09-17',
                'monto_neto' => 35375610.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 67213659.0,
                'impuesto_especifico' => 0.0,
                'total' => 420969759.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('11717210-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-162-SE24',
                'nombre' => 'TERMOS ELECTRICOS',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SAVIA DEL TRÁNSITO HUENTEO HERRERA',
                'rutproveedor' => '11717210-4',
                'fecha_creacion' => '2024-09-16',
                'fecha_envio' => '2024-09-16',
                'monto_neto' => 4016806723.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 7631932773.0,
                'impuesto_especifico' => 0.0,
                'total' => 478.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('9728223-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-161-SE24',
                'nombre' => 'SUMINISTRO E INSTALACION DE AIRE ACONDICIONADO',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'LUIS PATRICIO VALDÉS GUTIÉRREZ',
                'rutproveedor' => '9728223-4',
                'fecha_creacion' => '2024-09-16',
                'fecha_envio' => '2024-09-16',
                'monto_neto' => 625462.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 11883778.0,
                'impuesto_especifico' => 0.0,
                'total' => 74429978.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-160-CM24',
                'nombre' => 'PASAJE AEREO PATRICIO NEIRA',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-09-13',
                'fecha_envio' => '2024-09-13',
                'monto_neto' => 1267850.0,
                'descuentos' => 0.0,
                'cargos' => 49670.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1317520.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-159-CM24',
                'nombre' => 'Orden de Compra: 2182-159-CM24',
                'tipo' => 'Convenio Marco',
                'estado' => 'Eliminada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-09-13',
                'fecha_envio' => '2024-09-13',
                'monto_neto' => 1456530.0,
                'descuentos' => 0.0,
                'cargos' => 49670.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1506200.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-158-CM24',
                'nombre' => 'PASAJE AEREO NATALIA RENCORET',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-09-13',
                'fecha_envio' => '2024-09-13',
                'monto_neto' => 3267530.0,
                'descuentos' => 0.0,
                'cargos' => 49670.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 3317200.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77634019-7', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-157-AG24',
                'nombre' => 'MICROONDA',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SFC AYSEN LIMITADA',
                'rutproveedor' => '77634019-7',
                'fecha_creacion' => '2024-09-12',
                'fecha_envio' => '2024-09-12',
                'monto_neto' => 1260510.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 2394969.0,
                'impuesto_especifico' => 0.0,
                'total' => 15000069.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76379238-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-156-AG24',
                'nombre' => 'Orden de Compra generada por invitación a compra ágil: 2182-67-COT24',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'RESCUE CENTER SPA',
                'rutproveedor' => '76379238-2',
                'fecha_creacion' => '2024-09-10',
                'fecha_envio' => '2024-09-24',
                'monto_neto' => 337800.0,
                'descuentos' => 0.0,
                'cargos' => 100000.0,
                'iva' => 83182.0,
                'impuesto_especifico' => 0.0,
                'total' => 520982.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-155-CM24',
                'nombre' => 'PASAJE AEREO ANGELICA BORQUEZ',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-09-10',
                'fecha_envio' => '2024-09-10',
                'monto_neto' => 1950010.0,
                'descuentos' => 0.0,
                'cargos' => 49670.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1999680.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-154-CM24',
                'nombre' => 'PASAJE AEREO CATHERINE ULLOA',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-09-09',
                'fecha_envio' => '2024-09-09',
                'monto_neto' => 1667450.0,
                'descuentos' => 0.0,
                'cargos' => 49670.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1717120.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76779675-7', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-153-AG24',
                'nombre' => 'Orden de Compra generada por invitación a compra ágil: 2182-65-COT24',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'INTEGRAMUNDO SPA',
                'rutproveedor' => '76779675-7',
                'fecha_creacion' => '2024-09-09',
                'fecha_envio' => '2024-09-09',
                'monto_neto' => 400000.0,
                'descuentos' => 0.0,
                'cargos' => 50000.0,
                'iva' => 85500.0,
                'impuesto_especifico' => 0.0,
                'total' => 535500.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-152-CM24',
                'nombre' => 'PASAJE AEREO DALIA ILLEZCA',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-09-09',
                'fecha_envio' => '2024-09-09',
                'monto_neto' => 1714250.0,
                'descuentos' => 0.0,
                'cargos' => 49670.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1763920.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76618239-9', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-151-SE24',
                'nombre' => 'AGUA PURIFICADA AGOSTO 2024',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'COMERCIALIZADORA LOS CIPRESES JOSE NAVARRO GONZALE',
                'rutproveedor' => '76618239-9',
                'fecha_creacion' => '2024-09-06',
                'fecha_envio' => '2024-09-06',
                'monto_neto' => 4941173874.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 938823036.0,
                'impuesto_especifico' => 0.0,
                'total' => 587999691.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('8562332-K', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-150-AG24',
                'nombre' => '3 REFRIGERADORES',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AUDINA ADALIA MANSILLA SANDOVAL',
                'rutproveedor' => '8562332-K',
                'fecha_creacion' => '2024-09-06',
                'fecha_envio' => '2024-09-06',
                'monto_neto' => 8319330.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 15806727.0,
                'impuesto_especifico' => 0.0,
                'total' => 99000027.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-149-CM24',
                'nombre' => 'PASAJE AEREO JUAN CARLOS HARO',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-09-06',
                'fecha_envio' => '2024-09-06',
                'monto_neto' => 1641890.0,
                'descuentos' => 0.0,
                'cargos' => 49670.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1691560.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-148-CM24',
                'nombre' => 'PASAJE AEREO ALEX FIGUEROA',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-09-06',
                'fecha_envio' => '2024-09-06',
                'monto_neto' => 1641890.0,
                'descuentos' => 0.0,
                'cargos' => 49670.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1691560.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-147-CM24',
                'nombre' => 'PASAJE AEREO PAULA TOCOL',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-09-05',
                'fecha_envio' => '2024-09-05',
                'monto_neto' => 2696510.0,
                'descuentos' => 0.0,
                'cargos' => 49670.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 2746180.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-146-CM24',
                'nombre' => 'PASAJE AEREO ALEX OPITZ',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-09-05',
                'fecha_envio' => '2024-09-05',
                'monto_neto' => 1347850.0,
                'descuentos' => 0.0,
                'cargos' => 49670.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1397520.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-145-CM24',
                'nombre' => 'PASAJE AEREO RUDY HALD',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-09-05',
                'fecha_envio' => '2024-09-05',
                'monto_neto' => 1737450.0,
                'descuentos' => 0.0,
                'cargos' => 49670.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1787120.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-144-CM24',
                'nombre' => 'PASAJE AEREOS TANIA HERNANDEZ',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-09-04',
                'fecha_envio' => '2024-09-04',
                'monto_neto' => 1447950.0,
                'descuentos' => 0.0,
                'cargos' => 49670.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1497620.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-143-CM24',
                'nombre' => 'PASAJE AEREO PAMELA COMESAÑA',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-09-03',
                'fecha_envio' => '2024-09-03',
                'monto_neto' => 1825690.0,
                'descuentos' => 0.0,
                'cargos' => 49670.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1875360.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76399126-1', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-142-CM24',
                'nombre' => 'EQUIPOS DE AIRE ACONDICIONADO',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'COMERCIAL HQT SPA',
                'rutproveedor' => '76399126-1',
                'fecha_creacion' => '2024-09-02',
                'fecha_envio' => '2024-09-02',
                'monto_neto' => 18988520.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 36078188.0,
                'impuesto_especifico' => 0.0,
                'total' => 225963388.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-141-CM24',
                'nombre' => 'PASAJE AEREO MARCELO RUBILAR',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-09-02',
                'fecha_envio' => '2024-09-02',
                'monto_neto' => 1577650.0,
                'descuentos' => 0.0,
                'cargos' => 49700.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1627350.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-140-CM24',
                'nombre' => 'PASAJE AEREO PATRICIO ZUÑIGA',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-08-30',
                'fecha_envio' => '2024-08-30',
                'monto_neto' => 3394650.0,
                'descuentos' => 0.0,
                'cargos' => 49700.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 3444350.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77307196-9', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-139-AG24',
                'nombre' => 'TECLADOS SILENCIOSOS',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'J&C SERVICIOS INFORMÁTICOS SPA',
                'rutproveedor' => '77307196-9',
                'fecha_creacion' => '2024-08-27',
                'fecha_envio' => '2024-08-28',
                'monto_neto' => 270000.0,
                'descuentos' => 0.0,
                'cargos' => 130000.0,
                'iva' => 76000.0,
                'impuesto_especifico' => 0.0,
                'total' => 476000.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76295154-1', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-138-SE24',
                'nombre' => 'ORDEN DE COMPRA DESDE 2182-13-L124',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'Servicentro aysen Patagonia Ltda',
                'rutproveedor' => '76295154-1',
                'fecha_creacion' => '2024-08-23',
                'fecha_envio' => '2024-08-23',
                'monto_neto' => 54117650.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 102823535.0,
                'impuesto_especifico' => 0.0,
                'total' => 644000035.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77271309-6', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-137-SE24',
                'nombre' => 'ORDEN DE COMPRA DESDE 2182-12-LE24',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'COMERCIALIZADORA TRANS SERVICE SPA',
                'rutproveedor' => '77271309-6',
                'fecha_creacion' => '2024-08-23',
                'fecha_envio' => '2024-08-23',
                'monto_neto' => 38000000.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 7220000.0,
                'impuesto_especifico' => 0.0,
                'total' => 45220000.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-136-CM24',
                'nombre' => 'PASAJE AEREO PAOLA VELASQUEZ',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-08-22',
                'fecha_envio' => '2024-08-22',
                'monto_neto' => 2067290.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 2115890.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('6157887-0', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-135-AG24',
                'nombre' => 'MATERIALES DE ASEO',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'CARLOS LEONEL SOTO SOTO',
                'rutproveedor' => '6157887-0',
                'fecha_creacion' => '2024-08-20',
                'fecha_envio' => '2024-08-20',
                'monto_neto' => 11089920.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 21070848.0,
                'impuesto_especifico' => 0.0,
                'total' => 131970048.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76618239-9', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-134-SE24',
                'nombre' => 'AGUA PURIFICADA JULIO 2024',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'COMERCIALIZADORA LOS CIPRESES JOSE NAVARRO GONZALE',
                'rutproveedor' => '76618239-9',
                'fecha_creacion' => '2024-08-20',
                'fecha_envio' => '2024-08-20',
                'monto_neto' => 4117644335.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 782352424.0,
                'impuesto_especifico' => 0.0,
                'total' => 4899996759.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('9728223-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-133-SE24',
                'nombre' => 'HABILITACION DE PUNTOS DE TRABAJO JGDO COCHRANE',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'LUIS PATRICIO VALDÉS GUTIÉRREZ',
                'rutproveedor' => '9728223-4',
                'fecha_creacion' => '2024-08-20',
                'fecha_envio' => '2024-08-22',
                'monto_neto' => 10668.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 202692.0,
                'impuesto_especifico' => 0.0,
                'total' => 1269492.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77804706-3', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-132-AG24',
                'nombre' => 'TECLADOS SILENCIOSOS',
                'tipo' => '-',
                'estado' => 'No aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SERVICIOS GENERALES CAM LIMITADA',
                'rutproveedor' => '77804706-3',
                'fecha_creacion' => '2024-08-19',
                'fecha_envio' => '2024-08-20',
                'monto_neto' => 252100.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 47899.0,
                'impuesto_especifico' => 0.0,
                'total' => 299999.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-131-CM24',
                'nombre' => 'PASAJE AEREO ALVARO GUTIERREZ',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-08-19',
                'fecha_envio' => '2024-08-19',
                'monto_neto' => 2830150.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 2878750.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-130-CM24',
                'nombre' => 'PASAJE AEREO FLORENTINA REZUC',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-08-19',
                'fecha_envio' => '2024-08-19',
                'monto_neto' => 2434050.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 2482650.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('nan', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-129-SE24',
                'nombre' => 'CAMBIO DE VENTANAS VVJJ TTE MERINO 556 - INTERIOR',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Eliminada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 0,
                'rutproveedor' => 0,
                'fecha_creacion' => '2024-08-13',
                'fecha_envio' => '2024-08-13',
                'monto_neto' => 0,
                'descuentos' => 0,
                'cargos' => 0,
                'iva' => 0,
                'impuesto_especifico' => 0,
                'total' => 0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-128-CM24',
                'nombre' => 'PASAJE AEREO MONICA COLOMA',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-08-09',
                'fecha_envio' => '2024-08-09',
                'monto_neto' => 1637650.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1686250.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76420249-k', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-127-AG24',
                'nombre' => 'PARLANTES',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'FRANCISCO JAVIER RAMÍREZ ZUAZNABAR INGENIERÍA Y CONSTRUCCIÓN E.I.R.L.',
                'rutproveedor' => '76420249-k',
                'fecha_creacion' => '2024-08-09',
                'fecha_envio' => '2024-08-09',
                'monto_neto' => 1483310.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 2818289.0,
                'impuesto_especifico' => 0.0,
                'total' => 17651389.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('11717210-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-126-SE24',
                'nombre' => 'TRABAJOS DE CARPINTERIA EN VIVIENDA FISCAL AYSEN',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SAVIA DEL TRÁNSITO HUENTEO HERRERA',
                'rutproveedor' => '11717210-4',
                'fecha_creacion' => '2024-08-09',
                'fecha_envio' => '2024-08-13',
                'monto_neto' => 203135.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 3859565.0,
                'impuesto_especifico' => 0.0,
                'total' => 24173065.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('96732380-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-125-AG24',
                'nombre' => 'JUEGO DE LOZA 45 PIEZAS',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'COMERCIAL CASA ALICIA S A',
                'rutproveedor' => '96732380-2',
                'fecha_creacion' => '2024-08-09',
                'fecha_envio' => '2024-08-09',
                'monto_neto' => 1192450.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 2265655.0,
                'impuesto_especifico' => 0.0,
                'total' => 14190155.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76618239-9', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-124-SE24',
                'nombre' => 'AGUA PURIFICADA JULIO 2024',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Cancelada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'COMERCIALIZADORA LOS CIPRESES JOSE NAVARRO GONZALE',
                'rutproveedor' => '76618239-9',
                'fecha_creacion' => '2024-08-08',
                'fecha_envio' => '2024-08-08',
                'monto_neto' => 4117644335.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 4117644335.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('18103521-8', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-123-AG24',
                'nombre' => 'MANTENCION JEEP 4X4, 110.000 KMS',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'FELIPE SEBASTIÁN SANHUEZA SANHUEZA',
                'rutproveedor' => '18103521-8',
                'fecha_creacion' => '2024-08-08',
                'fecha_envio' => '2024-08-08',
                'monto_neto' => 2016850.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 3832015.0,
                'impuesto_especifico' => 0.0,
                'total' => 24000515.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('9728223-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-122-SE24',
                'nombre' => 'ORDEN DE COMPRA DESDE 2182-10-LE24',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'LUIS PATRICIO VALDÉS GUTIÉRREZ',
                'rutproveedor' => '9728223-4',
                'fecha_creacion' => '2024-08-06',
                'fecha_envio' => '2024-08-06',
                'monto_neto' => 362871900.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 68945661.0,
                'impuesto_especifico' => 0.0,
                'total' => 431817561.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-121-CM24',
                'nombre' => 'PASAJE AEREO BENJAMIN ALARCON',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-08-05',
                'fecha_envio' => '2024-08-05',
                'monto_neto' => 1455750.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1504350.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-120-CM24',
                'nombre' => 'PASAJE AEREO DANIEL OJEDA',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-08-02',
                'fecha_envio' => '2024-08-02',
                'monto_neto' => 1300450.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1349050.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76499318-7', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-119-SE24',
                'nombre' => 'CAMBIO DE RESISTENCIAS TRIBUNALES DE LA JURI. CYHQ',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'Constructora EHG Limitada',
                'rutproveedor' => '76499318-7',
                'fecha_creacion' => '2024-08-02',
                'fecha_envio' => '2024-08-07',
                'monto_neto' => 324302521.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 6161747899.0,
                'impuesto_especifico' => 0.0,
                'total' => 38592.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-118-CM24',
                'nombre' => 'PASAJE AEREO ALEX ESPINOZA',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-08-02',
                'fecha_envio' => '2024-08-02',
                'monto_neto' => 2574050.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 2622650.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('11717210-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-117-SE24',
                'nombre' => 'CAMBIO DE VENTANAS DE VVJJ PUERTO AYSEN',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SAVIA DEL TRÁNSITO HUENTEO HERRERA',
                'rutproveedor' => '11717210-4',
                'fecha_creacion' => '2024-07-31',
                'fecha_envio' => '2024-08-07',
                'monto_neto' => 345966.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 6573354.0,
                'impuesto_especifico' => 0.0,
                'total' => 41169954.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-116-CM24',
                'nombre' => 'PASAJE AEREO MARIA JESUS BRAVO',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-07-30',
                'fecha_envio' => '2024-07-30',
                'monto_neto' => 1477650.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1526250.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-115-CM24',
                'nombre' => 'PASAJE AEREO IVAN COLLADO',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-07-30',
                'fecha_envio' => '2024-07-30',
                'monto_neto' => 1516790.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1565390.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76473108-5', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-114-AG24',
                'nombre' => 'MATERIALES INFORMATICA',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SOCIEDAD COMERCIAL Y DE INVERSIONES CORP PREMIER L',
                'rutproveedor' => '76473108-5',
                'fecha_creacion' => '2024-07-29',
                'fecha_envio' => '2024-07-29',
                'monto_neto' => 14914870.0,
                'descuentos' => 0.0,
                'cargos' => 200000.0,
                'iva' => 28718253.0,
                'impuesto_especifico' => 0.0,
                'total' => 179866953.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77225200-5', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-113-AG24',
                'nombre' => 'ARRIENDO VEHICULO 4X4',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'ARRENDADORA DE VEHICULOS SOCIEDAD ANONIMA',
                'rutproveedor' => '77225200-5',
                'fecha_creacion' => '2024-07-26',
                'fecha_envio' => '2024-07-26',
                'monto_neto' => 1617680.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 3073592.0,
                'impuesto_especifico' => 0.0,
                'total' => 19250392.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-112-CM24',
                'nombre' => 'PASAJE AEREO YENIFER FIGUEROA',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-07-24',
                'fecha_envio' => '2024-07-24',
                'monto_neto' => 1247850.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1296450.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-111-CM24',
                'nombre' => 'PASAJE AEREO MARIA ZAPATA',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-07-23',
                'fecha_envio' => '2024-07-23',
                'monto_neto' => 1753670.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1802270.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-110-CM24',
                'nombre' => 'PASAJE AEREO LUISA CORNEJO',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-07-22',
                'fecha_envio' => '2024-07-22',
                'monto_neto' => 1981590.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 2030190.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-109-CM24',
                'nombre' => 'PASAJE AEREO CARLA FERNANDEZ',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-07-22',
                'fecha_envio' => '2024-07-22',
                'monto_neto' => 1511590.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1560190.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-108-CM24',
                'nombre' => 'PASAJE AEREO VALERIA FOURNIER',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-07-19',
                'fecha_envio' => '2024-07-19',
                'monto_neto' => 1748210.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1796810.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('9728223-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-107-SE24',
                'nombre' => 'REPARACIONES ELECTRICA DE PRIMER JUZGADO DE LETRAS',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'LUIS PATRICIO VALDÉS GUTIÉRREZ',
                'rutproveedor' => '9728223-4',
                'fecha_creacion' => '2024-07-18',
                'fecha_envio' => '2024-07-18',
                'monto_neto' => 14589.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 277191.0,
                'impuesto_especifico' => 0.0,
                'total' => 1736091.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-106-CM24',
                'nombre' => 'PASAJE AEREO GONZALO RIQUELME',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-07-17',
                'fecha_envio' => '2024-07-17',
                'monto_neto' => 2194250.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 2242850.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('17788646-7', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-105-AG24',
                'nombre' => 'CAMARAS WEB',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'FARID ANDRÉS GÓMEZ SOTO',
                'rutproveedor' => '17788646-7',
                'fecha_creacion' => '2024-07-15',
                'fecha_envio' => '2024-07-15',
                'monto_neto' => 3225000.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 612750.0,
                'impuesto_especifico' => 0.0,
                'total' => 3837750.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76499318-7', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-104-SE24',
                'nombre' => 'VISITA EMERGENCIA JUZGADO DE LETRAS DE COCHRANE',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'Constructora EHG Limitada',
                'rutproveedor' => '76499318-7',
                'fecha_creacion' => '2024-07-15',
                'fecha_envio' => '2024-07-17',
                'monto_neto' => 260588.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 4951172.0,
                'impuesto_especifico' => 0.0,
                'total' => 31009972.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('9728223-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-103-SE24',
                'nombre' => 'SUMINISTRO E INSTALACION DE MOTOBOMBAS',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'LUIS PATRICIO VALDÉS GUTIÉRREZ',
                'rutproveedor' => '9728223-4',
                'fecha_creacion' => '2024-07-12',
                'fecha_envio' => '2024-07-12',
                'monto_neto' => 144437.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 2744303.0,
                'impuesto_especifico' => 0.0,
                'total' => 17188003.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76618239-9', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-102-SE24',
                'nombre' => 'RECARGA DE AGUA PURIFICADA JUNIO 2024',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'COMERCIALIZADORA LOS CIPRESES JOSE NAVARRO GONZALE',
                'rutproveedor' => '76618239-9',
                'fecha_creacion' => '2024-07-09',
                'fecha_envio' => '2024-07-11',
                'monto_neto' => 63558.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 1207602.0,
                'impuesto_especifico' => 0.0,
                'total' => 7563402.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-101-CM24',
                'nombre' => 'PASAJE AEREO SANDRA ALTAMIRANO',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-07-05',
                'fecha_envio' => '2024-07-05',
                'monto_neto' => 1435110.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1483710.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-100-CM24',
                'nombre' => 'PASAJE AEREO ESPERANZA SOLIS',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-07-05',
                'fecha_envio' => '2024-07-05',
                'monto_neto' => 788830.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 837430.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76175712-1', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-99-AG24',
                'nombre' => 'CAMARAS WEB',
                'tipo' => '-',
                'estado' => 'No aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'PUNTOBAT SPA',
                'rutproveedor' => '76175712-1',
                'fecha_creacion' => '2024-07-05',
                'fecha_envio' => '2024-07-05',
                'monto_neto' => 3333150.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 6332985.0,
                'impuesto_especifico' => 0.0,
                'total' => 39664485.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-98-CM24',
                'nombre' => 'PASAJE AEREO IVONNE HERNANDEZ',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-07-05',
                'fecha_envio' => '2024-07-05',
                'monto_neto' => 1039150.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1087750.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-97-CM24',
                'nombre' => 'PASAJE AEREO PATRICIO BRINTRUP',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-07-05',
                'fecha_envio' => '2024-07-05',
                'monto_neto' => 2173150.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 2221750.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('10527883-7', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-96-AG24',
                'nombre' => 'Orden de Compra generada por invitación a compra ágil: 2182-41-COT24',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'JAIME BARRIENTOS ARRIAGADA',
                'rutproveedor' => '10527883-7',
                'fecha_creacion' => '2024-07-03',
                'fecha_envio' => '2024-07-03',
                'monto_neto' => 688240.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 1307656.0,
                'impuesto_especifico' => 0.0,
                'total' => 8190056.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76045356-0', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-95-AG24',
                'nombre' => 'Orden de Compra generada por invitación a compra ágil: 2182-40-COT24',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'IMPORTADORA TRANSWORLD SUPPLY LTDA.',
                'rutproveedor' => '76045356-0',
                'fecha_creacion' => '2024-07-03',
                'fecha_envio' => '2024-07-03',
                'monto_neto' => 2513530.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 4775707.0,
                'impuesto_especifico' => 0.0,
                'total' => 29911007.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-94-CM24',
                'nombre' => 'PASAJE AEREO JORGE DEL RIO',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-07-02',
                'fecha_envio' => '2024-07-02',
                'monto_neto' => 1915630.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1964230.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77803824-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-93-AG24',
                'nombre' => 'Orden de Compra generada por invitación a compra ágil: 2182-39-COT24',
                'tipo' => '-',
                'estado' => 'Enviada a proveedor',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SERVICIO DE LAVADO DE VEHÍCULOS AUTOMOTORES PABLO IGNACIO AGUILAR OJEDA E.I.R.L.',
                'rutproveedor' => '77803824-2',
                'fecha_creacion' => '2024-07-01',
                'fecha_envio' => '2024-07-02',
                'monto_neto' => 840320.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 1596608.0,
                'impuesto_especifico' => 0.0,
                'total' => 9999808.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('7911486-3', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-92-AG24',
                'nombre' => 'Orden de Compra generada por invitación a compra ágil: 2182-38-COT24',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'VICENTE LUIS RICARDO HERRERA DONOSO',
                'rutproveedor' => '7911486-3',
                'fecha_creacion' => '2024-06-27',
                'fecha_envio' => '2024-06-27',
                'monto_neto' => 924370.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 1756303.0,
                'impuesto_especifico' => 0.0,
                'total' => 11000003.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-91-CM24',
                'nombre' => 'PASAJE AEREO HUMBERTO COÑUECAR',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-06-27',
                'fecha_envio' => '2024-06-27',
                'monto_neto' => 2954710.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 3003310.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77271309-6', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-90-SE24',
                'nombre' => 'ORDEN DE COMPRA DESDE 2182-6-L124',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'COMERCIALIZADORA TRANS SERVICE SPA',
                'rutproveedor' => '77271309-6',
                'fecha_creacion' => '2024-06-26',
                'fecha_envio' => '2024-06-26',
                'monto_neto' => 18000000.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 3420000.0,
                'impuesto_especifico' => 0.0,
                'total' => 21420000.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('9728223-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-89-SE24',
                'nombre' => 'ORDEN DE COMPRA DESDE 2182-7-LE24',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'LUIS PATRICIO VALDÉS GUTIÉRREZ',
                'rutproveedor' => '9728223-4',
                'fecha_creacion' => '2024-06-24',
                'fecha_envio' => '2024-08-27',
                'monto_neto' => 453945700.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 86249683.0,
                'impuesto_especifico' => 0.0,
                'total' => 540195383.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77225200-5', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-88-SE24',
                'nombre' => 'ARRIENDO VEHICULO 4X4',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'ARRENDADORA DE VEHICULOS SOCIEDAD ANONIMA',
                'rutproveedor' => '77225200-5',
                'fecha_creacion' => '2024-06-24',
                'fecha_envio' => '2024-06-24',
                'monto_neto' => 2756240.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 5236856.0,
                'impuesto_especifico' => 0.0,
                'total' => 32799256.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76025795-8', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-87-AG24',
                'nombre' => 'ARTICULOS DE ESCRITORIO',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'COMERCIAL LEONEL SOTO E.I.R.L.',
                'rutproveedor' => '76025795-8',
                'fecha_creacion' => '2024-06-18',
                'fecha_envio' => '2024-06-18',
                'monto_neto' => 15123580.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 28734802.0,
                'impuesto_especifico' => 0.0,
                'total' => 179970602.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('99520000-7', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-86-AG24',
                'nombre' => 'DIESEL PARA CUPON ELECTRONICO',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'COPEC S.A.',
                'rutproveedor' => '99520000-7',
                'fecha_creacion' => '2024-06-18',
                'fecha_envio' => '2024-06-18',
                'monto_neto' => 6722690.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 12773111.0,
                'impuesto_especifico' => 0.0,
                'total' => 80000011.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('10527883-7', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-85-AG24',
                'nombre' => 'Orden de Compra generada por invitación a compra ágil: 2182-30-COT24',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'JAIME BARRIENTOS ARRIAGADA',
                'rutproveedor' => '10527883-7',
                'fecha_creacion' => '2024-06-18',
                'fecha_envio' => '2024-06-18',
                'monto_neto' => 504200.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 95798.0,
                'impuesto_especifico' => 0.0,
                'total' => 599998.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('9728223-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-84-SE24',
                'nombre' => 'ORDEN DE COMPRA DESDE 2182-9-LE24',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'LUIS PATRICIO VALDÉS GUTIÉRREZ',
                'rutproveedor' => '9728223-4',
                'fecha_creacion' => '2024-06-17',
                'fecha_envio' => '2024-06-17',
                'monto_neto' => 113445454.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 2155463626.0,
                'impuesto_especifico' => 0.0,
                'total' => 1350000903.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76569006-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-83-AG24',
                'nombre' => 'ARTICULOS DE ESCRITORIO',
                'tipo' => '-',
                'estado' => 'Eliminada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'PROVEEDORES INTEGRALES PARA ESCOLAR Y OFICINA ESCOFI LIMITADA',
                'rutproveedor' => '76569006-4',
                'fecha_creacion' => '2024-06-14',
                'fecha_envio' => '2024-06-14',
                'monto_neto' => 12604960.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 23949424.0,
                'impuesto_especifico' => 0.0,
                'total' => 149999024.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76045356-0', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-82-AG24',
                'nombre' => 'Orden de Compra generada por invitación a compra ágil: 2182-29-COT24',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'IMPORTADORA TRANSWORLD SUPPLY LTDA.',
                'rutproveedor' => '76045356-0',
                'fecha_creacion' => '2024-06-12',
                'fecha_envio' => '2024-06-12',
                'monto_neto' => 5901940.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 11213686.0,
                'impuesto_especifico' => 0.0,
                'total' => 70233086.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77305789-3', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-81-AG24',
                'nombre' => 'BANCO DE BATERIA PARA UPS 12V 7aH',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'XZONE SPA',
                'rutproveedor' => '77305789-3',
                'fecha_creacion' => '2024-06-12',
                'fecha_envio' => '2024-06-12',
                'monto_neto' => 6782520.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 12886788.0,
                'impuesto_especifico' => 0.0,
                'total' => 80711988.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76036795-8', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-80-AG24',
                'nombre' => 'Orden de Compra generada por invitación a compra ágil: 2182-28-COT24',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SOTOCOPIAS COMPUTACION LIMITADA',
                'rutproveedor' => '76036795-8',
                'fecha_creacion' => '2024-06-11',
                'fecha_envio' => '2024-06-11',
                'monto_neto' => 342020.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 649838.0,
                'impuesto_especifico' => 0.0,
                'total' => 4070038.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('11717210-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-79-SE24',
                'nombre' => 'MANTENCION TECHUMBRE DE VIVIENDA JUDICIAL',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SAVIA DEL TRÁNSITO HUENTEO HERRERA',
                'rutproveedor' => '11717210-4',
                'fecha_creacion' => '2024-06-10',
                'fecha_envio' => '2024-06-11',
                'monto_neto' => 668908.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 12709252.0,
                'impuesto_especifico' => 0.0,
                'total' => 79600052.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-78-CM24',
                'nombre' => 'PASAJE AEREO NORMA COLOMA',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-06-07',
                'fecha_envio' => '2024-06-07',
                'monto_neto' => 1676830.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1725430.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-77-CM24',
                'nombre' => 'PASAJE AEREO SERGIO ARRE',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-06-06',
                'fecha_envio' => '2024-06-06',
                'monto_neto' => 2253150.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 2301750.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76618239-9', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-76-SE24',
                'nombre' => 'AGUA PURIFICADA MAYO 2024',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'COMERCIALIZADORA LOS CIPRESES JOSE NAVARRO GONZALE',
                'rutproveedor' => '76618239-9',
                'fecha_creacion' => '2024-06-05',
                'fecha_envio' => '2024-06-05',
                'monto_neto' => 494116791.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 938821903.0,
                'impuesto_especifico' => 0.0,
                'total' => 5879989813.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76618239-9', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-75-SE24',
                'nombre' => 'AGUA PURIFICADA MAYO 2024',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Cancelada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'COMERCIALIZADORA LOS CIPRESES JOSE NAVARRO GONZALE',
                'rutproveedor' => '76618239-9',
                'fecha_creacion' => '2024-06-04',
                'fecha_envio' => '2024-06-04',
                'monto_neto' => 494116791.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 494116791.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('9728223-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-74-SE24',
                'nombre' => 'REPARACIONES Y EMERGENCIA ELECTRICA EN JGDO DE CIS',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'LUIS PATRICIO VALDÉS GUTIÉRREZ',
                'rutproveedor' => '9728223-4',
                'fecha_creacion' => '2024-05-31',
                'fecha_envio' => '2024-06-07',
                'monto_neto' => 14742.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 280098.0,
                'impuesto_especifico' => 0.0,
                'total' => 1754298.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76499318-7', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-73-SE24',
                'nombre' => 'CAMBIO DE UBICACION DE TERMOACUMULADORES ICA',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'Constructora EHG Limitada',
                'rutproveedor' => '76499318-7',
                'fecha_creacion' => '2024-05-29',
                'fecha_envio' => '2024-05-29',
                'monto_neto' => 94029.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 1786551.0,
                'impuesto_especifico' => 0.0,
                'total' => 11189451.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77305789-3', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-72-AG24',
                'nombre' => 'BATERIA PARA UPS 12V 7aH',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'XZONE SPA',
                'rutproveedor' => '77305789-3',
                'fecha_creacion' => '2024-05-29',
                'fecha_envio' => '2024-05-29',
                'monto_neto' => 2932920.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 5572548.0,
                'impuesto_especifico' => 0.0,
                'total' => 34901748.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-71-CM24',
                'nombre' => 'PASAJE AEREO JORGE FOITZICK',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-05-29',
                'fecha_envio' => '2024-05-29',
                'monto_neto' => 1566350.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1614950.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76799430-3', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-70-AG24',
                'nombre' => '3 CAMARAS WEB',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'COMERCIALIZADORA SP DIGITAL SPA',
                'rutproveedor' => '76799430-3',
                'fecha_creacion' => '2024-05-27',
                'fecha_envio' => '2024-05-27',
                'monto_neto' => 2024910.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 3847329.0,
                'impuesto_especifico' => 0.0,
                'total' => 24096429.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76618239-9', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-69-SE24',
                'nombre' => 'AGUA PURIFICADA ABRIL 2024',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'COMERCIALIZADORA LOS CIPRESES JOSE NAVARRO GONZALE',
                'rutproveedor' => '76618239-9',
                'fecha_creacion' => '2024-05-23',
                'fecha_envio' => '2024-05-23',
                'monto_neto' => 7176859657.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 7176859657.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-68-CM24',
                'nombre' => 'PASAJE AEREO XIMENA BALBOA',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-05-23',
                'fecha_envio' => '2024-05-23',
                'monto_neto' => 2022750.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 2071350.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-67-CM24',
                'nombre' => 'PASAJE AEREO JENNY HERNANDEZ',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-05-23',
                'fecha_envio' => '2024-05-23',
                'monto_neto' => 3021750.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 3070350.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-66-CM24',
                'nombre' => 'PASAJE AEREO RODRIGO GREZ',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-05-23',
                'fecha_envio' => '2024-05-23',
                'monto_neto' => 1776550.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1825150.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77225200-5', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-65-AG24',
                'nombre' => 'ARRIENDO VEHICULO 4X4',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'ARRENDADORA DE VEHICULOS SOCIEDAD ANONIMA',
                'rutproveedor' => '77225200-5',
                'fecha_creacion' => '2024-05-22',
                'fecha_envio' => '2024-05-22',
                'monto_neto' => 8547320.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 16239908.0,
                'impuesto_especifico' => 0.0,
                'total' => 101713108.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('8258735-7', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-64-SE24',
                'nombre' => 'EMPASTE Y ENCUADERNACION 1er JUZGADO DE LETRAS',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'EDUARDO ANTONIO HERNÁNDEZ MANSILLA',
                'rutproveedor' => '8258735-7',
                'fecha_creacion' => '2024-05-22',
                'fecha_envio' => '2024-05-22',
                'monto_neto' => 1497.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1497.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77077639-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-63-AG24',
                'nombre' => 'HERRAMIENTAS PARA INFORMATICA',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'FERRETERÍA INDUSTRIAL EL MAESTRO A.R LIMITADA',
                'rutproveedor' => '77077639-2',
                'fecha_creacion' => '2024-05-20',
                'fecha_envio' => '2024-05-20',
                'monto_neto' => 751500.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 142785.0,
                'impuesto_especifico' => 0.0,
                'total' => 894285.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-62-CM24',
                'nombre' => 'PASAJE AEREO NATALIA RENCORET',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-05-20',
                'fecha_envio' => '2024-05-20',
                'monto_neto' => 1975870.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 2024470.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76156939-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-61-AG24',
                'nombre' => 'BATERIA PARA UPS 12V 7aH',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SOCIEDAD ENERSET LIMITADA',
                'rutproveedor' => '76156939-2',
                'fecha_creacion' => '2024-05-17',
                'fecha_envio' => '2024-05-20',
                'monto_neto' => 1617000.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 307230.0,
                'impuesto_especifico' => 0.0,
                'total' => 1924230.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76199800-5', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-60-AG24',
                'nombre' => 'MATERIALES DE ASEO',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'DISTRIBUIDORA HIMAX LIMITADA',
                'rutproveedor' => '76199800-5',
                'fecha_creacion' => '2024-05-17',
                'fecha_envio' => '2024-05-17',
                'monto_neto' => 9829480.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 18676012.0,
                'impuesto_especifico' => 0.0,
                'total' => 116970812.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76295154-1', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-59-SE24',
                'nombre' => 'ORDEN DE COMPRA DESDE 2182-8-L124',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'Servicentro aysen Patagonia Ltda',
                'rutproveedor' => '76295154-1',
                'fecha_creacion' => '2024-05-16',
                'fecha_envio' => '2024-05-16',
                'monto_neto' => 54117650.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 102823535.0,
                'impuesto_especifico' => 0.0,
                'total' => 644000035.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('11717210-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-58-SE24',
                'nombre' => 'CAMBIO DE TAPA DE WC BAÑO HOMBRE 1er JUZGADO',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SAVIA DEL TRÁNSITO HUENTEO HERRERA',
                'rutproveedor' => '11717210-4',
                'fecha_creacion' => '2024-05-14',
                'fecha_envio' => '2024-05-16',
                'monto_neto' => 8403.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 159657.0,
                'impuesto_especifico' => 0.0,
                'total' => 999957.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-57-CM24',
                'nombre' => 'PASAJE AEREO NORMA MALDONADO',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-05-09',
                'fecha_envio' => '2024-05-09',
                'monto_neto' => 2063150.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 2111750.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-56-CM24',
                'nombre' => 'PASAJE AEREO CRISTINA POBLETE',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-05-08',
                'fecha_envio' => '2024-05-08',
                'monto_neto' => 1394270.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1442870.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-55-CM24',
                'nombre' => 'PASAJE AEREO MANUEL NEIRA',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-05-08',
                'fecha_envio' => '2024-05-08',
                'monto_neto' => 1394270.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1442870.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-54-CM24',
                'nombre' => 'PASAJE AEREO CARLOS GATICA',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-05-08',
                'fecha_envio' => '2024-05-08',
                'monto_neto' => 1188600.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1237200.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('82120600-6', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-53-AG24',
                'nombre' => 'NEUMATICOS CON CLAVOS',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'ESTEBAN GUIC Y CIA LTDA',
                'rutproveedor' => '82120600-6',
                'fecha_creacion' => '2024-05-07',
                'fecha_envio' => '2024-05-07',
                'monto_neto' => 6341200.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 1204828.0,
                'impuesto_especifico' => 0.0,
                'total' => 7546028.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('9728223-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-52-SE24',
                'nombre' => 'ORDEN DE COMPRA DESDE 2182-3-LE24',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'LUIS PATRICIO VALDÉS GUTIÉRREZ',
                'rutproveedor' => '9728223-4',
                'fecha_creacion' => '2024-05-07',
                'fecha_envio' => '2024-10-18',
                'monto_neto' => 46152.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 876888.0,
                'impuesto_especifico' => 0.0,
                'total' => 5492088.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-51-CM24',
                'nombre' => 'PASAJE AEREO MARIO DEVAUD',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-04-26',
                'fecha_envio' => '2024-04-26',
                'monto_neto' => 2478350.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 2526950.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-50-CM24',
                'nombre' => 'PASAJE AEREO MAURICIO TILLERIA',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-04-26',
                'fecha_envio' => '2024-04-26',
                'monto_neto' => 2893350.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 2941950.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('11717210-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-49-SE24',
                'nombre' => 'SUMINISTRO E INSTALACION DE CALEFONT EN VVJJ',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SAVIA DEL TRÁNSITO HUENTEO HERRERA',
                'rutproveedor' => '11717210-4',
                'fecha_creacion' => '2024-04-23',
                'fecha_envio' => '2024-04-23',
                'monto_neto' => 130252.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 2474788.0,
                'impuesto_especifico' => 0.0,
                'total' => 15499988.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('11717210-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-48-SE24',
                'nombre' => 'CAMBIO PAVIMENTO VVJJ TTE. MERINO N° 556',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SAVIA DEL TRÁNSITO HUENTEO HERRERA',
                'rutproveedor' => '11717210-4',
                'fecha_creacion' => '2024-04-23',
                'fecha_envio' => '2024-04-23',
                'monto_neto' => 874454.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 16614626.0,
                'impuesto_especifico' => 0.0,
                'total' => 104060026.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('11717210-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-47-SE24',
                'nombre' => 'MANTENCION DE TECHO DE CASA FISCAL LILLO N° 482',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SAVIA DEL TRÁNSITO HUENTEO HERRERA',
                'rutproveedor' => '11717210-4',
                'fecha_creacion' => '2024-04-19',
                'fecha_envio' => '2024-04-22',
                'monto_neto' => 78151.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 1484869.0,
                'impuesto_especifico' => 0.0,
                'total' => 9299969.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-46-CM24',
                'nombre' => 'PASAJE AEREO GERARDO ROJAS',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-04-18',
                'fecha_envio' => '2024-04-18',
                'monto_neto' => 1404590.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1453190.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77271309-6', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-45-AG24',
                'nombre' => 'TRASLADO DE EQUIPOS DE AIRE ACONDICIONADO',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'COMERCIALIZADORA TRANS SERVICE SPA',
                'rutproveedor' => '77271309-6',
                'fecha_creacion' => '2024-04-17',
                'fecha_envio' => '2024-04-17',
                'monto_neto' => 4500000.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 855000.0,
                'impuesto_especifico' => 0.0,
                'total' => 5355000.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('12975530-k', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-44-SE24',
                'nombre' => 'CAMBIO DE UBICACION DE TERMOSTATO JDO CISNES',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'MARCIAL ROBERTO MORENO GATICA',
                'rutproveedor' => '12975530-k',
                'fecha_creacion' => '2024-04-15',
                'fecha_envio' => '2024-04-16',
                'monto_neto' => 10169.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 193211.0,
                'impuesto_especifico' => 0.0,
                'total' => 1210111.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('11717210-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-43-SE24',
                'nombre' => 'CAMBIO DE CERRADURA PUERTA CAPJ',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SAVIA DEL TRÁNSITO HUENTEO HERRERA',
                'rutproveedor' => '11717210-4',
                'fecha_creacion' => '2024-04-11',
                'fecha_envio' => '2024-04-16',
                'monto_neto' => 16807.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 319333.0,
                'impuesto_especifico' => 0.0,
                'total' => 2000033.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-42-CM24',
                'nombre' => 'PASAJE AEREO CRISTIAN GOMEZ',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-04-11',
                'fecha_envio' => '2024-04-11',
                'monto_neto' => 2335710.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 2384310.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76618239-9', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-41-SE24',
                'nombre' => 'AGUA PURIFICADA ABRIL 2024',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'COMERCIALIZADORA LOS CIPRESES JOSE NAVARRO GONZALE',
                'rutproveedor' => '76618239-9',
                'fecha_creacion' => '2024-04-11',
                'fecha_envio' => '2024-04-11',
                'monto_neto' => 6353023374.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 6353023374.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('7662832-7', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-40-SE24',
                'nombre' => 'ORDEN DE COMPRA DESDE 2182-2-LE24',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'JHONSON HUMBERTO ROSSEL VARGAS',
                'rutproveedor' => '7662832-7',
                'fecha_creacion' => '2024-04-10',
                'fecha_envio' => '2024-04-10',
                'monto_neto' => 30650000.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 5823500.0,
                'impuesto_especifico' => 0.0,
                'total' => 36473500.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-39-CM24',
                'nombre' => 'PASAJE AEREO JOSE MORA',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-04-10',
                'fecha_envio' => '2024-04-10',
                'monto_neto' => 1696670.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1745270.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-38-CM24',
                'nombre' => 'PASAJE AEREO PABLO ÑANCUL',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-04-10',
                'fecha_envio' => '2024-04-10',
                'monto_neto' => 1266950.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1315550.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-37-CM24',
                'nombre' => 'PASAJE AEREO MARCELA VIDAL',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-04-09',
                'fecha_envio' => '2024-04-09',
                'monto_neto' => 2211310.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 2259910.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-36-CM24',
                'nombre' => 'PASAJE AEREO JAIME RUTTE',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-04-09',
                'fecha_envio' => '2024-04-09',
                'monto_neto' => 2215110.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 2263710.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-35-CM24',
                'nombre' => 'PASAJE AEREO PABLO FREIRE',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-04-09',
                'fecha_envio' => '2024-04-09',
                'monto_neto' => 2235110.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 2283710.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-34-CM24',
                'nombre' => 'PASAJE AEREO JOSE MORA',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-04-08',
                'fecha_envio' => '2024-04-08',
                'monto_neto' => 2504870.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 2553470.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-33-CM24',
                'nombre' => 'PASAJE AEREO KARIN GAVILAN',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-04-08',
                'fecha_envio' => '2024-04-08',
                'monto_neto' => 1744870.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1793470.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-32-CM24',
                'nombre' => 'PASAJE AEREO FELIPE TOLEDO',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-04-08',
                'fecha_envio' => '2024-04-08',
                'monto_neto' => 1574870.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1623470.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-31-CM24',
                'nombre' => 'PASAJE AEREO TAMARA VEJAR',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-04-08',
                'fecha_envio' => '2024-04-08',
                'monto_neto' => 1574870.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1623470.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-30-CM24',
                'nombre' => 'PASAJE AEREO CARLOS MEJIAS',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-04-04',
                'fecha_envio' => '2024-04-04',
                'monto_neto' => 2132790.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 2181390.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-29-CM24',
                'nombre' => 'PASAJE AEREO NELSON PINO',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-03-26',
                'fecha_envio' => '2024-03-26',
                'monto_neto' => 1993270.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 2041870.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-28-CM24',
                'nombre' => 'PASAJE AEREO SONIA CATALAN',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-03-25',
                'fecha_envio' => '2024-03-25',
                'monto_neto' => 2659190.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 2707790.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-27-CM24',
                'nombre' => 'PASAJE AEREO LIDIA HERNANDEZ',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-03-21',
                'fecha_envio' => '2024-03-21',
                'monto_neto' => 1771550.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1820150.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('80989400-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-26-CM24',
                'nombre' => 'PASAJE AEREO MARIANELA BAHAMONDE',
                'tipo' => 'Convenio Marco',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'AGENCIA DE VIAJES TURAVION SPA',
                'rutproveedor' => '80989400-2',
                'fecha_creacion' => '2024-03-21',
                'fecha_envio' => '2024-03-21',
                'monto_neto' => 1604510.0,
                'descuentos' => 0.0,
                'cargos' => 48600.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 1653110.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76175712-1', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-25-AG24',
                'nombre' => 'CAMARAS WEB',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'PUNTOBAT SPA',
                'rutproveedor' => '76175712-1',
                'fecha_creacion' => '2024-03-20',
                'fecha_envio' => '2024-03-20',
                'monto_neto' => 2398000.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 455620.0,
                'impuesto_especifico' => 0.0,
                'total' => 2853620.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76499318-7', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-24-SE24',
                'nombre' => 'ORDEN DE COMPRA DESDE 2182-1-LE24',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'Constructora EHG Limitada',
                'rutproveedor' => '76499318-7',
                'fecha_creacion' => '2024-03-18',
                'fecha_envio' => '2024-05-13',
                'monto_neto' => 45135126.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 857567394.0,
                'impuesto_especifico' => 0.0,
                'total' => 5371079994.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76636539-6', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-23-AG24',
                'nombre' => 'ARRIENDO VEHICULO 1ER JUZGADO',
                'tipo' => '-',
                'estado' => 'Enviada a proveedor',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'CZ CUSTOM SPA',
                'rutproveedor' => '76636539-6',
                'fecha_creacion' => '2024-03-13',
                'fecha_envio' => '2024-03-14',
                'monto_neto' => 790000.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 150100.0,
                'impuesto_especifico' => 0.0,
                'total' => 940100.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76893640-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-22-SE24',
                'nombre' => 'ORDEN DE COMPRA DESDE 2182-15-LR23',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'COM PANGUILEMU LTDA',
                'rutproveedor' => '76893640-4',
                'fecha_creacion' => '2024-03-13',
                'fecha_envio' => '2024-05-02',
                'monto_neto' => 1165034662.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 2213565858.0,
                'impuesto_especifico' => 0.0,
                'total' => 1386391248.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77354084-5', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-21-AG24',
                'nombre' => 'INSUMOS INFORMATICOS',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'EQUIPOS MÉDICOS CHILE SPA',
                'rutproveedor' => '77354084-5',
                'fecha_creacion' => '2024-03-05',
                'fecha_envio' => '2024-03-08',
                'monto_neto' => 4263800.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 810122.0,
                'impuesto_especifico' => 0.0,
                'total' => 5073922.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76618239-9', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-20-SE24',
                'nombre' => 'AGUA PURIFICADA FEBRERO 2024',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'COMERCIALIZADORA LOS CIPRESES JOSE NAVARRO GONZALE',
                'rutproveedor' => '76618239-9',
                'fecha_creacion' => '2024-03-05',
                'fecha_envio' => '2024-03-05',
                'monto_neto' => 3411718427.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 3411718427.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77734231-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-19-AG24',
                'nombre' => 'TRASLADO DE MUEBLES',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'INVERSIONES MOLINAS LIMITADA',
                'rutproveedor' => '77734231-2',
                'fecha_creacion' => '2024-02-26',
                'fecha_envio' => '2024-02-26',
                'monto_neto' => 4250000.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 807500.0,
                'impuesto_especifico' => 0.0,
                'total' => 5057500.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76023573-3', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-18-AG24',
                'nombre' => 'TONER SAMSUMG ALTERNATIVOS',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SOCIEDAD FLORES Y HERNANDEZ LIMITADA',
                'rutproveedor' => '76023573-3',
                'fecha_creacion' => '2024-02-20',
                'fecha_envio' => '2024-02-20',
                'monto_neto' => 4390500.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 834195.0,
                'impuesto_especifico' => 0.0,
                'total' => 5224695.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76156939-2', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-17-AG24',
                'nombre' => 'BATERIAS PARA UPS',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SOCIEDAD ENERSET LIMITADA',
                'rutproveedor' => '76156939-2',
                'fecha_creacion' => '2024-02-19',
                'fecha_envio' => '2024-02-20',
                'monto_neto' => 1599000.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 303810.0,
                'impuesto_especifico' => 0.0,
                'total' => 1902810.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76618239-9', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-16-SE24',
                'nombre' => 'AGUA PURIFICADA ENERO 2024',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'COMERCIALIZADORA LOS CIPRESES JOSE NAVARRO GONZALE',
                'rutproveedor' => '76618239-9',
                'fecha_creacion' => '2024-02-13',
                'fecha_envio' => '2024-02-14',
                'monto_neto' => 6588229032.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 6588229032.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('9728223-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-15-SE24',
                'nombre' => 'REPARACION GRUPO ELECTROGENO JUZGADO DE CHILECHICO',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'LUIS PATRICIO VALDÉS GUTIÉRREZ',
                'rutproveedor' => '9728223-4',
                'fecha_creacion' => '2024-02-08',
                'fecha_envio' => '2024-02-09',
                'monto_neto' => 9886.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 187834.0,
                'impuesto_especifico' => 0.0,
                'total' => 1176434.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('9728223-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-14-SE24',
                'nombre' => 'REPARACION GRUPO ELECTROGENO JUZGADO CHILE CHICO',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Eliminada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'LUIS PATRICIO VALDÉS GUTIÉRREZ',
                'rutproveedor' => '9728223-4',
                'fecha_creacion' => '2024-02-08',
                'fecha_envio' => '2024-02-08',
                'monto_neto' => 95696.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 180.0,
                'impuesto_especifico' => 0.0,
                'total' => 113696.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('9728223-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-13-SE24',
                'nombre' => 'REPARACION PROGRAMADA LUMINARIA TRIBUNALES DE LA JURISDICCION',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'LUIS PATRICIO VALDÉS GUTIÉRREZ',
                'rutproveedor' => '9728223-4',
                'fecha_creacion' => '2024-02-08',
                'fecha_envio' => '2024-02-09',
                'monto_neto' => 95696.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 1818224.0,
                'impuesto_especifico' => 0.0,
                'total' => 11387824.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('8258735-7', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-12-SE24',
                'nombre' => 'SERVICIO DE EMPASTE CAPJ 2024',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'EDUARDO ANTONIO HERNÁNDEZ MANSILLA',
                'rutproveedor' => '8258735-7',
                'fecha_creacion' => '2024-02-07',
                'fecha_envio' => '2024-02-14',
                'monto_neto' => 7485.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 7485.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76036795-8', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-11-AG24',
                'nombre' => 'ARTICULOS DE OFICINA',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'SOTOCOPIAS COMPUTACION LIMITADA',
                'rutproveedor' => '76036795-8',
                'fecha_creacion' => '2024-02-06',
                'fecha_envio' => '2024-02-06',
                'monto_neto' => 14690170.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 27911323.0,
                'impuesto_especifico' => 0.0,
                'total' => 174813023.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77546702-9', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-10-AG24',
                'nombre' => 'TELEFONO ANALOGOS',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'VENTAS MAUSHI SHIRLEY HOLTMANN E.I.R.L.',
                'rutproveedor' => '77546702-9',
                'fecha_creacion' => '2024-02-05',
                'fecha_envio' => '2024-02-06',
                'monto_neto' => 599700.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 113943.0,
                'impuesto_especifico' => 0.0,
                'total' => 713643.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('9728223-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-9-SE24',
                'nombre' => 'REPARACION DE TABLERO ELECTRICO JUZGADO CHILECHICO',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'LUIS PATRICIO VALDÉS GUTIÉRREZ',
                'rutproveedor' => '9728223-4',
                'fecha_creacion' => '2024-02-05',
                'fecha_envio' => '2024-02-08',
                'monto_neto' => 19895.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 378005.0,
                'impuesto_especifico' => 0.0,
                'total' => 2367505.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('9728223-4', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-8-SE24',
                'nombre' => 'EMERGENCIA ELECTRICA.',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'LUIS PATRICIO VALDÉS GUTIÉRREZ',
                'rutproveedor' => '9728223-4',
                'fecha_creacion' => '2024-01-31',
                'fecha_envio' => '2024-01-31',
                'monto_neto' => 520924.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 9897556.0,
                'impuesto_especifico' => 0.0,
                'total' => 61989956.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76295154-1', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-7-SE24',
                'nombre' => 'PETROLEO PARA CALEFACCION JUZGADO PTO. CISNES',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'Servicentro aysen Patagonia Ltda',
                'rutproveedor' => '76295154-1',
                'fecha_creacion' => '2024-01-29',
                'fecha_envio' => '2024-01-29',
                'monto_neto' => 59510000.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 59510000.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76199800-5', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-6-AG24',
                'nombre' => 'MATERIALES DE ASEO',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'DISTRIBUIDORA HIMAX LIMITADA',
                'rutproveedor' => '76199800-5',
                'fecha_creacion' => '2024-01-29',
                'fecha_envio' => '2024-01-29',
                'monto_neto' => 7964730.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 15132987.0,
                'impuesto_especifico' => 0.0,
                'total' => 94780287.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('99520000-7', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-5-AG24',
                'nombre' => 'COMBUSTIBLE DIESEL PARA CAMIONETA CAPJ',
                'tipo' => '-',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'COPEC S.A.',
                'rutproveedor' => '99520000-7',
                'fecha_creacion' => '2024-01-23',
                'fecha_envio' => '2024-01-23',
                'monto_neto' => 8403360.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 15966384.0,
                'impuesto_especifico' => 0.0,
                'total' => 99999984.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('99520000-7', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-4-SE24',
                'nombre' => 'COMPRA DE COMBUSTIBLE',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Cancelada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'COPEC S.A.',
                'rutproveedor' => '99520000-7',
                'fecha_creacion' => '2024-01-22',
                'fecha_envio' => '2024-01-22',
                'monto_neto' => 10000000.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 10000000.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('nan', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-3-SE24',
                'nombre' => 'COMPRA DE COMBUSTIBLE',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Eliminada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 0,
                'rutproveedor' => 0,
                'fecha_creacion' => '2024-01-22',
                'fecha_envio' => '2024-01-22',
                'monto_neto' => 10000000.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 10000000.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('76618239-9', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-2-SE24',
                'nombre' => 'AGUA PURIFICADA DICIEMBRE 2023',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'COMERCIALIZADORA LOS CIPRESES JOSE NAVARRO GONZALE',
                'rutproveedor' => '76618239-9',
                'fecha_creacion' => '2024-01-17',
                'fecha_envio' => '2024-01-18',
                'monto_neto' => 69384.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 0.0,
                'impuesto_especifico' => 0.0,
                'total' => 69384.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }
        if (in_array('77271309-6', $rutValidos)) {
            $ordenes[] = [
                'orden_compra' => '2182-1-SE24',
                'nombre' => 'ORDEN DE COMPRA DESDE 2182-16-LE23',
                'tipo' => 'Sin emisión automática',
                'estado' => 'Aceptada',
                'unidad_compra' => 'Corp. Adm. del Poder Judicial - Coyhaique',
                'proveedor' => 'COMERCIALIZADORA TRANS SERVICE SPA',
                'rutproveedor' => '77271309-6',
                'fecha_creacion' => '2024-01-05',
                'fecha_envio' => '2024-01-05',
                'monto_neto' => 48000000.0,
                'descuentos' => 0.0,
                'cargos' => 0.0,
                'iva' => 9120000.0,
                'impuesto_especifico' => 0.0,
                'total' => 57120000.0,
                'created_at' => '2025-04-08 17:08:00',
                'updated_at' => '2025-04-08 17:08:00'
            ];
            $insertados++;
        } else {
            $ignorados++;
        }

        // Insertar registros válidos
        DB::table('ordenescompras')->insert($ordenes);

        // Mostrar resumen
        echo "\nSeeder OrdenescomprasSeeder ejecutado.";
        echo "\nRegistros insertados: {$insertados}";
        echo "\nRegistros ignorados por RUT inválido: {$ignorados}\n";
    }
}
