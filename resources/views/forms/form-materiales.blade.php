@extends('menu_home')

@section('contenido')
  <p class="title-form">NUEVO REGISTRO</p>
  <main class="main-form">
    <form action="#" class="form">
     <div class="div-form">
       <label for="">Nombre de la Obra</label>
       <input type="text">
     </div>
     <div class="div-form">
       <label for="">Supervisor</label>
       <input type="text">
     </div>
     <div class="div-form">
       <label for="">OB</label>
       <input type="text">
     </div>
     <div class="div-form">
       <label for="">Estatus</label>
       <input type="text">
     </div>
     <div class="div-form">
       <label for="">Observaciones</label>
       <input type="text">
     </div>
     <div class="div-form">
       <button class="form-button">Registrar</button>
     </div>
    </form>
  </main>
@endsection

@section('scripts')
    
@endsection
