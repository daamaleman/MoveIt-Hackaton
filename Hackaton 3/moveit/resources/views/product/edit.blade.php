@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Edit Product</h1>

        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}">
            </div>

            <div class="form-group">
                <label for="brand">Brand</label>
                <input type="text" name="brand" id="brand" class="form-control" value="{{ $product->brand }}">
            </div>

            <div class="form-group">
                <label for="size">Size</label>
                <input type="text" name="size" id="size" class="form-control" value="{{ $product->size }}">
            </div>

            <div class="form-group">
                <label for="price">Price U$</label>
                <input type="number" name="price" id="price" class="form-control" value="{{ $product->price }}">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control">{{ $product->description }}</textarea>
            </div>

            <div class="form-group files color">
                <label for="url_img">Image</label>
                <input type="file" name="url_img" id="url_img" class="form-control">
            </div>

            {{-- Available --}}
            <div class="form-group">
                <label for="available">Available</label>
                <select name="available" id="available" class="form-control">
                    <option value="1" @if ($product->available == 1) selected @endif>Yes</option>
                    <option value="0" @if ($product->available == 0) selected @endif>No</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection