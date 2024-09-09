@extends('layouts.app')
@section('content')
<div class="mb-3">
    <a href="{{ route('products.create') }}" class="btn btn-success">Nuevo</a> <!-- Botón Nuevo -->
</div>
<table class="table table-responsive">
    <thead>
        <tr>
            <th>Name</th>
            <th>Brand</th>
            <th>Size</th>
            <th>Price</th>
            <th>Available</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->brand }}</td>
            <td>{{ $product->size }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->available }}</td>
            <td>{{ $product->description }}</td>
            <td>
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Editar</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection