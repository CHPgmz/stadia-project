<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todoMtr = \App\Models\Materiales::paginate(3);
        return view('pages.table-devmateriales', compact('todoMtr'));
    }

    public function showForm()
    {
        return view('forms.form-materiales');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insMtr = new \App\Models\Materiales;
        $insMtr->name_obra = $request->name_obra;
        $insMtr->supervisor = $request->supervisor;
        $insMtr->ob = $request->ob;
        $insMtr->estatus = $request->estatus;
        $insMtr->observaciones = $request->observaciones;
        $insMtr->save();

        return back()->with('status', 'Se ha registrado correctamente');
        //
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
        $mtrUpdate = \App\Models\Materiales::findOrFail($request->obra_id);
        $mtrUpdate->name_obra = $request->name_obra;
        $mtrUpdate->supervisor = $request->name_super;
        $mtrUpdate->ob = $request->ob;
        $mtrUpdate->estatus = $request->estatus;
        $mtrUpdate->observaciones = $request->observaciones;
        $mtrUpdate->save();

        return back()->with('status', 'Datos moficados con exito');
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
