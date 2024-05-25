<!-- File: resources/views/paperrockscissorsgame/result.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Result</title>
</head>
<body>
    <h1>Game Result</h1>
    <p>Your choice: {{ ucfirst($userChoice) }}</p>
    <p>Computer's choice: {{ ucfirst($computerChoice) }}</p>
    <p>Result: {{ $result }}</p>
    @if ($score !== null)
        <p>Your total score: {{ $score }}</p>
    @endif
    <a href="{{ route('play') }}">Play Again</a>
    <a href="{{ route('dashboard') }}">Go to Dashboard</a>
</body>
</html>
