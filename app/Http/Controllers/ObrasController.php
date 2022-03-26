<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obras;
use App\Models\Materiales;
use App\Models\OsLiquidadas;
use App\Models\Quejas;

class ObrasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todObras = \App\Models\Obras::simplePaginate(15);
        $obs = \App\Models\Obras::count('id');

        return view('pages.table-obras', compact('todObras', 'obs'));
    }

    public function home()
    {
        $homeObras = \App\Models\Obras::latest('id')->take(05)->get();
        $obrasT = Obras::count('id');
        $materiales = Materiales::count('id');
        $liquidadas = OsLiquidadas::count('id');
        $quejas = Quejas::count('id');

        return view('home', compact('homeObras', 'obrasT', 'materiales', 'liquidadas', 'quejas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.form-obras');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newObras =  new \App\Models\Obras;
        $newObras->name_obra = $request->obra;
        $newObras->estatus = $request->estatus;
        $newObras->tipo_estatus = $request->t_estatus;
        $newObras->observacion = $request->observacion;
        $newObras->tipo_obra = $request->t_obra;
        $newObras->supervisor = $request->supervisor;
        $newObras->fecha_inicio = $request->f_inicio;
        $newObras->fecha_terminacion = $request->f_terminacion;
        $newObras->dias_laborados = $request->d_laborados;
        $newObras->fecha_compromiso = $request->f_compromiso;
        $newObras->doc_fisicos = $request->doc_fisicos;
        $newObras->fcc = $request->fcc;
        $newObras->enviado_factura = $request->env_factura;
        $newObras->pep = $request->pep;
        $newObras->operacion = $request->operacion;
        $newObras->oei = $request->oei;
        $newObras->oe = $request->oe;
        $newObras->acomedida = $request->acomedida;
        $newObras->ob = $request->ob;
        $newObras->material = $request->material;
        $newObras->ob_material = $request->ob_material;
        $newObras->tipo_material = $request->t_material;

        $newObras->save();

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
    public function update(Request $request /*$id*/)
    {
        $obraUpdate = Obras::findOrFail($request->obra_id);
        $obraUpdate->name_obra = $request->name_obra;
        $obraUpdate->estatus = $request->estatus;
        $obraUpdate->tipo_estatus = $request->t_estatus;
        $obraUpdate->observacion = $request->observacion;
        $obraUpdate->tipo_obra = $request->t_obra;
        $obraUpdate->supervisor = $request->supervisor;
        $obraUpdate->fecha_inicio = $request->f_start;
        $obraUpdate->fecha_terminacion = $request->f_end;
        $obraUpdate->dias_laborados = $request->d_laborados;
        $obraUpdate->fecha_compromiso = $request->f_compromiso;
        $obraUpdate->doc_fisicos = $request->doc_fisicos;
        $obraUpdate->fcc = $request->fcc;
        $obraUpdate->enviado_factura = $request->env_fac;
        $obraUpdate->pep = $request->pep;
        $obraUpdate->operacion = $request->operacion;
        $obraUpdate->oei = $request->oei;
        $obraUpdate->oe = $request->oe;
        $obraUpdate->acomedida = $request->acomedida;
        $obraUpdate->ob = $request->ob;
        $obraUpdate->material = $request->material;
        $obraUpdate->ob_material = $request->ob_material;
        $obraUpdate->tipo_material = $request->t_material;
        $obraUpdate->save();

        return back()->with('status', 'Se ha editado correctamente');
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
