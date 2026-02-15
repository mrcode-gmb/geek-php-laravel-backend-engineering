<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config("app.name", "Invalide title") }}</title>
</head>
<body>
    <h1>Welcome to laravel class {{ $id }}</h1>

    <p>{{ $user['name'] }}</p>
    <p>{{ asset() }}</p>
</body>
</html>