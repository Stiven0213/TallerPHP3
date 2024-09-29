<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('videojuegos', function (Blueprint $table) {
            $table->id(); 
            $table->string('titulo'); 
            $table->string('desarrollador'); 
            $table->string('genero')->default('Acción'); 
            $table->integer('anio_lanzamiento')->unsigned(); 
            $table->decimal('precio', 8, 2)->nullable(); 
            $table->boolean('multijugador')->default(false); 
            $table->date('fecha_ultima_actualizacion'); 
            $table->integer('clasificacion_pegi')->unsigned(); 
            $table->text('descripcion'); 
            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('videojuegos');
    }
};
