
<!DOCTYPE html>
<html>

<head>

    <title>Loan Repayment Calculator</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>💰 Loan Repayment Calculator</h1>

    <p class="subtitle">
        Enter your loan details to calculate EMI
    </p>

    <form action="process.php" method="POST">

        <label>Loan Amount (₹)</label>

        <input
            type="number"
            name="amount"
            placeholder="Enter loan amount"
            min="1"
            required
        >


        <label>Annual Interest Rate (%)</label>

        <input
            type="number"
            name="rate"
            placeholder="Enter interest rate"
            step="0.01"
            min="0"
            required
        >


        <label>Loan Tenure (Years)</label>

        <input
            type="number"
            name="years"
            placeholder="Enter loan period"
            min="1"
            required
        >


        <button type="submit">
            🧮 Calculate EMI
        </button>

    </form>

</div>

</body>

</html>

