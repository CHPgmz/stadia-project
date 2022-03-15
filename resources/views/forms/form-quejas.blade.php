@extends('menu_home')

@section('contenido')
    <p class="title-form">NUEVO REGISTRO</p>
    @if (Session::has('status'))
        <div class="text-danger" role="alert">
            {{ Session::get('status') }}
        </div>
    @endif

    <main class="main-form">
        <form action="{{ route('quejas.insert') }}" class="form-osliquidadas" method="POST">
            @csrf
            <div class="div-form-obras">
                <label for="">Fecha</label>
                <input type="date" name="fecha" id="fecha" required />
            </div>
            <div class="div-form-obras">
                <label for="">Telefono del Cliente</label>
                <input type="tel" name="telefono_cli" id="telefono_cli" maxlength="10" required />
            </div>
            <div class="div-form-obras">
                <label for="">Nombre del Cliente</label>
                <input type="text" name="nom_cli" id="nom_cli" required />
            </div>
            <div class="div-form-obras">
                <label for="">Nombre del Tecnico</label>
                <input type="text" name="nom_tec" id="nom_tec" required />
            </div>
            <div class="div-form-obras">
                <label for="">PIC</label>
                <input type="text" name="pic" id="pic" required />
            </div>
            <div class="div-form-obras">
                <label for="">ALFA</label>
                <input type="text" name="alfa" id="alfa" required />
            </div>
            <div class="div-form-obras">
                <label for="">Folio Pisa</label>
                <input type="text" name="folio_pisa" id="folio_pisa" required />
            </div>
            <div class="div-form-obras">
                <label for="">Folio Pisaplex</label>
                <input type="text" name="folio_pisaplex" id="folio_pisaplex" required />
            </div>
            <div class="div-form-obras">
                <label for="">OS</label>
                <input type="text" name="os" id="os" required />
            </div>
            <div class="div-form-obras">
                <label for="">DTTO</label>
                <input type="text" name="dtto" id="dtto" required />
            </div>
            <div class="div-form-obras">
                <label for="">Observaciones</label>
                <input type="text" name="observaciones" id="observaciones" required />
            </div>
            <div class="div-form-obras">
                <button class="form-button" type="submit">Guardar</button>
            </div>
        </form>
    </main>
@endsection

@section('scripts')
@endsection
