
<?php

// Get registration details

$name = $_POST['name'] ?? '';
$username = $_POST['username'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$password = $_POST['password'] ?? '';


// Regular Expressions

// Name: Alphabets and spaces only
$namePattern = "/^[A-Za-z ]+$/";

// Username: 4 to 15 letters, numbers and underscore
$usernamePattern = "/^[A-Za-z0-9_]{4,15}$/";

// Email validation
$emailPattern = "/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/";

// Phone: Exactly 10 digits
$phonePattern = "/^[0-9]{10}$/";

// Password: Minimum 6 characters
$passwordPattern = "/^.{6,}$/";


// Validation

$nameValid = preg_match($namePattern, $name);

$usernameValid = preg_match($usernamePattern, $username);

$emailValid = preg_match($emailPattern, $email);

$phoneValid = preg_match($phonePattern, $phone);

$passwordValid = preg_match($passwordPattern, $password);


// Count valid fields

$validCount =
    $nameValid +
    $usernameValid +
    $emailValid +
    $phoneValid +
    $passwordValid;

?>

<!DOCTYPE html>
<html>

<head>

    <title>Registration Validation Result</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>📋 Registration Validation</h1>

    <div class="report">


        <!-- Name -->

        <div class="result">

            <h3>👤 Full Name</h3>

            <p>
                <?php echo htmlspecialchars($name); ?>
            </p>

            <?php if ($nameValid) { ?>

                <span class="valid">
                    ✅ Valid
                </span>

            <?php } else { ?>

                <span class="invalid">
                    ❌ Invalid
                </span>

            <?php } ?>

        </div>


        <!-- Username -->

        <div class="result">

            <h3>🔑 Username</h3>

            <p>
                <?php echo htmlspecialchars($username); ?>
            </p>

            <?php if ($usernameValid) { ?>

                <span class="valid">
                    ✅ Valid
                </span>

            <?php } else { ?>

                <span class="invalid">
                    ❌ Invalid
                </span>

            <?php } ?>

        </div>


        <!-- Email -->

        <div class="result">

            <h3>📧 Email Address</h3>

            <p>
                <?php echo htmlspecialchars($email); ?>
            </p>

            <?php if ($emailValid) { ?>

                <span class="valid">
                    ✅ Valid
                </span>

            <?php } else { ?>

                <span class="invalid">
                    ❌ Invalid
                </span>

            <?php } ?>

        </div>


        <!-- Phone -->

        <div class="result">

            <h3>📱 Phone Number</h3>

            <p>
                <?php echo htmlspecialchars($phone); ?>
            </p>

            <?php if ($phoneValid) { ?>

                <span class="valid">
                    ✅ Valid
                </span>

            <?php } else { ?>

                <span class="invalid">
                    ❌ Invalid
                </span>

            <?php } ?>

        </div>


        <!-- Password -->

        <div class="result">

            <h3>🔒 Password</h3>

            <p>
                <?php echo str_repeat("•", strlen($password)); ?>
            </p>

            <?php if ($passwordValid) { ?>

                <span class="valid">
                    ✅ Valid
                </span>

            <?php } else { ?>

                <span class="invalid">
                    ❌ Invalid
                </span>

            <?php } ?>

        </div>

    </div>


    <!-- Summary -->

    <div class="summary">

        <h2>📊 Validation Summary</h2>

        <h1>
            <?php echo $validCount; ?> / 5
        </h1>

        <?php if ($validCount == 5) { ?>

            <p class="success-text">
                🎉 Registration details are valid!
            </p>

        <?php } else { ?>

            <p class="error-text">
                ⚠️ Please correct the invalid entries.
            </p>

        <?php } ?>

    </div>


    <a href="index.php" class="back">
        ← Register Another Customer
    </a>

</div>

</body>

</html>

