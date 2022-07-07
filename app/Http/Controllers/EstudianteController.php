<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEstudianteRequest;
use App\Http\Requests\UpdateEstudianteRequest;
use App\Models\Estudiante;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(view('estudiante.index', ['estudiantes' => Estudiante::all()]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response(view('estudiante.create'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEstudianteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEstudianteRequest $request)
    {
        Estudiante::create($request->validate([
            'nombre' => 'required|min:3|max:30',
            'apellido' => 'required|min:3|max:15',
            'sexo' => 'required|max:1|in:M,F',
            'nControl' => 'required|min:8|max:8',
            'carrera' => 'required|min:3|max:15'
        ]));

        return response(redirect('/estudiante'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiante $estudiante)
    {
        return response(view('estudiante.show', compact('estudiante')));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudiante $estudiante)
    {
        return response(view('estudiante.edit', compact('estudiante')));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEstudianteRequest  $request
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEstudianteRequest $request, Estudiante $estudiante)
    {
        $estudiante->update($request->validate([
            'nombre' => 'required|min:3|max:30',
            'apellido' => 'required|min:3|max:15',
            'sexo' => 'required|max:1|in:M,F',
            'nControl' => 'required|min:8|max:8',
            'carrera' => 'required|min:3|max:15'
        ]));

        return response(redirect('/estudiante/' . $estudiante->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();
        return response(redirect('/estudiante'));
    }
}
