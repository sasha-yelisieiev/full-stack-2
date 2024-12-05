<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Реєстрація</h1>

    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div>
            <label for="name">Ім'я:</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label for="password">Пароль:</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <label for="password_confirmation">Підтвердити пароль:</label>
            <input type="password" name="password_confirmation" required>
        </div>
        <div>
            <button type="submit">Зареєструватися</button>
        </div>
    </form>
    <a href="{{ route('login') }}">Увійти</a>
</body>
</html>
