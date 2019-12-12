@extends("../layouts.plantilla")

@section('cabecera')
@include("layouts.banner")
@endsection

@section('base')

<style>
    .form-group{
    width: 450px; 
    
    }
    .contacta {
        padding: 50px;
    }

</style>

<div class="contacta">
      <h1>Contáctanos</h1>
<form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Correo electrónico: </label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControInput2">Asunto:</label>
    <input type="asunto" class="form-control" id="exampleFormControlInput2">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Texto:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</form>

<button type="button" class="btn btn-primary">Enviar</button>
</div>
@endsection

@section('pie')
@endsection