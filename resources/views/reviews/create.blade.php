@extends("../layouts.plantilla")

@section('cabecera')
@include("layouts.bannercrud")
@endsection

@section('base')


<style type="text/css">
    .formulario {
        padding: 50px;
    }
    .boton {
        padding-top: 10px;    
    }

    .form-control{
        width: 500px; 
    }
    .botones {
        padding-top: 20px;
    }

    textarea {
        resize: none;
    }

</style>

<div class="formulario">
    <h1> Crear Review </h1>
    {!! Form::open(['url' => '/reviews', 'method' => 'post', 'files'=>true]) !!}

    <div>
        <label for="titulo">Titulo:</label>  <br/>
        <input type="text" name="titulo" class="form-control">
        {{csrf_field()}}
    </div>     



    <div>
        <label for="texto">Texto:</label>  <br/>
        <textarea cols="5" rows="6" type="textarea" name="texto" class="form-control" ></textarea>
        {{csrf_field()}}
    </div>   


    <div>
        <label for="users_id"> Creador: </label> <br/>
        <select name="users_id" id="users_id" class="form-control">
            @foreach ($users as $user)
            <option value="{{ $user['id'] }}">{{ $user['name']}}</option>
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

    <div>
        <label for="file"> Sube la imagen: </label> <br/> 

        {!!Form::file('file')!!}

    </div>    
    <br/>

    <div class="boton">
        <button type="submit" name="Enviar" values="Enviar" class="btn btn-primary">Añadir review</button>
        <input type="reset" name="Borrar" values="Borrar" class="btn btn-primary">
        <br/>
        <a class="btn btn-link" href="/reviews" > Ver reviews</a>
    </div>


    {!! Form::close() !!}

</div>
@endsection

@section('pie')

@endsection
