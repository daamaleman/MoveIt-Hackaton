@extends('layouts.app')
@section('content')

<form action="{{ route('products.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="brand">Brand:</label>
        <input type="text" name="brand" id="brand" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="size">Size:</label>
        <input type="text" name="size" id="size" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="price">Price:</label>
        <input type="number" name="price" id="price" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="available">Available:</label>
        <input type="number" name="available" id="available" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="description">Description:</label>
        <textarea name="description" id="description" class="form-control" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection