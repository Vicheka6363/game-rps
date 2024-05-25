<!-- File: resources/views/paperrockscissorsgame/play.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play Paper, Rock, Scissors</title>
</head>
<body>
    <h1>Play Paper, Rock, Scissors</h1>
    <form method="post" action="{{ route('play.game') }}">
        @csrf
        <label for="choice">Choose: </label>
        <select name="choice" id="choice">
            <option value="rock">Rock</option>
            <option value="paper">Paper</option>
            <option value="scissors">Scissors</option>
        </select>
        <button type="submit">Play</button>
    </form>
</body>
</html>
