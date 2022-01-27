@extends('menu_home')

@section('estilos')

<link rel="stylesheet" href="{{ asset('css-table-new/util.css') }}">
<link rel="stylesheet" href="{{asset('css-table-new/main.css')}}">
<link rel="stylesheet" href="{{asset('css-table-new/style-status.css')}}">

@endsection

@section('contenido')
<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Nombre Obra</th>
									<th class="cell100 column2">Tipo Obra</th>
									<th class="cell100 column3">Estatus</th>
									<th class="cell100 column4">Supervisor</th>
									<th class="cell100 column5">Fecha_Inicio</th>
                           <th class="cell100 column6">Fecha-Terminacion</th>
                           
                           <th class="cell100 column8">Acciones</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table class="table-body">
							<tbody>
								<tr class="row100 body">
									<td class="cell100 column1">RDA Medical Baumachine</td>
									<td class="cell100 column2">DTTO SATURADO PRIN</td>
                           <td class="cell100 column3 status"><span class="active">90% de pago</span></td>
									<td class="cell100 column3">Epifanio</td>
									<td class="cell100 column4">01/01/2022</td>
									<td class="cell100 column6">10/02/2022</td>

                           <td class="cell100 column8">editar</td>
								</tr>
								<tr class="row100 body">
									<td class="cell100 column1">PVU001 Adipisicing impedit</td>
									<td class="cell100 column2">PRAL</td>
                           <td class="cell100 column3 status"><span class="waiting">Proceso 90%</span></td>
									<td class="cell100 column3">Epifanio</td>
									<td class="cell100 column4">03/01/2022</td>
									<td class="cell100 column6">14/02/2022</td>

                           <td class="cell100 column8">editar</td>
								</tr>
								<tr class="row100 body">
									<td class="cell100 column1">RPZ004 Sit sapiente lorem2</td>
									<td class="cell100 column2">FTTH</td>
                           <td class="cell100 column3 status"><span class="active">Proceso 90%</span></td>
									<td class="cell100 column3">Epifanio</td>
									<td class="cell100 column4">01/01/2022</td>
									<td class="cell100 column6">10/02/2022</td>

                           <td class="cell100 column8">editar</td>
								</tr>
								<tr class="row100 body">
									<td class="cell100 column1">RDA Medical Baumachine</td>
									<td class="cell100 column2">RDA</td>
                           <td class="cell100 column3 status"><span class="waiting">Proceso 90%</span></td>
									<td class="cell100 column3">Hector</td>
									<td class="cell100 column4">01/01/2022</td>
									<td class="cell100 column6">10/02/2022</td>

                           <td class="cell100 column8">editar</td>
								</tr>
								<tr class="row100 body">
									<td class="cell100 column1">RDA Medical Baumachine</td>
									<td class="cell100 column2">RDA</td>
                           <td class="cell100 column3">Proceso 90% de pago</td>
									<td class="cell100 column3">Gilberto</td>
									<td class="cell100 column4">01/01/2022</td>
									<td class="cell100 column6">10/02/2022</td>

                           <td class="cell100 column8">editar</td>
								</tr>
								<tr class="row100 body">
									<td class="cell100 column1">RDA Medical Baumachine</td>
									<td class="cell100 column2">RDA</td>
                           <td class="cell100 column3">Proceso 90% de pago</td>
									<td class="cell100 column3">Epifanio</td>
									<td class="cell100 column4">01/01/2022</td>
									<td class="cell100 column6">10/02/2022</td>

                           <td class="cell100 column8">editar</td>
								</tr>
								<tr class="row100 body">
									<td class="cell100 column1">RDA Medical Baumachine</td>
									<td class="cell100 column2">RDA</td>
                           <td class="cell100 column3">Proceso 90% de pago</td>
									<td class="cell100 column3">Epifanio</td>
									<td class="cell100 column4">01/01/2022</td>
									<td class="cell100 column6">10/02/2022</td>

                           <td class="cell100 column8">editar</td>
								</tr>
								<tr class="row100 body">
									<td class="cell100 column1">RDA Medical Baumachine</td>
									<td class="cell100 column2">RDA</td>
                           <td class="cell100 column3">Proceso 90% de pago</td>
									<td class="cell100 column3">Epifanio</td>
									<td class="cell100 column4">01/01/2022</td>
									<td class="cell100 column6">10/02/2022</td>

                           <td class="cell100 column8">editar</td>
								</tr>

                        <!--<tr class="row100 body">
									<td class="cell100 column1">Mind & Body</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">15</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Crit Cardio</td>
									<td class="cell100 column2">Gym</td>
									<td class="cell100 column3">9:00 AM - 10:00 AM</td>
									<td class="cell100 column4">Aaron Chapman</td>
									<td class="cell100 column5">10</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Wheel Pose Full Posture</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">7:00 AM - 8:30 AM</td>
									<td class="cell100 column4">Donna Wilson</td>
									<td class="cell100 column5">15</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Playful Dancer's Flow</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Donna Wilson</td>
									<td class="cell100 column5">10</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Zumba Dance</td>
									<td class="cell100 column2">Dance</td>
									<td class="cell100 column3">5:00 PM - 7:00 PM</td>
									<td class="cell100 column4">Donna Wilson</td>
									<td class="cell100 column5">20</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Cardio Blast</td>
									<td class="cell100 column2">Gym</td>
									<td class="cell100 column3">5:00 PM - 7:00 PM</td>
									<td class="cell100 column4">Randy Porter</td>
									<td class="cell100 column5">10</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Pilates Reformer</td>
									<td class="cell100 column2">Gym</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Randy Porter</td>
									<td class="cell100 column5">10</td>
                        </tr> -->

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

@section('scripts')

@endsection

