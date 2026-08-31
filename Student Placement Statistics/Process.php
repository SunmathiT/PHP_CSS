<?php

$students = [

    [
        "name" => $_POST["name1"],
        "department" => $_POST["dept1"],
        "status" => $_POST["status1"],
        "salary" => floatval($_POST["salary1"])
    ],

    [
        "name" => $_POST["name2"],
        "department" => $_POST["dept2"],
        "status" => $_POST["status2"],
        "salary" => floatval($_POST["salary2"])
    ],

    [
        "name" => $_POST["name3"],
        "department" => $_POST["dept3"],
        "status" => $_POST["status3"],
        "salary" => floatval($_POST["salary3"])
    ],

    [
        "name" => $_POST["name4"],
        "department" => $_POST["dept4"],
        "status" => $_POST["status4"],
        "salary" => floatval($_POST["salary4"])
    ]

];

$totalStudents = count($students);

$placedStudents = 0;

$totalSalary = 0;

$departments = [];

foreach ($students as $student) {

    if ($student["status"] == "Placed") {

        $placedStudents++;

        $totalSalary += $student["salary"];

    }

    $dept = $student["department"];

    if (!isset($departments[$dept])) {

        $departments[$dept] = [];

    }

    $departments[$dept][] = $student;

}


$placementPercentage =
    ($placedStudents / $totalStudents) * 100;


$averageSalary = 0;

if ($placedStudents > 0) {

    $averageSalary =
        $totalSalary / $placedStudents;

}


usort($students, function($a, $b) {

    return $b["salary"] <=> $a["salary"];

});


foreach ($departments as $dept => &$deptStudents) {

    usort($deptStudents, function($a, $b) {

        return $b["salary"] <=> $a["salary"];

    });

}

unset($deptStudents);

?>

<!DOCTYPE html>
<html>

<head>

    <title>Placement Report</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>🎓 Placement Statistics Report</h1>


    <div class="summary">

        <div class="card">

            <h3>👨‍🎓 Total Students</h3>

            <h2>
                <?php echo $totalStudents; ?>
            </h2>

        </div>


        <div class="card">

            <h3>✅ Placed Students</h3>

            <h2>
                <?php echo $placedStudents; ?>
            </h2>

        </div>


        <div class="card">

            <h3>📈 Placement %</h3>

            <h2>
                <?php echo number_format($placementPercentage, 2); ?>%
            </h2>

        </div>


        <div class="card">

            <h3>💰 Average Salary</h3>

            <h2>
                ₹<?php echo number_format($averageSalary, 2); ?>
            </h2>

        </div>

    </div>


    <div class="report">

        <h2>🏆 Overall Student Ranking</h2>

        <table>

            <tr>

                <th>Rank</th>
                <th>Student</th>
                <th>Department</th>
                <th>Status</th>
                <th>Salary</th>

            </tr>

            <?php

            $rank = 1;

            foreach ($students as $student) {

            ?>

            <tr>

                <td>
                    <?php echo $rank++; ?>
                </td>

                <td>
                    <?php echo htmlspecialchars($student["name"]); ?>
                </td>

                <td>
                    <?php echo $student["department"]; ?>
                </td>

                <td>
                    <?php echo $student["status"]; ?>
                </td>

                <td>
                    ₹<?php echo number_format($student["salary"], 2); ?>
                </td>

            </tr>

            <?php } ?>

        </table>

    </div>


    <div class="report">

        <h2>🏅 Department-wise Rankings</h2>

        <?php foreach ($departments as $dept => $deptStudents) { ?>

            <h3 class="department">
                <?php echo $dept; ?> Department
            </h3>

            <table>

                <tr>

                    <th>Rank</th>
                    <th>Student</th>
                    <th>Status</th>
                    <th>Salary</th>

                </tr>

                <?php

                $rank = 1;

                foreach ($deptStudents as $student) {

                ?>

                <tr>

                    <td>
                        <?php echo $rank++; ?>
                    </td>

                    <td>
                        <?php echo htmlspecialchars($student["name"]); ?>
                    </td>

                    <td>
                        <?php echo $student["status"]; ?>
                    </td>

                    <td>
                        ₹<?php echo number_format($student["salary"], 2); ?>
                    </td>

                </tr>

                <?php } ?>

            </table>

        <?php } ?>

    </div>


    <a href="index.php" class="back">
        ← Enter New Data
    </a>

</div>

</body>

</html>