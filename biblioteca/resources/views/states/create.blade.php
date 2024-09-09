@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Crear Estado</h1>
    <form action="{{ route('states.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" name="name" id="name" required>
        </div>

        <div class="form-group">
            <label for="location">Ubicación:</label>
            <textarea class="form-control" name="location" id="location" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection