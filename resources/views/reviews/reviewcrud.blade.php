@extends("../layouts.plantilla")


@section('cabecera')
@include("layouts.bannercrud")
@endsection

@section('base')

<style>
    .container {
        padding: 30px;
        width: 1800px;
    }   

    .card {
        width: 1000px;
    }

    h1 {
       width: 1800px;
    }
    #image{
        width: 900px;
        display:block;
        margin:auto;
    }
</style>

<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <div class='titulo'>
            <h1>{{ $reviews->titulo }}</h1>
        </div>
        <div class="card mb-3">
            <div class="card-header"> 


                Videojuego:

                @foreach($videojuegos as $review)
                <a href="/videojuegos/{{$reviews->videojuegos_id}}">{{$review->Nombre_Videojuego}}</a>
                @endforeach



                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  


                Plataforma:

                @foreach($plataformas as $review)
                <a href="/plataformas/{{$reviews->plataformas_id}}">{{$review->Nombre_Plataforma}}</a>
                @endforeach    
                
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                @foreach($plataformas as $review)
                <a href="{{route('reviews.edit',$reviews->id)}}">Editar</a>
                @endforeach   

            </div> 

            <div class="card-body">


                <div class="col-md-4 imagen">
                    <img id='image' src='/images/{{$reviews->file}}' class="card-img" alt="..."width="1000">
                </div>

                <hr>
                {!! $reviews->texto !!}
                </hr>

            </div>
        </div>
    </div>

</div>

@endsection

@section('pie')

@endsection



