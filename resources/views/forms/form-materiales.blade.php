@extends('menu_home')

@section('contenido')
  <p class="title-form">NUEVO REGISTRO</p>
  @if (Session::has('status'))

  <div class="text-danger" role="alert">
        {{Session::get('status')}}
  </div>

  @endif
  <main class="main-form">
    <form action="{{ route('materiales.insert') }}" class="form" method="POST">
       @csrf
     <div class="div-form">
       <label for="">Nombre de la Obra</label>
       <input type="text" required name="name_obra" autocomplete="off">
     </div>
     <div class="div-form">
       <label for="">Supervisor</label>
       <input type="text" name="supervisor" autocomplete="off" required>
     </div>
     <div class="div-form">
       <label for="">OB</label>
       <input type="text" name="ob" autocomplete="off" required>
     </div>
     <div class="div-form">
       <label for="">Estatus</label>
       <input type="text" name="estatus" autocomplete="off" required>
     </div>
     <div class="div-form">
       <label for="">Observaciones</label>
       <input type="text" name="observaciones" autocomplete="off" required>
     </div>
     <div class="div-form">
       <button class="form-button" type="submit">Registrar</button>
     </div>
    </form>
  </main>
@endsection

@section('scripts')
    
@endsection
