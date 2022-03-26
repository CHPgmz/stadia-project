@extends('menu_home')
@section('page-title')
    {{ 'Obras' }}
@endsection
@section('estilos')
    {{-- <link rel="stylesheet" href="{{ asset('css/style-table.css') }}"> --}}
    <style>
        .content {
            width: 98%;
            margin: 10px auto 0px auto;
            background-color: #fff;
            padding: 15px;
            border: none;
            border-radius: 3px;
        }

        .title h3 {
            padding: 10px 0px;
            color: #313131;
            font-size: 18px;
            line-height: 30px;
        }

        .new-reg {
            padding: 06px 16px;
            background: #29b6f6;
            text-decoration: none;
            color: #000;
            border-radius: 3px;
        }

        .content-body {
            width: 1060px;
            position: relative;
            overflow: auto;
            /* border: 1px solid #666; */
        }

        .table-obras {
            margin-top: 20px;
            width: 150%;
        }

        .id-td {
            widows: 2px;
        }

        [class^="td-"] {
            width: 9%;
            /* text-align: center */
        }

        /* [class^="tr-"] */
        th,
        td {
            text-align: left;
            color: #3e5569;
            font-size: 16px;
            border-bottom: 1px solid #e1eaee;
            padding: 2px 3px;
            /* width: 50px; */
        }
        .td-11 {
            width: 4%;
        }

        .tr-head th {
            line-height: 10px;
        }

        .tr-body {
            line-height: 20px;
        }

        .td-13,
        .td-14,
        .td-15 {
            width: 10%;
        }

        [class^="button-"] {
            padding: 4px 10px;
            border-radius: 3px;
            border: none;
            font-size: 12px;
        }

        .table-body tr:nth-child(even) {
            background-color: #f8f6ff;
        }

        .button-edit {
            background-color: #0ffff8;
        }

        .button-delete {
            background-color: #ff1744;
        }

    </style>
@endsection

