@extends("../layouts.plantilla")

@section('cabecera')
@include("layouts.bannercrud")
@endsection

@section('base')

<style>

    .tabla {
        padding: 30px;
        width: 1500px;
    }   

</style>
<body>
    <div class="tabla">
        <h1>Plataformas</h1>
        <table border="2" class="table table-sm"

               <tr>
                <td>
                    Nombre Plataforma
                </td>

                <td>
                    Empresa de Plataforma
                </td>
                <td>
                    Fecha de Salida
                </td>
                <td>
                    Precio
                </td>
                <td>
                    Portabilidad
                </td>

            </tr>

            @foreach($plataformas as $plataforma) 
            <tr>
                <td><a href="{{route('plataformas.edit',$plataforma->id)}}">{{$plataforma->Nombre_Plataforma}}</a></td>
                <td>{{$plataforma->Nombre_Empresa}}</td>
                <td>{{$plataforma->Fecha_Salida_Plataforma}}</td>
                <td>{{$plataforma->Precio}}</td>
                <td>{{$plataforma->Portatil== 0 ? 'No' : 'Sí'}}</td>
            </tr>

            @endforeach
        </table>
    </div>
</body>
@endsection

@section('pie')
@endsection