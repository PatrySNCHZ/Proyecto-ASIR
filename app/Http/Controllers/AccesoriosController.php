<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Session;
use App\Accesorio;
use App\Plataforma;

class AccesoriosController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $accesorios = Accesorio::listar_plataformas();
        $plataformas = Plataforma::all();

        return view("accesorios.index", compact("accesorios", "plataformas"));
    }

    public function index2() {
        $accesorios = Accesorio::listar_plataformas();
        $plataformas = Plataforma::all();

        return view("accesorios.index2", compact("accesorios", "plataformas"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        $plataformas = Plataforma::all();
        return view("accesorios.create", compact('plataformas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $accesorios = new Accesorio;

        $accesorios->Nombre_Accesorio = $request->Nombre_Accesorio;
        $accesorios->Precio = $request->Precio;
        $accesorios->plataformas_id = $request->plataformas_id;
        $accesorios->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $accesorios = Accesorio::findOrFail($id);

        return view("accesorios.show", compact("accesorios"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $plataformas = Plataforma::all();
        $accesorios = Accesorio::findOrFail($id);

        return view("accesorios.edit", compact("accesorios", "plataformas"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $plataformas = Plataforma::all();
        $accesorios = Accesorio::findOrFail($id);

        $accesorios->update($request->all());

        return redirect("/accesorios");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $accesorios = Accesorio::findOrFail($id);

        $accesorios->delete();

        return redirect("/accesorios");
    }

}
