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
        Schema::create('clase', function (Blueprint $table) {
        $table->id('claseID'); // Llave primaria
        $table->string('nombre');
        $table->string('imagen'); 
        $table->text('descripcion'); // Descripcion de curso
        $table->string('materialDidactico'); // Material didactico

        $table->unsignedBigInteger('kitID'); // Llave foranea
        $table->foreign('kitID')->references('kitID')->on('kit_robotica')->onDelete('cascade'); // Referencia de llave foranea
        $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clase');
    }
};
