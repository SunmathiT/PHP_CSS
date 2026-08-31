<?php

$names = $_POST['name'];
$ages = $_POST['age'];
$departments = $_POST['department'];
$treatments = $_POST['treatment'];


// Multidimensional Array

$patients = [];

for ($i = 0; $i < count($names); $i++) {

    $patients[] = [

        "name" => $names[$i],

        "age" => $ages[$i],

        "department" => $departments[$i],

        "treatment" => $treatments[$i]

    ];
}


// Patient Count

$patientCount = count($patients);


// Average Age

$totalAge = array_sum($ages);

$averageAge = $totalAge / $patientCount;


// Department Count

$departmentCount = [];

foreach ($patients as $patient) {

    $department = $patient["department"];

    if (isset($departmentCount[$department])) {

        $departmentCount[$department]++;

    } else {

        $departmentCount[$department] = 1;

    }
}


// Treatment Count

$treatmentCount = [];

foreach ($patients as $patient) {

    $treatment = $patient["treatment"];

    if (isset($treatmentCount[$treatment])) {

        $treatmentCount[$treatment]++;

    } else {

        $treatmentCount[$treatment] = 1;

    }
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Patient Report</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>🏥 Patient Records Report</h1>

    <p>Department and Treatment Analysis</p>


    <!-- Summary -->

    <div class="summary">

        <div class="box blue">

            <h2>👥 Patients</h2>

            <h3><?php echo $patientCount; ?></h3>

        </div>


        <div class="box green">

            <h2>🎂 Average Age</h2>

            <h3>
                <?php echo number_format($averageAge, 2); ?>
            </h3>

        </div>

    </div>


    <!-- Patient Details -->

    <div class="report">

        <h2>📋 Patient Details</h2>

        <table>

            <tr>

                <th>Name</th>

                <th>Age</th>

                <th>Department</th>

                <th>Treatment</th>

            </tr>

            <?php foreach ($patients as $patient) { ?>

            <tr>

                <td><?php echo htmlspecialchars($patient["name"]); ?></td>

                <td><?php echo $patient["age"]; ?></td>

                <td><?php echo $patient["department"]; ?></td>

                <td><?php echo $patient["treatment"]; ?></td>

            </tr>

            <?php } ?>

        </table>

    </div>


    <!-- Department Report -->

    <div class="cards">

        <h2>🏥 Department-wise Report</h2>

        <?php foreach ($departmentCount as $department => $count) { ?>

            <div class="card">

                <h2><?php echo $department; ?></h2>

                <h3><?php echo $count; ?></h3>

                <p>Patients</p>

            </div>

        <?php } ?>

    </div>


    <!-- Treatment Statistics -->

    <div class="treatment">

        <h2>💊 Treatment Statistics</h2>

        <table>

            <tr>

                <th>Treatment</th>

                <th>Patient Count</th>

            </tr>

            <?php foreach ($treatmentCount as $treatment => $count) { ?>

            <tr>

                <td><?php echo $treatment; ?></td>

                <td><?php echo $count; ?></td>

            </tr>

            <?php } ?>

        </table>

    </div>


    <a href="index.php" class="back">
        ← Enter New Records
    </a>

</div>

</body>

</html>