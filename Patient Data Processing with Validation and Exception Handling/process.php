<?php

$patients = [

    [
        "name" => $_POST["name1"] ?? "",
        "age" => $_POST["age1"] ?? "",
        "disease" => $_POST["disease1"] ?? ""
    ],

    [
        "name" => $_POST["name2"] ?? "",
        "age" => $_POST["age2"] ?? "",
        "disease" => $_POST["disease2"] ?? ""
    ],

    [
        "name" => $_POST["name3"] ?? "",
        "age" => $_POST["age3"] ?? "",
        "disease" => $_POST["disease3"] ?? ""
    ]

];

$results = [];

$successful = 0;

$failed = 0;

foreach ($patients as $patient) {

    $name = trim($patient["name"]);

    try {

        $age = $patient["age"];

        $disease = trim($patient["disease"]);


        if ($name == "") {

            throw new Exception(
                "Patient name cannot be empty."
            );

        }


        if ($age == "" || !is_numeric($age)) {

            throw new Exception(
                "Invalid age."
            );

        }


        $age = intval($age);


        if ($age <= 0 || $age > 120) {

            throw new Exception(
                "Age must be between 1 and 120."
            );

        }


        if ($disease == "") {

            throw new Exception(
                "Disease information cannot be empty."
            );

        }


        $results[] = [

            "name" => $name,

            "age" => $age,

            "disease" => $disease,

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

        $failed++;

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

    <h1>🏥 Patient Processing Report</h1>

    <div class="summary">

        <div class="card">

            <h3>Total Patients</h3>

            <h2>
                <?php echo count($patients); ?>
            </h2>

        </div>

        <div class="card">

            <h3>Valid Records</h3>

            <h2>
                <?php echo $successful; ?>
            </h2>

        </div>

        <div class="card">

            <h3>Invalid Records</h3>

            <h2>
                <?php echo $failed; ?>
            </h2>

        </div>

    </div>


    <div class="report">

        <h2>Patient Details</h2>

        <?php foreach ($results as $result) { ?>

            <?php if ($result["status"] == "success") { ?>

                <div class="patient success">

                    <h2>
                        Patient:
                        <?php echo htmlspecialchars($result["name"]); ?>
                    </h2>

                    <p>
                        Age:
                        <?php echo $result["age"]; ?>
                    </p>

                    <p>
                        Disease:
                        <?php echo htmlspecialchars($result["disease"]); ?>
                    </p>

                    <p class="valid">
                        Valid patient record
                    </p>

                </div>

            <?php } else { ?>

                <div class="patient error">

                    <h2>
                        Patient:
                        <?php echo htmlspecialchars($result["name"]); ?>
                    </h2>

                    <p>
                        Error:
                        <?php echo htmlspecialchars($result["error"]); ?>
                    </p>

                    <p>
                        Processing continued for other records.
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