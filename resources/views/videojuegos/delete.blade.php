@extends("../layouts.plantilla")

@section('cabecera')
@include("layouts.bannercrud")
@endsection

@section('base')
<form method="post">
    <input type="text" name="Nombre_Videojuego">
    <input type="number" name="Fecha_Salida">
    <input type="select" name="Genero">
    <input type="number" name="Precio">
    <input type="submit" name="enviar" values="Enviar">

    @endsection

    @section('pie')
    @endsection