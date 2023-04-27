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
        Schema::create('ayudas', function (Blueprint $table) {
            $table->id();        
            $table->string('ficha',10);
            $table->string('descripcion',200);
            $table->decimal('monto', 10, 2);
            $table->unsignedBigInteger('idUserUp');
            $table->date('fecha');           
            $table->timestamps();

            $table->foreign('idUserUp')->references('id')->on('usuarios');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ayudas');
    }
};
