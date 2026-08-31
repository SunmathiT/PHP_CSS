<?php

// Course enrolment data stored in array

$courses = [

    "PHP" => $_POST['php'],

    "DBMS" => $_POST['dbms'],

    "Web Development" => $_POST['web'],

    "Python" => $_POST['python']

];


// Find most popular course

$highest = max($courses);

$popularCourse = array_search(
    $highest,
    $courses
);


// Total enrolment

$totalStudents = array_sum($courses);

?>

<!DOCTYPE html>
<html>

<head>

    <title>Enrolment Report</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>📊 Course Enrolment Report</h1>

    <p>Enrolment Summary</p>


    <!-- Most Popular Course -->

    <div class="popular">

        <h2>🏆 Most Popular Course</h2>

        <h3>
            <?php echo $popularCourse; ?>
        </h3>

        <p>
            Students Enrolled:
            <strong><?php echo $highest; ?></strong>
        </p>

    </div>


    <!-- Course Cards -->

    <div class="cards">

        <?php foreach ($courses as $course => $students) { ?>

            <div class="card">

                <h2>
                    🎓 <?php echo $course; ?>
                </h2>

                <h3>
                    <?php echo $students; ?>
                </h3>

                <p>Students Enrolled</p>

            </div>

        <?php } ?>

    </div>


    <!-- Summary Table -->

    <div class="report">

        <h2>📋 Enrolment Summary</h2>

        <table>

            <tr>

                <th>Course</th>

                <th>Students Enrolled</th>

            </tr>


            <?php foreach ($courses as $course => $students) { ?>

            <tr>

                <td>
                    <?php echo $course; ?>
                </td>

                <td>
                    <?php echo $students; ?>
                </td>

            </tr>

            <?php } ?>

        </table>

    </div>


    <!-- Total -->

    <div class="total">

        <h2>👥 Total Enrolments</h2>

        <h1>
            <?php echo $totalStudents; ?>
        </h1>

    </div>


    <a href="index.php" class="back">
        ← Enter Again
    </a>

</div>

</body>

</html>