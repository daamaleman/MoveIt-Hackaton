@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ $product->name }}</h3>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><strong>Price:</strong> ${{ $product->price }}</p>
                        <p class="card-text"><strong>Description:</strong> {{ $product->description }}</p>
                        <p class="card-text"><strong>Category:</strong> {{ $product->category }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection