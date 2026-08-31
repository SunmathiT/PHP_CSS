
<?php

// Song details stored in array

$songs = [

    [
        "title" => "Vaathi Coming",
        "artist" => "Anirudh Ravichander",
        "genre" => "Tamil Pop"
    ],

    [
        "title" => "Arabic Kuthu",
        "artist" => "Anirudh Ravichander",
        "genre" => "Tamil Pop"
    ],

    [
        "title" => "Rowdy Baby",
        "artist" => "Dhanush & Dhee",
        "genre" => "Tamil Pop"
    ],

    [
        "title" => "Katchi Sera",
        "artist" => "Sai Abhyankkar",
        "genre" => "Tamil Pop"
    ],

    [
        "title" => "Enjoy Enjaami",
        "artist" => "Dhee & Arivu",
        "genre" => "Tamil Folk"
    ],

    [
        "title" => "Why This Kolaveri Di",
        "artist" => "Dhanush",
        "genre" => "Tamil Pop"
    ]

];


// Get search value safely
$search = isset($_POST['search']) ? trim($_POST['search']) : "";

$found = false;
$result = null;


// Search for song
if ($search != "") {

    foreach ($songs as $song) {

        if (strtolower($song["title"]) == strtolower($search)) {

            $found = true;
            $result = $song;

            break;
        }
    }
}


// Total songs
$totalSongs = count($songs);

?>

<!DOCTYPE html>
<html>

<head>

    <title>Playlist Report</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>🎶 Playlist Analysis</h1>


    <?php if ($search != "") { ?>

        <?php if ($found) { ?>

            <div class="result">

                <h2>🎵 Song Found!</h2>

                <h3>
                    <?php echo htmlspecialchars($result["title"]); ?>
                </h3>

                <p>
                    👤 Artist:
                    <?php echo htmlspecialchars($result["artist"]); ?>
                </p>

                <p>
                    🎼 Genre:
                    <?php echo htmlspecialchars($result["genre"]); ?>
                </p>

            </div>

        <?php } else { ?>

            <div class="notfound">

                <h2>❌ Song Not Found</h2>

                <p>
                    "<?php echo htmlspecialchars($search); ?>"
                    is not available in the playlist.
                </p>

            </div>

        <?php } ?>

    <?php } ?>


    <div class="total">

        <h2>🎧 Total Songs Available</h2>

        <h1>
            <?php echo $totalSongs; ?>
        </h1>

        <p>Songs in Playlist</p>

    </div>


    <div class="playlist">

        <h2>📋 Available Playlist</h2>

        <table>

            <tr>

                <th>Song</th>
                <th>Artist</th>
                <th>Genre</th>

            </tr>


            <?php foreach ($songs as $song) { ?>

                <tr>

                    <td>
                        <?php echo htmlspecialchars($song["title"]); ?>
                    </td>

                    <td>
                        <?php echo htmlspecialchars($song["artist"]); ?>
                    </td>

                    <td>
                        <?php echo htmlspecialchars($song["genre"]); ?>
                    </td>

                </tr>

            <?php } ?>

        </table>

    </div>


    <a href="index.php" class="back">
        ← Search Another Song
    </a>

</div>

</body>

</html>

