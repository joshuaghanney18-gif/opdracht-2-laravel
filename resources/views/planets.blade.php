<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Planeten Overzicht</title>
</head>
<body>

    <h1>Lijst van Planeten</h1>

    <ul>
        @foreach ($planeten as $planet)
            <li>
                <a href="{{ route('planets.show', ['planet' => strtolower($planet['name'])]) }}">
                    <strong>{{ $planet['name'] }}</strong>
                </a>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('home') }}">Terug naar Home</a>

</body>
</html> 