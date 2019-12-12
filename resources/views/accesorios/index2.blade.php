@extends("../layouts.plantilla")

@section('cabecera')
@include("layouts.banner")
@endsection

@section('base')

<style>

    .tabla {
        padding: 30px;
        width: 1000px;
    }   

</style>


<div class="tabla">
    <h1>Accesorios</h1>
    <table border="2" class="table table-sm">

        <tr>
            <td>
                Nombre accesorio
            </td>

            <td>
                Precio
            </td>

            <td>
                Plataforma
            </td>
        </tr>


        @foreach($accesorios as $accesorio)



        <tr>
            <td>{{$accesorio->Nombre_Accesorio}}</a></td>
            <td>{{$accesorio->Precio}}</td>
            <td>{{$accesorio->Nombre_Plataforma}}</td>
        </tr>

        @endforeach

    </table>
</div>
@endsection

@section('pie')
@endsection