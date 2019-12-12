@extends("../layouts.plantilla")

@section('cabecera')
@include("layouts.banner")
@endsection

@section('base')

<style>
    .card-body {
        max-width: 750px;
        margin: 20px;
    }   

    .container {
        padding: 50px;
    }
</style>

<div class="container">
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src='/images/{{$videojuegos->Ruta}}' class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h1 class="card-title">{{$videojuegos->Nombre_Videojuego}}</h1>

                    <p class="card-text">Fecha de Salida: {{date('d-m-Y', strtotime($videojuegos->Fecha_Salida))}}</p>
                    <p class="card-text">Precio: {{$videojuegos->Precio}} €</p>

                    @foreach ($generos as $videojuego)
                    <p class="card-text">Género: {{$videojuego->genero}}</p>
                    @endforeach

                    <p class="card-text"> Sipnosis: </p>
                    <text width="550">

                    {{$videojuegos->sinopsis}}

                    </text>

                    <p class="card-text"><small class="text-muted">2019(c)</small></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('pie')
@endsection