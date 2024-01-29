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
        Schema::create('pcs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('direccion_ip')->nullable();
            $table->string('modelo');
            $table->string('marca');
            $table->integer('serial');
            $table->string('direccion_mac');
            $table->string('componentes_marcas');
            $table->string('usuario');
            $table->string('oficina');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pcs');
    }
};
