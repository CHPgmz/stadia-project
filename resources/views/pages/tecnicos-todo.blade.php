@extends('menu_home')
@section('page-title')
    {{ 'Tecnicos' }}
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
            width: 12%;
        }

        .tdt-3,
        .tdt-5,
        .tdt-8 {
            width: 10%;
        }

        .tdt-9 {
            width: 12%;
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
            line-height: 10px;
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
            <h3>Tabla: Tecnicos</h3>
            <a href="{{ route('form.tecnicos') }}" class="new-reg"><span>Nuevo Registro</span></a>
        </div>
        <div class="content-body">
            @if ($tec == 0)
                <h1 style="text-align: center;">No se encontraron registros</h1>
            @else
            <table class="table-tecnicos">
                <thead class="table-thead">
                    <tr class="tr-head">
                        {{-- <th class="id-td">ID#</th> --}}
                        <th class="tdt-1">Nombre</th>
                        <th class="tdt-2">Apellidos</th>
                        <th class="tdt-3">PIC</th>
                        <th class="tdt-4">CURP</th>
                        <th class="tdt-5">Telefono</th>
                        <th class="tdt-6">Correo</th>
                        <th class="tdt-7">ID-INE</th>
                        <th class="tdt-8">NSS</th>
                        <th class="tdt-9">Direccion</th>
                        <th class="tdt-10">Edad</th>
                        <th class="tdt-11">ACCIONES</th>
                    </tr>
                </thead>
                <tbody class="table-body">
                    @foreach ($todoT as $item)
                        <tr class="tr-body">
                            {{-- <td class="id-td">1</td> --}}
                            <td class="tdt-1">{{ $item->nombre_tec }}</td>
                            <td class="tdt-2">{{ $item->apellidos }}</td>
                            <td class="tdt-3">{{ $item->pic }}</td>
                            <td class="tdt-4">{{ $item->curp }}</td>
                            <td class="tdt-5">{{ $item->num_telefono }}</td>
                            <td class="tdt-6">{{ $item->correo }}</td>
                            <td class="tdt-7">{{ $item->ine }}</td>
                            <td class="tdt-8">{{ $item->nss }}</td>
                            <td class="tdt-9">{{ $item->direccion }}</td>
                            <td class="tdt-10">{{ $item->edad }}</td>
                            <td class="tdt-11">
                    <button class="button-edit editbtn" data-idt="{{ $item->id }}" data-name="{{ $item->nombre_tec }}"
                                    data-ape="{{ $item->apellidos }}" data-pic="{{ $item->pic }}"
                                    data-curp="{{ $item->curp }}" data-phone="{{ $item->num_telefono }}"
                                    data-correo="{{ $item->correo }}" data-ine="{{ $item->ine }}"
                                    data-nss="{{ $item->nss }}" data-dir="{{ $item->direccion }}"
                                    data-edad="{{ $item->edad }}" data-toggle="modal" data-target="#editar"
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
                <form action="{{ route('tecnico.update') }}" class="form-obra" method="POST">
                    @csrf
                    <input type="hidden" id="id_tecnico" name="id_tecnico">
                    <div class="form-edit">
                        <label for="">Nombre</label>
                        <input type="text" id="nombre" name="nombre"/>
                    </div>
                    <div class="form-edit">
                        <label for="">Apellidos</label>
                        <input type="text" id="apellidos" name="apellidos" />
                    </div>
                    <div class="form-edit">
                        <label for="">PIC</label>
                        <input type="text" id="pic" name="pic" />
                    </div>
                    <div class="form-edit">
                        <label for="">CURP</label>
                        <input type="text" id="curp" name="curp" />
                    </div>
                    <div class="form-edit">
                        <label for="">TELEFONO</label>
                        <input type="tel" id="tel" name="tel" />
                    </div>
                    <div class="form-edit">
                        <label for="">CORREO</label>
                        <input type="email" id="correo" name="correo" />
                    </div>
                    <div class="form-edit">
                        <label for="">ID - INE</label>
                        <input type="text" id="ine" name="ine" />
                    </div>
                    <div class="form-edit">
                        <label for="">NSS</label>
                        <input type="text" id="nss" name="nss" />
                    </div>
                    <div class="form-edit">
                        <label for="">DIRECCIÓN</label>
                        <input type="text" id="dir" name="dir" />
                    </div>
                    <div class="form-edit">
                        <label for="">EDAD</label>
                        <input type="number" id="edad" name="edad" />
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
            $('#nombre').val($(this).data('name'));
            $('#id_tecnico').val($(this).data('idt'));
            $('#apellidos').val($(this).data('ape'));
            $('#pic').val($(this).data('pic'));
            $('#curp').val($(this).data('curp'));
            $('#tel').val($(this).data('phone'));
            $('#correo').val($(this).data('correo'));
            $('#ine').val($(this).data('ine'));
            $('#nss').val($(this).data('nss'));
            $('#dir').val($(this).data('dir'));
            $('#edad').val($(this).data('edad'));

        });
    </script>
@endsection
