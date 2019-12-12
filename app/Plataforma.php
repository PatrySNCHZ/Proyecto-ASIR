<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Videojuego;

class Plataforma extends Model {

    protected $fillable = ['Nombre_Plataforma', 'Empresa_Plataforma', 'Fecha_Salida_Plataforma', 'descripcion', 'Precio', 'Portatil'];

    /*
    public function plataformasxvideojuegos($id) {
        $plataformas=Plataforma::findOrFail($id);
        return view('consolas.videojuegos', compact('plataformas'));
    }
    
    public function plataformavideojuego($id)
    {
        $videojuegop=Videojuego::All();
        $plataformav=Plataforma::findOrFail($id);
        return view('consolas.asignarjuego', compact ('videojuegop', 'plataformav'));
    }
    */
    public function anadirplataformavideojuego (Request $request, $id){
        $plataforma=Plataforma::findOrFail($id);
        $plataforma->update($request->all());
        $videojuego = $request->input('videojuego_id');
        $plataforma->videojuegos()->sync($videojuego);
        
        return redirect('/videojuegos');
    }
    
    
    public function videojuego() {
        return $this->belongsToMany(Videojuego::class, 'plataforma_videojuego', 'plataforma_id', 'videojuego_id');
    }

    public function accesorio() {
        return $this->hasMany("App\Accesorio");
    }
    
     public function review(){
        return $this->hasMany(Review::class, 'plataformas_id', 'id');
    }

    public function setPortatilAtrribute($value) {
        $this->attributes['Portatil'] = ($value == 1) ? ($value = 1) : ($value = 0);
    }

    public static function listar_empresas() {
        $sql = Plataforma::join('empresas as e', 'e.id', '=', 'plataformas.empresa_id')
                ->select('plataformas.*', 'e.Nombre_Empresa')
                ->get();
        return $sql;
    }

    public static function empresaplataforma($id) {
        $sql = Plataforma::join('empresas as e', 'e.id', '=', 'plataformas.empresa_id')
                ->select('plataformas.*', 'e.Nombre_Empresa')
                ->where('empresas.id', $id)
                ->get();
        return $sql;
    }

}
