@extends('menu_home')

@section('contenido')
  <p class="title-form">NUEVO REGISTRO</p>
  <main class="main-form">
    <form action="{{ route('home') }}" class="form">
     <div class="div-form">
       <label for="">Estado</label>
			 <select id="" name="select">
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
       </select>
     </div>
     <div class="div-form">
       <label for="">Fecha</label>
       <input type="date" required>
     </div>
     <div class="div-form">
       <label for="">Num. Telefono</label>
       <input type="tel" placeholder="9169999999" maxlength="10" required>
     </div>
     <div class="div-form">
       <label for="">Nom. Cliente</label>
       <input type="text" placeholder="David" required>
     </div>
     <div class="div-form">
       <label for="">Nom. Tecnico</label>
       <input type="text" placeholder="Oscar" required>
     </div>
     <div class="div-form">
       <label for="">Distrito</label>
       <input type="text" placeholder="XAM0005FO" required>
     </div>
     <div class="div-form">
       <button class="form-button" type="submit" role="button">Guardar</button>
     </div>
    </form>
  </main>
@endsection

@section('scripts')
    
@endsection
