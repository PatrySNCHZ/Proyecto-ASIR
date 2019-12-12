<style type="text/css">
    .formulario {
        padding: 50px;
    }
    .boton {
        padding-top: 10px;    
    }

    .form-control{
        width: 500px; 
    
     .botones {
        padding-top: 20px;
    }

    }
</style>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<div class="formulario">
    <h1> Crear videojuego </h1>
    {!! Form::open(['url'=> '/videojuegos', 'method'=>'post', 'files'=>true])!!}

    <div>
        <label for="Nombre_Videojuego">Nombre videojuego:</label>  <br/>
        <input  class="form-control" type="text" name="Nombre_Videojuego">
        {{csrf_field()}}
    </div> 

    <div>


        <label for="Fecha_Salida">Fecha:</label>   <br/>
        <input  class="form-control" type="date" name="Fecha_Salida" id="datepicker">
    </div>  

    <div>
        <label for="Precio">Precio:</label>   <br/>
        <input  class="form-control" type="number" name="Precio">
    </div>

    <div>
        <label for="genero_id"> Género: </label> <br/>

        <select name="genero_id" id="genero_id" class="form-control">
            @foreach ($generos as $genero)
            <option value="{{ $genero['id'] }}">{{ $genero['genero']}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
           <label for="sinopsis">Sinopsis: </label>
            <textarea name="sinopsis" class="form-control" rows="3"></textarea>
    </div>
    
    
    <div>
        <label for="file"> Sube la imagen: </label> <br/> 
        {!!Form::file('file')!!}
    </div>    
<br/>

    <div class="boton">
            <button type="submit" name="Enviar" values="Enviar" class="btn btn-primary">Añadir a la base de datos</button>
            <input type="reset" name="Borrar" values="Borrar campos" class="btn btn-primary">
            <br/>
            <a class="btn btn-link" href="/videojuegos" > Ver los videojuegos</a>
        </div>
    </form>


@yield("formulariovideojuego")
</div>
