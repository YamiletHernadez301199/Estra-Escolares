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
        Schema::create('registro_creditos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->unsignedBigInteger('id_carrera');
            $table->unsignedBigInteger('semestre');
            $table->unsignedBigInteger('id_credito');
            $table->string('path_mooc');
            $table->string('path_taller');
            $table->unsignedBigInteger('id_carpeta');
            $table->foreign('id_carrera')->references('id')->on('cat_carreras')->onDelete('cascade');
            $table->foreign('id_credito')->references('id')->on('cat_creditos')->onDelete('cascade');
            $table->foreign('id_carpeta')->references('id')->on('cat_carpetas')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_creditos');
    }
};
