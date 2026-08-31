
<?php

// Customer support requests stored in an array

$queue = [
    [
        "customer" => "Arun",
        "request" => "Password Reset"
    ],

    [
        "customer" => "Priya",
        "request" => "Payment Issue"
    ],

    [
        "customer" => "Kumar",
        "request" => "Account Problem"
    ]
];


// Add new customer request

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $customer = $_POST["customer"] ?? "";
    $request = $_POST["request"] ?? "";

    if ($customer != "" && $request != "") {

        // Add request to the end of queue
        array_push($queue, [
            "customer" => $customer,
            "request" => $request
        ]);
    }
}


// Process first customer using FIFO

$processed = null;

if (isset($_POST["process"])) {

    // Remove first customer from queue
    $processed = array_shift($queue);
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Queue Status</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>🎧 Customer Support Queue</h1>


    <?php if ($processed != null) { ?>

        <div class="processed">

            <h2>✅ Request Processed</h2>

            <p>
                <strong>Customer:</strong>
                <?php echo htmlspecialchars($processed["customer"]); ?>
            </p>

            <p>
                <strong>Request:</strong>
                <?php echo htmlspecialchars($processed["request"]); ?>
            </p>

        </div>

    <?php } ?>


    <div class="queue">

        <h2>📋 Current Queue</h2>

        <?php if (count($queue) > 0) { ?>

            <?php $position = 1; ?>

            <?php foreach ($queue as $item) { ?>

                <div class="queue-card">

                    <span class="number">
                        <?php echo $position; ?>
                    </span>

                    <div>

                        <h3>
                            👤 <?php echo htmlspecialchars($item["customer"]); ?>
                        </h3>

                        <p>
                            🎫 <?php echo htmlspecialchars($item["request"]); ?>
                        </p>

                    </div>

                    <?php if ($position == 1) { ?>

                        <span class="next">
                            NEXT
                        </span>

                    <?php } ?>

                </div>

                <?php $position++; ?>

            <?php } ?>

        <?php } else { ?>

            <div class="empty">

                <h2>📭 Queue is Empty</h2>

                <p>No customer requests are waiting.</p>

            </div>

        <?php } ?>

    </div>


    <div class="status">

        <h2>📊 Queue Status</h2>

        <h1>
            <?php echo count($queue); ?>
        </h1>

        <p>Customers Waiting</p>

    </div>


    <?php if (count($queue) > 0) { ?>

        <form method="POST">

            <button
                type="submit"
                name="process"
                class="process-btn"
            >
                ⚙️ Process Next Customer
            </button>

        </form>

    <?php } ?>


    <a href="index.php" class="back">
        ← Add New Request
    </a>

</div>

</body>

</html>

