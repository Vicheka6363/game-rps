<!-- File: resources/views/paperrockscissorsgame/dashboard.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Dashboard</title>
</head>
<body>
    <h1>Game Dashboard</h1>
    <!-- Display top ten users and their scores -->
    <ul>
        @foreach ($topTenScores as $score)
            <li>{{ $score->user->name }}: {{ $score->score }}</li>
        @endforeach
    </ul>
    <a href="{{ route('play') }}">Play Game</a>
</body>
</html>
