
<!DOCTYPE html>
<html>

<head>

    <title>E-Commerce Customer Registration</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>🛒 Customer Registration</h1>

    <p class="subtitle">
        Enter your details for registration
    </p>

    <form action="process.php" method="POST">

        <label>Full Name</label>
        <input
            type="text"
            name="name"
            placeholder="Enter your full name"
            required
        >

        <label>Username</label>
        <input
            type="text"
            name="username"
            placeholder="Enter username"
            required
        >

        <label>Email Address</label>
        <input
            type="text"
            name="email"
            placeholder="Enter email address"
            required
        >

        <label>Phone Number</label>
        <input
            type="text"
            name="phone"
            placeholder="Enter 10-digit phone number"
            required
        >

        <label>Password</label>
        <input
            type="password"
            name="password"
            placeholder="Enter password"
            required
        >

        <button type="submit">
            📝 Register Customer
        </button>

    </form>

</div>

</body>

</html>

