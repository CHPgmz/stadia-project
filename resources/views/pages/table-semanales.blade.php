@extends('menu_home')
@section('page-title')
    {{ 'Os Liquidadas Semanales' }}
@endsection

@section('estilos')
<link rel="stylesheet" href="{{ asset('css/style-table.css') }}">
@endsection

@section('contenido')

    @if (Session::has('status'))
        <div class="text-danger" role="alert">
            {{ Session::get('status') }}
        </div>
    @endif

<div class="content">
    <div class="title">
        <h3>Tabla: Os-Liquidadas Semanal</h3>
        <button {{--href="{{ route('os.data') }}"--}} onclick="modalEdit()" class="reg-sem"><span>Nuevo Registro</span></button>
    </div>
    <div class="content-body">
        <table class="table-sem">
            <thead class="table-thead">
                <tr class="tr-head">
                    <th class="id-td">ID#</th>
                    <th class="tds-2">Nombre</th>
                    <th class="tds-3">Total por Semana</th>
                    <th class="tds-4">Año</td>
                    <th class="tds-5">Acciones</th>
                </tr>
            </thead>
            <tbody class="table-body">
					@foreach ($semtodo as $item)
                <tr class="tr-body">
                    <td class="id-td">{{ $loop->iteration }}</td>
                    <td class="tds-2">{{ $item->name_semana }}</td>
                    <td class="tds-3">30</td>
                    <td class="tds-4">{{ $item->año }}</td>
                    <td class="tds-5">
                        <!--<button class="button-edit editbtn" data-toggle="modal" onclick="modalEdit()" data-target="#editar"><i class="far fa-edit"></i>Agregar</button> -->
                        <a class="button-edit" href="{{ route('os.data', $item->id_sem) }}"><i class="far fa-edit"></i>Registrar</a>
                        <button class="button-delete"><i class="far fa-trash-alt"></i>Eliminar</button>
                    </td>
                </tr>
					  @endforeach
            </tbody>
        </table>
    </div>
</div>

<div id="myModal" class="modal mod-sem">
            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <div class="header-content header-title"> 
                        <p>Nuevo Registro</p>
                    </div>
                    <div class="header-content header-close" class="cls" role="button">
                        <span aria-hidden="true" role="button" class="cls"onclick="modalClose()" >&times;</span>
                    </div>
                </div>
                    <div class="modal-body">
                    <form action="{{ route('sem.save') }}" class="form-obra" method="POST">
                        @csrf
                        {{--<input type="hidden" id="id_c" name="id_c">--}}
                        <div class="form-edit">
                            <label for="">Semana</label>
                            <input class="form-input" type="text" id="semana" name="semana" />
                        </div>
                        <div class="form-edit">
                            <label for="">Año</label>
                            {{--<input class="form-input" type="text" id="picker" name="datepicker" />--}}
                            <select id="año" name="año">
                                $i = 2020;
                                @for ($i = 2020; $i <= 2030; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option> 
                                @endfor
                            </select>
                        </div>


                        <div class="button-edit-form form-edit">
                            <button class="buttons-forms but-edit" type="submit">Agregar</button>
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
$(function() {
  $('#picker').datepicker({
    changeYear: true,
    showButtonPanel: true,
    dateFormat: 'yy',
    onClose: function(dateText, inst) {
      var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
      $(this).datepicker('setDate', new Date(year, 1));
    }
  });

  $("#picker").focus(function() {
    $(".ui-datepicker-month").hide();
    $(".ui-datepicker-calendar").hide();
  });

});
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
<!--<script>
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
-->
@endsection

