@extends('menu_home')

@section('contenido')
  <p class="title-form">NUEVO REGISTRO</p>
  @if (Session::has('status'))

  <div class="text-danger" role="alert">
        {{Session::get('status')}}
  </div>
  @endif

  <main class="main-form">
    <form action="{{ route('obras.insert') }}" class="form-osliquidadas" method="POST">
       @csrf
     <div class="div-form-obras">
      <label for="">Nombre de la obra</label>
      <input type="text" name="obra" id="obra" autocomplete="off" required>
     </div>
     <div class="div-form-obras">
       <label for="">Estatus</label>
       <select id="estatus" name="estatus" required>
         <option value="COBRO 90%">COBRO 90%</option>
         <option value="COBRO 100%">COBRO 100%</option>
         <option value="LUM">LUM</option>
         <option value="PROCESO DE CONTRUCCIÓN">PROCESO DE CONTRUCCIÓN</option>
         <option value="RECEPCIÓN DE MATERIALES">RECEPCIÓN DE MATERIALES</option>
         <option value="COBRO MAX. AVANCE">COBRO MAX. AVANCE</option>

       </select>
     </div>
     <div class="div-form-obras">
       <label for="">Tipo de Estatus</label>
       <select id="t_estatus" name="t_estatus" required>
         <option value="COBRADO AL 90%">COBRADO AL 90%</option>
         <option value="COBRO 100%">COBRO 100%</option>
         <option value="PROCESO DE CONCILIAR">PROCESO DE CONCILIAR</option>
         <option value="LUM  PARA SOLICTAR PAGO">LUM  PARA SOLICTAR PAGO</option>
         <option value="OBRA EN PROCESO DE CONSTRUCCIÓN">OBRA EN PROCESO DE CONSTRUCCIÓN</option>
         <option value="DETALLADO">DETALLADO</option>
         <option value="PEDIR MATERIALES">PEDIR MATERIALES </option>
         <option value="MATERIALES RECIBIDOS">MATERIALES RECIBIDOS</option>
         <option value="COBRO MAX. AVANCE">COBRO MAX. AVANCE</option>
       </select>
     </div>
     <div class="div-form-obras">
       <label for="">Observación</label>
       <input type="text" name="observacion" id="observacion" autocomplete="off" required>
     </div>
     <div class="div-form-obras">
       <label for="">Tipo de Obra</label>
       <input type="t_obra" name="t_obra" id="t_obra"  autocomplete="off" required>
     </div>
     <div class="div-form-obras">
       <label for="">Supervisor</label>
       <select id="supervisor" name="supervisor" required>
          <option value="Epifanio">Epifanio</option>
					<option value="Oscar">Oscar</option>
					<option value="David">David</option>
        </select>
     </div>
     <div class="div-form-obras">
       <label for="">Fecha de Inicio</label>
       <input type="date" name="f_inicio" id="f_inicio" autocomplete="off" required>
     </div>
     <div class="div-form-obras">
       <label for="">Fecha de Terminacion</label>
       <input type="date" name="f_terminacion" id="f_terminacion" autocomplete="off" required>
     </div>
     <div class="div-form-obras">
       <label for="">Dias Laborados</label>
       <input type="text" name="d_laborados" id="d_laborados" autocomplete="off" required>
     </div>
     <div class="div-form-obras">
       <label for="">Fecha Compromiso</label>
       <input type="text" name="f_compromiso" id="f_compromiso" autocomplete="off" required>
     </div>
     <div class="div-form-obras">
       <label for="">Documentos Fisicos</label>
       <select id="doc_fisicos" name="doc_fisicos">
         <option value="si">SI</option>
         <option value="no">NO</option>
       </select>
     </div>
     <div class="div-form-obras">
       <label for="">Fcc</label>
       <select id="fcc" name="fcc" required>
         <option value="si">SI</option>
         <option value="no">NO</option>
       </select>
     </div>
     <div class="div-form-obras">
       <label for="">Enviado a Factura</label>
       <select id="env_factura" name="env_factura" required>
         <option value="si">SI</option>
         <option value="no">NO</option>
       </select>
     </div>
     <div class="div-form-obras">
       <label for="">PEP</label>
       <input type="text" name="pep" id="pep" autocomplete="off" required>
     </div>
     <div class="div-form-obras">
       <label for="">OPERACION</label>
       <input type="text" name="operacion" id="operacion" autocomplete="off" required>
     </div>
      <div class="div-form-obras">
        <label for="">OEI</label>
        <input type="text" name="oei" id="oei" autocomplete="off" required>
      </div>
      <div class="div-form-obras">
        <label for="">OE</label>
        <input type="text" name="oe" id="oe" autocomplete="off" required>
      </div>
      <div class="div-form-obras">
        <label for="">CTL/DTTO/RB/ACOMETIDA</label>
        <input type="text" name="acomedida" id="acomedida" autocomplete="off" required>
      </div>
      <div class="div-form-obras">
        <label for="">OB</label>
        <input type="text" name="ob" id="ob" autocomplete="off" required>
      </div>
      <div class="div-form-obras">
        <label for="">Material</label>
        <select id="material" name="material">
          <option value="completo">Completo</option>
          <option value="a favor">A Favor</option>
          <option value="en contra">En contra</option>
          <option value="revicion">Revicion</option>
        </select>
      </div>
      <div class="div-form-obras">
        <label for="">Observacion Material</label>
        <input type="text" name="ob_material" id="ob_material" autocomplete="off" required>
      </div>
      <div class="div-form-obras">
        <label for="">Tipo de Material</label>
        <input type="text" name="t_material" id="t_material" autocomplete="off" required>
      </div>
     <div class="div-form-obras">
       <button class="form-button" type="submit">Guardar</button>
     </div>
    </form>
  </main>
@endsection

@section('scripts')
    
@endsection
