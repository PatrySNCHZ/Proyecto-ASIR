@extends("../layouts.plantilla")

@section('cabecera')
@include("layouts.bannercrud")
@endsection

@section('base')

<style>
    .card-body {
        max-width: 500px;
        margin: 20px;
    }   

    .container {
        padding: 50px;
    }
</style>


<div class="container">
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-8">
                <div class="card-body">
                    <h1 class="card-title">{{$plataformas->Nombre_Plataforma}}</h1>

                    <p class="card-text"> Año de salida: {{$plataformas->Fecha_Salida_Plataforma}}</p>
                    <p class="card-text"> Precio: {{$plataformas->Precio}} €</p>
                    <p class="card-text">{{$plataformas->Portatil== 0 ? 'No' : 'Sí'}} es portátil</p>
                    <p class="card-text"> Descripción: </p>
                    <text width="550">

                    {{$plataformas->descripcion}}

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