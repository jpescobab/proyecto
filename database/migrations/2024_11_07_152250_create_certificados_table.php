<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('certificados', function (Blueprint $table) {           

            $table->id('id');
            $table->date('fecha');
            $table->enum('cf', ['1400', '1401', '1402', '1431', '1451', '1471']);
            $table->enum('subtitulo', ['22', '29', '31']);
            $table->enum('naturaleza', ['Operacional', 'Iniciativa']);
            $table->string('codigo_iniciativa')     ->nullable();
            $table->string('adjunto_iniciativa')        ->nullable();
            $table->string('descripcion')       ->nullable();
            $table->string('catalogo_id')       ;  
            $table->enum('caracter', ['Transitorio', 'Permanente']);
            $table->string('contrato_id')       ;
            $table->string('orden_compra')      ->nullable();
            $table->enum('moneda', ['Pesos Chilenos', 'Unidad de Fomento']);
            $table->string('medio_solicitud')       ->nullable();
            $table->string('num_solicitud')     ->nullable();
            $table->string('adjunto_solicitud')     ->nullable();
            $table->decimal('monto_original', 15, 2)->nullable();
            $table->decimal('paridad', 15, 4)->nullable();
            $table->decimal('total', 15, 2)->nullable();
            $table->enum('estado', ['INICIAL', 'BORRADOR', 'FIRMADO', 'CERRADO']);
            $table->string('borrador_pdf')      ->nullable();
            $table->string('cdp_pdf')       ->nullable();
                        
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificados');
    }
};
