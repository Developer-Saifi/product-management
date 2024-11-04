@extends('layouts.app')

@section('content')
<style>
    div {
        max-width: 500px;
        margin: 40px auto;
        padding: 20px;
        background-color: #f9f9f9;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    label {
        margin-bottom: 10px;
    }

    input, textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    button[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #3e8e41;
    }
</style>
<div>
    <h1>Edit Product</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Product ID:</label>
        <input type="text" name="product_id" value="{{ $product->product_id }}" required>

        <label>Name:</label>
        <input type="text" name="name" value="{{ $product->name }}" required>

        <label>Description:</label>
        <textarea name="description">{{ $product->description }}</textarea>

        <label>Price:</label>
        <input type="text" name="price" value="{{ $product->price }}" required>

        <label>Stock:</label>
        <input type="number" name="stock" value="{{ $product->stock }}">

        <button type="submit">Update Product</button>
    </form>
</div>
@endsection
