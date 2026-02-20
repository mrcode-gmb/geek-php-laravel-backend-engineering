<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config("app.name", "Invalide title") }}</title>
    <link rel="logo" href="{{ asset("21dy4k8.jpg") }}" type="image/x-icon">
    
</head>
<body>
    <h1>Welcome to laravel class {{ $id }}</h1>
    @if($user['name'] == "ahmed")
        {{ $user['name'] }}
    @else
        <h4>Invalide name</h4>
    @endif
    {{-- <img src="{{ asset("21dy4k8.jpg") }}" alt=""> --}}
    <p>{{ app()->version() }}</p>
    {!! "<h4>Hello world</h4>" !!}
</body>
</html>