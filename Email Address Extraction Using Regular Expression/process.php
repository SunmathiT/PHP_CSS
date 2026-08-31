
<?php

// Get employee records
$text = $_POST['employee_data'] ?? "";

// Regular expression for email addresses
$pattern = '/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/';

// Extract email addresses
preg_match_all($pattern, $text, $matches);

// Store extracted emails
$emails = $matches[0];

?>

<!DOCTYPE html>
<html>

<head>

    <title>Email Extraction Result</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>📧 Email Extraction Result</h1>

    <?php if (count($emails) > 0) { ?>

        <div class="success">

            <h2>✅ Valid Email Addresses Found</h2>

            <p>
                Total Emails Found:
                <strong><?php echo count($emails); ?></strong>
            </p>

        </div>

        <div class="email-list">

            <?php foreach ($emails as $email) { ?>

                <div class="email-card">

                    📩
                    <?php echo htmlspecialchars($email); ?>

                </div>

            <?php } ?>

        </div>

    <?php } else { ?>

        <div class="error">

            <h2>❌ No Email Addresses Found</h2>

            <p>
                No valid email address was identified in the given text.
            </p>

        </div>

    <?php } ?>

    <a href="index.php" class="back">
        ← Extract Another Email
    </a>

</div>

</body>

</html>
