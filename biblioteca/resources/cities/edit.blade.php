@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit City</h1>

        <form action="{{ route('cities.update', $city->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $city->name }}">
            </div>

            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" name="location" id="location" class="form-control" value="{{ $city->location }}">
            </div>

            <div class="form-group">
                <label for="population">Population:</label>
                <input type="number" name="population" id="population" class="form-control" value="{{ $city->population }}">
            </div>

            <div class="form-group">
                <label for="id">ID:</label>
                <input type="text" name="id" id="id" class="form-control" value="{{ $city->id }}" readonly>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection