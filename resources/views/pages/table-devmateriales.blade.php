
@extends('menu_home')

@section('estilos')

<!--<link rel="stylesheet" href="{{ asset('css-table-new/util.css') }}">-->
<link rel="stylesheet" href="{{asset('css-table-new/main.css')}}">
<!--<link rel="stylesheet" href="{{asset('css-table-new/style-status.css')}}"> -->
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
	<a class="register" href="#">Registrar Obra</a>
	<a class="register" href="#">Resgistrar Tecnico</a>
</div>

<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column-m1">ID</th>
									<th class="cell100 column2">N. Obra</th>
									<th class="cell100 column3">Supervisor</th>
									<th class="cell100 column4">OB</th>
									<th class="cell100 column5">Estatus</th>
                           <th class="cell100 column-m6">Observaciones</th>
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
									<td class="cell100 column2">PVU001</td>
                           <td class="cell100 column3">WILLLIAM</td>
									<td class="cell100 column4">OB866649</td>
									<td class="cell100 column5">Deuda de Material</td>
									<td class="cell100 column-m6">Formato de devolucion enviado</td>
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


<div id="myModal" class="modal">
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

