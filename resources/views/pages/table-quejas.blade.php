@extends('menu_home')

@section('estilos')
<link rel="stylesheet" href="{{ asset('css/style-table.css') }}">
@endsection

@section('contenido')

<div class="content">
			<div class="title">
				<h3>Tabla: Quejas</h3>
				<a href="#" class="new-reg"><span>Nuevo Registro</span></a>
			</div>
			<div class="content-body">
				<table>
					<thead class="table-thead">
					<tr class="tr-head">
						<th class="id-td">ID#</th>
						<th class="tdq-2">Fecha</th>
						<th class="tdq-3">Num. Cliente</th>
						<th class="tdq-4">Nom. Cliente</th>
						<th class="tdq-5">Nom. Tecnico</th>
						<th class="tdq-6">Distrito</th>
                  <th class="tdq-7">Observaciones</th>
						<th class="tdq-8">ACCIONES</th>
					</tr>
					</thead>
					<tbody class="table-body">
						<tr class="tr-body">
							<td class="id-td">1</td>
							<td class="tdq-2">01/02/2022</td>
							<td class="tdq-3">9616884603</td>
							<td class="tdq-4">Aztrid Lopez Rodas</td>
							<td class="tdq-5">Gerardo Lopez Vazquez</td>
							<td class="tdq-6">PVU0002FO</td>
                     <td class="tdq-7">Modem Desconectado</td>
							<td class="tdq-8">
								<button class="button-edit" id="myBtn"><i class="far fa-edit"></i>Editar</button>
								<button class="button-delete"><i class="far fa-trash-alt"></i>Eliminar</button>
							</td>
						</tr>
						<tr class="tr-body">
							<td class="id-td">2</td>
							<td class="tdq-2">01/02/2022</td>
							<td class="tdq-3">9619239012</td>
							<td class="tdq-4">Constantina Reyes Ojeda</td>
							<td class="tdq-5">Carlos Daniel Ramos Arreola</td>
							<td class="tdq-6">RN013FO</td>
                     <td class="tdq-7">Cambio de puerto/problema del sistema</td>
							<td class="tdq-8">
								<button class="button-edit" id="myBtn"><i class="far fa-edit"></i>Editar</button>
								<button class="button-delete"><i class="far fa-trash-alt"></i>Eliminar</button>
							</td>
						</tr>
						<tr class="tr-body">
							<td class="id-td">3</td>
							<td class="tdq-2">01/02/2022</td>
							<td class="tdq-3">961829293</td>
							<td class="tdq-4">Aztrid Lopez Rodas</td>
							<td class="tdq-5">Gerardo Lopez Vazquez</td>
							<td class="tdq-6">PVU0002FO</td>
                     <td class="tdq-7">Modem Desconectado</td>
							<td class="tdq-8">
								<button class="button-edit" id="myBtn"><i class="far fa-edit"></i>Editar</button>
								<button class="button-delete"><i class="far fa-trash-alt"></i>Eliminar</button>
							</td>
						</tr>



					</tbody>
				</table>
			</div>
</div>

<div id="myModal" class="modal mod-osl">
            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <p>Editar Registro</p>
                </div>
                <div class="modal-body">
                    <form action="" class="form-obra">
                        <div class="form-edit">
                            <label for="">Fecha</label>
                            <input class="form-input" type="date" />
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
                            <label for="">Num. Cliente</label>
                            <input type="number"/>
                        </div>
                        <div class="form-edit">
									<label for="">Nom. Cliente</label>
                            <input type="text" />
                        </div>
                        <div class="form-edit">
                            <label for="">Nom. Tecnico</label>
                            <input type="text" />
                        </div>
                        <div class="form-edit">
                            <label for="">PIC</label>
                            <input type="text" />
                        </div>
                        <div class="form-edit">
                            <label for="">ALFA</label>
                            <input type="text" />
                        </div>
                        <div class="form-edit">
                            <label for="">FOLIO PISA</label>
                            <input type="text" />
                        </div>
                        <div class="form-edit">
                            <label for="">FOLIO PISAPLEX</label>
                            <input type="text" />
                        </div>
                        <div class="form-edit">
                            <label for="">OS</label>
                            <input type="text" />
                        </div>
                        <div class="form-edit">
                          <label for="">DTTO</label>
                            <input type="text" />
                        </div>
                        <div class="form-edit">
                            <label for="">Observaciones</label>
                            <input type="text" />
                        </div>

                        <div class="button-edit-form form-edit">
                            <button class="buttons-forms but-edit">edit</button>
                            <button class="buttons-forms but-cancel close">Cancelar</button>
                        </div>
                    </form>
                </div>

                </div>
            </div>
        </div>

@endsection

@section('scripts')
<script >
            var modal = document.getElementById("myModal");

            // Get the button that opens the modal
            var btn = document.getElementById("myBtn");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal
            btn.onclick = function () {
                modal.style.display = "block";
            };

            // When the user clicks on <span> (x), close the modal
            span.onclick = function () {
                modal.style.display = "none";
            };

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            };
</script>
@endsection
