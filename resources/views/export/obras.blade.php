
<table>
    <thead>
    <tr style="background-color: #ffff00; font-size: 18px;">
        <td>NOMRE DE LA OBRA</td>
        <td>ESTATUS DE LA OBRA</td>
        <td>OBSERVACIÓN</td>
        <td>TIPO DE OBRA</td>
        <td>SUPERVISOR</td>
        <td>FECHA INICIO</td>
        <td>FECHA TERMINACIÓN</td>
        <td>FECHA COMPROMISO</td>
        <td>DOCUMENTOS FISICOS</td>
        <td>FCC</td>
        <td>ENVIADO A FACTURA</td>
        <td>PEP</td>
        <td>OPERACION</td>
        <td>OEI</td>
        <td>OE</td>
        <td>CTL/DTTO/RB/ACOMETIDA</td>
        <td>OB</td>
        <td>MATERIAL</td>
        <td>OBSERVACIÓN MATERIAL</td>
        <td>TIPO DE MATERIAL</td>
    </tr>
    </thead>
    <tbody>
        @foreach ($obras as $obras)
        <tr>
            <td>{{ $obras->name_obra }}</td>
            <td>{{ $obras->estatus }}</td>
            <td>{{ $obras->tipo_estatus }}</td>
            <td>{{ $obras->observacion }}</td>
            <td>{{ $obras->tipo_obra }}</td>
            <td>{{ $obras->supervisor }}</td>
            <td>{{ $obras->fecha_inicio }}</td>
            <td>{{ $obras->fecha_terminacion }}</td>
            <td>{{ $obras->dias_laborados }}</td>
            <td>{{ $obras->fecha_compromiso }}</td>
            <td>{{ $obras->doc_fisicos }}</td>
            <td>{{ $obras->fcc }}</td>
            <td>{{ $obras->enviado_factura }}</td>
            <td>{{ $obras->pep }}</td>
            <td>{{ $obras->operacion }}</td>
            <td>{{ $obras->oei }}</td>
            <td>{{ $obras->oe }}</td>
            <td>{{ $obras->acomedida }}</td>
            <td>{{ $obras->ob }}</td>
            <td>{{ $obras->material }}</td>
            <td>{{ $obras->ob_material }}</td>
            <td>{{ $obras->tipo_material }}</td>
        </tr>
        @endforeach
    </tbody>

</table>
