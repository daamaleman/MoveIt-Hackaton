@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Show Product</h1>
    <p>This is the show view for displaying a single product.</p>
    <p>Product Name: {{ $product->name }}</p>
    <p>Product Price: {{ $product->price }}</p>
    <p>Product Description: {{ $product->description }}</p>
</div>
@endsection