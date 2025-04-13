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
        Schema::create('detalledtes', function (Blueprint $table) {
            $table->id(); // ID primario autoincremental
            $table->foreignId('dtes_id')->constrained('dtes')->onDelete('cascade');
            $table->enum('tipo', ['Contrato', 'Orden Compra', 'Consumo Basico']);
            // $table->foreign('cliente_id')->references('numerocliente')->on('clientesmedidores')->onDelete('cascade');
            $table->string('periodoconsumo', 20);
            $table->integer('lecturaanterior')->nullable();
            $table->integer('lecturaactual')->nullable();
            $table->integer('consumo')->nullable();

            // Claves foráneas opcionales
            $table->string('cliente_id')->nullable();
            $table->string('contrato_id')->nullable();
            $table->string('ordencompra_id')->nullable();
            $table->string('proyecto_id')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalledtes');
    }
};
