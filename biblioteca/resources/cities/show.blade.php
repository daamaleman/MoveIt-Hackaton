@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Show City</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $city->name }}</h5>
                <p class="card-text">Population: {{ $city->population }}</p>
                <p class="card-text">Country: {{ $city->country }}</p>
                <p class="card-text">Name: {{ $city->name }}</p>
                <p class="card-text">Location: {{ $city->location }}</p>
                <p class="card-text">ID: {{ $city->id }}</p>
            </div>
        </div>
    </div>
@endsection