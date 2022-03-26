
@extends('menu_home')
@section('page-title')
    {{ 'Quejas Garantias' }}
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

        .table-tecnicos {
            margin-top: 20px;
            width: 130%;
        }

        [class^="tdt-"] {
            width: 9%;
        }

        .tdt-5,
        .tdt-6,
        .tdt-7 {
            width: 7%;
        }

        .tdt-10 {
            width: 15%;
        }
        .tdt-11 {
            width: 13%;
        }


        /* [class^="tr-"] */
        th,
        td {
            text-align: left;
            color: #3e5569;
            font-size: 16px;
            border-bottom: 1px solid #e1eaee;
            padding: 2px;
            /* width: 50px; */
        }

        /* .td-11 {
                width: 4%;
            } */

        .tr-head th {
            line-height: 15px;
        }

        .tr-body {
            line-height: 20px;
        }

        /* .td-13,
            .td-14,
            .td-15 {
                width: 10%;
            } */

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
            <h3>Tabla: Quejas Garantias</h3>
            <a href="{{ route('garantias.form') }}" class="new-reg"><span>Nuevo Registro</span></a>
        </div>
        <div class="content-body">
            @if ($gtodo == 0)
                <h1 style="text-align: center;">No se encontraron registros</h1>
            @else
            <table class="table-tecnicos">
                <thead class="table-thead">
                    <tr class="tr-head">
                        {{-- <th class="id-td">ID#</th> --}}
                        <th class="tdt-1">Cope</th>
                        <th class="tdt-2">Tecnico</th>
                        <th class="tdt-3">Cliente</th>
                        <th class="tdt-4">Tel. Cliente</th>
                        <th class="tdt-5">Liquidacion</th>
                        <th class="tdt-6">Causa</th>
                        <th class="tdt-7">Tipo de Falla</th>
                        <th class="tdt-8">Accion Tomada</th>
                        <th class="tdt-9">Fecha</th>
                        <th class="tdt-10">Observacion</th>
                        <th class="tdt-11">ACCIONES</th>
                    </tr>
                </thead>
                <tbody class="table-body">
                    @foreach ($grt as $item)
                        <tr class="tr-body">
                            {{-- <td class="id-td">1</td> --}}
                            <td class="tdt-1">{{ $item->cope }}</td>
                            <td class="tdt-2">{{ $item->tecnico }}</td>
                            <td class="tdt-3">{{ $item->cliente }}</td>
                            <td class="tdt-4">{{ $item->num_cli }}</td>
                            <td class="tdt-5">{{ $item->liquidacion }}</td>
                            <td class="tdt-6">{{ $item->causa }}</td>
                            <td class="tdt-7">{{ $item->tipo_falla }}</td>
                            <td class="tdt-8">{{ $item->accion_tomada }}</td>
                            <td class="tdt-9">{{ $item->fecha }}</td>
                            <td class="tdt-10">{{ $item->observacion }}</td>
                            <td class="tdt-11">
                    <button class="button-edit editbtn" data-idt="{{ $item->id }}" data-cope="{{ $item->cope }}"
                                    data-tec="{{ $item->tecnico }}" data-cliente="{{ $item->cliente }}"
                                    data-numcl="{{ $item->num_cli }}" data-liq="{{ $item->liquidacion }}"
                                    data-causa="{{ $item->causa }}" data-falla="{{ $item->tipo_falla }}"
                                    data-accion="{{ $item->accion_tomada }}" data-fecha="{{ $item->fecha }}"
                                    data-obs="{{ $item->observacion }}" data-toggle="modal" data-target="#editar"
                                    onclick="modalEdit()"><i class="far fa-edit"></i>Editar</button>
              <button class="button-delete"><i class="far fa-trash-alt"></i>Eliminar</button>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        @endif
        </div>
    </div>

    <div id="myModal" class="modal mod-tec">
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
                <form action="{{ route('garantias.update') }}" class="form-obra" method="POST">
                    @csrf
                    <input type="hidden" id="id_gr" name="id_gr">
                    <div class="form-edit">
                        <label for="">Cope</label>
                        <input type="text" id="cope" name="cope"/>
                    </div>
                    <div class="form-edit">
                        <label for="">Tecnico</label>
                        <select id="tecnico" name="tecnico">
                            @foreach ($tecnico as $item)
                                <option value="{{ $item->nombre_tec }}">{{ $item->nombre_tec }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-edit">
                        <label for="">Nombre del cliente</label>
                        <input type="text" id="cliente" name="cliente" />
                    </div>
                    <div class="form-edit">
                        <label for="">Telefono del Cliente</label>
                        <input type="tel" id="tel_cli" name="tel_cli" />
                    </div>
                    <div class="form-edit">
                        <label for="">Liquidación</label>
                        <input type="number" id="liquidacion" name="liquidacion" />
                    </div>
                    <div class="form-edit">
                        <label for="">Causa</label>
                        <input type="number" id="causa" name="causa"  />
                    </div>
                    <div class="form-edit">
                        <label for="">Tipo de Falla</label>
                        <input type="number" id="t_falla" name="t_falla" />
                    </div>
                    <div class="form-edit">
                        <label for="">Acción Tomada</label>
                        <input type="text" id="a_tomada" name="a_tomada" />
                    </div>
                    <div class="form-edit">
                        <label for="">Fecha</label>
                        <input type="date" id="fecha" name="fecha" />
                    </div>
                    <div class="form-edit">
                        <label for="">Observacion</label>
                        <input type="text" id="obs" name="obs" />
                    </div>
                    <div class="button-edit-form form-edit">
                        <button class="buttons-forms but-edit" type="submit">Editar</button>
                        {{-- <button class="buttons-forms but-cancel close">Cancelar</button> --}}
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
        
            // $('#obra_id').val(datos[0]);
            $('#id_gr').val($(this).data('idt'));
            $('#cope').val($(this).data('cope'));
            $('#tecnico').val($(this).data('tec'));
            $('#cliente').val($(this).data('cliente'));
            $('#tel_cli').val($(this).data('numcl'));
            $('#liquidacion').val($(this).data('liq'));
            $('#causa').val($(this).data('causa'));
            $('#t_falla').val($(this).data('falla'));
            $('#a_tomada').val($(this).data('accion'));
            $('#fecha').val($(this).data('fecha'));
            $('#obs').val($(this).data('obs'));

        });
    </script>
@endsection
