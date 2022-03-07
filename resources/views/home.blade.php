@extends('menu_home')

@section('estilos')
    <link rel="stylesheet" href="{{ asset('css/style-table.css') }}">
@endsection

@section('contenido')
    <div class="content-data">
        <div class="content-info info-home">
            <div class="info-nav">
                <div class="info-body">
                    <span>OBRAS</span>
                    <p>415</p>
                </div>
                <div><i class="fa fa-table icon-table"></i></div>
            </div>
            <div class="info-nav-two">
                <p><i class="fas fa-calendar"></i>Este mes</p>
            </div>
        </div>
        <div class="content-info infot-home2">
            <div class="info-nav">
                <div class="info-body">
                    <span>MATERIALES</span>
                    <p>415</p>
                </div>
                <div><i class="fas fa-tools icon-mtr"></i></div>
            </div>
            <div class="info-nav-two">
                <p><i class="fas fa-calendar"></i>Este mes</p>
            </div>
        </div>
        <div class="content-info infot-home3">
            <div class="info-nav">
                <div class="info-body">
                    <span>OS Liquidadas</span>
                    <p>200</p>
                </div>
                <div><i class="fas fa-clipboard-check icon-os"></i></div>
            </div>
            <div class="info-nav-two">
                <p><i class="fas fa-calendar"></i>Este mes</p>
            </div>
        </div>
        <div class="content-info infot-home4">
            <div class="info-nav">
                <div class="info-body">
                    <span>Quejas</span>
                    <p>10</p>
                </div>
                <div><i class="fas fa-clipboard-list icon-quejas"></i></div>
            </div>
            <div class="info-nav-two">
                <p><i class="fas fa-calendar"></i>Este mes</p>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="title">
            <h3>Tabla: Obras</h3>
            <span>Ultimos 10 registros</span>
        </div>
        <div class="content-body">
            <table>
                <thead class="table-thead">
                    <tr class="tr-head">
                        <th class="id-td">ID#</th>
                        <th class="td-2">Nom. OBRA</th>
                        <th class="td-3">Tip. OBRA</th>
                        <th class="td-4">ESTATUS</th>
                        <th class="td-5">SUPERVISOR</th>
                        <th class="td-6">F. INICIO</th>
                        <th class="td-7">F. TERM.</th>
                        <th class="td-8">ACCIONES</th>
                    </tr>
                </thead>
                <tbody class="table-body">
                    <tr class="tr-body">
                        <td class="id-td">1</td>
                        <td class="td-2">RDA Medical Baumachine</td>
                        <td class="td-3">RDA</td>
                        <td class="td-4 status"><span class="active">90% de pago</span></td>
                        <td class="td-5">Freddy</td>
                        <td class="td-6">12/01/2022</td>
                        <td class="td-7">18/01/2022</td>
                        <td class="td-8">
                            <button class="button-edit" id="myBtn"><i class="far fa-edit"></i>Editar</button>
                            <button class="button-delete"><i class="far fa-trash-alt"></i>Eliminar</button>
                        </td>
                    </tr>

                    <tr class="tr-body">
                        <td class="id-td">2</td>
                        <td class="td-2">PVU001 Ipsum deserunt</td>
                        <td class="td-3">RDA</td>
                        <td class="td-4 status"><span class="waiting">70% de pago</span></td>
                        <td class="td-5">Freddy</td>
                        <td class="td-6">12/01/2022</td>
                        <td class="td-7">18/01/2022</td>
                        <td class="td-8">
                            <button class="button-edit" id="myBtn"><i class="far fa-edit"></i>Editar</button>
                            <button class="button-delete"><i class="far fa-trash-alt"></i>Eliminar</button>
                        </td>
                    </tr>
                    <tr class="tr-body">
                        <td class="id-td">3</td>
                        <td class="td-2">Primera Obra</td>
                        <td class="td-3">RDA</td>
                        <td class="td-4 status"><span class="active">Cobro de 90%</span></td>
                        <td class="td-5">Freddy</td>
                        <td class="td-6">12/01/2022</td>
                        <td class="td-7">18/01/2022</td>
                        <td class="td-8">
                            <button class="button-edit" id="myBtn"><i class="far fa-edit"></i>Editar</button>
                            <button class="button-delete"><i class="far fa-trash-alt"></i>Eliminar</button>
                        </td>
                    </tr>
                    <tr class="tr-body">
                        <td class="id-td">3</td>
                        <td class="td-2">Primera Obra</td>
                        <td class="td-3">RDA</td>
                        <td class="td-4 status"><span class="active">Cobro de 90%</span></td>
                        <td class="td-5">Freddy</td>
                        <td class="td-6">12/01/2022</td>
                        <td class="td-7">18/01/2022</td>
                        <td class="td-8">
                            <button class="button-edit" id="myBtn"><i class="far fa-edit"></i>Editar</button>
                            <button class="button-delete"><i class="far fa-trash-alt"></i>Eliminar</button>
                        </td>
                    </tr>
                    <tr class="tr-body">
                        <td class="id-td">04</td>
                        <td class="td-2">Primera Obra</td>
                        <td class="td-3">RDA</td>
                        <td class="td-4 status"><span class="active">Cobro de 90%</span></td>
                        <td class="td-5">Freddy</td>
                        <td class="td-6">12/01/2022</td>
                        <td class="td-7">18/01/2022</td>
                        <td class="td-8">
                            <button class="button-edit" id="myBtn"><i class="far fa-edit"></i>Editar</button>
                            <button class="button-delete"><i class="far fa-trash-alt"></i>Eliminar</button>
                        </td>
                    </tr>
                    <tr class="tr-body">
                        <td class="id-td">05</td>
                        <td class="td-2">Primera Obra</td>
                        <td class="td-3">RDA</td>
                        <td class="td-4 status"><span class="active">Cobro de 90%</span></td>
                        <td class="td-5">Freddy</td>
                        <td class="td-6">12/01/2022</td>
                        <td class="td-7">18/01/2022</td>
                        <td class="td-8">
                            <button class="button-edit" id="myBtn"><i class="far fa-edit"></i>Editar</button>
                            <button class="button-delete"><i class="far fa-trash-alt"></i>Eliminar</button>
                        </td>
                    </tr>
                    <tr class="tr-body">
                        <td class="id-td">07</td>
                        <td class="td-2">Primera Obra</td>
                        <td class="td-3">RDA</td>
                        <td class="td-4 status"><span class="active">Cobro de 90%</span></td>
                        <td class="td-5">Freddy</td>
                        <td class="td-6">12/01/2022</td>
                        <td class="td-7">18/01/2022</td>
                        <td class="td-8">
                            <button class="button-edit" id="myBtn"><i class="far fa-edit"></i>Editar</button>
                            <button class="button-delete"><i class="far fa-trash-alt"></i>Eliminar</button>
                        </td>
                    </tr>
                    <tr class="tr-body">
                        <td class="id-td">08</td>
                        <td class="td-2">Primera Obra</td>
                        <td class="td-3">RDA</td>
                        <td class="td-4 status"><span class="active">Cobro de 90%</span></td>
                        <td class="td-5">Freddy</td>
                        <td class="td-6">12/01/2022</td>
                        <td class="td-7">18/01/2022</td>
                        <td class="td-8">
                            <button class="button-edit" id="myBtn"><i class="far fa-edit"></i>Editar</button>
                            <button class="button-delete"><i class="far fa-trash-alt"></i>Eliminar</button>
                        </td>
                    </tr>
                    <tr class="tr-body">
                        <td class="id-td">09</td>
                        <td class="td-2">Primera Obra</td>
                        <td class="td-3">RDA</td>
                        <td class="td-4 status"><span class="active">Cobro de 90%</span></td>
                        <td class="td-5">Freddy</td>
                        <td class="td-6">12/01/2022</td>
                        <td class="td-7">18/01/2022</td>
                        <td class="td-8">
                            <button class="button-edit" id="myBtn"><i class="far fa-edit"></i>Editar</button>
                            <button class="button-delete"><i class="far fa-trash-alt"></i>Eliminar</button>
                        </td>
                    </tr>
                    <tr class="tr-body">
                        <td class="id-td">10</td>
                        <td class="td-2">Primera Obra</td>
                        <td class="td-3">RDA</td>
                        <td class="td-4 status"><span class="active">Cobro de 90%</span></td>
                        <td class="td-5">Freddy</td>
                        <td class="td-6">12/01/2022</td>
                        <td class="td-7">18/01/2022</td>
                        <td class="td-8">
                            <button class="button-edit" id="myBtn"><i class="far fa-edit"></i>Editar</button>
                            <button class="button-delete"><i class="far fa-trash-alt"></i>Eliminar</button>
                        </td>
                    </tr>
                    <tr class="tr-body">
                        <td class="id-td">10</td>
                        <td class="td-2">Primera Obra</td>
                        <td class="td-3">RDA</td>
                        <td class="td-4 status"><span class="active">Cobro de 90%</span></td>
                        <td class="td-5">Freddy</td>
                        <td class="td-6">12/01/2022</td>
                        <td class="td-7">18/01/2022</td>
                        <td class="td-8">
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
    <script>
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        };

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        };

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        };
    </script>
@endsection
