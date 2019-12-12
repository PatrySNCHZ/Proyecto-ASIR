<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlataformasVideojuegosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plataforma_videojuego', function (Blueprint $table) {
                $table->bigIncrements('id');
		$table->integer("plataforma_id")->unsigned();
		$table->integer("videojuego_id")->unsigned();
		$table->timestamps();
                
                $table->foreign("plataforma_id")->references('id')->on("plataformas")
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
                $table->foreign("videojuego_id")->references('id')->on("videojuegos")
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
               
	});

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plataforma_videojuego');
    }
}
