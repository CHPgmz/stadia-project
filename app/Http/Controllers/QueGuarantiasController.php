<?php

namespace App\Http\Controllers;

use App\Models\queGuarantias;
use App\Models\Tecnicos;
use Illuminate\Http\Request;


class QueGuarantiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grt = queGuarantias::simplePaginate(15);
        $gtodo = queGuarantias::count('id');
        $tecnico = Tecnicos::all();
        return view('pages.table-garantias', compact('grt', 'gtodo', 'tecnico'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tecnicos = Tecnicos::all();
        return view('forms.form-garantias', compact('tecnicos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $grt = new queGuarantias;
        $grt->cope = $request->cope;
        $grt->tecnico = $request->tec_name;
        $grt->cliente = $request->name_cli;
        $grt->num_cli = $request->num_cli;
        $grt->liquidacion = $request->liquidacion;
        $grt->causa = $request->causa;
        $grt->tipo_falla = $request->tipo_falla;
        $grt->accion_tomada = $request->accion_tomada;
        $grt->fecha = $request->fecha;
        $grt->observacion = $request->observacion;
        $grt->save();

        return back()->with('status', 'Se ha registros correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\queGuarantias  $queGuarantias
     * @return \Illuminate\Http\Response
     */
    public function show(queGuarantias $queGuarantias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\queGuarantias  $queGuarantias
     * @return \Illuminate\Http\Response
     */
    public function edit(queGuarantias $queGuarantias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\queGuarantias  $queGuarantias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request/*, queGuarantias $queGuarantias*/)
    {

        $grup = queGuarantias::findOrFail($request->id_gr);
        $grup->cope = $request->cope;
        $grup->tecnico = $request->tecnico;
        $grup->cliente = $request->cliente;
        $grup->num_cli = $request->tel_cli;
        $grup->liquidacion = $request->liquidacion;
        $grup->causa = $request->causa;
        $grup->tipo_falla = $request->t_falla;
        $grup->accion_tomada = $request->a_tomada;
        $grup->fecha = $request->fecha;
        $grup->observacion = $request->obs;
        $grup->save();

        return back()->with('status', 'Se ha registros correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\queGuarantias  $queGuarantias
     * @return \Illuminate\Http\Response
     */
    public function destroy(queGuarantias $queGuarantias)
    {
        //
    }
}
