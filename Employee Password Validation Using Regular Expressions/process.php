<?php

$employee = $_POST['employee'];
$password = $_POST['password'];


// Security Rules

$length = strlen($password);

$hasUppercase = preg_match('/[A-Z]/', $password);

$hasLowercase = preg_match('/[a-z]/', $password);

$hasNumber = preg_match('/[0-9]/', $password);

$hasSpecial = preg_match('/[^A-Za-z0-9]/', $password);


// Check all rules

if (
    $length >= 8 &&
    $hasUppercase &&
    $hasLowercase &&
    $hasNumber &&
    $hasSpecial
) {

    $result = "✅ Strong Password";
    $class = "success";

} else {

    $result = "❌ Weak Password";
    $class = "danger";

}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Password Result</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>🔐 Password Validation Result</h1>


    <div class="result <?php echo $class; ?>">

        <h2>
            <?php echo $result; ?>
        </h2>

        <p>
            Employee:
            <strong>
                <?php echo htmlspecialchars($employee); ?>
            </strong>
        </p>

    </div>


    <div class="rules">

        <h2>Security Rules</h2>

        <p>
            <?php echo $length >= 8 ? "✅" : "❌"; ?>
            Minimum 8 characters
        </p>

        <p>
            <?php echo $hasUppercase ? "✅" : "❌"; ?>
            At least one uppercase letter
        </p>

        <p>
            <?php echo $hasLowercase ? "✅" : "❌"; ?>
            At least one lowercase letter
        </p>

        <p>
            <?php echo $hasNumber ? "✅" : "❌"; ?>
            At least one number
        </p>

        <p>
            <?php echo $hasSpecial ? "✅" : "❌"; ?>
            At least one special character
        </p>

    </div>


    <a href="index.php" class="back">
        ← Check Another Password
    </a>

</div>

</body>

</html>