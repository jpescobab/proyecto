<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dtes', function (Blueprint $table) {
            $table->id(); // Clave primaria autoincremental
            $table->bigInteger('idRedFlow');
            $table->string('Periodo');
            $table->dateTime('Fecha')->nullable();
            $table->dateTime('FechaRecepcionSII');
            $table->bigInteger('NumeroDte');
            $table->string('RutEmisor');
            $table->text('Observacion');
            $table->decimal('Monto', 15, 0);
            $table->bigInteger('Egreso')->nullable();
            $table->string('TipoDcto');
            $table->string('NombreEmisor');
            $table->string('Url');
            $table->string('Estado')->default('Importado');
            $table->timestamp('FechaImportacion')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dtes');
    }
};
