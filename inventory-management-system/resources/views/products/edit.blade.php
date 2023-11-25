@extends('layouts.app')

@section('content')
    <h1>Edit Product</h1>
    <form method="post" action="{{ route('products.update', $product->id) }}">
        @csrf
        @method('put')
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $product->name }}" required>
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" value="{{ $product->quantity }}" required>
        <label for="price">Price:</label>
        <input type="number" step="0.01" name="price" value="{{ $product->price }}" required>
        <button type="submit">Update Product</button>
    </form>
    <a href="{{ route('products.index') }}">Back to Product List</a>
@endsection
