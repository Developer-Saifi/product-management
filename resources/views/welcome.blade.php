<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        .header h1 {
            margin: 0;
        }

        .content {
            padding: 20px;
        }

        .content h2 {
            margin-top: 0;
        }

        .footer {
            background-color: #5e5e5e;
            color: #fff;
            padding: 10px;
            text-align: center;
            clear: both;
        }

        .button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #3e8e41;
        }
    </style>

    <div class="container">
        <div class="header" style="border-radius: 8px;">
            <h1>Welcome to Our Application</h1>
        </div>
        <div class="content">
            <h2>Get Started</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.</p>
            <a href="{{route('products.index')}}">
                <button class="button">Start</button>
            </a>
        </div>
        <div class="footer" style="border-radius: 8px;">
            <p>&copy; 2023 Our Application</p>
        </div>
    </div>
</body>

</html>