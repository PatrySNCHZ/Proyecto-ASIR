<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accesorio extends Model {

    protected $fillable = ['Nombre_Accesorio', 'Precio'];

// public function plataforma()
    //{
    //    return $this->belongsTo('App\Plataforma');
    // }

    public static function listar_plataformas() {
        $sql = Accesorio::join('plataformas as p', 'p.id', '=', 'accesorios.plataformas_id')
                ->select('accesorios.*', 'p.Nombre_Plataforma')
                ->get();
        return $sql;
    }

    public static function plataformasvideojuegos($id) {
        $sql = Accesorio::join('plataformas.id', '=', 'accesorios.plataformas_id')
                ->select('accesorios.*', 'plataformas.Nombre_Plataforma')
                ->where('plataformas.id', $id)
                ->get();
        return $sql;
    }

}
