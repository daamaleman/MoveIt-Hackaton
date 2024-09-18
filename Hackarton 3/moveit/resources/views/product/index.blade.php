@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h1>Productos</h1>
                {{-- Agregar nuevo producto --}}
                <a href="{{ route('products.create') }}" class="btn btn-primary">Nuevo</a>
            </div>
        </div>

        <div class="row">

            @foreach ($products as $product)
                <div class="col-12 col-md-3 mt-2">
                    <div class="card">
                        @if ($product->url_img)
                            <img src="{{ $product->url_img }}" class="card-img-top" alt="Product Image">
                        @else
                            <img src="{{ asset('images/sinfoto.jpg') }}" class="card-img-top" alt="Default Image">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">Brand: {{ $product->brand }}</p>
                            <p class="card-text">Size: {{ $product->size }}</p>
                            <p class="card-text">Price: {{ $product->price }}</p>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('¿Estás seguro de que deseas eliminar este producto?')">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection


<style>
    .card {
        box-shadow: 0 0 5px rgba(35, 7, 159, 0.2);
        border-radius: 10px;
        transition: transform 0.3s ease-in-out;
    }

    .card:hover {
        transform: scale(1.05);
    }
</style>
