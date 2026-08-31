<!DOCTYPE html>
<html>

<head>

    <title>Banking Transaction</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>🏦 Banking Transaction</h1>

    <p class="subtitle">
        Enter transaction details safely
    </p>

    <form action="process.php" method="POST">

        <label>Account Holder Name</label>

        <input
            type="text"
            name="name"
            placeholder="Enter account holder name"
            required
        >

        <label>Current Balance (₹)</label>

        <input
            type="number"
            name="balance"
            placeholder="Enter current balance"
            step="0.01"
            min="0"
            required
        >

        <label>Transaction Amount (₹)</label>

        <input
            type="number"
            name="amount"
            placeholder="Enter transaction amount"
            step="0.01"
            min="0"
            required
        >

        <label>Transaction Type</label>

        <select name="transaction" required>

            <option value="">-- Select Transaction --</option>

            <option value="deposit">
                Deposit
            </option>

            <option value="withdraw">
                Withdraw
            </option>

        </select>

        <label>Number of Transactions</label>

        <input
            type="number"
            name="count"
            placeholder="Enter number"
            min="1"
            required
        >

        <button type="submit">
            💳 Process Transaction
        </button>

    </form>

</div>

</body>

</html>