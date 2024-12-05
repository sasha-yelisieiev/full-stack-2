<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Користувачі</title>
</head>
<body>
    <h1>Список користувачів</h1>
    <table border="1">
        <tr>
            <th>Ім'я</th>
            <th>Email</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
        </tr>
        @endforeach
    </table>

    <h2>Унікальні email</h2>
    <ul>
        @foreach ($uniqueEmails as $email)
            <li>{{ $email }}</li>
        @endforeach
    </ul>

    <h2>Користувачі з ім'ям та email</h2>
    <ul>
        @foreach ($usersWithOnlyNameAndEmail as $user)
            <li>{{ $user['name'] }} - {{ $user['email'] }}</li>
        @endforeach
    </ul>
</body>
</html>

