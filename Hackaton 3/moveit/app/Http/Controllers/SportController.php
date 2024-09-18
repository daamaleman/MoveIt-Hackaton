<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sport;

class SportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Vistar para ver todos los deportes
        $sports = Sport::all();
        return view('sports.index', compact('sports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Vista para crear un deporte
        return view('sports.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $sport = new Sport();
        $sport->name = $request->get('name');
        $sport->save();
        return redirect()->route('sports.index')->with('success', 'Sport created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Vista para mostrar un deporte
        $sport = Sport::find($id);
        return view('sports.show', compact('sport'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Vista para editar un deporte
        $sport = Sport::find($id);
        return view('sports.edit', compact('sport'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validar los datos del formulario
        $sport = Sport::find($id);
        $sport->name = $request->get('name');
        $sport->save();
        return redirect()->route('sports.index')->with('success', 'Sport updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {   
        // Eliminar un deporte
        $sport = Sport::find($id);
        $sport->delete();
        return redirect()->route('sports.index')->with('success', 'Sport deleted successfully');
    }
}
