<?php

$products = [

    [
        "name" => "Laptop",
        "price" => 55000
    ],

    [
        "name" => "Smartphone",
        "price" => 25000
    ],

    [
        "name" => "Headphones",
        "price" => 3000
    ],

    [
        "name" => "Smart Watch",
        "price" => 7000
    ],

    [
        "name" => "Tablet",
        "price" => 18000
    ]

];

usort($products, function($a, $b) {

    return $a["price"] <=> $b["price"];

});

?>

<!DOCTYPE html>
<html>

<head>
    <title>Sorted Product List</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>🛍️ Sorted Product List</h1>

    <p>Products sorted from lowest price to highest price</p>

    <table>

        <tr>
            <th>Product</th>
            <th>Price</th>
        </tr>

        <?php foreach ($products as $product) { ?>

        <tr>

            <td>
                <?php echo htmlspecialchars($product["name"]); ?>
            </td>

            <td>
                ₹<?php echo number_format($product["price"], 2); ?>
            </td>

        </tr>

        <?php } ?>

    </table>

    <a href="index.php" class="back">
        ← Back
    </a>

</div>

</body>

</html>