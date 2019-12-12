@extends("../layouts.plantilla")

@section('cabecera')
@include("layouts.bannercrud")
@endsection

@section('base')
<form method="post">
    <input type="text" name="NombreProducto">
    <input type="number" name="Precio">
    <input type="submit" name="enviar" values="Enviar">
    @endsection

    @section('pie')
    @endsection