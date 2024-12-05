<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f5;
            color: #333;
            text-align: center;
            padding: 50px;
        }

        h1 {
            color: #4a90e2;
            font-size: 3em;
            margin-bottom: 20px;
        }

        nav {
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

        a.button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4a90e2;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1.2em;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        a.button:hover {
            background-color: #357ab7;
        }

        .container {
            width: 80%;
            margin: 0 auto;
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
        <h1>Welcome to the Home Page</h1>

        <p>Click the button below to see a personalized welcome message for Nazarii.</p>
        <a href="{{ route('user.show', ['name' => 'nazarii']) }}" class="button">See Welcome Message</a>

        <nav>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('services') }}">Services</a>
            <a href="{{ route('contact') }}">Contact</a>
            <a href="{{ route('faq') }}">FAQ</a>
        </nav>

        <!-- Додано кнопку для редіректу на YouTube -->
        <p>Or click here to go to YouTube:</p>
        <a href="{{ route('redirect.youtube') }}" class="button">Go to YouTube</a>
    </div>

    <footer>
        &copy; 2024 - Nazarii Kiriiak. All Rights Reserved.
    </footer>
</body>
</html>
