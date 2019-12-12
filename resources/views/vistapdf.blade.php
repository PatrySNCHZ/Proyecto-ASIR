<?php

use App\Http\Controller\VideojuegosController;
use App\Http\Controler\PDFController;
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Styles -->

        <title>Document</title>


        <style>



            h1{
                text-align: center;
                font-family: Futura,sans-serif;
                color:#0080FF;
            }
            .contenido{
                font-size: 20px;
            }
            #primero{
                background-color: #ccc;
            }
            #segundo{
                color:#44a359;
            }
            #tercero{
                text-decoration:line-through;
            }
            table{
                font-family: Calibri, sans-serif;
                table-layout: fixed;
                width: 700px;
           
            }
           th,
            td {
            width: 100px;
            overflow: hidden;
                }
            

        </style> 
    </head>
    <body>
        <h1>GamesNow</h1>
        <img src="{{ asset('images/banner.jpg') }}" width="700">
        <hr>
        <div class="contenido">
            <table border="0" class="table table-striped">
                <tr>
                    <th class='row'>
                        Videojuego        
                    </th>

                    <th class='row'>
                        Fecha de salida
                    </th>

                    <th class='row'>
                        Precio
                    </th>

                    <th class='row'>
                        Género
                    </th>
                </tr>

                @foreach($videojuegos as $videojuego) 
                <tr>

                    <td class='row'>{{$videojuego->Nombre_Videojuego}}</a></td>
                    <td class='row'>{{date('d-m-Y', strtotime($videojuego->Fecha_Salida))}}</td>
                    <td class='row'>{{$videojuego->Precio}}</td>
                    <td class='row'>{{$videojuego->genero}}</td>
                    

                </tr>
                @endforeach
        </div>
    </body>
</html>

