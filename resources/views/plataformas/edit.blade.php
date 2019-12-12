@extends("../layouts.plantilla")

@section('cabecera')
@include("layouts.bannercrud")
@endsection

@section('base')

<style>
    
    body { background: white url('/images/mosaico.jpg');
           background-repeat: repeat; 
    }
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

<html>

    <body>
    <div class="formulario">
        <h1> Editar plataforma </h1>
        <form method="post" action="/plataformas/{{$plataforma->id}}">

            <div>
                <label for="Nombre_Plataforma">Nombre de plataforma:</label>  <br/>
                <input type="text" name="Nombre_Plataforma" class="form-control" value="{{$plataforma->Nombre_Plataforma}}">
                {{csrf_field()}}

                <input type='hidden' name='_method' value='PUT'>
            </div>                        
            <div>
                <label for="empresa_id"> Empresa: </label> <br/>
                <select name="empresa_id" id="empresa_id" class="form-control">
                    @foreach ($empresas as $empresa)
                    <option value="{{ $empresa['id'] }}">{{ $empresa['Nombre_Empresa']}}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="Fecha_Salida_Plataforma">Año de salida:</label>   <br/>
                <input type="number" name="Fecha_Salida_Plataforma" class="form-control" value="{{$plataforma->Fecha_Salida_Plataforma}}">
            </div>

            <div>
                <label for="Precio">Precio:</label>   <br/>
                <input type="number" name="Precio" class="form-control" value="{{$plataforma->Precio}}">
            </div>

            <div>
                <label for="Portatil">¿Portátil?</label> 
                <label><input type="radio" id="smt-fld-1-2" name="optradio1" value="true">&nbsp;Sí&nbsp;</label> | 
                <label><input type="radio" id="smt-fld-1-3" name="optradio1" false="false">&nbsp;No&nbsp;</label>
            </div>

            <div>
                <label for="descripcion">Descripción: </label>
                <textarea name="descripcion" class="form-control" id="descripcion" rows="3" placeholder="{{$plataforma->descripcion}}"></textarea>
            </div>


            <div class="botones">
                <input type="submit" name="enviar" values="Actualizar" class="btn btn-primary">
                <a class="btn btn-link" href="/plataformas" > Atrás </a>
            </div>

        </form>

        <form class="borra" method="post" action="/plataformas/{{$plataforma->id}}">

            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" name="Eliminar registro" class="btn btn-primary" value="Eliminar registro" ONCLICK="return confirm('¿Está seguro de que desea borrar?')">
        </form>
    </div>
    </body>
</html>

@endsection
@section('pie')
@endsection