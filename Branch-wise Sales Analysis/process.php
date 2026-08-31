<?php

// Multidimensional Array

$sales = [

    "Chennai" => $_POST['chennai'],

    "Salem" => $_POST['salem'],

    "Coimbatore" => $_POST['coimbatore']

];


// Calculate branch totals using array_sum()

$totals = [];

foreach ($sales as $branch => $amounts) {

    $totals[$branch] = array_sum($amounts);

}


// Find highest selling branch using max()

$highest = max($totals);

$topBranch = array_search($highest, $totals);


// Find overall sales

$overallSales = array_sum($totals);

?>

<!DOCTYPE html>
<html>

<head>

    <title>Sales Report</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>📊 Consolidated Sales Report</h1>

    <p>Branch-wise Sales Analysis</p>


    <div class="winner">

        🏆 Highest Sales Branch

        <h2><?php echo $topBranch; ?></h2>

        <h3>₹ <?php echo $highest; ?></h3>

    </div>


    <div class="cards">

        <?php foreach ($totals as $branch => $total) { ?>

            <div class="card">

                <h2>🏢 <?php echo $branch; ?></h2>

                <p>Total Sales</p>

                <h3>₹ <?php echo $total; ?></h3>

            </div>

        <?php } ?>

    </div>


    <div class="report">

        <h2>📋 Sales Details</h2>

        <table>

            <tr>

                <th>Branch</th>
                <th>Product 1</th>
                <th>Product 2</th>
                <th>Product 3</th>
                <th>Total</th>

            </tr>

            <?php foreach ($sales as $branch => $amounts) { ?>

            <tr>

                <td><?php echo $branch; ?></td>

                <td>₹ <?php echo $amounts[0]; ?></td>

                <td>₹ <?php echo $amounts[1]; ?></td>

                <td>₹ <?php echo $amounts[2]; ?></td>

                <td>
                    <b>₹ <?php echo $totals[$branch]; ?></b>
                </td>

            </tr>

            <?php } ?>

        </table>

    </div>


    <div class="overall">

        <h2>💰 Overall Sales</h2>

        <h1>₹ <?php echo $overallSales; ?></h1>

    </div>


    <a href="index.php" class="back">
        ← Enter New Sales
    </a>

</div>

</body>

</html>