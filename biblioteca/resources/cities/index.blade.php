@extends('layouts.app')

@section('content')
<h1>Ciudades</h1>

<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>País</th>
            <th>Ubicación</th>
            <th>ID</th>
            <th>Población</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cities as $city)
        <tr>
            <td>{{ $city->name }}</td>
            <td>{{ $city->country }}</td>
            <td>{{ $city->location }}</td>
            <td>{{ $city->id }}</td>
            <td>{{ $city->population }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection