<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Vista para mostrar todas las ciudades
        $city = City::all();
        return view('cities.index', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Vista para crear una ciudad
        return view('cities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $city = new City();
        $city->name = $request->get('name');
        $city->save();
        return redirect()->route('cities.index')->with('success', 'City created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Vista para mostrar una ciudad
        $city = City::find($id);
        return view('cities.show', compact('city'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Vista para editar una ciudad
        $city = City::find($id);
        return view('cities.edit', compact('city'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validar los datos del formulario
        $city = City::find($id);
        $city->name = $request->get('name');
        $city->save();
        return redirect()->route('cities.index')->with('success', 'City updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Eliminar una ciudad
        $city = City::find($id);
        $city->delete();
        return redirect()->route('cities.index')->with('success', 'City deleted successfully');
    }
}
