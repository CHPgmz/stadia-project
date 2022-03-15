@extends('menu_home')

@section('estilos')
    <link rel="stylesheet" href="{{ asset('css/style-table.css') }}">
@endsection

@section('contenido')
    <div class="content-data">
        <div class="content-info info-home">
            <div class="info-nav">
                <div class="info-body">
                    <span>OBRAS</span>
                    <p>{{ $obrasT }}</p>
                </div>
                <div><i class="fa fa-table icon-table"></i></div>
            </div>
            <div class="info-nav-two">
                <p><i class="fas fa-calendar"></i>Este mes</p>
            </div>
        </div>
        <div class="content-info infot-home2">
            <div class="info-nav">
                <div class="info-body">
                    <span>MATERIALES</span>
                    <p>{{ $materiales }}</p>
                </div>
                <div><i class="fas fa-tools icon-mtr"></i></div>
            </div>
            <div class="info-nav-two">
                <p><i class="fas fa-calendar"></i>Este mes</p>
            </div>
        </div>
        <div class="content-info infot-home3">
            <div class="info-nav">
                <div class="info-body">
                    <span>OS Liquidadas</span>
                    <p>{{ $liquidadas }}</p>
                </div>
                <div><i class="fas fa-clipboard-check icon-os"></i></div>
            </div>
            <div class="info-nav-two">
                <p><i class="fas fa-calendar"></i>Este mes</p>
            </div>
        </div>
        <div class="content-info infot-home4">
            <div class="info-nav">
                <div class="info-body">
                    <span>Quejas</span>
                    <p>10</p>
                </div>
                <div><i class="fas fa-clipboard-list icon-quejas"></i></div>
            </div>
            <div class="info-nav-two">
                <p><i class="fas fa-calendar"></i>Este mes</p>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="title">
            <h3>Tabla: Obras</h3>
            <span>Ultimos 05 registros</span>
        </div>
        <div class="content-body">
            <table>
                <thead class="table-thead">
                    <tr class="tr-head">
                        <th class="id-td">ID#</th>
                        <th class="td-2">Nom. OBRA</th>
                        <th class="td-3">Tip. OBRA</th>
                        <th class="td-4">ESTATUS</th>
                        <th class="td-5">SUPERVISOR</th>
                        <th class="td-6">F. INICIO</th>
                        <th class="td-7">F. TERM.</th>
                    </tr>
                </thead>
                <tbody class="table-body">
                    @foreach ($homeObras as $item)
                    <tr class="tr-body">
                        <td class="id-td">{{ $item->id }}</td>
                        <td class="td-2">{{ $item->name_obra }}</td>
                        <td class="td-3">{{ $item->tipo_obra }}</td>
                        <td class="td-4 status"><span class="active">{{ $item->estatus }}</span></td>
                        <td class="td-5">{{ $item->supervisor }}</td>
                        <td class="td-6">{{ $item->fecha_inicio }}</td>
                        <td class="td-7">{{ $item->fecha_terminacion }}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
