<!DOCTYPE html>
<html>
<head>

    <title>Employee Password Validation</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>🔐 Employee Password Validation</h1>

    <p>Check Password Security</p>

    <form action="process.php" method="POST">

        <div class="box">

            <label>Enter Employee Name</label>

            <input type="text"
                   name="employee"
                   placeholder="Employee Name"
                   required>

            <label>Enter Password</label>

            <input type="password"
                   name="password"
                   placeholder="Enter Password"
                   required>

            <button type="submit">
                Validate Password
            </button>

        </div>

    </form>

</div>

</body>
</html>