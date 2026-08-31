
<?php

// Get customer information
$name = $_POST['name'] ?? '';
$phone = $_POST['phone'] ?? '';
$email = $_POST['email'] ?? '';
$account = $_POST['account'] ?? '';


// Regular expressions

// Name: Only alphabets and spaces
$namePattern = "/^[A-Za-z ]+$/";

// Phone: Exactly 10 digits
$phonePattern = "/^[0-9]{10}$/";

// Email validation
$emailPattern = "/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/";

// Account number: Exactly 10 digits
$accountPattern = "/^[0-9]{10}$/";


// Validate details

$nameValid = preg_match($namePattern, $name);
$phoneValid = preg_match($phonePattern, $phone);
$emailValid = preg_match($emailPattern, $email);
$accountValid = preg_match($accountPattern, $account);


// Count valid details
$validCount = $nameValid + $phoneValid + $emailValid + $accountValid;

?>

<!DOCTYPE html>
<html>

<head>

    <title>Validation Report</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>📋 Customer Validation Report</h1>


    <div class="report">

        <div class="result">
            <h3>👤 Customer Name</h3>

            <p>
                <?php echo htmlspecialchars($name); ?>
            </p>

            <?php if ($nameValid) { ?>

                <span class="valid">✅ Valid</span>

            <?php } else { ?>

                <span class="invalid">❌ Invalid</span>

            <?php } ?>

        </div>


        <div class="result">
            <h3>📱 Phone Number</h3>

            <p>
                <?php echo htmlspecialchars($phone); ?>
            </p>

            <?php if ($phoneValid) { ?>

                <span class="valid">✅ Valid</span>

            <?php } else { ?>

                <span class="invalid">❌ Invalid</span>

            <?php } ?>

        </div>


        <div class="result">
            <h3>📧 Email ID</h3>

            <p>
                <?php echo htmlspecialchars($email); ?>
            </p>

            <?php if ($emailValid) { ?>

                <span class="valid">✅ Valid</span>

            <?php } else { ?>

                <span class="invalid">❌ Invalid</span>

            <?php } ?>

        </div>


        <div class="result">
            <h3>🏦 Account Number</h3>

            <p>
                <?php echo htmlspecialchars($account); ?>
            </p>

            <?php if ($accountValid) { ?>

                <span class="valid">✅ Valid</span>

            <?php } else { ?>

                <span class="invalid">❌ Invalid</span>

            <?php } ?>

        </div>

    </div>


    <div class="summary">

        <h2>📊 Validation Summary</h2>

        <h1>
            <?php echo $validCount; ?> / 4
        </h1>

        <p>Details Passed Validation</p>

    </div>


    <a href="index.php" class="back">
        ← Validate Another Customer
    </a>

</div>

</body>

</html>

