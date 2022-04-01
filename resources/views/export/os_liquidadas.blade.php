<table>
    <thead>
    <tr style="background-color: #ffff00; font-size: 18px;">
        <td>Estado</td>
        <td>Fecha</td>
        <td>Telefono</td>
        <td>Nombre del Cliente</td>
        <td>Nombre del Tecnico</td>
        <td>PIC del Tecnico</td>
        <td>Metros de Instalación</td>
        <td>Numero OS</td>
        <td>Tecnologia</td>
        <td>Distrito</td>
        <td>Terminal</td>
        <td>Puerto</td>
    </tr>
    </thead>
    <tbody>
        @foreach ($osl as $osl)
        <tr>
            <td>{{ $osl->estado }}</td>
            <td>{{ $osl->fecha }}</td>
            <td>{{ $osl->telefono }}</td>
            <td>{{ $osl->nombre_cliente }}</td>
            <td>{{ $osl->name_tecnico }}</td>
            <td>{{ $osl->pic_tecnico }}</td>
            <td>{{ $osl->metros_instalacion }}</td>
            <td>{{ $osl->numero_os }}</td>
            <td>{{ $osl->tecnologia }}</td>
            <td>{{ $osl->distrito }}</td>
            <td>{{ $osl->terminal }}</td>
            <td>{{ $osl->puerto }}</td>
        </tr>
        @endforeach
    </tbody>

</table>
