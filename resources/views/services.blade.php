<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f5;
            color: #333;
        }
        h1 {
            color: #4a90e2;
            font-size: 3em;
            text-align: center;
            margin: 20px 0;
        }
        nav {
            text-align: center;
            margin: 20px 0;
        }
        nav a {
            text-decoration: none;
            color: #4a90e2;
            background-color: #e0e0e5;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            font-size: 1.2em;
            transition: background-color 0.3s ease;
        }
        nav a:hover {
            background-color: #4a90e2;
            color: white;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            text-align: center;
        }
        footer {
            text-align: center;
            margin-top: 50px;
            font-size: 0.9em;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Our Services</h1>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('contact') }}">Contact</a>
            <a href="{{ route('faq') }}">FAQ</a>
        </nav>
        <p>Discover the range of services we offer.</p>
    </div>
    <footer>
        &copy; 2024 - Nazarii. All Rights Reserved.
    </footer>
</body>
</html>
