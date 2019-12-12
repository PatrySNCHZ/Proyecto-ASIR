@extends("../layouts.plantilla")

@section('cabecera')
@include("layouts.banner")
@endsection

@section('base')
<html>
    
    
    
<style>

    .lista {
        padding: 50px;
    }
    

    body { background: white url('/images/mosaico.jpg');
           background-repeat: repeat; 
    }
    

</style>


<div class="lista" id='lista'>
      <h1> Videojuegos de {{$plataforma->Nombre_Plataforma}}</h1>
      <ul>
          @foreach($plataforma->videojuego as $videojuego)
          <li><a href="/videojuegos/{{$videojuego->id}}">{{$videojuego->Nombre_Videojuego}}</a> </li>
          @endforeach
      </ul>

</div>

</html>
@endsection

@section('pie')
@endsection