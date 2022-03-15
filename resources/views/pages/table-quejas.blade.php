@extends('menu_home')

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
            <h3>Tabla: Quejas</h3>
            <a href="{{ route('quejas.form') }}" class="new-reg"><span>Nuevo Registro</span></a>
        </div>
        <div class="content-body">
            <table>
                <thead class="table-thead">
                    <tr class="tr-head">
                        <th class="id-td">ID#</th>
                        <th class="tdq-2">Fecha</th>
                        <th class="tdq-3">Num. Cliente</th>
                        <th class="tdq-4">Nom. Cliente</th>
                        <th class="tdq-5">Nom. Tecnico</th>
                        <th class="tdq-6">Distrito</th>
                        <th class="tdq-7">Observaciones</th>
                        <th class="tdq-8">ACCIONES</th>
                    </tr>
                </thead>
                <tbody class="table-body">
                    @foreach ($quejasTodo as $item)
                        <tr class="tr-body">
                            <td class="id-td">{{ $item->id }}</td>
                            <td class="tdq-2">{{ $item->fecha }}</td>
                            <td class="tdq-3">{{ $item->telefono_cli }}</td>
                            <td class="tdq-4">{{ $item->cliente }}</td>
                            <td class="tdq-5">{{ $item->nombre_tecnico }}</td>
                            <td class="tdq-6">{{ $item->dtto }}</td>
                            <td class="tdq-7">{{ $item->observaciones }}</td>
                            <td class="tdq-8">
                                <button class="button-edit editbtn" data-idja="{{ $item->id }}" 
                                    data-fecha="{{ $item->fecha }}" data-telefono="{{ $item->telefono_cli }}" data-cliente="{{ $item->cliente }}" data-tecnico="{{ $item->nombre_tecnico }}" data-pic="{{ $item->pic }}" data-alfa="{{ $item->alfa }}" data-fpisa="{{ $item->folio_pisa }}" data-fplex="{{ $item->folio_pixaplex }}" data-os="{{ $item->os }}" data-dtto="{{ $item->dtto }}" data-obs="{{ $item->observaciones }}"
                                    data-toggle="modal" data-target="#editar" onclick="modalEdit()">
                                    <i class="far fa-edit"></i>Editar</button>
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
                <p>Editar Registro</p>
            </div>
            <div class="modal-body">
                <form action="{{ route('quejas.update') }}"  method="POST" class="form-obra" >
    
                    @csrf
                    <input type="hidden" name="id_queja" id="id_queja" required >
                    <div class="form-edit">
                        <label for="">Fecha</label>
                        <input type="date" name="fecha" id="fecha" required >
                    </div>
                    <div class="form-edit">
                        <label for="">Numero del Cliente</label>
                        <input type="number" name="tel_cli" id="tel_cli" required />
                    </div>
                    <div class="form-edit">
                        <label for="">Nombre del Cliente</label>
                        <input type="text" name="name_cli" id="name_cli" required />
                    </div>
                    <div class="form-edit">
                        <label for="">Nombre del Tecnico</label>
                        <input type="text" name="name_tec" id="name_tec" required />
                    </div>
                    <div class="form-edit">
                        <label for="">PIC</label>
                        <input type="text"  name="pic" id="pic" required />
                    </div>
                    <div class="form-edit">
                        <label for="">ALFA</label>
                        <input type="text" name="alfa" id="alfa" required />
                    </div>
                    <div class="form-edit">
                        <label for="">FOLIO PISA</label>
                        <input type="text" name="folio_pisa" id="folio_pisa" required/>
                    </div>
                    <div class="form-edit">
                        <label for="">FOLIO PISAPLEX</label>
                        <input type="text" name="folio_pisaplex" id="folio_pisaplex" required />
                    </div>
                    <div class="form-edit">
                        <label for="">OS</label>
                        <input type="text" name="os" id="os" required />
                    </div>
                    <div class="form-edit">
                        <label for="">DTTO</label>
                        <input type="text" name="dtto" id="dtto" required />
                    </div>
                    <div class="form-edit">
                        <label for="">Observaciones</label>
                        <input type="text" name="obs" id="obs" required />
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
        var id_queja = $(this).data('idja');
        var fecha = $(this).data('fecha');
        var telefono = $(this).data('telefono');
        var cliente = $(this).data('cliente');
        
        var tecnico = $(this).data('tecnico');
        var pic = $(this).data('pic');
        var alfa = $(this).data('alfa');
        var f_pisa = $(this).data('fpisa');
        var f_plex = $(this).data('fplex');
        var os = $(this).data('os');
        var dtto = $(this).data('dtto');
        var observaciones = $(this).data('obs');

        $('#id_queja').val(id_queja);
        $('#fecha').val(fecha);
        $('#tel_cli').val(telefono);
        $('#name_cli').val(cliente);
        $('#name_tec').val(tecnico);
        $('#pic').val(pic);
        $('#alfa').val(alfa);
        $('#folio_pisa').val(f_pisa);
        $('#folio_pisaplex').val(f_plex);
        $('#os').val(os);
        $('#dtto').val(dtto);
        $('#obs').val(observaciones);

    });
    </script>
@endsection
