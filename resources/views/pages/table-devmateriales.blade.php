@extends('menu_home')

@section('estilos')
    <link rel="stylesheet" href="{{ asset('css/style-table.css') }}">
@endsection

@section('contenido')
@if (Session::has('status'))

  <div class="text-danger" role="alert">
        {{Session::get('status')}}
  </div>
@endif
    <div class="content">
        <div class="title">
            <h3>Tabla: Devolucion de materiales</h3>
            <a href="{{ route('materiales.form') }}" class="new-reg"><span>Nuevo Registro</span></a>
        </div>
        <div class="content-body">
            <table>
                <thead class="table-thead">
                    <tr class="tr-head">
                        <th class="id-td">ID#</th>
                        <th class="tdv-2">N. Obra</th>
                        <th class="tdv-3">Supervisor</th>
                        <th class="tdv-4">OB</th>
                        <th class="tdv-5">Estatus</th>
                        <th class="tdv-6">Observaciones</th>
                        <th class="tdv-7">ACCIONES</th>
                    </tr>
                </thead>
                <tbody class="table-body">
                    @foreach ($todoMtr as $item)
                        <tr class="tr-body">
                            <td class="id-td">{{ $item->id }}</td>
                            <td class="tdv-2">{{ $item->name_obra }}</td>
                            <td class="tdv-3">{{ $item->supervisor }}</td>
                            <td class="tdv-4">{{ $item->ob }}</td>
                            <td class="tdv-5">{{ $item->estatus }}</td>
                            <td class="tdv-6">{{ $item->observaciones }}</td>
                            <td class="tdv-7">
                                <!--<button class="button-edit" id="myBtn" data-catid="{{ $item->id }}"
                                    data-name="{{ $item->name_obra }}" data-super="{{ $item->supervisor }}"
                                    data-ob="{{ $item->ob }}" data-status="{{ $item->estatus }}"
                                    data-obser="{{ $item->observaciones }}" data-toggle="modal" data-target="#edit"><i
                                        class="far fa-edit"></i>Editar</button>-->
                                        <button class="button-edit editbtn"  data-toggle="modal" data-target="#editar" onclick="modalEdit()"><i class="far fa-edit"></i>Editar</button>

                                <!--<button class="button-delete"><i class="far fa-trash-alt"></i>Eliminar</button>-->
                                <button class="button-delete" id="my-template" onclick="delete('warningConfirm')"><i class="far fa-trash-alt"></i>Nada</button>
                            </td>
                        </tr>
                        
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    {{ $todoMtr->links() }}
    <div id="myModal" class="modal mod-devm" type="modal" role="dialog" aria-labelledby="myModalLabel">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <p>Editar Registro</p>
            </div>
            <div class="modal-body">
                <form action="{{ route('materiales.update') }}" class="form-obra" method="POST">
                    @csrf
                    <input type="hidden" name="obra_id" id="obra_id" value="">
                    <div class="form-edit">
                        <label for="">N. Obra</label>
                        <input class="form-input" type="text" name="name_obra" id="name_obra"  />
                    </div>
                    <div class="form-edit">
                        <label for="">Supervisor</label>
                        <!--<input type="text"  value="Epifanio"/> -->
                        <select id="name_super" name="name_super" required>
                            <option value="Epifanio">Epifanio</option>
                            <option value="Oscar">Oscar</option>
                            <option value="David">David</option>
                        </select>
                    </div>
                    <div class="form-edit">
                        <label for="">OB</label>
                        <input type="text" name="ob" id="ob"  />
                    </div>
                    <div class="form-edit">
                        <label for="">Estatus </label>
                        <input type="text" name="estatus" id="estatus"  />
                    </div>
                    <div class="form-edit">
                        <label for="">Observaciones</label>
                        <input type="text" name="observaciones" id="observaciones"  />
                    </div>
    
                    <div class="button-edit-form form-edit">
                        <button class="buttons-forms but-edit" type="submit">edit</button>
                        <button class="buttons-forms but-cancel close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
        function modalEdit(){
            modal.style.display = "block";
        }

        function modalClose(){
            modal.style.display = "none";
        }
        // btn2.addEventListener("click", () => {
        //     document.getElementsByClassName('myModal').style = "display: block;"
        //     //modal.style.display = "block";
        // });
        // When the user clicks the button, open the modal
        /*btn2.onclick = function() {
            modal.style.display = "block";
        };*/
        // When the user clicks on <span> (x), close the modal
        /*span.onclick = function() {
            modal.style.display = "none";
        };*/
        // When the user clicks anywhere outside of the modal, close it
        /*window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        };*/
    </script>

    <script>
        $('.editbtn').on('click', function(){
            $tr=$(this).closest('tr');
            var datos = $tr.children("td").map(function(){
                return $(this).text();
            });
            $('#obra_id').val(datos[0]);
            $('#name_obra').val(datos[1]);
            $('#name_super').val(datos[2]);
            $('#ob').val(datos[3]);
            $('#estatus').val(datos[4]);
            $('#observaciones').val(datos[5]);
        } );

        // $('#edit').on('modal', function(event) {
        //     var button = $(event.relatedTarget);
        //     var name_obra = button.data('name');
        //     console.log(name_obra);
        //     var supervisor = button.data('super');
        //     var ob = button.data('ob');
        //     var estatus = button.data('status');
        //     var observaciones = button.data('obser');
        //     var mt_id = button.data('catid');
        //     var modal = $(this)
        //     modal.find('.form-obra #name_obra').val(name_obra);
        //     modal.find('.form-obra #supervisor').val(supervisor);
        //     modal.find('.form-obra #ob').val(ob);
        //     modal.find('.form-obra #estatus').val(estatus);
        //     modal.find('.form-obra #observaciones').val(observaciones);
        //     modal.find('.form-obra #obra_id').val(mt_id);
        // });
    </script>
    <script>
        function delete(warningConfirm){
Swal.fire({
  template: '#my-template'
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})
        }
    </script>
@endsection
