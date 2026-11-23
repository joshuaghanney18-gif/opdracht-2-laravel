<!DOCTYPE html>
<html>
<head>
    <title>{{ $planet->name }}</title>
</head>
<body>
    <h1>{{ $planet->name }}</h1>
    <p>{{ $planet->description }}</p>
    <p>Size: {{ $planet->size_in_km }} km</p>
    <a href="/planets">Terug naar overzicht</a>
</body>
</html> 