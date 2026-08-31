
<?php

// Historical sales records stored in an array

$sales = [

    "January" => floatval($_POST["jan"] ?? 0),

    "February" => floatval($_POST["feb"] ?? 0),

    "March" => floatval($_POST["mar"] ?? 0),

    "April" => floatval($_POST["apr"] ?? 0),

    "May" => floatval($_POST["may"] ?? 0),

    "June" => floatval($_POST["jun"] ?? 0)

];


// Calculate total sales

$totalSales = array_sum($sales);


// Calculate average sales

$averageSales = $totalSales / count($sales);


// Find highest and lowest sales

$highestSales = max($sales);

$lowestSales = min($sales);


// Find months with highest and lowest sales

$highestMonth = array_search($highestSales, $sales);

$lowestMonth = array_search($lowestSales, $sales);


// Calculate growth percentages

$growth = [];

$months = array_keys($sales);

for ($i = 1; $i < count($months); $i++) {

    $previousSales = $sales[$months[$i - 1]];

    $currentSales = $sales[$months[$i]];


    if ($previousSales > 0) {

        $growth[$months[$i]] =
            (($currentSales - $previousSales)
            / $previousSales) * 100;

    } else {

        $growth[$months[$i]] = 0;
    }
}


// Identify overall trend

$increasing = 0;

$decreasing = 0;

foreach ($growth as $value) {

    if ($value > 0) {

        $increasing++;

    } elseif ($value < 0) {

        $decreasing++;
    }
}


if ($increasing > $decreasing) {

    $overallTrend = "📈 Increasing Trend";

} elseif ($decreasing > $increasing) {

    $overallTrend = "📉 Decreasing Trend";

} else {

    $overallTrend = "➡️ Stable Trend";
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Sales Analysis Report</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>📈 Sales Analysis Report</h1>


    <!-- Overall Trend -->

    <div class="trend">

        <h2>Overall Sales Trend</h2>

        <h1>
            <?php echo $overallTrend; ?>
        </h1>

    </div>


    <!-- Sales Records -->

    <div class="section">

        <h2>📋 Historical Sales Records</h2>

        <table>

            <tr>

                <th>Month</th>

                <th>Sales</th>

                <th>Growth</th>

                <th>Trend</th>

            </tr>


            <?php

            $firstMonth = true;

            foreach ($sales as $month => $amount) {

            ?>

                <tr>

                    <td>
                        <?php echo $month; ?>
                    </td>

                    <td>
                        ₹<?php echo number_format($amount, 2); ?>
                    </td>


                    <td>

                        <?php if ($firstMonth) { ?>

                            —

                        <?php } else { ?>

                            <?php

                            $growthValue = $growth[$month];

                            echo number_format(
                                $growthValue,
                                2
                            );

                            ?>%

                        <?php } ?>

                    </td>


                    <td>

                        <?php

                        if ($firstMonth) {

                            echo "Starting Month";

                        } elseif ($growth[$month] > 0) {

                            echo "📈 Increased";

                        } elseif ($growth[$month] < 0) {

                            echo "📉 Decreased";

                        } else {

                            echo "➡️ No Change";
                        }

                        ?>

                    </td>

                </tr>


            <?php

                $firstMonth = false;

            }

            ?>

        </table>

    </div>


    <!-- Statistics -->

    <div class="analysis">

        <div class="card">

            <h3>💰 Total Sales</h3>

            <h1>
                ₹<?php echo number_format($totalSales, 2); ?>
            </h1>

        </div>


        <div class="card">

            <h3>📊 Average Sales</h3>

            <h1>
                ₹<?php echo number_format($averageSales, 2); ?>
            </h1>

        </div>


        <div class="card">

            <h3>🏆 Highest Sales</h3>

            <h1>
                ₹<?php echo number_format($highestSales, 2); ?>
            </h1>

            <p>
                <?php echo $highestMonth; ?>
            </p>

        </div>


        <div class="card">

            <h3>🔻 Lowest Sales</h3>

            <h1>
                ₹<?php echo number_format($lowestSales, 2); ?>
            </h1>

            <p>
                <?php echo $lowestMonth; ?>
            </p>

        </div>

    </div>


    <!-- Growth Summary -->

    <div class="growth">

        <h2>📈 Growth Analysis</h2>

        <?php foreach ($growth as $month => $value) { ?>

            <div class="growth-row">

                <span>
                    <?php echo $month; ?>
                </span>

                <strong>

                    <?php

                    if ($value > 0) {

                        echo "📈 +" .
                            number_format($value, 2) .
                            "%";

                    } elseif ($value < 0) {

                        echo "📉 " .
                            number_format($value, 2) .
                            "%";

                    } else {

                        echo "➡️ 0%";
                    }

                    ?>

                </strong>

            </div>

        <?php } ?>

    </div>


    <a href="index.php" class="back">
        ← Analyze New Sales Data
    </a>

</div>

</body>

</html>

