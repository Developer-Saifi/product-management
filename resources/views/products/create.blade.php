@extends('layouts.app')

@section('content')
<div>
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
        margin-top: 20px;
    }

    label {
        display: block;
        margin-bottom: 10px;
    }

    input, textarea {
        width: 95%;
        height: 40px;
        margin-bottom: 20px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    textarea {
        height: 100px;
        resize: vertical;
    }

    button[type="submit"] {
        width: 100%;
        height: 40px;
        background-color: #4CAF50;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #3e8e41;
    }
</style>
    <h1>Add New Product</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label>Product ID:</label>
        <input type="text" name="product_id" required>

        <label>Name:</label>
        <input type="text" name="name" required>

        <label>Description:</label>
        <textarea name="description"></textarea>

        <label>Price:</label>
        <input type="text" name="price" required>

        <label>Stock:</label>
        <input type="number" name="stock">

        <button type="submit">Add Product</button>
    </form>
</div>
@endsection
