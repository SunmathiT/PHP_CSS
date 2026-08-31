<?php

$employees = [

    [
        "name" => $_POST["name1"] ?? "",
        "salary" => $_POST["salary1"] ?? ""
    ],

    [
        "name" => $_POST["name2"] ?? "",
        "salary" => $_POST["salary2"] ?? ""
    ],

    [
        "name" => $_POST["name3"] ?? "",
        "salary" => $_POST["salary3"] ?? ""
    ],

    [
        "name" => $_POST["name4"] ?? "",
        "salary" => $_POST["salary4"] ?? ""
    ]

];

$results = [];

$totalPayroll = 0;

$successfulEmployees = 0;

$failedEmployees = 0;


// Process each employee separately

foreach ($employees as $employee) {

    // Set name before try so it is available in catch

    $name = trim($employee["name"]);

    try {

        $salary = $employee["salary"];


        // Check employee name

        if ($name == "") {

            throw new Exception(
                "Employee name cannot be empty."
            );

        }


        // Check salary

        if ($salary == "" || !is_numeric($salary)) {

            throw new Exception(
                "Invalid salary amount."
            );

        }


        // Convert salary to number

        $salary = floatval($salary);


        // Salary must be positive

        if ($salary <= 0) {

            throw new Exception(
                "Salary must be greater than zero."
            );

        }


        /*
            Payroll Calculation

            HRA = 20% of Basic Salary
            DA  = 10% of Basic Salary
            Tax = 5% of Gross Salary
        */

        $hra = $salary * 0.20;

        $da = $salary * 0.10;

        $grossSalary = $salary + $hra + $da;

        $tax = $grossSalary * 0.05;

        $netSalary = $grossSalary - $tax;


        // Store successful result

        $results[] = [

            "name" => $name,

            "salary" => $salary,

            "hra" => $hra,

            "da" => $da,

            "gross" => $grossSalary,

            "tax" => $tax,

            "net" => $netSalary,

            "status" => "success"

        ];


        // Add to total payroll

        $totalPayroll += $netSalary;

        $successfulEmployees++;


    }

    catch (Exception $e) {

        // Store error without stopping the program

        $results[] = [

            "name" => $name,

            "error" => $e->getMessage(),

            "status" => "error"

        ];

        $failedEmployees++;

    }

}

?>

<!DOCTYPE html>

<html>

<head>

    <title>Payroll Report</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>💼 Payroll Analysis Report</h1>


    <!-- Summary -->

    <div class="summary">

        <div class="summary-card">

            <h3>👥 Employees</h3>

            <h1>
                <?php echo count($employees); ?>
            </h1>

        </div>


        <div class="summary-card">

            <h3>✅ Successful</h3>

            <h1>
                <?php echo $successfulEmployees; ?>
            </h1>

        </div>


        <div class="summary-card">

            <h3>❌ Errors</h3>

            <h1>
                <?php echo $failedEmployees; ?>
            </h1>

        </div>

    </div>


    <!-- Employee Report -->

    <div class="report">

        <h2>📋 Employee Payroll Details</h2>


        <?php foreach ($results as $result) { ?>


            <?php if ($result["status"] == "success") { ?>

                <!-- Successful Employee -->

                <div class="employee success">

                    <h2>
                        👤
                        <?php echo htmlspecialchars($result["name"]); ?>
                    </h2>

                    <p>
                        <strong>Basic Salary:</strong>
                        ₹<?php echo number_format($result["salary"], 2); ?>
                    </p>

                    <p>
                        <strong>HRA:</strong>
                        ₹<?php echo number_format($result["hra"], 2); ?>
                    </p>

                    <p>
                        <strong>DA:</strong>
                        ₹<?php echo number_format($result["da"], 2); ?>
                    </p>

                    <p>
                        <strong>Gross Salary:</strong>
                        ₹<?php echo number_format($result["gross"], 2); ?>
                    </p>

                    <p>
                        <strong>Tax:</strong>
                        ₹<?php echo number_format($result["tax"], 2); ?>
                    </p>


                    <div class="net">

                        <strong>Net Salary:</strong>

                        ₹<?php echo number_format($result["net"], 2); ?>

                    </div>


                    <p class="status">

                        ✅ Payroll processed successfully

                    </p>

                </div>


            <?php } else { ?>

                <!-- Error Employee -->

                <div class="employee error">

                    <h2>

                        ❌
                        <?php echo htmlspecialchars($result["name"]); ?>

                    </h2>

                    <p>

                        <strong>Error:</strong>

                        <?php echo htmlspecialchars($result["error"]); ?>

                    </p>

                    <p class="continue">

                        ⚠️ Processing continued for other employees.

                    </p>

                </div>

            <?php } ?>


        <?php } ?>

    </div>


    <!-- Total Payroll -->

    <div class="total">

        <h2>💰 Total Net Payroll</h2>

        <h1>

            ₹<?php echo number_format($totalPayroll, 2); ?>

        </h1>

        <p>

            Total salary payable to successfully processed employees

        </p>

    </div>


    <a href="index.php" class="back">

        ← Process Again

    </a>

</div>

</body>

</html>