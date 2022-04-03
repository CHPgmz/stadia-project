
    <div id="mdl-dlt" class="modal modal-dl" name="modal-dl" role="dialog" tabindex="-1">
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
                <form action="{{ route('delete-obra') }}" class="form-obra" method="POST">
                    @method('DELETE')
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">   
                    <div class="form-dl">
                        <label for="">Se eliminara completamente el registro</label>
                        <input type="hidden" name="obra_id" id="obra_id" value="">
                    </div>

                    <div class="button-edit-form form-dl dlbtn">
                        <button class="buttons-forms but-edit" type="submit">Eliminar</button>
                        <!--<button class="buttons-forms but-cancel close">Cancelar</button>-->
                    </div>
                </form>
            </div>

        </div>
    </div>
