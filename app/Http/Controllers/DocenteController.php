<?php

namespace App\Http\Controllers;

use App\Models\Docentes;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docentico = Docentes::all();
        return view('docentes.index', compact('docentico'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $docentico = new Docentes();
        $docentico->nombre = $request->input('nombre');
        $docentico->apellido = $request->input('apellido');
        $docentico->tituloUniv = $request->input('tituloUniv');
        $docentico->edad = $request->input('edad');
        $docentico->fecha_contrato = $request->input('fecha_contrato');
        if($request->hasFile('imagen','documento')){
            $docentico->imagen = $request->file('imagen')->store('public/docentes');
            $docentico->documento = $request->file('documento')->store('public/docentes');
        }
        $docentico->save();
        return 'guardado exitoso';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('docentes.show');
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
