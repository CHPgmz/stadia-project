@extends('menu_home')

@section('estilos')

<link rel="stylesheet" href="{{asset('css-table-new/style-table-two.css')}}">
<!-- <link rel="stylesheet" href="{{asset('css-table-new/style-status.css')}}"> -->
<!-- <link rel="stylesheet" href="{{asset('css/style-modal.css')}}"> -->

<style type="text/css" >
.button-edit {
	background: #81d4fa;
	width: 80px;
	height: 23px;
	border: none;
	border-radius: 3px;
}
.button-edit:hover {
	border: 1px solid yellow;
}
.button-delete:hover {
	border: 1px solid green;
}

.button-edit > i{
	margin-right: 4px;
}
.button-delete > i{
	margin-right: 4px;
}
.button-delete {
	background: #e53935;
	width: 80px;
	border: none;
	height: 23px;
	border-radius: 3px;
}

.name-obra {
	font-weight: bold;
	font-size: 12px;
}
</style>
@endsection

@section('contenido')
<div class="options-registers">
	<a class="register" href="#">Resgistrar Tecnico</a>
</div>

<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<h3>Tabla Tecnicos</h3>
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column-m1">ID</th>
									<th class="cell100 column2">Nombre</th>
									<th class="cell100 column3">Apellidos</th>
									<th class="cell100 column4">PIC</th>
									<th class="cell100 column5">Telefono</th>
									<th class="cell100 column6">Gmail</th>
                           <th class="cell100 column7">Acciones</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table class="table-body">
							<tbody>
								<tr class="row100 body">
									<td class="cell100 column-m1">1</td>
									<td class="cell100 column2">Alfredo</td>
									<td class="cell100 column3">Gomez Miranda</td>
									<td class="cell100 column4">89877FG</td>
                           <td class="cell100 column5">961829754</td>
									<td class="cell100 column6">correo.test@gmail.com</td>
                           <td class="cell100 column7">
										<button class="button-edit" role="button" id="myBtn"><i class="far fa-edit"></i>Detalles</button>
										<button class="button-delete" role="button"><i class="far fa-trash-alt"></i>Eliminar</button>
									</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column-m1">1</td>
									<td class="cell100 column2">Alfredo</td>
									<td class="cell100 column3">Gomez Miranda</td>
									<td class="cell100 column4">89877FG</td>
                           <td class="cell100 column5">961829754</td>
									<td class="cell100 column6">correo.test@gmail.com</td>
                           <td class="cell100 column7">
										<button class="button-edit" role="button" id="myBtn"><i class="far fa-edit"></i>Detalles</button>
										<button class="button-delete" role="button"><i class="far fa-trash-alt"></i>Eliminar</button>
									</td>
								</tr>
								<tr class="row100 body">
									<td class="cell100 column-m1">1</td>
									<td class="cell100 column2">Alfredo</td>
									<td class="cell100 column3">Gomez Miranda</td>
									<td class="cell100 column4">89877FG</td>
                           <td class="cell100 column5">961829754</td>
									<td class="cell100 column6">correo.test@gmail.com</td>
                           <td class="cell100 column7">
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


<div id="myModal" class="modal modal-custom">
            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <p>Editar Registro</p>
                </div>
                <div class="modal-body">
                    <form action="" class="form-obra">
                        <div class="form-edit">
                            <label for="">Nombre</label>
                            <input  type="text" />
                        </div>
                        <div class="form-edit">
                            <label for="">Apellidos</label>
                            <input type="text">
                        </div>
                        <div class="form-edit">
                            <label for="">PIC</label>
                            <input type="text" />
                        </div>
                        <div class="form-edit">
                            <label for="">Telefono</label>
                            <input type="text" />
                        </div>
                        <div class="form-edit">
                            <label for="">GMAIL</label>
                            <input type="text" />
                        </div>
								<div class="form-edit">
									<label for="">Direcccion</label>
									<input type="text">
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


