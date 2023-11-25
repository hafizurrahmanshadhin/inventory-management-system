@extends('layouts.app')

@section('content')
    <h1>Create Product</h1>
    <form method="post" action="{{ route('products.store') }}">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" required>
        <label for="price">Price:</label>
        <input type="number" step="0.01" name="price" required>
        <button type="submit">Create Product</button>
    </form>
    <a href="{{ route('products.index') }}">Back to Product List</a>
@endsection
