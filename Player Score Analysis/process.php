
<?php

// Get player details

$players = [

    [
        "name" => $_POST["player1"] ?? "",
        "score" => intval($_POST["score1"] ?? 0)
    ],

    [
        "name" => $_POST["player2"] ?? "",
        "score" => intval($_POST["score2"] ?? 0)
    ],

    [
        "name" => $_POST["player3"] ?? "",
        "score" => intval($_POST["score3"] ?? 0)
    ],

    [
        "name" => $_POST["player4"] ?? "",
        "score" => intval($_POST["score4"] ?? 0)
    ]

];


// Extract scores into a separate array

$scores = array_column($players, "score");


// Find highest and lowest scores

$highestScore = max($scores);

$lowestScore = min($scores);


// Calculate average

$averageScore = array_sum($scores) / count($scores);


// Find players with highest and lowest scores

$highestPlayer = "";

$lowestPlayer = "";

foreach ($players as $player) {

    if ($player["score"] == $highestScore) {
        $highestPlayer = $player["name"];
    }

    if ($player["score"] == $lowestScore) {
        $lowestPlayer = $player["name"];
    }
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Player Score Report</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>🏆 Player Score Analysis</h1>


    <!-- Player Scores -->

    <div class="section">

        <h2>📋 Player Scores</h2>

        <table>

            <tr>
                <th>Player</th>
                <th>Score</th>
            </tr>

            <?php foreach ($players as $player) { ?>

                <tr>

                    <td>
                        👤 <?php echo htmlspecialchars($player["name"]); ?>
                    </td>

                    <td>
                        <?php echo $player["score"]; ?>
                    </td>

                </tr>

            <?php } ?>

        </table>

    </div>


    <!-- Analysis -->

    <div class="analysis">

        <div class="card">

            <h3>🥇 Highest Score</h3>

            <h1>
                <?php echo $highestScore; ?>
            </h1>

            <p>
                <?php echo htmlspecialchars($highestPlayer); ?>
            </p>

        </div>


        <div class="card">

            <h3>🔻 Lowest Score</h3>

            <h1>
                <?php echo $lowestScore; ?>
            </h1>

            <p>
                <?php echo htmlspecialchars($lowestPlayer); ?>
            </p>

        </div>


        <div class="card">

            <h3>📊 Average Score</h3>

            <h1>
                <?php echo number_format($averageScore, 2); ?>
            </h1>

            <p>
                Average Performance
            </p>

        </div>

    </div>


    <!-- Total -->

    <div class="total">

        <h2>🎯 Total Score</h2>

        <h1>
            <?php echo array_sum($scores); ?>
        </h1>

        <p>
            Total points scored by all players
        </p>

    </div>


    <a href="index.php" class="back">
        ← Analyze Again
    </a>

</div>

</body>

</html>

