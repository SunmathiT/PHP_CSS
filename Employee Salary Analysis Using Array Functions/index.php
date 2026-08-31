<!DOCTYPE html>
<html>
<head>
    <title>Employee Salary Analysis</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>💼 Employee Salary Analysis</h1>
    <p>Enter Employee Details</p>

    <form action="process.php" method="POST">

        <div class="employee">
            <h2>👨‍💼 Employee 1</h2>

            <input type="text" name="name[]" placeholder="Employee Name" required>

            <input type="number" name="salary[]" placeholder="Salary" required>
        </div>

        <div class="employee">
            <h2>👩‍💼 Employee 2</h2>

            <input type="text" name="name[]" placeholder="Employee Name" required>

            <input type="number" name="salary[]" placeholder="Salary" required>
        </div>

        <div class="employee">
            <h2>👨‍💻 Employee 3</h2>

            <input type="text" name="name[]" placeholder="Employee Name" required>

            <input type="number" name="salary[]" placeholder="Salary" required>
        </div>

        <div class="employee">
            <h2>👩‍💻 Employee 4</h2>

            <input type="text" name="name[]" placeholder="Employee Name" required>

            <input type="number" name="salary[]" placeholder="Salary" required>
        </div>

        <button type="submit">📊 Analyze Salary</button>

    </form>

</div>

</body>
</html>