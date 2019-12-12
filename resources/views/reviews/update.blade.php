@extends("../layouts.plantilla")

@section('cabecera')
@include("layouts.banner")
@endsection

@section('base')


<div class="formulario">
    <form method="post" action="/reviews">

        <div>
            <label for="titulo">Titulo:</label>  <br/>
            <input type="text" name="titulo" class="form-control">
            {{csrf_field()}}
        </div>     


        <div>
            <label for="texto">Texto:</label>  <br/>
            <input type="textarea" name="texto" class="form-control">
            {{csrf_field()}}
        </div>   


        <div>
            <label for="users_id"> Creador: </label> <br/>
            <select name="users_id" id="users-with-column-specific-privileges-are-unable-to-browse_id" class="form-control">
                @foreach ($users as $user)
                <option value="{{ $users['id'] }}">{{ $users['name']}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="videojuegos_id"> Videojuego: </label> <br/>
            <select name="videojuegos_id" id="videojuegos_id" class="form-control">
                @foreach ($videojuegos as $videojuego)
                <option value="{{ $videojuego['id'] }}">{{ $videojuego['Nombre_Videojuego']}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="plataformas_id"> Plataforma: </label> <br/>
            <select name="plataformas_id" id="plataformas_id" class="form-control">
                @foreach ($plataformas as $plataforma)
                <option value="{{ $plataforma['id'] }}">{{ $plataforma['Nombre_Plataforma']}}</option>
                @endforeach
            </select>
        </div>


        @endsection

        @section('pie')

        @endsection
