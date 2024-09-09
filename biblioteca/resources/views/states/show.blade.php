@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Estado</h1>
        </div>
        <div class="card-body">
            <p class="card-text"><strong>Nombre:</strong> {{ $state->name }}</p>
            <p class="card-text"><strong>Ubicación:</strong> {{ $state->location }}</p>
            <a href="{{ route('states.index') }}" class="btn btn-primary">Volver</a>
        </div>
    </div>
</div>
@endsection