<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OsLiquidadas;
use App\Models\Tecnicos;

class OslController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todoL = OsLiquidadas::simplePaginate(15);
        $osl = OsLiquidadas::count('id');
        $tec = Tecnicos::all();
        return view('pages.table-osliquidadas', compact('todoL', 'osl', 'tec'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tec_name = Tecnicos::all();
        return view('forms.form-osliquidadas', compact('tec_name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newLiqui = new \App\Models\OsLiquidadas;
        $newLiqui->estado = $request->select;
        $newLiqui->fecha = $request->fecha;
        $newLiqui->telefono = $request->telefono;
        $newLiqui->nombre_cliente = $request->nombre_cliente;
        $newLiqui->name_tecnico = $request->nombre_tecnico;
        $newLiqui->pic_tecnico = $request->pic_tecnico;
        $newLiqui->metros_instalacion = $request->metros_instalacion;
        $newLiqui->numero_os = $request->numero_os;
        $newLiqui->distrito = $request->distrito;
        $newLiqui->terminal = $request->terminal;
        $newLiqui->puerto = $request->puerto;
        $newLiqui->tecnologia = $request->tec;
        $newLiqui->save();

        return back()->with('status', 'Se ha registrado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request/*, $id*/)
    {
        //
        $upLiqui = OsLiquidadas::findOrFail($request->id_osl);
        $upLiqui->estado = $request->stado;
        $upLiqui->fecha = $request->fecha;
        $upLiqui->telefono = $request->telefono;
        $upLiqui->nombre_cliente = $request->name_cli;
        $upLiqui->name_tecnico = $request->tec;
        $upLiqui->pic_tecnico = $request->pic_tecnico;
        $upLiqui->metros_instalacion = $request->m_inst;
        $upLiqui->numero_os = $request->num_os;
        $upLiqui->distrito = $request->distrito;
        $upLiqui->terminal = $request->terminal;
        $upLiqui->puerto = $request->puerto;
        $upLiqui->tecnologia = $request->tecnologia;
        $upLiqui->save();

        return back()->with('status', 'Registro editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
