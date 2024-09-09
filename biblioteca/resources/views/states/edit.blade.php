@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Editar Estado</h1>
    <form action="{{ route('states.update', $states) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $states->name }}" required>
        </div>

        <div class="form-group">
            <label for="location">Ubicación:</label>
            <textarea class="form-control" name="location" id="location" required>{{ $states->location }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection