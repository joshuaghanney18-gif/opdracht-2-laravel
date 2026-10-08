<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $planeet['name'] }}</title>
</head>
<body>

    <h1>{{ $planeet['name'] }}</h1>
    <p>{{ $planeet['description'] }}</p>

    <br>
    <p><a href="{{ route('home') }}">Terug naar de Homepagina</a></p>
    <p><a href="{{ route('planets.index') }}">Terug naar alle planeten</a></p>

</body>
</html> 