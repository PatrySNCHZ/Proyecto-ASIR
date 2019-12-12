@extends("../layouts.plantilla")

@section('cabecera')
@include("layouts.banner")
@endsection

@section('base')


<style>

    .tabla {
        padding: 30px;
        width: 1800px;
    }   

</style>

<div class="tabla">
    <h1>Videojuegos</h1>
    <table border="2" class="table table-sm">

        <tr>
            <td>
                Nombre Videojuego
            </td>

            <td>
                Fecha de salida
            </td>

            <td>
                Precio
            </td>

            <td>
                Género
            </td>

            <td>
                Imagen
            </td>

        </tr>

        @foreach($videojuegos as $videojuego)


        <tr>
            <td><a href="/videojuegos/{{$videojuego->id}}">{{$videojuego->Nombre_Videojuego}}</a></td>
            <td>{{date('d-m-Y', strtotime($videojuego->Fecha_Salida))}}</td>
            <td>{{$videojuego->Precio}}</td>
            <td>{{$videojuego->genero}}</td>
            <td><img src='/images/{{$videojuego->Ruta}}' width="75"/></td>
        </tr>

        @endforeach
    </table>
    <a href="{{route('imprimir')}}"> Imprimir en PDF </a> <br/>
</div>
@endsection

@section('pie')
@endsection