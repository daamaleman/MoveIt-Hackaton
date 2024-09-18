@extends('layouts.app')

@section('content')


<div class="container">
    <h1>Create Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="brand">Brand:</label>
            <input type="text" name="brand" id="brand" class="form-control">
        </div>
        <div class="form-group">
            <label for="size">Size:</label>
            <input type="text" name="size" id="size" class="form-control">
        </div>
        <div class="form-group">
            <label for="price">Price U$:</label>
            <input type="number" name="price" id="price" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>

        <div class="form-group files color">
            <label for="url_img">Image:</label>
            <input type="file" name="url_img" id="url_img" class="form-control">
        </div>

        {{--  Available --}}
        <div class="form-group">
            <label for="available">Available:</label>
            <select name="available" id="available" class="form-control">
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>


        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection