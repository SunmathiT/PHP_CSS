
<?php

// Get loan details

$amount = floatval($_POST['amount'] ?? 0);
$rate = floatval($_POST['rate'] ?? 0);
$years = intval($_POST['years'] ?? 0);


// Convert years into months

$months = $years * 12;


// Monthly interest rate

$monthlyRate = ($rate / 100) / 12;


// Calculate EMI

if ($monthlyRate > 0) {

    $emi = $amount *
        $monthlyRate *
        pow(1 + $monthlyRate, $months)
        /
        (pow(1 + $monthlyRate, $months) - 1);

} else {

    // If interest rate is 0

    $emi = $amount / $months;
}


// Total payment

$totalPayment = $emi * $months;


// Total interest

$totalInterest = $totalPayment - $amount;


// Remaining balance

$balance = $amount;

?>

<!DOCTYPE html>
<html>

<head>

    <title>Loan Repayment Schedule</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>💰 Loan Repayment Report</h1>


    <!-- Loan Summary -->

    <div class="summary">

        <h2>📊 Loan Summary</h2>

        <div class="summary-grid">

            <div>
                <span>Loan Amount</span>
                <strong>
                    ₹<?php echo number_format($amount, 2); ?>
                </strong>
            </div>

            <div>
                <span>Interest Rate</span>
                <strong>
                    <?php echo number_format($rate, 2); ?>%
                </strong>
            </div>

            <div>
                <span>Loan Tenure</span>
                <strong>
                    <?php echo $years; ?> Years
                </strong>
            </div>

            <div>
                <span>Monthly EMI</span>
                <strong>
                    ₹<?php echo number_format($emi, 2); ?>
                </strong>
            </div>

            <div>
                <span>Total Interest</span>
                <strong>
                    ₹<?php echo number_format($totalInterest, 2); ?>
                </strong>
            </div>

            <div>
                <span>Total Payment</span>
                <strong>
                    ₹<?php echo number_format($totalPayment, 2); ?>
                </strong>
            </div>

        </div>

    </div>


    <!-- Repayment Schedule -->

    <div class="schedule">

        <h2>📅 Repayment Schedule</h2>

        <table>

            <tr>
                <th>Month</th>
                <th>EMI</th>
                <th>Interest</th>
                <th>Principal</th>
                <th>Balance</th>
            </tr>


            <?php

            for ($month = 1; $month <= $months; $month++) {

                // Calculate monthly interest

                $interest = $balance * $monthlyRate;

                // Calculate principal

                $principal = $emi - $interest;

                // Update balance

                $balance = $balance - $principal;

                // Prevent negative final balance

                if ($balance < 0) {
                    $balance = 0;
                }

            ?>

                <tr>

                    <td>
                        <?php echo $month; ?>
                    </td>

                    <td>
                        ₹<?php echo number_format($emi, 2); ?>
                    </td>

                    <td>
                        ₹<?php echo number_format($interest, 2); ?>
                    </td>

                    <td>
                        ₹<?php echo number_format($principal, 2); ?>
                    </td>

                    <td>
                        ₹<?php echo number_format($balance, 2); ?>
                    </td>

                </tr>

            <?php } ?>

        </table>

    </div>


    <a href="index.php" class="back">
        ← Calculate Another Loan
    </a>

</div>

</body>

</html>

