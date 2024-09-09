@extends('layouts.app')
@section('content')
<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $product->name }}" class="form-control">
    </div>

    <div class="form-group">
        <label for="brand">Brand:</label>
        <input type="text" name="brand" id="brand" value="{{ $product->brand }}" class="form-control">
    </div>

    <div class="form-group">
        <label for="size">Size:</label>
        <input type="text" name="size" id="size" value="{{ $product->size }}" class="form-control">
    </div>

    <div class="form-group">
        <label for="price">Price:</label>
        <input type="number" name="price" id="price" value="{{ $product->price }}" class="form-control">
    </div>

    <div class="form-group">
        <label for="available">Available:</label>
        <input type="checkbox" name="available" id="available" {{ $product->available ? 'checked' : '' }}>
    </div>

    <div class="form-group">
        <label for="description">Description:</label>
        <textarea name="description" id="description" class="form-control">{{ $product->description }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection