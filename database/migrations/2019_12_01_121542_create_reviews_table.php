<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('titulo',128);
            $table->longtext('texto')->nullable();
            $table->integer('users_id')->unsigned();
            $table->integer('videojuegos_id')->unsigned();
            $table->integer('plataformas_id')->unsigned();
            $table->string('file')->nullable();
            
            //RELATION
            $table->foreign('users_id')->references('id')->on('users');
            
            $table->foreign('videojuegos_id')->references('id')->on('videojuegos');
            
            $table->foreign('plataformas_id')->references('id')->on('plataformas');
            
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
        Schema::dropIfExists('reviews');
    }
}
