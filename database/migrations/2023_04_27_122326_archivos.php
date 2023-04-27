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
        Schema::create('archivos', function (Blueprint $table) {
            $table->id();
            $table->string('ficha',10);
            $table->string('nombreArchivo',30);
            $table->unsignedBigInteger('idUserUpFile');
            $table->date('fecha');           
            $table->timestamps();

            $table->foreign('idUserUpFile')->references('id')->on('usuarios');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('archivos');
    }
};
