<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Product Management System')</title>
    <!-- Include any CSS files here -->
</head>
<body>
    <style>
        .aa{
            padding: 10px;
            background: #5e5e5e;
            border-radius: 5px;
            color: #fff;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        .aa:hover{
            color:#fff;
            background: #000;
        }
    </style>
    <!-- Navigation bar or header -->
    <header>
        <h1 style="text-align: center;" >Product Management System</h1>
        <nav>
            <a class="aa" href="{{ route('products.index') }}">Home</a>
            <a class="aa" href="{{ route('products.create') }}">Add Product</a>
        </nav>
    </header>

    <!-- Main content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; {{ date('Y') }} Product Management System</p>
    </footer>
</body>
</html>
