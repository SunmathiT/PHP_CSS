
<!DOCTYPE html>
<html>

<head>
    <title>Customer Information Validation</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>👤 Customer Information Validation</h1>

    <p class="subtitle">
        Enter customer details to validate using Regular Expressions
    </p>

    <form action="process.php" method="POST">

        <label>Customer Name</label>
        <input type="text" name="name" placeholder="Enter customer name" required>

        <label>Phone Number</label>
        <input type="text" name="phone" placeholder="Enter 10-digit phone number" required>

        <label>Email ID</label>
        <input type="email" name="email" placeholder="Enter email address" required>

        <label>Account Number</label>
        <input type="text" name="account" placeholder="Enter 10-digit account number" required>

        <button type="submit">
            🔍 Validate Customer
        </button>

    </form>

</div>

</body>

</html>

