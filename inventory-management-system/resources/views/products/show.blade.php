@extends('layouts.app')

@section('content')
    <h1>Product Details</h1>
    @isset($product)
        <p><strong>Name:</strong> {{ $product->name }}</p>
        <p><strong>Quantity:</strong> {{ $product->quantity }}</p>
        <p><strong>Price:</strong> {{ $product->price }}</p>
    @else
        <p>Product not found.</p>
    @endisset
    <a href="{{ route('products.index') }}">Back to Product List</a>
@endsection
