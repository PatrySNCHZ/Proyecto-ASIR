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
    
    .borra {
        padding-top: 20px;
    }

</style>

<div class="formulario">
    <h1> Editar accesorio </h1>
    <form method="post" action="/accesorios/{{$accesorios->id}}">

        <div>
            <label for="Nombre_Accesorio">Accesorio:</label>  <br/>   
            <input type="text" name="Nombre_Accesorio" class="form-control" value="{{$accesorios->Nombre_Accesorio}}"> 
            {{csrf_field()}}

            <input type='hidden' name='_method' value='PUT'>

        </div>

        <div>   
            <label for="Precio">Precio:</label>  <br/>  
            <input input="number" step="any" name="Precio" class="form-control" value="{{$accesorios->Precio}}">
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
            <a class="btn btn-link" href="/accesorios" > Atrás </a>
           

        </div>        

    </form>

    <form class="borra" method="post" action="/accesorios/{{$accesorios->id}}">

        {{csrf_field()}}
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" name="Eliminar registro" class="btn btn-primary" value="Eliminar registro" ONCLICK="return confirm('¿Está seguro de que desea borrar?')"> 
    </form>
       
</div>


@endsection
@section('pie')
@endsection