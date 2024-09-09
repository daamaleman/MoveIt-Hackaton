<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Vista para mostrar todos los estados
        $states = State::all();
        return view('states.index', compact('states'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Vista para crear un nuevo estado
        return view('states.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validar los datos del formulario
        $states = new State();
        $states->name = $request->get('name');
        $states->location = $request->get('location');
        $states->save();
        return redirect()->route('states.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Vista para mostrar un estado
        $states = State::find($id);
        return view('states.show', compact('states'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Vista para editar un estado
        $states = State::find($id);
        return view('states.edit', compact('states'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Validar los datos del formulario
        $states = State::find($id);
        $states->name = $request->get('name');
        $states->location = $request->get('location');
        $states->save();
        return redirect()->route('states.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Eliminar un estado
        $states = State::find($id);
        $states->delete();
        return redirect()->route('states.index');
    }
}
