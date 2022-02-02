@extends('menu_home')

@section('estilos')

<link rel="stylesheet" href="{{asset('css-table-new/style-table-two.css')}}">
<link rel="stylesheet" href="{{asset('css-table-new/style-status.css')}}">
<link rel="stylesheet" href="{{asset('css/style-modal.css')}}">


@endsection

@section('contenido')

<div class="limiter">
		<div class="container-table100">
			<div style="width: 80%;">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100" style="padding-left: 10px;">Nombre</th>
									<th class="cell100">PIC</th>
									<th class="cell100" >Telefono</th>
									<th class="cell100" >Gmail</th>
                           <th class="cell100" >Acciones</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table class="table-body">
							<tbody>
								<tr class="row100 body">
									<td class="cell100 column1 name-obra">Alfredo</td>
									<td class="cell100 column2">89877FG</td>
                           <td class="cell100 column3 status">961829754</td>
									<td class="cell100 column4">correo.test@gmail.com</td>
                           <td class="cell100 column5">
										<button class="button-edit" role="button" id="myBtn"><i class="far fa-edit"></i>Detalles</button>
										<button class="button-delete" role="button"><i class="far fa-trash-alt"></i>Eliminar</button>
									</td>
								</tr>
								<tr class="row100 body">
									<td class="cell100 column1 name-obra">Alfredo</td>
									<td class="cell100 column2">89877FG</td>
                           <td class="cell100 column3 status">961829754</td>
									<td class="cell100 column4">correo.test@gmail.com</td>
                           <td class="cell100 column5">
										<button class="button-edit" role="button" id="myBtn"><i class="far fa-edit"></i>Detalles</button>
										<button class="button-delete" role="button"><i class="far fa-trash-alt"></i>Eliminar</button>
									</td>
								</tr>
								<tr class="row100 body">
									<td class="cell100 column1 name-obra">Alfredo</td>
									<td class="cell100 column2">89877FG</td>
                           <td class="cell100 column3 status">961829754</td>
									<td class="cell100 column4">correo.test@gmail.com</td>
                           <td class="cell100 column5">
										<button class="button-edit" role="button" id="myBtn"><i class="far fa-edit"></i>Detalles</button>
										<button class="button-delete" role="button"><i class="far fa-trash-alt"></i>Eliminar</button>
									</td>
								</tr>
								<tr class="row100 body">
									<td class="cell100 column1 name-obra">Alfredo</td>
									<td class="cell100 column2">89877FG</td>
                           <td class="cell100 column3 status">961829754</td>
									<td class="cell100 column4">correo.test@gmail.com</td>
                           <td class="cell100 column5">
										<button class="button-edit" role="button" id="myBtn"><i class="far fa-edit"></i>Detalles</button>
										<button class="button-delete" role="button"><i class="far fa-trash-alt"></i>Eliminar</button>
									</td>
								</tr>
								<tr class="row100 body">
									<td class="cell100 column1 name-obra">Alfredo</td>
									<td class="cell100 column2">89877FG</td>
                           <td class="cell100 column3 status">961829754</td>
									<td class="cell100 column4">correo.test@gmail.com</td>
                           <td class="cell100 column5">
										<button class="button-edit" role="button" id="myBtn"><i class="far fa-edit"></i>Detalles</button>
										<button class="button-delete" role="button"><i class="far fa-trash-alt"></i>Eliminar</button>
									</td>
								</tr>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

<div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <p>Editar Registro</p>
                </div>
                <div class="modal-body">
                    <form action="" class="form-obra">
                        <div class="form-edit">
                            <label for="">Nombre de la obra</label>
                            <input class="form-input" type="text" />
                        </div>
                        <div class="form-edit">
                            <label for="">Estatus</label>
                            <input type="text" />
                        </div>
                        <div class="form-edit">
                            <label for="">Tipo de Obra </label>
                            <input type="text" />
                        </div>
                        <div class="form-edit">
                            <label for="">Supervisor </label>
                            <input type="text" />
                        </div>
                        <div class="form-edit">
                            <label for="">Fecha de Inicio</label>
                            <input type="date" />
                        </div>
                        <div class="form-edit">
                            <label for="">Fecha de Terminacion</label>
                            <input type="date" />
                        </div>
                        <div class="form-edit">
                            <label for="">Fecha Compromiso</label>
                            <input type="text" />
                        </div>
                        <div class="form-edit">
                            <label for="">Documentos fisicos</label>
                            <input type="text" />
                        </div>
                        <div class="form-edit">
                            <label for="">FCC</label>
                            <input type="text" />
                        </div>
                        <div class="form-edit">
                            <label for="">Enviada A Factura</label>
                            <input type="text" />
                        </div>
                        <div class="form-edit">
                            <label for="">PEB</label>
                            <input type="text" />
                        </div>
                        <div class="form-edit">
                            <label for="">Operación</label>
                            <input type="text" />
                        </div>
                        <div class="form-edit">
                            <label for="">OEI</label>
                            <input type="text" />
                        </div>
                        <div class="form-edit">
                            <label for="">OE</label>
                            <input type="text" />
                        </div>
                        <div class="form-edit">
                            <label for="">CTL/DTTO/RB/ACOMETIDA</label>
                            <input type="text" />
                        </div>
                        <div class="form-edit">
                            <label for="">OB</label>
                            <input type="text" />
                        </div>
                        <div class="button-edit-form form-edit">
                            <button class="buttons-forms but-edit">edit</button>
                            <button class="buttons-forms but-cancel close">Cancelar</button>
                        </div>
                    </form>
                </div>
                <!--<div class="modal-footer">
                <h3>Modal Footer</h3> -->
                </div>
            </div>
        </div>

@section('scripts')
<script src="https://kit.fontawesome.com/2ead8049d9.js" crossorigin="anonymous"></script>
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


