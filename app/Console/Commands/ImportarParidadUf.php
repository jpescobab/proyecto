<?php

namespace App\Console\Commands;

use App\Models\ParidadUf;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ImportarParidadUf extends Command
{


    // **** comando para importar:  php artisan importar:paridad-uf storage/app/paridad.csv  *********************

    protected $signature = 'importar:paridad-uf {archivo}';
    protected $description = 'Importa datos de paridad UF desde un archivo CSV con formato FECHA;VALOR';

    public function handle()
{
    $archivo = $this->argument('archivo');

    if (!File::exists($archivo)) {
        $this->error("Archivo no encontrado: $archivo");
        return 1;
    }

    $handle = fopen($archivo, 'r');
    if (!$handle) {
        $this->error("No se pudo abrir el archivo.");
        return 1;
    }

    fgetcsv($handle, 1000, ';'); // Saltar encabezado

    DB::beginTransaction();

    try {
        while (($fila = fgetcsv($handle, 1000, ';')) !== false) {
            if (count($fila) < 2) continue; // Saltar filas incompletas

            $fecha = \DateTime::createFromFormat('d-m-Y', trim($fila[0]));
            if (!$fecha) continue; // Saltar si no se puede parsear

            $valor = floatval(str_replace(',', '.', trim($fila[1])));

            ParidadUf::updateOrCreate(
                ['fecha' => $fecha->format('Y-m-d')],
                ['valor' => $valor]
            );
        }

        fclose($handle);
        DB::commit();
        $this->info("Importación completada con éxito.");
    } catch (\Exception $e) {
        DB::rollBack();
        $this->error("Error durante la importación: " . $e->getMessage());
    }

    return 0;
}

}
