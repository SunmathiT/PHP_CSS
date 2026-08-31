
<!DOCTYPE html>
<html>

<head>

    <title>Customer Support Queue</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>🎧 Customer Support Queue</h1>

    <p class="subtitle">
        Add customer service requests to the queue
    </p>

    <form action="process.php" method="POST">

        <label>Customer Name</label>

        <input
            type="text"
            name="customer"
            placeholder="Enter customer name"
            required
        >

        <label>Service Request</label>

        <input
            type="text"
            name="request"
            placeholder="Enter service request"
            required
        >

        <button type="submit">
            ➕ Add Request
        </button>

    </form>

</div>

</body>

</html>

