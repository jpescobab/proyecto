<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('cni',10);
            $table->string('name',50);
            $table->string('lastname',50);   
            $table->enum('gender',['Femenino', 'Masculino']);
            $table->enum('category', ['Infantil', 'Juvenil','Adulto','Senior']);
            $table->enum('range',['Tigre', 'Dragon','Gup','Master']);
            $table->date('birthday');
            $table->string('phone',25);
            $table->string('tutor',50);
            $table->string('email');
            $table->string('image');

            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
