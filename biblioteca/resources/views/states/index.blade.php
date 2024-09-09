@extends('layouts.app')
@section('content')
<h1>Estados</h1>
<a href="{{ route('states.create') }}" class="btn btn-primary">Crear Estado</a>
<table class="table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($states as $state)
            <tr>
                <td>{{ $state->name }}</td>
                <td>{{ $state->location }}</td>
                <td>
                    <a href="{{ route('states.edit', $state) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('states.destroy', $state) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Confirma que desea eliminar?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection