<!DOCTYPE html>
<html>

<head>

    <title>Digital Marketing Campaign Analysis</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>📢 Digital Marketing Campaign Analysis</h1>

    <p>Enter campaign performance details</p>

    <form action="process.php" method="POST">

        <label>Campaign Name</label>
        <input
            type="text"
            name="campaign"
            placeholder="Enter campaign name"
            required
        >

        <label>Marketing Source</label>
        <select name="source" required>
            <option value="">Select Source</option>
            <option value="Google Ads">Google Ads</option>
            <option value="Instagram">Instagram</option>
            <option value="Facebook">Facebook</option>
            <option value="YouTube">YouTube</option>
        </select>

        <label>Impressions</label>
        <input
            type="number"
            name="impressions"
            placeholder="Enter impressions"
            min="1"
            required
        >

        <label>Clicks</label>
        <input
            type="number"
            name="clicks"
            placeholder="Enter clicks"
            min="0"
            required
        >

        <label>Conversions</label>
        <input
            type="number"
            name="conversions"
            placeholder="Enter conversions"
            min="0"
            required
        >

        <label>Campaign Cost (₹)</label>
        <input
            type="number"
            name="cost"
            placeholder="Enter campaign cost"
            step="0.01"
            min="0"
            required
        >

        <label>Revenue Generated (₹)</label>
        <input
            type="number"
            name="revenue"
            placeholder="Enter revenue"
            step="0.01"
            min="0"
            required
        >

        <button type="submit">
            📊 Analyze Campaign
        </button>

    </form>

</div>

</body>

</html>