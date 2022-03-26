@extends('menu_home')

@section('contenido')
  <p class="title-form">NUEVO REGISTRO</p>
  @if (Session::has('status'))

  <div class="text-danger" role="alert">
        {{Session::get('status')}}
  </div>
  @endif

  <main class="main-form">
    <form action="{{ route('liquidadas.insert') }}" class="form-osliquidadas" method="POST">
       @csrf
     <div class="div-form-two">
       <label for="">Estado</label>
			 <select id="select" name="select">
				  <option value="Aguascalientes">Aguascalientes</option>
				  <option value="Baja California">Baja California</option>
				  <option value="Baja California Sur">Baja California Sur</option>
				  <option value="Campeche">Campeche</option>
              <option value="Chiapas">Chiapas</option>
              <option value="Chihuahua">Chihuahua</option>
              <option value="Ciudad de México">Ciudad de México</option>
              <option value="Coahuila">Coahuila</option>
              <option value="Colima">Colima</option>
              <option value="Durango">Durango</option>
              <option value="Guanajuato">Guanajuato</option>
              <option value="Guerrero">Guerrero</option>
              <option value="Hidalgo">Hidalgo</option>
              <option value="Jalisco">Jalisco</option>
              <option value="México">México</option>
              <option value="Michoacán">Michoacán</option>
              <option value="Morelos">Morelos</option>
              <option value="Nayarit">Nayarit</option>
              <option value="Nuevo León">Nuevo León</option>
              <option value="Oaxaca">Oaxaca</option>
              <option value="Puebla">Puebla</option>
              <option value="Querétaro">Querétaro</option>
              <option value="Quintana Roo">Quintana Roo</option>
              <option value="San Luis Potosí">San Luis Potosí</option>
              <option value="Sinaloa">Sinaloa</option>
              <option value="Sonora">Sonora</option>
              <option value="Tabasco">Tabasco</option>
              <option value="Tamaulipas">Tamaulipas</option>
              <option value="Tlaxcala">Tlaxcala</option>
              <option value="Veracruz">Veracruz</option>
              <option value="Yucatán">Yucatán</option>
              <option value="Zacatecas">Zacatecas</option>
			 </select>
     </div>
     <div class="div-form-two">
       <label for="">Fecha</label>
       <input type="date" name="fecha" autocomplete="off" required>
     </div>
     <div class="div-form-two">
       <label for="">Numero de Telefono</label>
       <input type="tel" name="telefono" placeholder="9169999999" maxlength="10" autocomplete="off" required>
     </div>
     <div class="div-form-two">
       <label for="">Nombre del Cliente</label>
       <input type="text" name="nombre_cliente" placeholder="David" autocomplete="off" required>
     </div>
     <div class="div-form-two">
       <label for="">Nombre del Tecnico</label>
       <select id="nombre_tecnico" name="nombre_tecnico">
        @foreach($tec_name as $item)
          <option value="{{ $item->nombre_tec }}"> {{ $item->nombre_tec }}</option>
        @endforeach
       </select>
       <!--<input type="text" name="nombre_tecnico" placeholder="Oscar" autocomplete="off" required>-->
     </div>
     <div class="div-form-two">
       <label for="">PIC Tecnico</label>
       <select id="pic_tecnico" name="pic_tecnico">
        @foreach($tec_name as $item)
          <option value="{{ $item->pic }}"> {{ $item->pic }}</option>
        @endforeach
       </select>
       <!-- <input type="text" name="pic_tecnico" autocomplete="off" required> -->

     </div>
     <div class="div-form-two">
       <label for="">Metros de Instalacion</label>
       <input type="number" name="metros_instalacion" autocomplete="off" required>
     </div>
     <div class="div-form-two">
       <label for="">Numero Os</label>
       <input type="number" name="numero_os" autocomplete="off" required>
     </div>
     <div class="div-form-two">
       <label for="">Distrito</label>
       <input type="text" name="distrito" placeholder="XAM0005FO" autocomplete="off" required>
     </div>
      <div class="div-form-two">
        <label for="">Terminal</label>
        <input type="number" name="terminal" autocomplete="off" required>
      </div>
     <div class="div-form-two">
       <label for="">Puerto</label>
       <input type="text" name="puerto" autocomplete="off" required>
     </div>
     <div class="div-form-two">
       <label for="">Tecnologia</label>
       <input type="text" name="tec" autocomplete="off" required>
     </div>
     <div class="div-form-two">
       <button class="form-button" type="submit" role="button">Guardar</button>
     </div>
    </form>
  </main>
@endsection

@section('scripts')
    
@endsection
