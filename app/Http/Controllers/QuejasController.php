<?php

namespace App\Http\Controllers;

use App\Models\Quejas;
use Illuminate\Http\Request;

class QuejasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quejasTodo = Quejas::simplePaginate(15);
        $qjE = Quejas::count('id');
        return view('pages.table-quejas', compact('quejasTodo', 'qjE'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.form-quejas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inst = new Quejas;
        $inst->fecha = $request->fecha;
        $inst->telefono_cli = $request->telefono_cli;
        $inst->cliente = $request->nom_cli;
        $inst->nombre_tecnico = $request->nom_tec;
        $inst->pic = $request->pic;
        $inst->alfa = $request->alfa;
        $inst->folio_pisa = $request->folio_pisa;
        $inst->folio_pixaplex = $request->folio_pisaplex;
        $inst->os = $request->os;
        $inst->dtto = $request->dtto;
        $inst->observaciones = $request->observaciones;
        $inst->save();

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
    public function update(Request $request)
    {
        $quejaUpdate = Quejas::findOrFail($request->id_queja);
        $quejaUpdate->fecha = $request->fecha;
        $quejaUpdate->telefono_cli = $request->tel_cli;
        $quejaUpdate->cliente = $request->name_cli;
        $quejaUpdate->nombre_tecnico = $request->name_tec;
        $quejaUpdate->pic = $request->pic;
        $quejaUpdate->alfa = $request->alfa;
        $quejaUpdate->folio_pisa = $request->folio_pisa;
        $quejaUpdate->folio_pixaplex = $request->folio_pisaplex;
        $quejaUpdate->os = $request->os;
        $quejaUpdate->dtto = $request->dtto;
        $quejaUpdate->observaciones = $request->obs;
        $quejaUpdate->save();

        return back()->with('status', 'Registro editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Request $request/* $id */)
    // {
    //     $del = Quejas::findOrFail($request->id_queja);
    //     $del->delete();
    //     return back();
    // }
}
