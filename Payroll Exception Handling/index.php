<!DOCTYPE html>
<html>

<head>

    <title>Payroll Exception Handling</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>💼 Payroll Exception Handling</h1>

    <p class="subtitle">
        Enter employee salary details
    </p>

    <form action="process.php" method="POST">

        <label>Employee 1 Name</label>
        <input
            type="text"
            name="name1"
            placeholder="Enter employee name"
            required
        >

        <label>Employee 1 Basic Salary (₹)</label>
        <input
            type="number"
            name="salary1"
            placeholder="Enter basic salary"
            step="0.01"
            min="0"
            required
        >


        <label>Employee 2 Name</label>
        <input
            type="text"
            name="name2"
            placeholder="Enter employee name"
            required
        >

        <label>Employee 2 Basic Salary (₹)</label>
        <input
            type="number"
            name="salary2"
            placeholder="Enter basic salary"
            step="0.01"
            min="0"
            required
        >


        <label>Employee 3 Name</label>
        <input
            type="text"
            name="name3"
            placeholder="Enter employee name"
            required
        >

        <label>Employee 3 Basic Salary (₹)</label>
        <input
            type="number"
            name="salary3"
            placeholder="Enter basic salary"
            step="0.01"
            min="0"
            required
        >


        <label>Employee 4 Name</label>
        <input
            type="text"
            name="name4"
            placeholder="Enter employee name"
            required
        >

        <label>Employee 4 Basic Salary (₹)</label>
        <input
            type="number"
            name="salary4"
            placeholder="Enter basic salary"
            step="0.01"
            min="0"
            required
        >


        <button type="submit">
            📊 Calculate Payroll
        </button>

    </form>

</div>

</body>

</html>