@section('contenido')
    @if (Session::has('status'))
        <div class="text-danger" role="alert">
            {{ Session::get('status') }}
        </div>
    @endif

    <div class="content">
        <div class="title">
            <h3>Tabla: Obras</h3>
            <a href="{{ route('obras.form') }}" class="new-reg"><span>Nuevo Registro</span></a>
        </div>
        <div class="content-body">
            @if($obs == 0)
                <h1 style="text-align: center;">No hay registros</h1>
            @else
            <table class="table-obras">
                <thead class="table-thead">
                    <tr class="tr-head">
                        <th class="id-td">ID#</th>
                        <th class="td-2">Nom. OBRA</th>
                        <th class="td-3">Estatus</th>
                        <th class="td-4">T de Estatus</th>
                        <th class="td-5">Observaciones</th>
                        <th class="td-6">T. de Obra</th>
                        <th class="td-7">Supervisor</th>
                        <th class="td-8">F. INICIO</th>
                        <th class="td-9">F. TERM.</th>
                        <th class="td-10">Doc. Fisicos</th>
                        <th class="td-11">FCC</th>
                        <th class="td-12">Env. Factura</th>
                        <th class="td-13">PEP</th>
                        <th class="td-14">OPERACION</th>
                        <th class="td-15">OEI</th>
                        <th class="td-16">ACCIONES</th>
                    </tr>
                </thead>
                <tbody class="table-body">
                    
                    @foreach ($todObras as $item)
                        <tr class="tr-body">
                            <td class="id-td">{{ $item->id }}</td>
                            <td class="td-2">{{ $item->name_obra }}</td>
                            <td class="td-3 status"><span class="active">{{ $item->estatus }}</span></td>
                            <td class="td-4">{{ $item->tipo_estatus }}</td>
                            <td class="td-5">{{ $item->observacion }}</td>
                            <td class="td-6">{{ $item->tipo_obra }}</td>
                            <td class="td-7">{{ $item->supervisor }}</td>
                            <td class="td-8">{{ $item->fecha_inicio }}</td>
                            <td class="td-9">{{ $item->fecha_terminacion }}</td>
                            <td class="td-10">{{ $item->doc_fisicos }}</td>
                            <td class="td-11">{{ $item->fcc }}</td>
                            <td class="td-12">{{ $item->enviado_factura }}</td>
                            <td class="td-13">{{ $item->pep }}</td>
                            <td class="td-14">{{ $item->operacion }}</td>
                            <td class="td-15">{{ $item->oei }}</td>
                            <td class="td-16">
                                <button class="button-edit editbtn" data-ido="{{ $item->id }}"
                                    data-obra="{{ $item->name_obra }}" data-tbra="{{ $item->tipo_obra }}"
                                    data-estatus="{{ $item->estatus }}" data-super="{{ $item->supervisor }}"
                                    data-finicio="{{ $item->fecha_inicio }}"
                                    data-term="{{ $item->fecha_terminacion }}" data-tps="{{ $item->tipo_estatus }}"
                                    data-obs="{{ $item->observacion }}" data-dlabor="{{ $item->dias_laborados }}"
                                    data-fcompr="{{ $item->fecha_compromiso }}"
                                    data-dfisicos="{{ $item->doc_fisicos }}" data-fcc="{{ $item->fcc }}"
                                    data-fact="{{ $item->enviado_factura }}" data-pep="{{ $item->pep }}"
                                    data-operacion="{{ $item->operacion }}" data-oei="{{ $item->oei }}"
                                    data-oe="{{ $item->oe }}" data-acomedida="{{ $item->acomedida }}"
                                    data-ob="{{ $item->ob }}" data-material="{{ $item->material }}"
                                    data-obmate="{{ $item->ob_material }}" data-tmate="{{ $item->tipo_material }}"
                                    data-obs="{{ $item->observaciones }}"
                                    data-toggle="modal" data-target="#editar" onclick="modalEdit()"><i
                                        class="far fa-edit"></i>Editar</button>
                                <button class="button-delete"><i class="far fa-trash-alt"></i>Eliminar</button>
                            </td>
                        </tr>
                    @endforeach
                
                </tbody>
            </table>
        @endif
        </div>
    </div>

    <div id="myModal" class="modal mod-home">
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
                <form action="{{ route('obra.update') }}" class="form-obra" method="POST">
                    @csrf
                    <input type="hidden" name="obra_id" id="obra_id" value="">
                    <div class="form-edit">
                        <label for="">Nombre de la obra</label>
                        <input type="text" id="name_obra" name="name_obra" required />
                    </div>
                    <div class="form-edit">
                        <label for="">Estatus</label>
                        <select id="estatus" name="estatus">
                            <option value="COBRO 90%">COBRO 90%</option>
                            <option value="COBRO 100%">COBRO 100%</option>
                            <option value="LUM">LUM</option>
                            <option value="PROCESO DE CONTRUCCIÓN">PROCESO DE CONTRUCCIÓN</option>
                            <option value="RECEPCIÓN DE MATERIALES">RECEPCIÓN DE MATERIALES</option>
                            <option value="COBRO MAX. AVANCE">COBRO MAX. AVANCE</option>
                        </select>
                    </div>
                    <div class="form-edit">
                        <label for="">Tipo de estatus</label>
                        <select id="t_estatus" name="t_estatus">
                            <option value="COBRADO AL 90%">COBRADO AL 90%</option>
                            <option value="COBRO 100%">COBRO 100%</option>
                            <option value="PROCESO DE CONCILIAR">PROCESO DE CONCILIAR</option>
                            <option value="LUM  PARA SOLICTAR PAGO">LUM PARA SOLICTAR PAGO</option>
                            <option value="OBRA EN PROCESO DE CONSTRUCCIÓN">OBRA EN PROCESO DE CONSTRUCCIÓN</option>
                            <option value="DETALLADO">DETALLADO</option>
                            <option value="PEDIR MATERIALES">PEDIR MATERIALES </option>
                            <option value="MATERIALES RECIBIDOS">MATERIALES RECIBIDOS</option>
                            <option value="COBRO MAX. AVANCE">COBRO MAX. AVANCE</option>
                        </select>
                    </div>
                    <div class="form-edit">
                        <label for="">Observaciónes</label>
                        <input type="text" name="observacion" id="observacion" required>
                    </div>
                    <div class="form-edit">
                        <label for="">Tipo de Obra </label>
                        <input type="text" name="t_obra" id="t_obra" required />
                    </div>
                    <div class="form-edit">
                        <label for="">Supervisor </label>
                        <select id="supervisor" name="supervisor" required>
                            <option value="Epifanio">Epifanio</option>
                            <option value="Oscar">Oscar</option>
                            <option value="David">David</option>
                        </select>
                    </div>
                    <div class="form-edit">
                        <label for="">Fecha de Inicio</label>
                        <input type="date" name="f_start" id="f_start" required />
                    </div>
                    <div class="form-edit">
                        <label for="">Fecha de Terminacion</label>
                        <input type="date" name="f_end" id="f_end" />
                    </div>
                    <div class="form-edit">
                        <label for="">Dias Laborados</label>
                        <input type="text" name="d_laborados" id="d_laborados" />
                    </div>
                    <div class="form-edit">
                        <label for="">Fecha Compromiso</label>
                        <input type="text" name="f_compromiso" id="f_compromiso">
                    </div>
                    <div class="form-edit">
                        <label for="">Documentos fisicos</label>
                        <select id="doc_fisicos" name="doc_fisicos">
                            <option value="si">SI</option>
                            <option value="no">NO</option>
                        </select>
                    </div>
                    <div class="form-edit">
                        <label for="">FCC</label>
                        <select id="fcc" name="fcc">
                            <option value="si">SI</option>
                            <option value="no">NO</option>
                        </select>
                    </div>
                    <div class="form-edit">
                        <label for="">Enviada A Factura</label>
                        <select id="env_fac" name="env_fac">
                            <option value="si">SI</option>
                            <option value="no">NO</option>
                        </select>
                    </div>
                    <div class="form-edit">
                        <label for="">PEP</label>
                        <input type="text" name="pep" id="pep" />
                    </div>
                    <div class="form-edit">
                        <label for="">Operación</label>
                        <input type="text" name="operacion" id="operacion" />
                    </div>
                    <div class="form-edit">
                        <label for="">OEI</label>
                        <input type="text" name="oei" id="oei" />
                    </div>
                    <div class="form-edit">
                        <label for="">OE</label>
                        <input type="text" name="oe" id="oe" />
                    </div>
                    <div class="form-edit">
                        <label for="">CTL/DTTO/RB/ACOMETIDA</label>
                        <input type="text" name="acomedida" id="acomedida" />
                    </div>
                    <div class="form-edit">
                        <label for="">OB</label>
                        <input type="text" name="ob" id="ob" />
                    </div>
                    <div class="form-edit">
                        <label for="">Material</label>
                        <select id="material" name="material">
                            <option value="completo">Completo</option>
                            <option value="a favor">A Favor</option>
                            <option value="en contra">En contra</option>
                            <option value="revicion">Revicion</option>
                        </select>
                    </div>
                    <div class="form-edit">
                        <label for="">Observacion Material</label>
                        <input type="text" name="ob_material" id="ob_material" />
                    </div>
                    <div class="form-edit">
                        <label for="">Tipo de Material</label>
                        <input type="text" name="t_material" id="t_material" />
                    </div>

                    <div class="button-edit-form form-edit">
                        <button class="buttons-forms but-edit" type="submit">Editar</button>
                        <!--<button class="buttons-forms but-cancel close">Cancelar</button>-->
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
        $('.editbtn').on('click', function(event) {
            var button = $(event.relatedTarget)
            //var compro = $(this).data('catid');
            var tipo_est = $(this).data('tps');
            var observacion = $(this).data('obs');
            var dias_labor = $(this).data('dlabor');
            var f_compromiso = $(this).data('fcompr');
            var doc_fisicos = $(this).data('dfisicos');
            var fcc = $(this).data('fcc');
            var facturas = $(this).data('fact');
            //console.log(facturas);
            var pep = $(this).data('pep');
            var operacion = $(this).data('operacion');
            var oei = $(this).data('oe');
            var oe = $(this).data('oe');
            var acomedida = $(this).data('acomedida');
            var ob = $(this).data('ob');
            var material = $(this).data('material');
            var obmate = $(this).data('obmate');
            var tipomate = $(this).data('tmate');

            $tr = $(this).closest('tr');
            var datos = $tr.children("td").map(function() {
                return $(this).text();
            });
            /* $('#obra_id').val(datos[0]); */
            $('#obra_id').val($(this).data('ido'));
            $('#name_obra').val($(this).data('obra'));
            $('#t_obra').val($(this).data('tbra'));
            $('#estatus').val($(this).data('estatus'));
            $('#supervisor').val($(this).data('super'));
            $('#f_start').val($(this).data('finicio'));
            $('#f_end').val($(this).data('term'));
            $('#observacion').val(observacion);
            $('#t_estatus').val(tipo_est);
            $('#d_laborados').val(dias_labor);
            $('#f_compromiso').val(f_compromiso);
            $('#doc_fisicos').val(doc_fisicos);
            $('#fcc').val(fcc);
            $('#env_fac').val(facturas);
            $('#pep').val(pep);
            $('#operacion').val(operacion);
            $('#oei').val(oei);
            $('#oe').val(oe);
            $('#acomedida').val(acomedida);
            $('#ob').val(ob);
            $('#material').val(material);
            $('#ob_material').val(obmate);
            $('#t_material').val(tipomate);

        });
    </script>
@endsection
