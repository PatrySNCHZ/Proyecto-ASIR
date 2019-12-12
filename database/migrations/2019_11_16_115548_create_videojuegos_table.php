<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideojuegosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videojuegos', function (Blueprint $table) {
            $table->Increments('id');
            $table->string("Nombre_Videojuego");
            $table->date('Fecha_Salida');
            $table->integer("Precio");
            $table->string("genero_id");
            $table->longText('sinopsis');
            $table->string("Ruta");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videojuegos');
    }
}
