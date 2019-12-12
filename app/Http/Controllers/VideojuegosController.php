<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Videojuego;
use App\Genero;
use App\Plataforma;

class VideojuegosController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $videojuegos = Videojuego::listar_generos();
        $generos = Genero::all();

        return view("videojuegos.index", compact("videojuegos", "generos"));
    }

      public function index2() {
        $videojuegos = Videojuego::listar_generos();
        $generos = Genero::all();

        return view("videojuegos.index2", compact("videojuegos", "generos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $generos = Genero::all();

        return view("videojuegos.create", compact("generos"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

      /*  $videojuegos = new Videojuego;

        $videojuegos->Nombre_Videojuego = $request->Nombre_Videojuego;
        $videojuegos->Fecha_Salida = $request->Fecha_Salida;
        $videojuegos->Precio = $request->Precio;
        $videojuegos->genero_id = $request->genero_id;
        $videojuegos->Ruta = $request->Ruta;
        $videojuegos->save(); */
        
        
        $videojuegos=$request->all();
        if($archivo=$request->file('file')){
        $nombre=$archivo->getClientOriginalName();
        $archivo->move('images', $nombre);
        $videojuegos['Ruta']=$nombre;
        
}
        Videojuego::create($videojuegos); 
        return redirect()->back();



      //  $videojuegos->save();
    }
        
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $videojuegos = Videojuego::findOrFail($id);
        $generos = Videojuego::generovideojuego($id);

        return view("videojuegos.show", compact("videojuegos", "generos"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $videojuegos = Videojuego::findOrFail($id);
        $generos = Genero::all();

        return view("videojuegos.edit", compact("videojuegos", "generos"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $videojuegos = Videojuego::findOrFail($id);
        $generos = Genero::all();

        $videojuegos->update($request->all());

        return redirect("/videojuegos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $videojuegos = Videojuego::findOrFail($id);

        $videojuegos->delete();

        return redirect("/videojuegos");
    }

}
