<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlataformas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plataformas', function (Blueprint $table) {
            $table->Increments('id');
            $table-> string("Nombre_Plataforma");
            $table-> integer("empresa_id");
            $table-> integer("Fecha_Salida_Plataforma");
            $table-> decimal("Precio",5,2);
            $table-> boolean("Portatil",1);
            $table->longText('descripcion');
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
        Schema::dropIfExists('plataformas');
    }
}
