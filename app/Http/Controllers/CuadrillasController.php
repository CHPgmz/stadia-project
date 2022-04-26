<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuadrillas;

class CuadrillasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuadrilla = Cuadrillas::simplePaginate(15);
        return view('pages.table-cuadrillas', compact('cuadrilla'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.form-cuadrillas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cuadr = new Cuadrillas;
        $cuadr->nombre_cua = $request->nom_cua;
        $cuadr->ine = $request->ine;
        $cuadr->nss = $request->nss;
        $cuadr->curp = $request->curp;
        $cuadr->telefono = $request->telefono;
        $cuadr->direccion = $request->dir;
        $cuadr->f_nacimiento = $request->f_nacimiento;
        $cuadr->edad = $request->edad;
        $cuadr->save();

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
    public function update(Request $request, $id)
    {
        //
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
