
@extends('menu_home')

@section('estilos')
<link rel="stylesheet" href="{{ asset('css/style-table.css') }}">
@endsection

@section('contenido')

<div class="content">
			<div class="title">
				<h3>Tabla: Devolucion de materiales</h3>
				<a href="#" class="new-reg"><span>Nuevo Registro</span></a>
			</div>
			<div class="content-body">
				<table>
					<thead class="table-thead">
					<tr class="tr-head">
						<th class="id-td">ID#</th>
						<th class="tdv-2">N. Obra</th>
						<th class="tdv-3">Supervisor</th>
						<th class="tdv-4">OB</th>
						<th class="tdv-5">Estatus</th>
						<th class="tdv-6">Observaciones</th>
						<th class="tdv-7">ACCIONES</th>
					</tr>
					</thead>
					<tbody class="table-body">
						<tr class="tr-body">
							<td class="id-td">1</td>
							<td class="tdv-2">MZZ006</td>
							<td class="tdv-3">Hector</td>
							<td class="tdv-4">OB867755</td>
							<td class="tdv-5">Deuda de Material</td>
							<td class="tdv-6">Formato de devolucion enviado</td>
							<td class="tdv-7">
								<button class="button-edit" id="myBtn"><i class="far fa-edit"></i>Editar</button>
								<button class="button-delete"><i class="far fa-trash-alt"></i>Eliminar</button>
							</td>
						</tr>
						<tr class="tr-body">
							<td class="id-td">2</td>
							<td class="tdv-2">MZZ006</td>
							<td class="tdv-3">Gilberto</td>
							<td class="tdv-4">OB867755</td>
							<td class="tdv-5">Deuda de Material</td>
							<td class="tdv-6">Roseta optica</td>
							<td class="tdv-7">
								<button class="button-edit" id="myBtn"><i class="far fa-edit"></i>Editar</button>
								<button class="button-delete"><i class="far fa-trash-alt"></i>Eliminar</button>
							</td>
						</tr>
						<tr class="tr-body">
							<td class="id-td">3</td>
							<td class="tdv-2">MZZ006</td>
							<td class="tdv-3">Epifanio</td>
							<td class="tdv-4">OB867755</td>
							<td class="tdv-5">Deuda de Material</td>
							<td class="tdv-6">Falta terminal porque mordieron los perros</td>
							<td class="tdv-7">
								<button class="button-edit" id="myBtn"><i class="far fa-edit"></i>Editar</button>
								<button class="button-delete"><i class="far fa-trash-alt"></i>Eliminar</button>
							</td>
						</tr>

					</tbody>
				</table>
			</div>
</div>

<div id="myModal" class="modal mod-devm">
            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <p>Editar Registro</p>
                </div>
                <div class="modal-body">
                    <form action="" class="form-obra">
                        <div class="form-edit">
                            <label for="">N. Obra</label>
                            <input class="form-input" type="text" value="HGKG76" />
                        </div>
                        <div class="form-edit">
                            <label for="">Supervisor</label>
									 <!--<input type="text"  value="Epifanio"/> -->
									 <select id="" name="select">
									 	<option value="Epifanio">Epifanio</option>
										<option value="Oscar">Oscar</option>
										<option value="David">David</option>
									 </select>
                        </div>
                        <div class="form-edit">
                            <label for="">OB</label>
                            <input type="text" value="JGHFC65"/>
                        </div>
                        <div class="form-edit">
									<label for="">Estatus </label>
                            <input type="text" value="Actvio"/>
                        </div>
                        <div class="form-edit">
                            <label for="">Observaciones</label>
                            <input type="text" value="No hay Onservaciones" />
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

