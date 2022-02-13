@extends('menu_home')

@section('estilos')
<link rel="stylesheet" href="{{ asset('css/style-table.css') }}">
@endsection

@section('contenido')

<div class="content">
    <div class="title">
        <h3>Tabla: Cuadrillas</h3>
        <a href="#" class="new-reg"><span>Nuevo Registro</span></a>
    </div>
    <div class="content-body">
        <table>
            <thead class="table-thead">
                <tr class="tr-head">
                    <th class="id-td">ID#</th>
                    <th class="tdc-2">Nombre</th>
                    <th class="tdc-3">ID - INE</th>
                    <th class="tdc-4">NSS</th>
                    <th class="tdc-5">Telefono</th>
                    <th class="tdc-6">Dirección</th>
                    <th class="tdc-7">Fe. Nacimiento</th>
                    <th class="tdc-8">Edad</th>
                    <th class="tdc-9">ACCIONES</th>
                </tr>
            </thead>
            <tbody class="table-body">
                <tr class="tr-body">
                    <td class="id-td">1</td>
                    <td class="tdc-2">Oscar</td>
                    <td class="tdc-3">N/A</td>
                    <td class="tdc-4">N/A</td>
                    <td class="tdc-5">9612828972</td>
                    <td class="tdc-6">Bario Nueva</td>
                    <td class="tdc-7">04/1998</td>
                    <td class="tdc-8">22</td>
                    <td class="tdc-9">
                        <button class="button-edit" id="myBtn"><i class="far fa-edit"></i>Editar</button>
                        <button class="button-delete"><i class="far fa-trash-alt"></i>Eliminar</button>
                    </td>
                </tr>
                <tr class="tr-body">
                    <td class="id-td">1</td>
                    <td class="tdc-2">Oscar</td>
                    <td class="tdc-3">N/A</td>
                    <td class="tdc-4">N/A</td>
                    <td class="tdc-5">9612828972</td>
                    <td class="tdc-6">Bario Nueva</td>
                    <td class="tdc-7">04/1998</td>
                    <td class="tdc-8">22</td>
                    <td class="tdc-9">
                        <button class="button-edit" id="myBtn"><i class="far fa-edit"></i>Editar</button>
                        <button class="button-delete"><i class="far fa-trash-alt"></i>Eliminar</button>
                    </td>
                </tr>
                <tr class="tr-body">
                    <td class="id-td">1</td>
                    <td class="tdc-2">Oscar</td>
                    <td class="tdc-3">N/A</td>
                    <td class="tdc-4">N/A</td>
                    <td class="tdc-5">9612828972</td>
                    <td class="tdc-6">Bario Nueva</td>
                    <td class="tdc-7">04/1998</td>
                    <td class="tdc-8">22</td>
                    <td class="tdc-9">
                        <button class="button-edit" id="myBtn"><i class="far fa-edit"></i>Editar</button>
                        <button class="button-delete"><i class="far fa-trash-alt"></i>Eliminar</button>
                    </td>
                </tr>

                
            </tbody>
        </table>
    </div>
</div>

<div id="myModal" class="modal mod-home">
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
									 <select id="" name="select">
									 	<option value="Cobro 90%">Cobro 90%</option>
										<option value="Cobro 100%">Cobro 100%</option>
										<option value="Lum">Lum</option>
										<option value="Proceso de construcción">Proceso de construcción</option>
									 </select>
                        </div>
                        <div class="form-edit">
                            <label for="">Tipo de Obra </label>
                            <input type="text" />
                        </div>
                        <div class="form-edit">
                            <label for="">Supervisor </label> 
									 <select id="" name="select">
									 	<option value="Epifanio">Epifanio</option>
										<option value="Oscar">Oscar</option>
										<option value="David">David</option>
									 </select>
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

