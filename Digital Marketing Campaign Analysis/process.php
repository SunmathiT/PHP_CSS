<?php

$campaigns = [

    [
        "name" => $_POST["campaign"] ?? "",
        "source" => $_POST["source"] ?? "",
        "impressions" => $_POST["impressions"] ?? 0,
        "clicks" => $_POST["clicks"] ?? 0,
        "conversions" => $_POST["conversions"] ?? 0,
        "cost" => $_POST["cost"] ?? 0,
        "revenue" => $_POST["revenue"] ?? 0
    ]

];

$campaign = $campaigns[0];

$totalImpressions = 0;
$totalClicks = 0;
$totalConversions = 0;
$totalCost = 0;
$totalRevenue = 0;

foreach ($campaigns as $item) {

    $totalImpressions += (int)$item["impressions"];
    $totalClicks += (int)$item["clicks"];
    $totalConversions += (int)$item["conversions"];
    $totalCost += (float)$item["cost"];
    $totalRevenue += (float)$item["revenue"];

}

$conversionRate = 0;
$clickRate = 0;
$costPerClick = 0;
$roi = 0;

if ($totalImpressions > 0) {

    $clickRate =
        ($totalClicks / $totalImpressions) * 100;

}

if ($totalClicks > 0) {

    $conversionRate =
        ($totalConversions / $totalClicks) * 100;

    $costPerClick =
        $totalCost / $totalClicks;

}

if ($totalCost > 0) {

    $roi =
        (($totalRevenue - $totalCost) / $totalCost) * 100;

}

if ($conversionRate >= 10) {

    $performance = "Excellent";

} elseif ($conversionRate >= 5) {

    $performance = "Good";

} elseif ($conversionRate >= 2) {

    $performance = "Average";

} else {

    $performance = "Needs Improvement";

}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Campaign Analysis Report</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>📊 Campaign Analysis Report</h1>

    <div class="campaign-info">

        <h2>
            <?php echo htmlspecialchars($campaign["name"]); ?>
        </h2>

        <p>
            Source:
            <strong>
                <?php echo htmlspecialchars($campaign["source"]); ?>
            </strong>
        </p>

    </div>

    <div class="summary">

        <div class="card">

            <h3>👀 Impressions</h3>

            <h2>
                <?php echo number_format($totalImpressions); ?>
            </h2>

        </div>

        <div class="card">

            <h3>🖱️ Clicks</h3>

            <h2>
                <?php echo number_format($totalClicks); ?>
            </h2>

        </div>

        <div class="card">

            <h3>🎯 Conversions</h3>

            <h2>
                <?php echo number_format($totalConversions); ?>
            </h2>

        </div>

        <div class="card">

            <h3>📈 Click Rate</h3>

            <h2>
                <?php echo number_format($clickRate, 2); ?>%
            </h2>

        </div>

        <div class="card">

            <h3>🔄 Conversion Rate</h3>

            <h2>
                <?php echo number_format($conversionRate, 2); ?>%
            </h2>

        </div>

        <div class="card">

            <h3>💰 Cost Per Click</h3>

            <h2>
                ₹<?php echo number_format($costPerClick, 2); ?>
            </h2>

        </div>

        <div class="card">

            <h3>💵 Revenue</h3>

            <h2>
                ₹<?php echo number_format($totalRevenue, 2); ?>
            </h2>

        </div>

        <div class="card">

            <h3>📊 ROI</h3>

            <h2>
                <?php echo number_format($roi, 2); ?>%
            </h2>

        </div>

    </div>

    <div class="report">

        <h2>📋 Campaign Summary</h2>

        <table>

            <tr>

                <th>Campaign</th>
                <th>Source</th>
                <th>Cost</th>
                <th>Revenue</th>
                <th>Performance</th>

            </tr>

            <?php foreach ($campaigns as $item) { ?>

            <tr>

                <td>
                    <?php echo htmlspecialchars($item["name"]); ?>
                </td>

                <td>
                    <?php echo htmlspecialchars($item["source"]); ?>
                </td>

                <td>
                    ₹<?php echo number_format((float)$item["cost"], 2); ?>
                </td>

                <td>
                    ₹<?php echo number_format((float)$item["revenue"], 2); ?>
                </td>

                <td class="performance">
                    <?php echo $performance; ?>
                </td>

            </tr>

            <?php } ?>

        </table>

    </div>

    <div class="total">

        <h2>🎯 Key Performance Indicator</h2>

        <h1>
            <?php echo $performance; ?>
        </h1>

        <p>
            Campaign performance based on conversion rate
        </p>

    </div>

    <a href="index.php" class="back">
        ← Analyze Another Campaign
    </a>

</div>

</body>

</html>