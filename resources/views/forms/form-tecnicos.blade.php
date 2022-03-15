@extends('menu_home')

@section('contenido')
    <p class="title-form">NUEVO REGISTRO</p>
    @if (Session::has('status'))
        <div class="text-danger" role="alert">
            {{ Session::get('status') }}
        </div>
    @endif

    <main class="main-form">
        <form action="#" class="form" method="POST">
            @csrf
            <div class="div-form">
                <label for="">Nombre</label>
                <input type="text" name="nom_tec" id="nom_tec"  autocomplete="off" required />
            </div>
            <div class="div-form">
                <label for="">Apellidos</label>
                <input type="tex" name="apellidos" id="apellidos" autocomplete="off" required />
            </div>
            <div class="div-form">
                <label for="">PIC</label>
                <input type="text" name="pic" id="pic" autocomplete="off" required />
            </div>
            <div class="div-form">
                <label for="">Telefono</label>
                <input type="tel" name="telefono" id="telefono" autocomplete="off" required />
            </div>
            <div class="div-form">
                <label for="">correo</label>
                <input type="gmail" name="correo" id="correo" autocomplete="off" required />
            </div>
            <div class="div-form">
                <button class="form-button" type="submit">Guardar</button>
            </div>
        </form>
    </main>
@endsection

{{-- @section('scripts')
@endsection --}}
