<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plataforma;
use App\Empresa;
use Illuminate\Support\Facades\Input;

class PlataformaController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $plataformas = Plataforma::listar_empresas();
        $empresas = Empresa::all();

        return view("plataformas.index", compact("plataformas", "empresas"));
    }
    
     public function index2() {

        $plataformas = Plataforma::listar_empresas();
        $empresas = Empresa::all();

        return view("plataformas.index2", compact("plataformas", "empresas"));
    }

    public function create() {

        $empresas = Empresa::all();

        return view("plataformas.create", compact("empresas"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
        $plataformas = new Plataforma;

        $plataformas->Nombre_Plataforma = $request->Nombre_Plataforma;
        $plataformas->empresa_id = $request->empresa_id;
        $plataformas->Fecha_Salida_Plataforma = $request->Fecha_Salida_Plataforma;
        $plataformas->descripcion = $request->descripcion;
        $plataformas->Precio = $request->Precio;
        $plataformas->Portatil = $request->Input('optradio1') === 'true' ? 1 : 0;

        $plataformas->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
        $plataformas = Plataforma::findOrFail($id);
        $empresa = Empresa::all();

        return view("plataformas.show", compact("plataformas", "empresa"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $plataforma = Plataforma::findOrFail($id);
        $empresas = Empresa::all();

        return view("plataformas.edit", compact("plataforma", "empresas"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
        $plataforma = Plataforma::findOrFail($id);

        $plataforma->update($request->all());

        return redirect("/plataformas");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
        $plataforma = Plataforma::findOrFail($id);

        $plataforma->delete();

        return redirect("/plataformas");
    }

}
