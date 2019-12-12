<style type="text/css">
    .formulario {
        padding: 50px;
    }
    .boton {
        padding-top: 10px;    
    }
    .form-control{
        width: 500px;    

    }
</style>

<div class="formulario">
    <h1> Crear plataforma </h1>
    <form method="post" action="/plataformas">

        <div>
            <label for="Nombre_Plataforma">Nombre de plataforma:</label>  <br/>
            <input type="text" name="Nombre_Plataforma" class="form-control">
            {{csrf_field()}}
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
            <input type="number" name="Fecha_Salida_Plataforma" class="form-control">
        </div>

        <div>
            <label for="Precio">Precio:</label>   <br/>
            <input type="number" name="Precio" class="form-control">
        </div>

        <div>
            <label for="Portatil">¿Portátil?</label> 
            <label><input type="radio" id="smt-fld-1-2" name="optradio1" value="true">&nbsp;Sí&nbsp;</label> | 
            <label><input type="radio" id="smt-fld-1-3" name="optradio1" false="false">&nbsp;No&nbsp;</label>
        </div>
      
         <div>
            <label for="descripcion">Descripción: </label>
            <textarea name="descripcion" class="form-control" id="descripcion" rows="3"></textarea>
         </div>
    
        
        
        <div class="boton">
            <button type="submit" name="Enviar" values="Enviar" class="btn btn-primary">Añadir a la base de datos</button>
            <input type="reset" name="Borrar" values="Borrar campos" class="btn btn-primary">
            <br/>
            <a class="btn btn-link" href="/plataformas" > Ver las plataformas</a>
        </div>
    </form>

    @yield("formulario")
</div>
