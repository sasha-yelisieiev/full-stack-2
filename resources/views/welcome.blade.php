<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Головна сторінка</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Головна сторінка</h1>
        <p>Ласкаво просимо до нашого веб-застосунку!</p>

        <!-- Кнопка для перегляду користувачів -->
        <a href="{{ route('users.index') }}" class="btn btn-primary">Переглянути користувачів</a>

        <!-- Кнопка для додавання нового користувача -->
        <a href="{{ route('users.create') }}" class="btn btn-success">Додати користувача</a>
    </div>
</body>
</html>
