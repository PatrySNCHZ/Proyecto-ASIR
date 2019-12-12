<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;



class Review extends Model 
{
    
    public $table = 'reviews';
    protected $fillable = [
        'titulo','texto','users_id','videojuegos_id','plataformas_id','file'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function videojuego(){
        return $this->belongsTo(Videojuego::class);
    }
    
     public function plataforma(){
        return $this->belongsTo(Plataforma::class);
        
     }

    
    
    public static function listar_videojuego() {
        $sql = Review::join('videojuegos as v', 'v.id', '=', 'reviews.videojuegos_id')
                ->select('reviews.*', 'v.Nombre_Videojuego')
                ->get();
        return $sql;
    }

    public static function review_videojuego($id) {
        $sql = Review::join('videojuegos as v', 'v.id', '=', 'reviews.videojuegos_id')
                ->select('reviews.*', 'v.Nombre_Videojuego')
                ->where('reviews.id','=', $id)
                ->get();
        return $sql;
    }

    public static function listar_plataforma() {
        $sql = Review::join('plataformas as p', 'p.id', '=', 'reviews.plataformas_id')
                ->select('reviews.*', 'p.Nombre_Plataforma')
                ->get();
        return $sql;
    }

    public static function review_plataforma($id) {
        $sql = Review::join('plataformas as p', 'p.id', '=', 'reviews.plataformas_id')
                ->select('reviews.*', 'p.Nombre_Plataforma')
                ->where('reviews.id', $id)
                ->get();
        return $sql;
    }
     
   
}




    
