@extends('menu_home')

@section('contenido')
    <p class="title-form">NUEVO REGISTRO</p>
    @if (Session::has('status'))
        <div class="text-danger" role="alert">
            {{ Session::get('status') }}
        </div>
    @endif

    <main class="main-form">
        <form action="{{ route('cuadrilla.insert') }}" {{-- class="form" --}} method="POST" class="form-osliquidadas">
            @csrf
            <div class="div-form-obras">
                <label for="">Nombre</label>
                <input type="text" name="nom_cua" id="nom_cua"  autocomplete="off" required />
            </div>
            <div class="div-form-obras">
                <label for="">ID - INE</label>
                <input type="tex" name="ine" id="ine" autocomplete="off" required />
            </div>
            <div class="div-form-obras">
                <label for="">NSS</label>
                <input type="text" name="nss" id="nss" autocomplete="off" required />
            </div>
            <div class="div-form-obras">
                <label for="">Curp</label>
                <input type="text" name="curp" id="curp" autocomplete="off" required />
            </div>
            <div class="div-form-obras">
                <label for="">Telefono</label>
                <input type="tel" name="telefono" id="telefono" autocomplete="off" required />
            </div>
            <div class="div-form-obras">
                <label for="">Dirección</label>
                <input type="text" name="dir" id="dir" autocomplete="off" required />
            </div>
            <div class="div-form-obras">
                <label for="">Fecha de Nacimiento</label>
                <input type="date" name="f_nacimiento" id="f_nacimiento" autocomplete="off" required />
            </div>
            <div class="div-form-obras">
                <label for="">Edad</label>
                <input type="number" name="edad" id="edad" autocomplete="off" required />
            </div>
            <div class="div-form-obras">
                <button class="form-button" type="submit">Guardar</button>
            </div>
        </form>
    </main>
@endsection

{{-- @section('scripts')
@endsection --}}
