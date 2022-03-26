
@extends('menu_home')

@section('contenido')
  <p class="title-form">NUEVO REGISTRO</p>
  @if (Session::has('status'))

  <div class="text-danger" role="alert">
        {{Session::get('status')}}
  </div>
  @endif

  <main class="main-form">
    <form action="{{ route('garantias.save') }}" class="form-osliquidadas" method="POST">
       @csrf
     <div class="div-form-two">
       <label for="">Cope</label>
        <input type="text" id="cope" name="cope">
     </div>
     <div class="div-form-two">
       <label for="">Tecnico</label>
       <select id="tec_name" name="tec_name">
         @foreach ($tecnicos as $item) 
           <option value="{{ $item->nombre_tec}}">{{ $item->nombre_tec }}</option>
         @endforeach
       </select>
     </div>
     <div class="div-form-two">
       <label for="">Nombre del cliente</label>
       <input type="text" id="name_cli" name="name_cli" autocomplete="off" required>
     </div>
     <div class="div-form-two">
       <label for="">Telefono del cliente</label>
       <input type="text" name="num_cli" id="num_cli" autocomplete="off" required>
     </div>
     <div class="div-form-two">
       <label for="">Liquidación</label>
       <input type="number" id="liquidacion" name="liquidacion" >
       <!--<input type="text" name="nombre_tecnico" placeholder="Oscar" autocomplete="off" required>-->
     </div>
     <div class="div-form-two">
       <label for="">Causa</label>
       <input type="number" name="causa" id="causa" />
       <!-- <input type="text" name="pic_tecnico" autocomplete="off" required> -->

     </div>
     <div class="div-form-two">
       <label for="">Tipo de Falla</label>
       <input type="number" name="tipo_falla" autocomplete="off" required>
     </div>
     <div class="div-form-two">
       <label for="">Accion Tomada</label>
       <input type="text" name="accion_tomada" autocomplete="off" required>
     </div>
     <div class="div-form-two">
       <label for="">Fecha</label>
       <input type="date" name="fecha" autocomplete="off" required>
     </div>
      <div class="div-form-two">
        <label for="">Observacion</label>
        <input type="text" name="observacion" autocomplete="off" required>
      </div>
     <div class="div-form-two">
       <button class="form-button" type="submit" role="button">Guardar</button>
     </div>
    </form>
  </main>
@endsection

@section('scripts')
    
@endsection
