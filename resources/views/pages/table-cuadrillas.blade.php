@extends('menu_home')
@section('page-title')
    {{ 'Cuadrillas' }}
@endsection

@section('estilos')
<link rel="stylesheet" href="{{ asset('css/style-table.css') }}">
@endsection

@section('contenido')

<div class="content">
    <div class="title">
        <h3>Tabla: Cuadrillas</h3>
        <a href="{{ route('cuadrilla.form') }}" class="new-reg"><span>Nuevo Registro</span></a>
    </div>
    <div class="content-body">
        <table {{-- style="display: block; overflow-x:auto;" --}} class="table-cuadrillas">
            <thead class="table-thead">
                <tr class="tr-head">
                    <th class="id-td">ID#</th>
                    <th class="tdc-2">Nombre</th>
                    <th class="tdc-3">ID - INE</th>
                    <th class="tdc-4">NSS</th>
                    <th class="tdc-5">Curp</th>
                    <th class="tdc-6">Telefono</th>
                    <th class="tdc-7">Dirección</th>
                    <th class="tdc-8">Fe. Nacimiento</th>
                    <th class="tdc-9">Edad</th>
                    <th class="tdc-9">ACCIONES</th>
                </tr>
            </thead>
            <tbody class="table-body">
                @foreach ($cuadrilla as $item)
                <tr class="tr-body">
                    <td class="id-td">{{ $item->id }}</td>
                    <td class="tdc-2">{{ $item->nombre_cua }}</td>
                    <td class="tdc-3">{{ $item->ine }}</td>
                    <td class="tdc-4">{{ $item->nss }}</td>
                    <td class="tdc-5">{{ $item->curp }}</td>
                    <td class="tdc-6">{{ $item->telefono }}</td>
                    <td class="tdc-7">{{ $item->direccion }}</td>
                    <td class="tdc-8">{{ $item->f_nacimiento }}</td>
                    <td class="tdc-9">{{ $item->edad }}</td>
                    <td class="tdc-9">
                        <button class="button-edit editbtn" data-idc="{{ $item->id }}" data-name="{{ $item->nombre_cua }}" data-ine="{{ $item->ine }}" data-nss="{{ $item->nss }}" data-curp="{{ $item->curp }}" data-tel="{{ $item->telefono }}" data-dir="{{ $item->direccion }}" data-fna="{{ $item->f_nacimiento }}" data-edad="{{ $item->edad }}" data-toggle="modal" onclick="modalEdit()" data-target="#editar"><i class="far fa-edit"></i>Editar</button>
                        <button class="button-delete"><i class="far fa-trash-alt"></i>Eliminar</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
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
                    <form action="" class="form-obra">
                        @csrf
                        <input type="hidden" id="id_c" name="id_c">
                        <div class="form-edit">
                            <label for="">Nombre</label>
                            <input class="form-input" type="text" id="nombre" name="nombre" />
                        </div>
                        <div class="form-edit">
                            <label for="">ID - INE</label>
                            <input type="text" id="ine" name="ine"/>
                        </div>
                        <div class="form-edit">
                            <label for="">NSS</label>
                            <input type="text" id="nss" name="nss"/>
                        </div>
                        <div class="form-edit">
                            <label for="">CURP</label>
                            <input type="text" id="curp" name="curp"/>
                        </div>
                        <div class="form-edit">
                            <label for="">Telefono</label>
                            <input type="tel" id="telefono" name="telefono" />
                        </div>
                        <div class="form-edit">
                            <label for="">Direccion</label>
                            <input type="address" id="direccion" name="direccion"/>
                        </div>
                        <div class="form-edit">
                            <label for="">Fecha de Nacimiento</label>
                            <input type="date" id="f_nacimiento" name="f_nacimiento"/>
                        </div>
                        <div class="form-edit">
                            <label for="">Edad</label>
                            <input type="number" id="edad" name="edad"/>
                        </div>

                        <div class="button-edit-form form-edit">
                            <button class="buttons-forms but-edit">Editar</button>
                            <!-- <button class="buttons-forms but-cancel close">Cancelar</button> -->
                        </div>
                    </form>
                </div>

                </div>
            </div>
        </div>
@endsection

@section('scripts')
<script >
     //      var modal = document.getElementById("myModal");

     //      // Get the button that opens the modal
     //      var btn = document.getElementById("myBtn");

     //      // Get the <span> element that closes the modal
     //      var span = document.getElementsByClassName("close")[0];

     //      // When the user clicks the button, open the modal
     //      btn.onclick = function () {
     //          modal.style.display = "block";
     //      };

     //      // When the user clicks on <span> (x), close the modal
     //      span.onclick = function () {
     //          modal.style.display = "none";
     //      };

     //      // When the user clicks anywhere outside of the modal, close it
     //      window.onclick = function (event) {
     //          if (event.target == modal) {
     //              modal.style.display = "none";
     //          }
     //      };
    var modal = document.getElementById("myModal");
    var btn2 = document.getElementsByClassName("btn-ld");
    var span = document.getElementsByClassName("cls");

    function modalEdit(event){
        modal.style.display = "block";
    }

    function modalClose(event) {
        modal.style.display = "none";
    }
</script>
<script>
    $('.editbtn').on('click', function(event){
        $('#id_c').val($(this).data('idc'));
        $('#nombre').val($(this).data('name'));
        $('#ine').val($(this).data('ine'));
        $('#nss').val($(this).data('nss'));
        $('#curp').val($(this).data('curp'));
        $('#telefono').val($(this).data('tel'));
        $('#direccion').val($(this).data('dir'));
        $('#f_nacimiento').val($(this).data('fna'));
        $('#edad').val($(this).data('edad'));

    });
</script>

@endsection

