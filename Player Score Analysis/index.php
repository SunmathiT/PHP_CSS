
<!DOCTYPE html>
<html>

<head>

    <title>Player Score Analysis</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>🏆 Player Score Analysis</h1>

    <p class="subtitle">
        Enter player names and their scores
    </p>

    <form action="process.php" method="POST">

        <label>Player 1 Name</label>
        <input type="text" name="player1" placeholder="Enter player name" required>

        <label>Player 1 Score</label>
        <input type="number" name="score1" placeholder="Enter score" min="0" required>


        <label>Player 2 Name</label>
        <input type="text" name="player2" placeholder="Enter player name" required>

        <label>Player 2 Score</label>
        <input type="number" name="score2" placeholder="Enter score" min="0" required>


        <label>Player 3 Name</label>
        <input type="text" name="player3" placeholder="Enter player name" required>

        <label>Player 3 Score</label>
        <input type="number" name="score3" placeholder="Enter score" min="0" required>


        <label>Player 4 Name</label>
        <input type="text" name="player4" placeholder="Enter player name" required>

        <label>Player 4 Score</label>
        <input type="number" name="score4" placeholder="Enter score" min="0" required>


        <button type="submit">
            📊 Analyze Scores
        </button>

    </form>

</div>

</body>

</html>

