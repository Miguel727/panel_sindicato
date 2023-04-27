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
        Schema::create('jubilados', function (Blueprint $table) {
            $table->id();
            $table->string('ficha',15)->unique();
            $table->string('nombreCompleto',50);
            $table->string('tipo',50);
            $table->string('localidad',50);
            $table->string('cedula',15);
            $table->string('celular',15);
            $table->integer('idUserLastUpdate')->unsigned();
            $table->string('estado',50);
            $table->timestamps();

            $table->foreign('idUserLastUpdate')->references('id')->on('usuarios');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jubilados');
    }
};
