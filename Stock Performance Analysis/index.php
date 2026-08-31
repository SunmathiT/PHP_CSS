
<!DOCTYPE html>
<html>

<head>

    <title>Stock Performance Analysis</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>📈 Stock Performance Analysis</h1>

    <p class="subtitle">
        Enter stock prices for financial analysis
    </p>

    <form action="process.php" method="POST">

        <label>Company Name</label>

        <input
            type="text"
            name="company"
            placeholder="Enter company name"
            required
        >

        <label>Opening Price (₹)</label>

        <input
            type="number"
            name="opening"
            placeholder="Enter opening price"
            step="0.01"
            min="0"
            required
        >

        <label>Closing Price (₹)</label>

        <input
            type="number"
            name="closing"
            placeholder="Enter closing price"
            step="0.01"
            min="0"
            required
        >

        <label>Highest Price (₹)</label>

        <input
            type="number"
            name="highest"
            placeholder="Enter highest price"
            step="0.01"
            min="0"
            required
        >

        <label>Lowest Price (₹)</label>

        <input
            type="number"
            name="lowest"
            placeholder="Enter lowest price"
            step="0.01"
            min="0"
            required
        >

        <button type="submit">
            📊 Analyze Stock
        </button>

    </form>

</div>

</body>

</html>

