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
        <a href="{{ route('sem.todo',$ids->id_sem)}}" class="new-reg"><span>Nuevo Registro</span></a>
    </div>
    <div class="content-body-sem">
        @if ($cnt == 0)
            <h1 style="text-align: center;"<F29>>No hay datos</h1>
        @else
        <table class="os-data">
            <thead class="os-head">
                <tr class="os-tr">
                    <th class="tdst-1">Tecnico</th>
                    <th class="tdst-2">Lunes</th>
                    <th class="tdst-3">Martes</th>
                    <th class="tdst-4">Miercoles</th>
                    <th class="tdst-5">Jueves</th>
                    <th class="tdst-6">Viernes</th>
                    <th class="tdst-7">Sabado</th>
                    <th class="tdst-8">Domingo</th>
                    <th class="tdst-9">Total<br>Tecnico</th>
                    <th class="tdst-10">Total<br> Semana</th>
                    <th class="tdst-11">Acciones</th>

                </tr>
            </thead>
            <tbody class="table-body">
					@foreach ($data as $item)
                <tr class="tr-body"> 
                    <th class="tdst-1">{{ $item->tecnico }}</th>
                    <td class="tdst-2">{{ $item->lunes }}</td>
                    <td class="tdst-3">{{ $item->martes }}</td>
                    <td class="tdst-4">{{ $item->miercoles }}</td>
                    <td class="tdst-5">{{ $item->jueves }}</td>
                    <td class="tdst-6">{{ $item->viernes }}</td>
                    <td class="tdst-7">{{ $item->sabado }}</td>
                    <td class="tdst-8">{{ $item->domingo }}</td>
                    <td class="tdst-9">0</td>
                    <th class="tdst-10">0</th>
                    <td class="tdst-11">
                        <button class="button-edit editbtn" data-idt="{{ $item->id_data }}" data-tec="{{ $item->tecnico }}" 
                        data-ln="{{ $item->lunes }}" data-mrts="{{ $item->martes }}" data-mrls="{{ $item->miercoles }}" data-jves="{{ $item->jueves }}" data-vrns="{{ $item->viernes }}" 
                        data-sdo="{{ $item->sabado }}" data-dmgo="{{ $item->domingo }}" data-toggle="modal" onclick="modalEdit()" data-target="#editar"><i class="far fa-edit"></i>Editar</button>
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
                    <form action="{{ route('data.update') }}" class="form-obra"  method="POST">
                        @csrf
                        <input type="hidden" id="idt" name="idt">
                        <div class="form-edit">
                            <label for="">Tecnico</label>
                            <select id="tecnico" name="tecnico">
                            @foreach ($tecn as $item)
                                <option value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                            </select>
                            <!-- <input class="form-input" type="text" id="nombre" name="nombre" /> -->
                        </div>
                        <div class="form-edit">
                            <label for="">Lunes</label>
                            <input type="number" id="lunes" name="lunes"/>
                        </div>
                        <div class="form-edit">
                            <label for="">Martes</label>
                            <input type="number" id="martes" name="martes"/>
                        </div>
                        <div class="form-edit">
                            <label for="">Miercoles</label>
                            <input type="number" id="miercoles" name="miercoles"/>
                        </div>
                        <div class="form-edit">
                            <label for="">Jueves</label>
                            <input type="number" id="jueves" name="jueves" />
                        </div>
                        <div class="form-edit">
                            <label for="">Viernes</label>
                            <input type="number" id="viernes" name="viernes"/>
                        </div>
                        <div class="form-edit">
                            <label for="">Sabado</label>
                            <input type="number" id="sabado" name="sabado" />
                        </div>
                        <div class="form-edit">
                            <label for="">Domingo</label>
                            <input type="number" id="domingo" name="domingo"/>
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
        $('#idt').val($(this).data('idt'));
        $('#tecnico').val($(this).data('tec'))
        $('#lunes').val($(this).data('ln'));
        $('#martes').val($(this).data('mrts'));
        $('#miercoles').val($(this).data('mrls'));
        $('#jueves').val($(this).data('jves'));
        $('#viernes').val($(this).data('vrns'));
        $('#sabado').val($(this).data('sdo'));
        $('#domingo').val($(this).data('dmgo'));
        $('#edad').val($(this).data('edad'));

    });
</script>

@endsection

