<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редагування користувача</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Редагування користувача</h1>

        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Ім'я:</label>
                <input type="text" name="name" id="name" value="{{ $user->name }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="{{ $user->email }}" required>
            </div>

            <div class="form-group">
                <label for="password">Пароль:</label>
                <input type="password" name="password" id="password" placeholder="Новий пароль (необов'язково)">
            </div>

            <button type="submit" class="btn btn-primary">Зберегти зміни</button>
        </form>

        <a href="{{ route('users.index') }}" class="btn btn-secondary">Назад до списку користувачів</a>
    </div>
</body>
</html>