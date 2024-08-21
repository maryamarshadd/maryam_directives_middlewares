<!-- resources/views/check-voting.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Voting Eligibility</title>
</head>
<body>
    <h1>Checking Voting Eligibility...</h1>
    <form action="/eligible" method="GET">
        <label for="age">Enter your age:</label>
        <input type="number" name="age" id="age" required>
        <button type="submit">Check</button>
    </form>
</body>
</html>
