<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Plataforma;
use App\Videojuego;

class Videojuego extends Model {

    public $table = 'videojuegos';
    protected $fillable = ['Nombre_Videojuego', 'Fecha_Salida', 'Precio', 'genero_id', 'sinopsis', 'Ruta'];

    public function plataforma() {
        return $this->belongsToMany(Plataforma::class, 'plataforma_videojuego', 'plataforma_id', 'videojuego_id');
    }
    
    public function review(){
        return $this->hasMany(Review::class, 'videojuegos_id', 'id');
    }

    public static function listar_generos() {
        $sql = Videojuego::join('generos as g', 'g.id', '=', 'videojuegos.genero_id')
                ->select('videojuegos.*', 'g.genero')
                ->get();
        return $sql;
    }

    public static function generovideojuego($id) {
        $sql = Videojuego::join('generos as g', 'g.id', '=', 'videojuegos.genero_id')
                ->select('videojuegos.*', 'g.genero')
                ->where('videojuegos.id', $id)
                ->get();
        return $sql;
    }

}
