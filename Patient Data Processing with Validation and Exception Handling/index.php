<!DOCTYPE html>
<html>

<head>
    <title>Patient Data Processing</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>🏥 Patient Data Processing</h1>

    <p>Enter patient details for validation and processing</p>

    <form action="process.php" method="POST">

        <label>Patient 1 Name</label>
        <input type="text" name="name1" placeholder="Enter patient name" required>

        <label>Patient 1 Age</label>
        <input type="number" name="age1" placeholder="Enter age" min="1" max="120" required>

        <label>Patient 1 Disease</label>
        <input type="text" name="disease1" placeholder="Enter disease" required>


        <label>Patient 2 Name</label>
        <input type="text" name="name2" placeholder="Enter patient name" required>

        <label>Patient 2 Age</label>
        <input type="number" name="age2" placeholder="Enter age" min="1" max="120" required>

        <label>Patient 2 Disease</label>
        <input type="text" name="disease2" placeholder="Enter disease" required>


        <label>Patient 3 Name</label>
        <input type="text" name="name3" placeholder="Enter patient name" required>

        <label>Patient 3 Age</label>
        <input type="number" name="age3" placeholder="Enter age" min="1" max="120" required>

        <label>Patient 3 Disease</label>
        <input type="text" name="disease3" placeholder="Enter disease" required>


        <button type="submit">
            Process Patient Data
        </button>

    </form>

</div>

</body>

</html>