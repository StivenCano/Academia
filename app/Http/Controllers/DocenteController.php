<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeCursoRequest;
use App\Http\Requests\storeDocenteRequest;
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
    public function store(storeDocenteRequest $request)
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
        return view('docentes.add');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $docentico = Docentes::find($id);
        return view('docentes.show', compact('docentico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docentico = Docentes::find($id);
        return view('docentes.edit', compact('docentico'));
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
        $docentico = Docentes::find($id);
        $docentico->fill($request->except(['imagen', 'documento']));
        if($request->hasFile('imagen')){
            $docentico->imagen = $request->file('imagen')->store('public/docentes');
        }

        else if($request->hasFile('documento')){
            $docentico->documento = $request->file('documento')->store('public/docentes');
        }

        $docentico->save();
        return view('docentes.edit2');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $docentico = Docentes::find($id);
        $urlImagenBD = $docentico->imagen;
        $nombreImagen = str_replace('public/', '\storage\\', $urlImagenBD);
        $rutaCompleta = public_path(). $nombreImagen;
        unlink($rutaCompleta);
        $docentico -> delete();
        return view('docentes.delete');
    }
}
