@extends("../layouts.plantilla")

@section('cabecera')
@include("layouts.bannercrud")
@endsection

@section('base')
<form method="post">
    <input type="text" name="Nombre_Accesorio">
    <input type="number" name="Precio">
    <label for="plataforma_id"> Plataforma: </label>
    <select name="plataforma_id" id="plataforma_id" class="form-control">
        @foreach ($plataformas as $plataforma)
        <option value="{{ $plataforma['id'] }}">{{ $plataforma['Nombre_Plataforma']}}</option>
        @endforeach
    </select>            

    <input type="submit" name="enviar" values="Enviar">
    @endsection

    @section('pie')
    @endsection