
<!DOCTYPE html>
<html>

<head>
    <title>Email Address Extraction</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>📧 Email Address Extraction</h1>

    <p class="subtitle">
        Enter employee records containing email addresses
    </p>

    <form action="process.php" method="POST">

        <label>Employee Records:</label>

        <textarea
            name="employee_data"
            placeholder="Example:
John - john@gmail.com
Priya - priya@yahoo.com
David - david@company.com"
            required></textarea>

        <button type="submit">
            🔍 Extract Email Addresses
        </button>

    </form>

</div>

</body>

</html>

