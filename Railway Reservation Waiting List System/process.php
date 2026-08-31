
<?php

// Confirmed passengers

$confirmed = [

    [
        "name" => "sun",
        "seat" => 1
    ],

    [
        "name" => "Mathi",
        "seat" => 2
    ],

    [
        "name" => "Malathi",
        "seat" => 3
    ]
];


// Waiting-list passengers

$waiting = [

    "KowsiS",
    "Sri",
    "Anitha"
];

$message = "";


// Get form values

$passenger = $_POST["passenger"] ?? "";
$operation = $_POST["operation"] ?? "";
$seat = intval($_POST["seat"] ?? 0);


// ADD PASSENGER

if ($operation == "add" && $passenger != "") {

    // Check available seats

    if (count($confirmed) < 5) {

        $newSeat = count($confirmed) + 1;

        $confirmed[] = [
            "name" => $passenger,
            "seat" => $newSeat
        ];

        $message =
            "✅ $passenger has been given confirmed seat $newSeat.";

    } else {

        // Add passenger to waiting queue

        array_push($waiting, $passenger);

        $position = count($waiting);

        $message =
            "⏳ $passenger added to waiting list at position $position.";
    }
}


// CANCEL TICKET

if ($operation == "cancel" && $seat > 0) {

    $found = false;

    foreach ($confirmed as $key => $passengerData) {

        if ($passengerData["seat"] == $seat) {

            $cancelledName = $passengerData["name"];

            // Remove cancelled passenger

            unset($confirmed[$key]);

            // Re-index array

            $confirmed = array_values($confirmed);

            $found = true;

            $message =
                "❌ $cancelledName's seat $seat has been cancelled.";

            break;
        }
    }


    // Allocate cancelled seat to waiting passenger

    if ($found && count($waiting) > 0) {

        // Remove first passenger from waiting queue

        $nextPassenger = array_shift($waiting);

        // Give the cancelled seat

        $confirmed[] = [
            "name" => $nextPassenger,
            "seat" => $seat
        ];

        $message .=
            " 🎉 $nextPassenger has been confirmed for seat $seat.";
    }


    if (!$found) {

        $message =
            "⚠️ Seat number $seat was not found.";
    }
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Railway Reservation Status</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>🚆 Railway Reservation Status</h1>


    <!-- Message -->

    <?php if ($message != "") { ?>

        <div class="message">

            <?php echo htmlspecialchars($message); ?>

        </div>

    <?php } ?>


    <!-- Confirmed Passengers -->

    <div class="section">

        <h2>🎫 Confirmed Passengers</h2>

        <?php if (count($confirmed) > 0) { ?>

            <table>

                <tr>

                    <th>Seat</th>
                    <th>Passenger</th>
                    <th>Status</th>

                </tr>

                <?php foreach ($confirmed as $person) { ?>

                    <tr>

                        <td>
                            <?php echo $person["seat"]; ?>
                        </td>

                        <td>
                            <?php echo htmlspecialchars($person["name"]); ?>
                        </td>

                        <td>
                            <span class="confirmed">
                                ✅ Confirmed
                            </span>
                        </td>

                    </tr>

                <?php } ?>

            </table>

        <?php } else { ?>

            <p class="empty">
                No confirmed passengers.
            </p>

        <?php } ?>

    </div>


    <!-- Waiting List -->

    <div class="section">

        <h2>⏳ Waiting List</h2>

        <?php if (count($waiting) > 0) { ?>

            <?php $position = 1; ?>

            <?php foreach ($waiting as $person) { ?>

                <div class="waiting-card">

                    <span class="number">
                        <?php echo $position; ?>
                    </span>

                    <span>
                        👤 <?php echo htmlspecialchars($person); ?>
                    </span>

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
                🎉 Waiting list is empty.
            </p>

        <?php } ?>

    </div>


    <!-- Statistics -->

    <div class="stats">

        <div class="stat-card">

            <h3>🎫 Confirmed</h3>

            <h1>
                <?php echo count($confirmed); ?>
            </h1>

        </div>


        <div class="stat-card">

            <h3>⏳ Waiting</h3>

            <h1>
                <?php echo count($waiting); ?>
            </h1>

        </div>

    </div>


    <a href="index.php" class="back">
        ← New Reservation
    </a>

</div>

</body>

</html>

