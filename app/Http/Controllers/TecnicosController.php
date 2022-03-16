<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tecnicos;

class TecnicosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.tecnicos-todo');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.form-tecnicos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tecnico = new Tecnicos;
        $tecnico->nombre_tec = $request->nom_tec;
        $tecnico->apellidos = $request->apellidos;
        $tecnico->pic = $request->pic;
        $tecnico->curp = $request->curp;
        $tecnico->num_telefono = $request->telefono;
        $tecnico->correo = $request->correo;
        $tecnico->ine = $request->ine;
        $tecnico->nss = $request->nss;
        $tecnico->direccion = $request->dir;
        $tecnico->edad = $request->edad;
        $tecnico->save();

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
