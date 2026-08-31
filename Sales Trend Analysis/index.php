
<!DOCTYPE html>
<html>

<head>

    <title>Sales Trend Analysis</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>📈 Sales Trend Analysis</h1>

    <p class="subtitle">
        Enter historical sales records for analysis
    </p>


    <form action="process.php" method="POST">

        <label>January Sales (₹)</label>

        <input
            type="number"
            name="jan"
            placeholder="Enter January sales"
            min="0"
            required
        >


        <label>February Sales (₹)</label>

        <input
            type="number"
            name="feb"
            placeholder="Enter February sales"
            min="0"
            required
        >


        <label>March Sales (₹)</label>

        <input
            type="number"
            name="mar"
            placeholder="Enter March sales"
            min="0"
            required
        >


        <label>April Sales (₹)</label>

        <input
            type="number"
            name="apr"
            placeholder="Enter April sales"
            min="0"
            required
        >


        <label>May Sales (₹)</label>

        <input
            type="number"
            name="may"
            placeholder="Enter May sales"
            min="0"
            required
        >


        <label>June Sales (₹)</label>

        <input
            type="number"
            name="jun"
            placeholder="Enter June sales"
            min="0"
            required
        >


        <button type="submit">
            📊 Analyze Sales
        </button>

    </form>

</div>

</body>

</html>

