<!DOCTYPE html>
<html>
<head>
    <title>Planets</title>
</head>
<body>
    <h1>Planets</h1>
    <ul>
        @foreach ($planets as $planet)
            <li>
                <a href="/planets/{{ $planet->name }}">{{ $planet->name }}</a>
                - {{ $planet->description }} ({{ $planet->size_in_km }} km)
            </li>
        @endforeach
    </ul>
</body>
</html> 