
<!DOCTYPE html>
<html>

<head>

    <title>Railway Reservation System</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>🚆 Railway Reservation System</h1>

    <p class="subtitle">
        Manage confirmed passengers and waiting list
    </p>

    <form action="process.php" method="POST">

        <label>Passenger Name</label>

        <input
            type="text"
            name="passenger"
            placeholder="Enter passenger name"
            required
        >

        <label>Operation</label>

        <select name="operation" required>

            <option value="add">
                Add Passenger
            </option>

            <option value="cancel">
                Cancel Confirmed Ticket
            </option>

        </select>

        <label>Seat Number (For Cancellation)</label>

        <input
            type="number"
            name="seat"
            placeholder="Enter seat number"
            min="1"
        >

        <button type="submit">
            🎫 Process Request
        </button>

    </form>

</div>

</body>

</html>

