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

<div class="formulario">
    <h1> Crear accesorio </h1>
    <form method="post" action="/accesorios">

        <div>
            <label for="Nombre_Accesorio">Accesorio:</label>  <br/>   
            <input type="text" name="Nombre_Accesorio" class="form-control"> 
            {{csrf_field()}}
        </div>

        <div>   
            <label for="Precio">Precio:</label>  <br/>  
            <input input="number" step="any" name="Precio" class="form-control">
        </div>

        <div>
            <label for="plataformas_id"> Plataforma: </label> <br/>
            <select name="plataformas_id" id="plataformas_id" class="form-control">
                @foreach ($plataformas as $plataforma)
                <option value="{{ $plataforma['id'] }}">{{ $plataforma['Nombre_Plataforma']}}</option>
                @endforeach
            </select>

        </div>

        <div class="botones">
                <input type="submit" name="enviar" values="Enviar" class="btn btn-primary">
                <input type="reset" name="Borrar" values="Borrar" class="btn btn-primary">
  
        </div>        
                
                <a class="btn btn-link" href="/accesorios" > Ver los accesorios</a>
    </form>
</div>
@endsection

@section('pie')
@endsection