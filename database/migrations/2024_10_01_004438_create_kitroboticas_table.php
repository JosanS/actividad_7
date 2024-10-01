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
        Schema::create('kit_robotica', function (Blueprint $table) {
        $table->id('kitID'); // Llave primaria
        $table->string('nombre');
        $table->text('descripcion'); // Descripcion de kit
        $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kit_robotica');
    }
};