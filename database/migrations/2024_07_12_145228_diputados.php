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
        Schema::create('diputados', function (Blueprint $table) {
            $table->id();
            $table->string('TRATAMIENTO');
            $table->string('APELLIDO');
            $table->string('NOMBRES');
            $table->string('PERIODO');
            $table->string('DESCRIPCION');
            $table->integer('ID_TIPOD');
            $table->string('ST_TIPOD');
            $table->integer('ID_BLOQUE'); 
            $table->string('ST_BLOQUE');
            $table->string('LOCALIDAD');
            $table->date('TERMINA'); 
            $table->integer('ID_SUBIDA')->nullable();
            $table->string('IMG');
            $table->string('WIKI_DESCRIPCION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
