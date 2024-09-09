<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    // 1. Método para mostrar la lista de todos los posts (READ - index)
    public function index()
    {
        // Vista para mostrar todas las ciudades
        $cities = City::all();
        return view('cities.index', compact('cities'));
    }

    // 2. Método para mostrar el formulario de creación (CREATE - create)
    public function create()
    {
        // Vista para crear una nueva ciudad
        return view('cities.create');
    }

    // 3. Método para almacenar un nuevo post en la base de datos (CREATE - store)
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $city = new City();
        $city->state_id = $request->get('state_id');
        $city->name = $request->get('name');
        $city->location = $request->get('location');
        $city->save();
        return redirect()->route('cities.index')->with('success', 'Ciudad creada con éxito.');
    }

    // 4. Método para mostrar un post específico (READ - show)
    public function show($id)
    {
        // Mostrar una ciudad
        $city = City::find($id);
        return view('cities.show', compact('city'));
    }

    // 5. Método para mostrar el formulario de edición de un post (UPDATE - edit)
    public function edit($id)
    {
        // Editar una ciudad
        $city = City::find($id);
        return view('cities.edit', compact('city'));
    }

    // 6. Método para actualizar un post en la base de datos (UPDATE - update)
    public function update(Request $request, $id)
    {
        // Actualizar una ciudad
        $city = City::find($id);
        $city->state_id = $request->get('state_id');
        $city->name = $request->get('name');
        $city->location = $request->get('location');
        $city->save();
        return redirect()->route('cities.index')->with('success', 'Ciudad actualizada con éxito.');
    }

    // 7. Método para eliminar un post (DELETE - destroy)
    public function destroy($id)
    {
        // Eliminar una ciudad
        $city = City::find($id);
        $city->delete();
        return redirect()->route('cities.index')->with('success', 'Ciudad eliminada con éxito.');
    }
}
