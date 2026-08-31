<?php

// Check whether form is submitted

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: index.php");
    exit();
}


// Get values from form

$names = $_POST['name'];
$php = $_POST['php'];
$dbms = $_POST['dbms'];
$cn = $_POST['cn'];
$java = $_POST['java'];
$python = $_POST['python'];


// --------------------------------------
// CREATE MULTIDIMENSIONAL ARRAY
// --------------------------------------

$students = [];

for ($i = 0; $i < count($names); $i++) {

    $students[$i] = [

        "name" => $names[$i],

        "marks" => [

            "PHP" => $php[$i],

            "DBMS" => $dbms[$i],

            "Computer Networks" => $cn[$i],

            "Java" => $java[$i],

            "Python" => $python[$i]

        ]

    ];
}


// Subjects

$subjects = [
    "PHP",
    "DBMS",
    "Computer Networks",
    "Java",
    "Python"
];


// --------------------------------------
// SUBJECT-WISE TOPPERS
// --------------------------------------

$toppers = [];

foreach ($subjects as $subject) {

    $highest = -1;
    $topper = "";

    foreach ($students as $student) {

        $mark = $student["marks"][$subject];

        if ($mark > $highest) {

            $highest = $mark;

            $topper = $student["name"];
        }
    }

    $toppers[$subject] = [
        "name" => $topper,
        "mark" => $highest
    ];
}


// --------------------------------------
// CLASS AVERAGE
// --------------------------------------

$classAverage = [];

foreach ($subjects as $subject) {

    $total = 0;

    foreach ($students as $student) {

        $total += $student["marks"][$subject];
    }

    $classAverage[$subject] =
        $total / count($students);
}


// --------------------------------------
// STUDENT TOTAL & AVERAGE
// --------------------------------------

$performance = [];

foreach ($students as $student) {

    $total = array_sum($student["marks"]);

    $average =
        $total / count($subjects);

    $performance[] = [

        "name" => $student["name"],

        "total" => $total,

        "average" => $average
    ];
}


// --------------------------------------
// OVERALL TOPPER
// --------------------------------------

$overallTopper = "";

$highestAverage = -1;

foreach ($performance as $student) {

    if ($student["average"] > $highestAverage) {

        $highestAverage =
            $student["average"];

        $overallTopper =
            $student["name"];
    }
}


// --------------------------------------
// PERFORMANCE LEVEL
// --------------------------------------

function getPerformance($average)
{

    if ($average >= 90) {

        return "Excellent";

    } elseif ($average >= 80) {

        return "Very Good";

    } elseif ($average >= 70) {

        return "Good";

    } elseif ($average >= 50) {

        return "Average";

    } else {

        return "Needs Improvement";
    }
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Performance Report</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>📊 Student Performance Report</h1>

    <p>Detailed Semester Performance Analysis</p>


    <!-- Overall Topper -->

    <div class="topper">

        <h2>🏆 Overall Topper</h2>

        <h3>
            <?php echo htmlspecialchars($overallTopper); ?>
        </h3>

        <p>
            Average:
            <?php echo number_format($highestAverage, 2); ?>
        </p>

    </div>


    <!-- Student Performance -->

    <h2>Student Performance</h2>

    <div class="table-container">

        <table>

            <tr>

                <th>S.No</th>

                <th>Student Name</th>

                <?php foreach ($subjects as $subject): ?>

                    <th>
                        <?php echo $subject; ?>
                    </th>

                <?php endforeach; ?>

                <th>Total</th>

                <th>Average</th>

                <th>Performance</th>

            </tr>


            <?php

            $serial = 1;

            foreach ($students as $index => $student):

            ?>

            <tr>

                <td>
                    <?php echo $serial++; ?>
                </td>

                <td>
                    <?php echo htmlspecialchars(
                        $student["name"]
                    ); ?>
                </td>


                <?php foreach ($subjects as $subject): ?>

                    <td>
                        <?php
                        echo $student["marks"][$subject];
                        ?>
                    </td>

                <?php endforeach; ?>


                <td>
                    <?php
                    echo $performance[$index]["total"];
                    ?>
                </td>


                <td>
                    <?php
                    echo number_format(
                        $performance[$index]["average"],
                        2
                    );
                    ?>
                </td>


                <td>
                    <?php
                    echo getPerformance(
                        $performance[$index]["average"]
                    );
                    ?>
                </td>

            </tr>

            <?php endforeach; ?>

        </table>

    </div>


    <!-- Subject-wise Topper -->

    <h2>🏆 Subject-wise Toppers</h2>

    <div class="cards">

        <?php foreach ($toppers as $subject => $topper): ?>

        <div class="card">

            <h3>
                <?php echo $subject; ?>
            </h3>

            <div class="trophy">
                🏆
            </div>

            <h4>
                <?php
                echo htmlspecialchars(
                    $topper["name"]
                );
                ?>
            </h4>

            <p>
                Highest Mark:
                <strong>
                    <?php echo $topper["mark"]; ?>
                </strong>
            </p>

        </div>

        <?php endforeach; ?>

    </div>


    <!-- Class Average -->

    <h2>📈 Class Average</h2>

    <div class="table-container">

        <table>

            <tr>

                <th>Subject</th>

                <th>Class Average</th>

            </tr>


            <?php foreach ($classAverage as $subject => $average): ?>

            <tr>

                <td>
                    <?php echo $subject; ?>
                </td>

                <td>
                    <?php
                    echo number_format(
                        $average,
                        2
                    );
                    ?>
                </td>

            </tr>

            <?php endforeach; ?>

        </table>

    </div>


    <!-- Detailed Report -->

    <h2>📝 Detailed Performance Report</h2>

    <div class="report">

        <?php foreach ($performance as $student): ?>

        <div class="report-card">

            <h3>
                <?php
                echo htmlspecialchars(
                    $student["name"]
                );
                ?>
            </h3>

            <p>
                Total Marks:
                <strong>
                    <?php echo $student["total"]; ?>
                </strong>
            </p>

            <p>
                Average:
                <strong>
                    <?php
                    echo number_format(
                        $student["average"],
                        2
                    );
                    ?>
                </strong>
            </p>

            <p>
                Performance:
                <strong>
                    <?php
                    echo getPerformance(
                        $student["average"]
                    );
                    ?>
                </strong>
            </p>

        </div>

        <?php endforeach; ?>

    </div>


    <br>

    <a href="index.php" class="back-button">
        ← Enter New Marks
    </a>

</div>

</body>

</html>
