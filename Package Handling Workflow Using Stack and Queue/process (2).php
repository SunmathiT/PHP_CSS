
<?php

// Queue: First-In-First-Out (FIFO)

$queue = [
    [
        "id" => "PKG101",
        "name" => "Laptop"
    ],

    [
        "id" => "PKG102",
        "name" => "Mobile Phone"
    ],

    [
        "id" => "PKG103",
        "name" => "Headphones"
    ]
];


// Stack: Last-In-First-Out (LIFO)

$stack = [
    [
        "id" => "PKG201",
        "name" => "Keyboard"
    ],

    [
        "id" => "PKG202",
        "name" => "Mouse"
    ]
];


$message = "";


// Get input

$packageId = $_POST["package_id"] ?? "";
$packageName = $_POST["package_name"] ?? "";
$operation = $_POST["operation"] ?? "";


// Add package

if ($packageId != "" && $packageName != "") {

    $newPackage = [
        "id" => $packageId,
        "name" => $packageName
    ];


    // Queue operation

    if ($operation == "queue") {

        array_push($queue, $newPackage);

        $message =
            "✅ Package added to the Queue successfully.";

    }


    // Stack operation

    elseif ($operation == "stack") {

        array_push($stack, $newPackage);

        $message =
            "✅ Package added to the Stack successfully.";

    }
}


// Process Queue

$processedQueue = null;

if (isset($_POST["process_queue"])) {

    if (count($queue) > 0) {

        // Remove first package
        $processedQueue = array_shift($queue);

        $message =
            "🚚 Queue Package processed successfully.";
    }
}


// Process Stack

$processedStack = null;

if (isset($_POST["process_stack"])) {

    if (count($stack) > 0) {

        // Remove last package
        $processedStack = array_pop($stack);

        $message =
            "📦 Stack Package processed successfully.";
    }
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Package Processing Status</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>📦 Package Processing Workflow</h1>


    <?php if ($message != "") { ?>

        <div class="message">

            <?php echo htmlspecialchars($message); ?>

        </div>

    <?php } ?>


    <!-- Queue Section -->

    <div class="section">

        <h2>🚚 Queue - FIFO</h2>

        <p class="info">
            First package added → First package processed
        </p>


        <?php if (count($queue) > 0) { ?>

            <?php $position = 1; ?>

            <?php foreach ($queue as $package) { ?>

                <div class="package-card">

                    <span class="number">
                        <?php echo $position; ?>
                    </span>

                    <div>

                        <h3>
                            📦 <?php echo htmlspecialchars($package["id"]); ?>
                        </h3>

                        <p>
                            <?php echo htmlspecialchars($package["name"]); ?>
                        </p>

                    </div>

                    <?php if ($position == 1) { ?>

                        <span class="next">
                            NEXT
                        </span>

                    <?php } ?>

                </div>

                <?php $position++; ?>

            <?php } ?>

        <?php } else { ?>

            <p class="empty">
                Queue is empty.
            </p>

        <?php } ?>


        <?php if (count($queue) > 0) { ?>

            <form method="POST">

                <button
                    type="submit"
                    name="process_queue"
                    class="queue-btn"
                >
                    🚚 Process Queue
                </button>

            </form>

        <?php } ?>

    </div>


    <!-- Stack Section -->

    <div class="section">

        <h2>📚 Stack - LIFO</h2>

        <p class="info">
            Last package added → First package processed
        </p>


        <?php if (count($stack) > 0) { ?>

            <?php $position = count($stack); ?>

            <?php foreach (array_reverse($stack) as $package) { ?>

                <div class="package-card">

                    <span class="number">
                        <?php echo $position; ?>
                    </span>

                    <div>

                        <h3>
                            📦 <?php echo htmlspecialchars($package["id"]); ?>
                        </h3>

                        <p>
                            <?php echo htmlspecialchars($package["name"]); ?>
                        </p>

                    </div>

                    <?php if ($position == count($stack)) { ?>

                        <span class="top">
                            TOP
                        </span>

                    <?php } ?>

                </div>

                <?php $position--; ?>

            <?php } ?>

        <?php } else { ?>

            <p class="empty">
                Stack is empty.
            </p>

        <?php } ?>


        <?php if (count($stack) > 0) { ?>

            <form method="POST">

                <button
                    type="submit"
                    name="process_stack"
                    class="stack-btn"
                >
                    📦 Process Stack
                </button>

            </form>

        <?php } ?>

    </div>


    <!-- Workflow -->

    <div class="workflow">

        <h2>🔄 Package Workflow</h2>

        <div class="steps">

            <div class="step">
                <span>1</span>
                📥 Receive
            </div>

            <div class="arrow">→</div>

            <div class="step">
                <span>2</span>
                📋 Queue
            </div>

            <div class="arrow">→</div>

            <div class="step">
                <span>3</span>
                📦 Stack
            </div>

            <div class="arrow">→</div>

            <div class="step">
                <span>4</span>
                🚚 Dispatch
            </div>

        </div>

    </div>


    <!-- Status -->

    <div class="stats">

        <div class="stat">

            <h3>🚚 Queue Packages</h3>

            <h1>
                <?php echo count($queue); ?>
            </h1>

        </div>


        <div class="stat">

            <h3>📦 Stack Packages</h3>

            <h1>
                <?php echo count($stack); ?>
            </h1>

        </div>

    </div>


    <a href="index.php" class="back">
        ← Add New Package
    </a>

</div>

</body>

</html>

