<?php

$names = $_POST['name'];
$salaries = $_POST['salary'];


// Store employee details in array

$employees = [];

for ($i = 0; $i < count($names); $i++) {

    $employees[] = [
        "name" => $names[$i],
        "salary" => $salaries[$i]
    ];
}


// Get only salaries

$salaryList = array_column($employees, "salary");


// Array Functions

$highest = max($salaryList);

$lowest = min($salaryList);

$average = array_sum($salaryList) / count($salaryList);


// Find highest salary employee

$highestIndex = array_search($highest, $salaryList);

$highestEmployee = $employees[$highestIndex]["name"];

?>

<!DOCTYPE html>
<html>

<head>

    <title>Salary Report</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>📊 Employee Salary Report</h1>

    <p>Salary Analysis Result</p>


    <!-- Summary -->

    <div class="summary">

        <div class="box high">

            <h2>⬆ Highest Salary</h2>

            <h3>₹ <?php echo $highest; ?></h3>

            <p><?php echo $highestEmployee; ?></p>

        </div>


        <div class="box low">

            <h2>⬇ Lowest Salary</h2>

            <h3>₹ <?php echo $lowest; ?></h3>

        </div>


        <div class="box average">

            <h2>📈 Average Salary</h2>

            <h3>₹ <?php echo number_format($average, 2); ?></h3>

        </div>

    </div>


    <!-- Employee Table -->

    <div class="report">

        <h2>👥 Employee Details</h2>

        <table>

            <tr>

                <th>S.No</th>

                <th>Employee Name</th>

                <th>Salary</th>

            </tr>


            <?php

            $i = 1;

            foreach ($employees as $employee) {

            ?>

            <tr>

                <td><?php echo $i++; ?></td>

                <td><?php echo htmlspecialchars($employee["name"]); ?></td>

                <td>₹ <?php echo $employee["salary"]; ?></td>

            </tr>

            <?php } ?>

        </table>

    </div>


    <a href="index.php" class="back">
        ← Enter Again
    </a>

</div>

</body>

</html>