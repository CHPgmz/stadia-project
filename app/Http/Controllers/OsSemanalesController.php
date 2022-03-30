<?php

namespace App\Http\Controllers;

use App\Models\OsSemanales;
use App\Models\Tecnicos;
use \App\Models\SemanalesData;
use Illuminate\Http\Request;

class OsSemanalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semtodo = OsSemanales::all();
        $semc = OsSemanales::count('id_sem');
        return view('pages.table-semanales', compact('semtodo', 'semc'));
    }

    public function index_sem($id)
    {
        $ids = OsSemanales::findOrFail($id);
        $tecn = Tecnicos::pluck('nombre_tec');
        $data = \App\Models\SemanalesData::all()->where('id_sem', $id);
        $cnt = SemanalesData::where('id_sem', $id)->count();

        return view('pages.table-semtodo', compact('tecn', 'ids', 'cnt', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function create_sem($id)
    {
        $ids = OsSemanales::findOrFail($id);
        $tecn = Tecnicos::all('nombre_tec');

        return view('forms.form-semtodo', compact('tecn', 'ids'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $semdata = new \App\Models\SemanalesData;

        $semdata->tecnico = $request->name_tec;
        $semdata->lunes = $request->lunes;
        $semdata->martes = $request->martes;
        $semdata->miercoles = $request->miercoles;
        $semdata->jueves = $request->jueves;
        $semdata->viernes = $request->viernes;
        $semdata->sabado = $request->sabado;
        $semdata->domingo = $request->domingo;
        $semdata->id_sem = $request->id_sem;
        $semdata->save();

        return back()->with('status', 'se ha registrado correctamente');
    }

    public function store_sem(Request $request)
    {
        $sem = new OsSemanales;
        $sem->name_semana = $request->semana;
        $sem->año = $request->año;
        $sem->save();

        return back()->with('status', 'Se ha registrado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OsSemanales  $osSemanales
     * @return \Illuminate\Http\Response
     */
    public function show(OsSemanales $osSemanales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OsSemanales  $osSemanales
     * @return \Illuminate\Http\Response
     */
    public function edit(OsSemanales $osSemanales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OsSemanales  $osSemanales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $semdata = SemanalesData::findOrFail($request->idt);
        $semdata->tecnico = $request->tecnico;
        $semdata->lunes = $request->lunes;
        $semdata->martes = $request->martes;
        $semdata->miercoles = $request->miercoles;
        $semdata->jueves = $request->jueves;
        $semdata->viernes = $request->viernes;
        $semdata->sabado = $request->sabado;
        $semdata->domingo = $request->domingo;
        //        $semdata->id_sem = $request->id_sem;
        $semdata->save();

        return back()->with('status', 'se ha editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OsSemanales  $osSemanales
     * @return \Illuminate\Http\Response
     */
    public function destroy(OsSemanales $osSemanales)
    {
        //
    }
}
