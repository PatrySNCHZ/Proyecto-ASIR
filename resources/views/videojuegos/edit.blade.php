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
</style>


<form method="post" action="/videojuegos/{{$videojuegos->id}}">
    
    <div class="formulario">
        <h1> Editar videojuego </h1>
        <div>
            <label for="Nombre_Videojuego">Nombre videojuego:</label>  <br/>
            <input  class="form-control" type="text" name="Nombre_Videojuego" value="{{$videojuegos->Nombre_Videojuego}}">
            {{csrf_field()}}
            
            <input type='hidden' name='_method' value='PUT'>
        </div> 

        <div>


            <label for="Fecha_Salida">Fecha:</label>   <br/>
            <input  class="form-control" type="date" name="Fecha_Salida" id="datepicker" value="{{$videojuegos->Fecha_Salida}}">
        </div>  

        <div>
            <label for="Precio">Precio:</label>   <br/>
            <input  class="form-control" type="number" name="Precio" value="{{$videojuegos->Precio}}">
        </div>

        <div>
            <label for="genero_id"> Género: </label> <br/>

            <select name="genero_id" id="genero_id" class="form-control">
                @foreach ($generos as $genero)
                <option value="{{ $genero['id'] }}">{{ $genero['genero']}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="sinopsis">Sinopsis: </label>
            <textarea name="sinopsis" class="form-control" rows="3" placeholder="{{$videojuegos->sinopsis}}"></textarea>
        </div>


        <div>
            <label for="file"> Sube la imagen: </label> <br/> 
            {!!Form::file('file')!!}
        </div>  
        
           <div class="botones">
                <input type="submit" name="enviar" values="Actualizar" class="btn btn-primary">
                 <a class="btn btn-link" href="/videojuegos" > Atrás </a>
           </div>
        
        
        <br/>

        

</form>

<form method="post" action="/videojuegos/{{$videojuegos->id}}">

    {{csrf_field()}}
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" name="Eliminar registro" class="btn btn-primary" value="Eliminar registro" ONCLICK="return confirm('¿Está seguro de que desea borrar?')"> 
</form>

</div>
@endsection
@section('pie')
@endsection