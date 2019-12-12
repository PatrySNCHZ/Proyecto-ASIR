@extends("layouts.plantilla")

@section("cabecera")
@include("layouts.banner")
@endsection

@section("base")

<!--
<style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         
</style>
-->

<style>

    .base{
        padding: 30px;
    }    
    
    body { background: white url(../images/mosaico.jpg);
           background-repeat: repeat; 
    }
    
    h1,h3 {
        color: #005cc5;
    }
    
    .list-group {
        padding-top: 15px;
    }
    
    .carousel-item {
        width: 1000 px;
        height: 650px;
    }
    
</style>
<body>    

    <div class="base">
        <div class="row">
            <div class="col-sm">
                <h1> Bienvenido a GamesNow </h1>
                 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset("/images/consolas.jpg")}}" alt="First slide" width="700px">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset("/images/gameawards.jpg")}}" alt="Second slide" width="700px">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset("/images/lanznoviembre.jpg")}}" alt="Third slide" width="700px">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
            <div class="col-sm">
                
                
                   <ul class="list-group">
                    <h3>Canales de interés:</h3>
                    <li class="list-group-item"><a href="https://www.twitch.com" target="_blank">Twitch</a></li>
                    <li class="list-group-item"><a href="https://www.youtube.com" target="_blank">Youtube</a></li>
                    <li class="list-group-item"><a href="https://www.twitter.com" target="_blank">Twitter</a></li>
                    <li class="list-group-item"><a href="https://www.instant-gaming.com" target="_blank">Visita Instant-Gaming para juegos a menor precio</a></li>
                    <li class="list-group-item"><a href="https://www.GAME.es" target="_blank">Enlace a página de GAME.es</a></li></li>
                </ul>
                
                

               

<!--
            </div>
            <div class="col-sm">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">GOTWs</th>
                            <th scope="col">Título</th>
                            <th scope="col">Plataforma</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>The Last of Us Part II</td>
                            <td>Playstation 4</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Astral Chain</td>
                            <td>Nintendo Switch</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Gears 5</td>
                            <td>Xbox</td>
                        </tr>
                    </tbody>
                </table>
            </div>
-->
        </div>
    </div>
    @endsection
    @section("pie")
    @endsection