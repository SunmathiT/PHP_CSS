<?php

$books = [

    "The Alchemist",
    "Harry Potter",
    "Wings of Fire",
    "The Secret",
    "Rich Dad Poor Dad",
    "Atomic Habits"
];

$search = trim($_POST["book"] ?? "");

$found = false;

$bookName = "";

foreach ($books as $book) {

    if (strcasecmp($book, $search) == 0) {

        $found = true;

        $bookName = $book;

        break;
    }
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Library Search Result</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>📚 Library Search Result</h1>

    <?php if ($found) { ?>

        <div class="result available">

            <h2>✅ Book Available</h2>

            <p>
                <strong>Book Title:</strong>
                <?php echo htmlspecialchars($bookName); ?>
            </p>

            <p>
                The requested book is available in the library.
            </p>

        </div>

    <?php } else { ?>

        <div class="result unavailable">

            <h2>❌ Book Not Available</h2>

            <p>
                <strong>Requested Title:</strong>
                <?php echo htmlspecialchars($search); ?>
            </p>

            <p>
                The requested book is not available in the library.
            </p>

        </div>

    <?php } ?>


    <div class="books">

        <h2>📖 Available Books</h2>

        <ul>

            <?php foreach ($books as $book) { ?>

                <li>
                    📕 <?php echo htmlspecialchars($book); ?>
                </li>

            <?php } ?>

        </ul>

    </div>


    <a href="index.php" class="back">
        ← Search Another Book
    </a>

</div>

</body>

</html>