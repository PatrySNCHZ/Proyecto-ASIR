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
    <h1> Editar Review </h1>
    <form method="post" action="/reviews/{{$reviews->id}}">

    <div>
        <label for="titulo">Titulo:</label>  <br/>
        <input type="text" name="titulo" class="form-control" value="{{$reviews->titulo}}">
        {{csrf_field()}}
        
         <input type='hidden' name='_method' value='PUT'>
        
    </div>     



    <div>
        <label for="texto">Texto:</label>  <br/>
        <textarea cols="5" rows="6" type="textarea" name="texto" class="form-control" placeholder="{{$reviews->texto}}"></textarea>
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

        <div class="botones">
                <input type="submit" name="enviar" values="Actualizar" class="btn btn-primary">
                 <a class="btn btn-link" href="/reviews" > Atrás </a>
           </div>
        <br/>

</form>

<form method="post" action="/reviews/{{$reviews->id}}">

    {{csrf_field()}}
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" name="Eliminar registro" class="btn btn-primary" value="Eliminar registro" ONCLICK="return confirm('¿Está seguro de que desea borrar?')"> 
</form>



</div>
@endsection

@section('pie')

@endsection
