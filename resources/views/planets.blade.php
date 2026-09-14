<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planeten Overzicht</title>
</head>
<body>

    <h1>Lijst van Planeten</h1>

    <ul>
        {{-- Dit is de Blade Directive die door je array heen loopt --}}
        @foreach ($planets as $planet)
            <li>
                <strong>{{ $planet['name'] }}</strong>: 
                {{ $planet['description'] }}
            </li>
        @endforeach
    </ul>

</body>
</html>