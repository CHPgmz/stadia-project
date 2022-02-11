@extends('menu_home')

@section('estilos')
<link rel="stylesheet" href="{{ asset('css/style-table.css') }}">
@endsection

@section('contenido')

<div class="content">
			<div class="title">
				<h3>Tabla: OS Liquidadas</h3>
				<a href="#" class="new-reg"><span>Nuevo Registro</span></a>
			</div>
			<div class="content-body">
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
						<tr class="tr-body">
							<td class="id-td">1</td>
							<td class="tdl-2">Tuxtla</td>
							<td class="tdl-3">01/02/2022</td>
							<td class="tdl-4">961829754</td>
							<td class="tdl-5">De la cruz Ballinas Ricardo</td>
							<td class="tdl-6">Gerardo Lopez Vazquez</td>
                     <td class="tdl-7">XAM0005FO</td>
							<td class="tdl-8">
								<button class="button-edit" id="myBtn"><i class="far fa-edit"></i>Editar</button>
								<button class="button-delete"><i class="far fa-trash-alt"></i>Eliminar</button>
							</td>
						</tr>
						<tr class="tr-body">
							<td class="id-td">1</td>
							<td class="tdl-2">Tuxtla</td>
							<td class="tdl-3">01/02/2022</td>
							<td class="tdl-4">961829754</td>
							<td class="tdl-5">De la cruz Ballinas Ricardo</td>
							<td class="tdl-6">Gerardo Lopez Vazquez</td>
                     <td class="tdl-7">XAM0005FO</td>
							<td class="tdl-8">
								<button class="button-edit" id="myBtn"><i class="far fa-edit"></i>Editar</button>
								<button class="button-delete"><i class="far fa-trash-alt"></i>Eliminar</button>
							</td>
						</tr>
						<tr class="tr-body">
							<td class="id-td">1</td>
							<td class="tdl-2">Tuxtla</td>
							<td class="tdl-3">01/02/2022</td>
							<td class="tdl-4">961829754</td>
							<td class="tdl-5">De la cruz Ballinas Ricardo</td>
							<td class="tdl-6">Gerardo Lopez Vazquez</td>
                     <td class="tdl-7">XAM0005FO</td>
							<td class="tdl-8">
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
                            <label for="">Estado</label>
                            <input class="form-input" type="text" />
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
                            <input type="date"/>
                        </div>
                        <div class="form-edit">
									<label for="">Numero </label>
                            <input type="number" />
                        </div>
                        <div class="form-edit">
                            <label for="">N. Cliente</label>
                            <input type="text" />
                        </div>
                        <div class="form-edit">
                            <label for="">N. Tecnico</label>
                            <input type="text" />
                        </div>
                        <div class="form-edit">
                            <label for="">Pic Tecnico</label>
                            <input type="text" />
                        </div>
                        <div class="form-edit">
                            <label for="">M. de Instalacion</label>
                            <input type="text" />
                        </div>
                        <div class="form-edit">
                            <label for="">Numero OS</label>
                            <input type="text" />
                        </div>
                        <div class="form-edit">
                            <label for="">Pisaplex</label>
                            <input type="text" />
                        </div>
                        <div class="form-edit">
                          <label for="">Distrito</label>
                            <input type="text" />
                        </div>
                        <div class="form-edit">
                            <label for="">Terminal</label>
                            <input type="text" />
                        </div>
                        <div class="form-edit">
                            <label for="">Puerto</label>
                            <input type="text" />
                        </div>
                        <div class="form-edit">
                            <label for="">C/F</label>
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
