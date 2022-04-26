@extends('menu_home')
@section('page-title')
    {{ 'Obras' }}
@endsection
@section('estilos')
    {{-- <link rel="stylesheet" href="{{ asset('css/style-table.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/obras.css') }}">
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
            <a href="{{ route('export.obras') }}" class="new-reg"><span>Descargar</span></a>
        </div>
        <div class="content-body">
            @if ($obs == 0)
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
                                        data-term="{{ $item->fecha_terminacion }}"
                                        data-tps="{{ $item->tipo_estatus }}" data-obs="{{ $item->observacion }}"
                                        data-dlabor="{{ $item->dias_laborados }}"
                                        data-fcompr="{{ $item->fecha_compromiso }}"
                                        data-dfisicos="{{ $item->doc_fisicos }}" data-fcc="{{ $item->fcc }}"
                                        data-fact="{{ $item->enviado_factura }}" data-pep="{{ $item->pep }}"
                                        data-operacion="{{ $item->operacion }}" data-oei="{{ $item->oei }}"
                                        data-oe="{{ $item->oe }}" data-acomedida="{{ $item->acomedida }}"
                                        data-ob="{{ $item->ob }}" data-material="{{ $item->material }}"
                                        data-obmate="{{ $item->ob_material }}" data-tmate="{{ $item->tipo_material }}"
                                        data-obs="{{ $item->observaciones }}" data-toggle="modal" data-target="#editar"
                                        onclick="modalEdit()"><i class="far fa-edit"></i>Editar</button>

                                    <button class="button-delete dlbtn" data-idb="{{ $item->id }}" onclick="modalDL()" data-toggle="modal" data-target="#mdl-dlt"><i class="far fa-trash-alt"></i>Eliminar</button>
                                </td>
                            </tr>
    
                            
                        @endforeach
                    
                    </tbody>
                </table>
            @endif
        </div>
    </div>
    
<div id="mdl-dlt" class="modal modal-dl" name="modal-dl" role="dialog" tabindex="-1" aria-labelledby="exampleModalLongTitle" ria-hidden="true">
        <!-- Modal content -->
        <div class="mdl-content" >
            <div class="modal-header">
                <div class="header-content header-title">
                    <p>Eliminar registro</p>
                </div>
                <div class="header-content header-close" class="cls" role="button">
                    <span aria-hidden="true" role="button" class="cls" onclick="modalClose()">&times;</span>
                </div>
            </div>
            <div class="modal-body">
                <form action="{{ route('elm-obra') }}" method="POST" class="form-obra" >
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-dl">
                        <label for="">Se eliminara completamente el registro</label>
                        <input type="hidden" name="obra_id" id="obra_id"  />
                    </div>
                    <div class="button-edit-form form-dl dlbtn">
                        <button class="buttons-forms but-edit" type="submit">Eliminar</button>
                    </div>
                </form>
            </div>

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
                    <span aria-hidden="true" role="button" class="cls" onclick="modalClose()">&times;</span>
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
                        <input type="text" name="supervisor" id="supervisor">
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

        var span = document.getElementsByClassName("close");

        var md_dl = document.getElementsByName("modal-dl");
        var modal_dl = document.getElementById("mdl-dlt");

        var btn2 = document.getElementsByClassName("btn-dl");
        //var btn = document.getElementById("myBtn");

        function modalEdit(event) {
            modal.style.display = "block";
        }

        function modalClose() {
            modal.style.display = "none";
            modal_dl.style.display = "none";
        }


        function modalDL(event){
            modal_dl.style.display = "block";
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
        
      //  $('.dlbtn').on('click', function(event) {
      //      $('#dl-obra').val($(this).data('id'));
      //      var id = $(this).data('id');
      //      
      //  });
        $('.dlbtn').on('click', function(event){
            var button = $(event.relatedTarget)
            var idb = button.data('idb');
            
            $('#obra_id').val($(this).data('idb'));
        });
    </script>
@endsection
