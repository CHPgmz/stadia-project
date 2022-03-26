@extends('menu_home')
@section('page-title')
    {{ 'Os Liquidadas' }}
@endsection

@section('estilos')
<link rel="stylesheet" href="{{ asset('css/style-table.css') }}">
@endsection

@section('contenido')
    @if (Session::has('status'))
        <div class="text-danger" role="alert">
            {{ Session::get('status') }}
        </div>
    @endif
<div class="content">
			<div class="title">
				<h3>Tabla: OS Liquidadas</h3>
				<a href="{{ route('liquidadas.form') }}" class="new-reg"><span>Nuevo Registro</span></a>
			</div>
			<div class="content-body">
            @if ($osl == 0)
                <h1 style="text-align: center;">No se encontraron registros</h1>
            @else
				<table>
					<thead class="table-thead">
					<tr class="tr-head">
						<th class="id-td">ID#</th>
						<th class="tdl-2">Estado</th>
						<th class="tdl-3">Fecha</th>
						<th class="tdl-4">Numero</th>
						<th class="tdl-5">N. Cliente</th>
						<th class="tdl-6">N. Tecnico</th>
                  <th class="tdl-7">Distrito</th>
						<th class="tdl-8">ACCIONES</th>
					</tr>
					</thead>
					<tbody class="table-body">
                   @foreach($todoL as $item)
						<tr class="tr-body">
                      <td class="id-td">{{ $item->id }}</td>
							<td class="tdl-2">{{ $item->estado }}</td>
							<td class="tdl-3">{{ $item->fecha }}</td>
							<td class="tdl-4">{{ $item->telefono }}</td>
							<td class="tdl-5">{{ $item->nombre_cliente }}</td>
							<td class="tdl-6">{{ $item->name_tecnico }}</td>
                     <td class="tdl-7">{{ $item->distrito }}</td>
							<td class="tdl-8">
                         <button class="button-edit editbtn" data-ids="{{ $item->id }}" data-stado="{{ $item->estado }}" data-fecha="{{ $item->fecha }}" data-tel="{{ $item->telefono }}" data-nomcl="{{ $item->nombre_cliente }}" data-nomtec="{{ $item->name_tecnico }}" data-pictec="{{ $item->pic_tecnico }}" data-mrtins="{{ $item->metros_instalacion }}" data-numos="{{ $item->numero_os }}" data-dist="{{ $item->distrito }}" data-term="{{ $item->terminal }}" data-puerto="{{ $item->puerto }}" data-tec="{{ $item->tecnologia }}" data-target="#editar" onclick="modalEdit()"><i class="far fa-edit"></i>Editar</button>
								<button class="button-delete"><i class="far fa-trash-alt"></i>Eliminar</button>
							</td>
						</tr>
                    @endforeach
					</tbody>
				</table>
        @endif
			</div>
</div>

<div id="myModal" class="modal mod-osl">
            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <div class="header-content header-title"> 
                        <p>Editar Registro</p>
                    </div>
                    <div class="header-content header-close" class="cls" role="button">
                        <span aria-hidden="true" role="button" class="cls"onclick="modalClose()" >&times;</span>
                    </div>
                </div>
                <div class="modal-body">
                    <form action="{{ route('update.osl') }}" class="form-obra" method="POST">
                        @csrf
                        <input type="hidden" id="id_osl" name="id_osl" />
                        <div class="form-edit">
                            <label for="">Estado</label>
	                     		 <select id="stado" name="stado">
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
                        <!--<div class="form-edit">
                            <label for="">Supervisor</label>
									 <!--<input type="text"  value="Epifanio"/>
									 <select id="" name="select">
									 	<option value="Epifanio">Epifanio</option>
										<option value="Oscar">Oscar</option>
										<option value="David">David</option>
									 </select>
                        </div>-->
                        <div class="form-edit">
                            <label for="">Fecha</label>
                            <input type="date" id="fecha" name="fecha"/>
                        </div>
                        <div class="form-edit">
									<label for="">Telefono</label>
                            <input type="number" id="telefono" name="telefono"/>
                        </div>
                        <div class="form-edit">
                            <label for="">Nombre del Cliente</label>
                            <input type="text" id="name_cli" name="name_cli"/>
                        </div>
                        <div class="form-edit">
                            <label for="">Nombre del tecnico</label>
                            <select id="tec" name="tec">
                                @foreach ($tec as $item)
                                    <option value="{{ $item->nombre_tec }}">{{ $item->nombre_tec }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-edit">
                            <label for="">Pic Tecnico</label>
                            <select id="pic_tecnico" name="pic_tecnico">
                                @foreach($tec as $item)
                                    <option value="{{ $item->pic }}">{{ $item->pic }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-edit">
                            <label for="">Metros de Instalacion</label>
                            <input type="text" id="m_inst" name="m_inst" />
                        </div>
                        <div class="form-edit">
                            <label for="">Numero OS</label>
                            <input type="text" id="num_os" name="num_os" />
                        </div>
                        <div class="form-edit">
                          <label for="">Distrito</label>
                            <input type="text" id="distrito" name="distrito"/>
                        </div>
                        <div class="form-edit">
                            <label for="">Terminal</label>
                            <input type="text" id="terminal" name="terminal"/>
                        </div>
                        <div class="form-edit">
                            <label for="">Puerto</label>
                            <input type="text" id="puerto" name="puerto"/>
                        </div>
                        <div class="form-edit">
                            <label for="">Tecnologia</label>
                            <input type="text" id="tecnologia" name="tecnologia"/>
                        </div>

                        <div class="button-edit-form form-edit">
                            <button class="buttons-forms but-edit">Editar</button>
                        </div>
                    </form>
                </div>

                </div>
            </div>
        </div>

@endsection

@section('scripts')
{{--- //            var modal = document.getElementById("myModal");
//
//            // Get the button that opens the modal
//            var btn = document.getElementById("myBtn");
//
//            // Get the <span> element that closes the modal
//            var span = document.getElementsByClassName("close")[0];
//
//            // When the user clicks the button, open the modal
//            btn.onclick = function () {
//                modal.style.display = "block";
//            };
//
//            // When the user clicks on <span> (x), close the modal
//            span.onclick = function () {
//                modal.style.display = "none";
//            };
//
//            // When the user clicks anywhere outside of the modal, close it
//            window.onclick = function (event) {
//                if (event.target == modal) {
//                    modal.style.display = "none";
//                }
//            };
//----}} 
<script>
        var modal = document.getElementById("myModal");
        //var btn = document.getElementById("myBtn");
        var btn2 = document.getElementsByClassName("btn-dl");
        var span = document.getElementsByClassName("close");

        function modalEdit(event) {
            modal.style.display = "block";
        }

        function modalClose() {
            modal.style.display = "none";
        }
</script>
<script>
    $('.editbtn').on('click', function(event){
        $('#id_osl').val($(this).data('ids'));
        $('#stado').val($(this).data('stado'));
        $('#fecha').val($(this).data('fecha'));
        $('#telefono').val($(this).data('tel'));
        $('#name_cli').val($(this).data('nomcl'));
        $('#tec').val($(this).data('nomtec'));
        $('#pic_tecnico').val($(this).data('pictec'));
        $('#m_inst').val($(this).data('mrtins'));
        $('#num_os').val($(this).data('numos'));
        $('#distrito').val($(this).data('dist'));
        $('#terminal').val($(this).data('term'));
        $('#puerto').val($(this).data('puerto'));
        $('#tecnologia').val($(this).data('tec'));

    });
</script>
@endsection
