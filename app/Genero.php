<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Videojuego;

class Genero extends Model {

    public $table = 'generos';

    public function videojuegos() {
        return $this->hasMany('App\Videojuego');
    }

}
