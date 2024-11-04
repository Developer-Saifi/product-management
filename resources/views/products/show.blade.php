@extends('layouts.app')

@section('content')
<style>
    div {
        display: table;
        width: 100%;
    }
    p {
        display: table-row;
    }
    strong {
        display: table-cell;
        width: 20%;
        font-weight: bold;
    }
    p span {
        display: table-cell;
        width: 80%;
    }
    
</style>

<div>
    <h1>Product Details</h1>
    <p><strong>Product ID:</strong> <span>{{ $product->product_id }}</span></p>
    <p><strong>Name:</strong> <span>{{ $product->name }}</span></p>
    <p><strong>Description:</strong> <span>{{ $product->description }}</span></p>
    <p><strong>Price:</strong> <span>{{ $product->price }}</span></p>
    <p><strong>Stock:</strong> <span>{{ $product->stock }}</span></p>
</div>

@endsection
