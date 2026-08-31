<!DOCTYPE html>
<html>
<head>
    <title>Branch Sales Analysis</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>🏢 Branch Sales Analysis</h1>
    <p>Enter Sales Details</p>

    <form action="process.php" method="POST">

        <div class="branch">

            <h2>🏬 Chennai Branch</h2>

            <input type="number" name="chennai[]" placeholder="Product 1" required>
            <input type="number" name="chennai[]" placeholder="Product 2" required>
            <input type="number" name="chennai[]" placeholder="Product 3" required>

        </div>

        <div class="branch">

            <h2>🏬 Salem Branch</h2>

            <input type="number" name="salem[]" placeholder="Product 1" required>
            <input type="number" name="salem[]" placeholder="Product 2" required>
            <input type="number" name="salem[]" placeholder="Product 3" required>

        </div>

        <div class="branch">

            <h2>🏬 Coimbatore Branch</h2>

            <input type="number" name="coimbatore[]" placeholder="Product 1" required>
            <input type="number" name="coimbatore[]" placeholder="Product 2" required>
            <input type="number" name="coimbatore[]" placeholder="Product 3" required>

        </div>

        <button type="submit">📊 Generate Report</button>

    </form>

</div>

</body>
</html>