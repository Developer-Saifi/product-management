@extends('layouts.app')

@section('content')
<style>
    
table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f0f0f0;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    tr:hover {
        background-color: #ddd;
    }

    a {
        text-decoration: none;
        color: #337ab7;
    }

    a:hover {
        color: #23527c;
    }

    form {
        margin-bottom: 20px;
    }

    input[type="text"] {
        border-radius: 5px;
        width: 20%;
        padding: 10px;
        margin-right: 10px;
        border: 1px solid #ccc;
    }

    button[type="submit"] {
        padding: 10px 20px;
        background-color: #337ab7;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #23527c;
    }
.a{
    margin-bottom: 20px;
    padding: 10px 20px;
        background-color: #337ab7;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
}
.a:hover{
    background-color: #23527c;
    color: #f0f0f0;
}

</style>
<div>
    <h1>Product List</h1>

    <form action="{{ route('products.index') }}" method="GET">
        <input type="text" name="search" placeholder="Search by product ID or description" value="{{ request('search') }}">
        <button type="submit">Search</button>
    </form>

    <a href="{{ route('products.create') }}">Add New Product</a>

    <table>
        <thead>
            <tr>
                <th><a href="{{ route('products.index', ['sort' => 'name']) }}">Name</a></th>
                <th><a href="{{ route('products.index', ['sort' => 'price']) }}">Price</a></th>
                <th>Description</th>
                <th>Stock</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->stock }}</td>
                <td>
                    <a class="a" href="{{ route('products.show', $product->id) }}">View</a>
                    <a class="a" href="{{ route('products.edit', $product->id) }}">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $products->links() }}
</div>
@endsection
