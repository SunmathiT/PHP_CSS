
<?php

// Get stock details

$company = $_POST["company"] ?? "";

$opening = floatval($_POST["opening"] ?? 0);

$closing = floatval($_POST["closing"] ?? 0);

$highest = floatval($_POST["highest"] ?? 0);

$lowest = floatval($_POST["lowest"] ?? 0);


// Store financial data in an array

$stock = [

    "Opening Price" => $opening,

    "Closing Price" => $closing,

    "Highest Price" => $highest,

    "Lowest Price" => $lowest

];


// Extract prices

$prices = array_values($stock);


// Calculate price change

$priceChange = $closing - $opening;


// Calculate percentage change

if ($opening > 0) {

    $percentageChange =
        ($priceChange / $opening) * 100;

} else {

    $percentageChange = 0;

}


// Calculate average price

$averagePrice =
    array_sum($prices) / count($prices);


// Find highest and lowest recorded price

$maximumPrice = max($prices);

$minimumPrice = min($prices);


// Calculate price range

$priceRange =
    $maximumPrice - $minimumPrice;


// Round values

$averagePrice = round($averagePrice, 2);

$percentageChange = round($percentageChange, 2);

$priceRange = round($priceRange, 2);


// Identify stock trend

if ($percentageChange > 0) {

    $trend = "📈 Positive Trend";

} elseif ($percentageChange < 0) {

    $trend = "📉 Negative Trend";

} else {

    $trend = "➡️ Stable Trend";
}


// Generate investor analysis

if ($percentageChange > 5) {

    $analysis =
        "The stock shows strong positive performance.";

} elseif ($percentageChange > 0) {

    $analysis =
        "The stock shows moderate positive performance.";

} elseif ($percentageChange < 0) {

    $analysis =
        "The stock price has decreased during the period.";

} else {

    $analysis =
        "The stock price remained stable during the period.";
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Stock Analysis Report</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>📊 Stock Analysis Report</h1>

    <h2 class="company">
        <?php echo htmlspecialchars($company); ?>
    </h2>


    <!-- Trend -->

    <div class="trend">

        <h2>Stock Trend</h2>

        <h1>
            <?php echo $trend; ?>
        </h1>

    </div>


    <!-- Price Details -->

    <div class="section">

        <h2>💹 Stock Price Details</h2>

        <table>

            <tr>

                <th>Price Type</th>

                <th>Value</th>

            </tr>

            <?php foreach ($stock as $type => $value) { ?>

                <tr>

                    <td>
                        <?php echo $type; ?>
                    </td>

                    <td>
                        ₹<?php echo number_format($value, 2); ?>
                    </td>

                </tr>

            <?php } ?>

        </table>

    </div>


    <!-- Analysis Cards -->

    <div class="analysis">

        <div class="card">

            <h3>💰 Price Change</h3>

            <h1>
                ₹<?php echo number_format($priceChange, 2); ?>
            </h1>

        </div>


        <div class="card">

            <h3>📈 Percentage Change</h3>

            <h1>
                <?php echo number_format($percentageChange, 2); ?>%
            </h1>

        </div>


        <div class="card">

            <h3>📊 Average Price</h3>

            <h1>
                ₹<?php echo number_format($averagePrice, 2); ?>
            </h1>

        </div>


        <div class="card">

            <h3>↕️ Price Range</h3>

            <h1>
                ₹<?php echo number_format($priceRange, 2); ?>
            </h1>

        </div>

    </div>


    <!-- Investor Report -->

    <div class="report">

        <h2>👨‍💼 Investor Analysis</h2>

        <p>
            <?php echo $analysis; ?>
        </p>

        <p>
            Opening price was
            ₹<?php echo number_format($opening, 2); ?>
            and closing price was
            ₹<?php echo number_format($closing, 2); ?>.
        </p>

    </div>


    <!-- Numerical Functions -->

    <div class="functions">

        <h2>🔢 Numerical Analysis</h2>

        <p>
            Maximum Price:
            <strong>
                ₹<?php echo number_format($maximumPrice, 2); ?>
            </strong>
        </p>

        <p>
            Minimum Price:
            <strong>
                ₹<?php echo number_format($minimumPrice, 2); ?>
            </strong>
        </p>

        <p>
            Average Price:
            <strong>
                ₹<?php echo number_format($averagePrice, 2); ?>
            </strong>
        </p>

    </div>


    <a href="index.php" class="back">
        ← Analyze Another Stock
    </a>

</div>

</body>

</html>

