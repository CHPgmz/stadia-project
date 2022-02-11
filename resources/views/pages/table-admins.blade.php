@extends('menu_home')

@section('estilos')
<link rel="stylesheet" href="{{ asset('css/style-table.css') }}">
@endsection

@section('contenido')

<div class="content">
			<div class="title">
				<h3>Tabla: Adminsitradores</h3>
				<a href="#" class="new-reg"><span>Nuevo Registro</span></a>
			</div>
			<div class="content-body">
				<table>
					<thead class="table-thead">
					<tr class="tr-head">
						<th class="id-td">ID#</th>
						<th class="tda-2">Usuario</th>
						<th class="tda-3">Nombre</th>
                  <th class="tda-4">Correo</th>
						<th class="tda-5">Telefono</th>
						<th class="tda-6">Acciones</th>
					</tr>
					</thead>
					<tbody class="table-body">
						<tr class="tr-body">
							<td class="id-td">1</td>
							<td class="tda-2">AlfredoGmz</td>
							<td class="tda-3">Jose Alfredo</td>
							<td class="tda-4">test-mail@gmail.com</td>
							<td class="tda-5">9192839373</td>
							<td class="tda-6">
								<button class="button-edit" id="myBtn"><i class="far fa-edit"></i>Editar</button>
								<button class="button-delete"><i class="far fa-trash-alt"></i>Eliminar</button>
							</td>
						</tr>


					</tbody>
				</table>
			</div>
</div>

<div id="myModal" class="modal mod-adm">
            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <p>Editar Registro</p>
                </div>
                <div class="modal-body">
                    <form action="" class="form-obra">
                        <div class="form-edit">
                            <label for="">Usuario</label>
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
                            <label for="">Nombre</label>
                            <input type="text"/>
                        </div>
                        <div class="form-edit">
									<label for="">Correo</label>
                            <input type="gmail" />
                        </div>
                        <div class="form-edit">
                            <label for="">Num. Telefono</label>
                            <input type="number" />
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


