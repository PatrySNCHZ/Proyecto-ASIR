<div class="formulario" style="width:400px; margin:0 auto; padding:20px 0;">
    
    @yield("formulario")
    
            <div class="box" width="400px" position="absolute" bottom:0>
<form>
                 <div class="box">
                    <label for="Nombre_Plataforma">Nombre</label>
                      <input type="text">
                  </div>
                  <div class="box">
                       <label for="Empresa_Plataforma">Empresa</label>
                       <input type="text">
                  </div>

                  <div class="box">
                       <label for="Fecha_Salida_Plataforma">Año de salida</label>
                       <input type="text">
                </div>

                <div class="box">
                       <label for="Precio">Precio</label>
                       <input type="text">
                </div>


                <div class="box">
                       <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1"> ¿Está todo correcto?</label>
                </div>
            
            <button type="submit" class="btn btn-primary">Añadir a la base de datos</button>
            <a class="btn btn-link"> Ver las plataformas</a>
</form>

   </div>
