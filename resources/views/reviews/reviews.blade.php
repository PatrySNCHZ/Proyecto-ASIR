@extends("../layouts.plantilla")

@section('cabecera')
@include("layouts.banner")
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
    
    .noticia {
        padding-top: 10px;
        padding-bottom: 30px;
    }
 
</style>

    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <h1>Reviews y Noticias</h1>
        
        <div class='noticia'>
            @foreach($reviews as $review)
            <div class="card">
                <div class="card-header">
                    {{ $review->titulo }}
                </div>
                
                <div class="card-body">
                    @if($review->file)
                    <img scr="{{$review->file }}" class="img-responsive">
                    @endif
                    {{ $review->texto}}
                    <a href=" {{ route('verreview', $review->id) }}" class="pull-right">Leer más</a>
                    
                </div>
            </div>
        </div>
            @endforeach
            {{ $reviews->render() }}
        </div>
        
    </div>

@endsection

@section('pie')

@endsection
        
        

