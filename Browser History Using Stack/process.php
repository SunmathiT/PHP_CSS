
<?php

// Browser history stored as a stack

$history = [

    [
        "page" => "Google",
        "url" => "www.google.com"
    ],

    [
        "page" => "YouTube",
        "url" => "www.youtube.com"
    ],

    [
        "page" => "Wikipedia",
        "url" => "www.wikipedia.org"
    ]

];

$message = "";

$visitedPage = null;


// Get input

$page = $_POST["page"] ?? "";
$url = $_POST["url"] ?? "";


// Add newly visited page to stack

if ($page != "" && $url != "") {

    $newPage = [
        "page" => $page,
        "url" => $url
    ];

    // Push page onto stack
    array_push($history, $newPage);

    $message =
        "✅ $page has been added to browser history.";
}


// Process recently visited page

if (isset($_POST["back"])) {

    if (count($history) > 0) {

        // Pop the most recent page
        $visitedPage = array_pop($history);

        $message =
            "⬅️ Going back from " .
            $visitedPage["page"];
    }
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Browser History Status</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>🌐 Browser History</h1>


    <?php if ($message != "") { ?>

        <div class="message">

            <?php echo htmlspecialchars($message); ?>

        </div>

    <?php } ?>


    <?php if ($visitedPage != null) { ?>

        <div class="back-page">

            <h2>⬅️ Recently Closed Page</h2>

            <p>
                <strong>Page:</strong>
                <?php echo htmlspecialchars($visitedPage["page"]); ?>
            </p>

            <p>
                <strong>URL:</strong>
                <?php echo htmlspecialchars($visitedPage["url"]); ?>
            </p>

        </div>

    <?php } ?>


    <!-- Browser History -->

    <div class="history">

        <h2>📋 Recent Browser History</h2>

        <?php if (count($history) > 0) { ?>

            <?php
            $position = count($history);
            ?>

            <?php foreach (array_reverse($history) as $item) { ?>

                <div class="history-card">

                    <span class="number">
                        <?php echo $position; ?>
                    </span>

                    <div>

                        <h3>
                            🌐
                            <?php echo htmlspecialchars($item["page"]); ?>
                        </h3>

                        <p>
                            <?php echo htmlspecialchars($item["url"]); ?>
                        </p>

                    </div>

                    <?php if ($position == count($history)) { ?>

                        <span class="top">
                            TOP
                        </span>

                    <?php } ?>

                </div>

                <?php $position--; ?>

            <?php } ?>

        <?php } else { ?>

            <div class="empty">

                <h2>📭 History is Empty</h2>

                <p>No recently visited pages.</p>

            </div>

        <?php } ?>

    </div>


    <!-- Stack Information -->

    <div class="status">

        <h2>📚 Stack Status</h2>

        <h1>
            <?php echo count($history); ?>
        </h1>

        <p>Pages in Browser History</p>

    </div>


    <!-- Back Button -->

    <?php if (count($history) > 0) { ?>

        <form method="POST">

            <button
                type="submit"
                name="back"
                class="back-btn"
            >
                ⬅️ Go Back
            </button>

        </form>

    <?php } ?>


    <a href="index.php" class="home">
        ← Visit New Page
    </a>

</div>

</body>

</html>
