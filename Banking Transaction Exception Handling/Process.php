<?php

$name = $_POST["name"] ?? "";
$balance = $_POST["balance"] ?? "";
$amount = $_POST["amount"] ?? "";
$transaction = $_POST["transaction"] ?? "";
$count = $_POST["count"] ?? "";

$error = "";
$result = "";
$newBalance = 0;
$averageTransaction = 0;





try {


    if ($name == "" || $balance == "" || $amount == "" || $transaction == "" || $count == "") {

        throw new Exception("All fields are required.");
    }


   

    if (!is_numeric($balance) ||
        !is_numeric($amount) ||
        !is_numeric($count)) {

        throw new Exception("Invalid input. Please enter valid numbers.");
    }


   

    $balance = floatval($balance);
    $amount = floatval($amount);
    $count = intval($count);


   
    if ($balance < 0 || $amount < 0 || $count <= 0) {

        throw new Exception(
            "Invalid input. Values must be positive."
        );
    }


   

    if ($count == 0) {

        throw new Exception(
            "Division by zero is not allowed."
        );
    }


   

    if ($transaction == "deposit") {

        $newBalance = $balance + $amount;

        $result =
            "₹" . number_format($amount, 2) .
            " deposited successfully.";

    }


    
    elseif ($transaction == "withdraw") {

        if ($amount > $balance) {

            throw new Exception(
                "Insufficient balance for withdrawal."
            );
        }

        $newBalance = $balance - $amount;

        $result =
            "₹" . number_format($amount, 2) .
            " withdrawn successfully.";

    }

    else {

        throw new Exception(
            "Invalid transaction type."
        );
    }


   
    $averageTransaction =
        $amount / $count;

}

catch (Exception $e) {

    $error = $e->getMessage();

}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Banking Transaction Report</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>🏦 Banking Transaction Report</h1>


    <?php if ($error != "") { ?>

        <div class="error">

            <h2>❌ Transaction Error</h2>

            <p>
                <?php echo htmlspecialchars($error); ?>
            </p>

        </div>

    <?php } else { ?>


        <div class="success">

            <h2>✅ Transaction Successful</h2>

            <p>
                <?php echo htmlspecialchars($result); ?>
            </p>

        </div>


        <div class="details">

            <h2>👤 Account Details</h2>

            <p>
                <strong>Account Holder:</strong>
                <?php echo htmlspecialchars($name); ?>
            </p>

            <p>
                <strong>Previous Balance:</strong>
                ₹<?php echo number_format($balance, 2); ?>
            </p>

            <p>
                <strong>Transaction Amount:</strong>
                ₹<?php echo number_format($amount, 2); ?>
            </p>

            <p>
                <strong>Transaction Type:</strong>
                <?php echo ucfirst($transaction); ?>
            </p>

        </div>


        <div class="result-box">

            <h2>💰 Updated Balance</h2>

            <h1>
                ₹<?php echo number_format($newBalance, 2); ?>
            </h1>

        </div>


        <div class="average">

            <h2>📊 Average Transaction</h2>

            <h1>
                ₹<?php echo number_format($averageTransaction, 2); ?>
            </h1>

            <p>
                Calculated using safe division
            </p>

        </div>


    <?php } ?>


    <a href="index.php" class="back">
        ← New Transaction
    </a>

</div>

</body>

</html>