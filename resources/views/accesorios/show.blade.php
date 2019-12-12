@extends("../layouts.plantilla")

@section('cabecera')
@include("layouts.bannercrud")
@endsection

@section('base')

<h1>{{$accesorio->Nombre_Accesorio}}</h1>

@endsection

@section('pie')
@endsection