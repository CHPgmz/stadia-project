@extends('menu_home')

@section('contenido')
    <p class="title-form">NUEVO REGISTRO</p>
    @if (Session::has('status'))
        <div class="text-danger" role="alert">
            {{ Session::get('status') }}
        </div>
    @endif
    
    <main class="main-form">
        <form action="{{ route('os_sem.save') }}" {{-- class="form" --}} method="POST" class="form-osliquidadas">
            @csrf
            <div class="div-form-obras">
                <label for="">Tecnico</label>
                <select id="name_tec" name="name_tec">
                    @foreach ($tecn as $item)
                        <option value="{{ $item->nombre_tec }}">{{ $item->nombre_tec }}</option>
                    @endforeach
                </select>

            </div>
            <div class="div-form-obras">
                <label for="">Lunes</label>
                <input type="number" name="lunes" id="lunes" autocomplete="off" />
            </div>
            <div class="div-form-obras">
                <label for="">Martes</label>
                <input type="number" name="martes" id="martes" autocomplete="off"  />
            </div>
            <div class="div-form-obras">
                <label for="">Miercoles</label>
                <input type="number" name="miercoles" id="miercoles" autocomplete="off"  />
            </div>
            <div class="div-form-obras">
                <label for="">Jueves</label>
                <input type="number" name="jueves" id="jueves" autocomplete="off"  />
            </div>
            <div class="div-form-obras">
                <label for="">Viernes</label>
                <input type="number" name=viernes id="viernes" autocomplete="off" />
            </div>
            <div class="div-form-obras">
                <label for="">Sabado</label>
                <input type="number" name="sabado" id="sabado" autocomplete="off"  />
            </div>
            <div class="div-form-obras">
                <label for="">Domingo</label>
                <input type="number" name="domingo" id="domingo" autocomplete="off" />
            </div>
            <input type="hidden" name="id_sem" id="id_sem" value="{{ $ids->id_sem }}">
            <div class="div-form-obras">
                <button class="form-button" type="submit">Guardar</button>
            </div>
        </form>
    </main>
@endsection

{{-- @section('scripts')
@endsection --}}
