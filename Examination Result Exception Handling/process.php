<?php

$students = [

    [
        "name" => $_POST["name1"] ?? "",
        "marks" => [
            $_POST["mark11"] ?? "",
            $_POST["mark12"] ?? "",
            $_POST["mark13"] ?? ""
        ]
    ],

    [
        "name" => $_POST["name2"] ?? "",
        "marks" => [
            $_POST["mark21"] ?? "",
            $_POST["mark22"] ?? "",
            $_POST["mark23"] ?? ""
        ]
    ],

    [
        "name" => $_POST["name3"] ?? "",
        "marks" => [
            $_POST["mark31"] ?? "",
            $_POST["mark32"] ?? "",
            $_POST["mark33"] ?? ""
        ]
    ]

];

$results = [];

$successful = 0;

$errors = 0;

foreach ($students as $student) {

    $name = trim($student["name"]);

    try {

        if ($name == "") {

            throw new Exception(
                "Student name cannot be empty."
            );

        }

        $marks = $student["marks"];

        foreach ($marks as $mark) {

            if ($mark === "" || !is_numeric($mark)) {

                throw new Exception(
                    "Invalid mark entered."
                );

            }

            if ($mark < 0 || $mark > 100) {

                throw new Exception(
                    "Marks must be between 0 and 100."
                );

            }

        }

        $mark1 = floatval($marks[0]);
        $mark2 = floatval($marks[1]);
        $mark3 = floatval($marks[2]);

        $total = $mark1 + $mark2 + $mark3;

        $average = $total / count($marks);

        if ($average >= 90) {

            $grade = "A+";

        } elseif ($average >= 80) {

            $grade = "A";

        } elseif ($average >= 70) {

            $grade = "B";

        } elseif ($average >= 60) {

            $grade = "C";

        } elseif ($average >= 50) {

            $grade = "D";

        } else {

            $grade = "F";

        }

        $results[] = [

            "name" => $name,
            "mark1" => $mark1,
            "mark2" => $mark2,
            "mark3" => $mark3,
            "total" => $total,
            "average" => $average,
            "grade" => $grade,
            "status" => "success"

        ];

        $successful++;

    }

    catch (Exception $e) {

        $results[] = [

            "name" => $name,
            "error" => $e->getMessage(),
            "status" => "error"

        ];

        $errors++;

    }

}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Examination Result Report</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>📚 Examination Result Report</h1>

    <div class="summary">

        <div class="card">

            <h3>👨‍🎓 Students</h3>

            <h2>
                <?php echo count($students); ?>
            </h2>

        </div>

        <div class="card">

            <h3>✅ Processed</h3>

            <h2>
                <?php echo $successful; ?>
            </h2>

        </div>

        <div class="card">

            <h3>❌ Errors</h3>

            <h2>
                <?php echo $errors; ?>
            </h2>

        </div>

    </div>


    <div class="report">

        <h2>📋 Student Results</h2>

        <?php foreach ($results as $result) { ?>

            <?php if ($result["status"] == "success") { ?>

                <div class="student success">

                    <h2>
                        👤 <?php echo htmlspecialchars($result["name"]); ?>
                    </h2>

                    <p>
                        Subject 1:
                        <?php echo $result["mark1"]; ?>
                    </p>

                    <p>
                        Subject 2:
                        <?php echo $result["mark2"]; ?>
                    </p>

                    <p>
                        Subject 3:
                        <?php echo $result["mark3"]; ?>
                    </p>

                    <p>
                        <strong>Total Marks:</strong>
                        <?php echo $result["total"]; ?>/300
                    </p>

                    <p>
                        <strong>Average:</strong>
                        <?php echo number_format($result["average"], 2); ?>%
                    </p>

                    <div class="grade">

                        Grade:
                        <?php echo $result["grade"]; ?>

                    </div>

                    <p class="status">
                        ✅ Result processed successfully
                    </p>

                </div>

            <?php } else { ?>

                <div class="student error">

                    <h2>
                        ❌ <?php echo htmlspecialchars($result["name"]); ?>
                    </h2>

                    <p>
                        <strong>Error:</strong>
                        <?php echo htmlspecialchars($result["error"]); ?>
                    </p>

                    <p class="continue">
                        ⚠️ Processing continued for other students.
                    </p>

                </div>

            <?php } ?>

        <?php } ?>

    </div>


    <a href="index.php" class="back">
        ← Process Again
    </a>

</div>

</body>

</html>