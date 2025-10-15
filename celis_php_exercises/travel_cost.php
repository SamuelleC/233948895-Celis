<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Exercises</title>
</head>
<body>
    <h1>[Sam Celis' PHP Exercises]</h1>
    <div class="main-container">
        <a href="currency_converter.php"><</a>
        <div class="content-container">
            <h2>12. Travel Cost Estimator</h2>
            <form action="travel_cost.php" method="POST">
                <label for="travel_distance">Travel Distance (km)</label><br>
                <input type="number" id="travel_distance" name="travel_distance" required><br><br>

                <label for="fuel_consumption">Fuel Consumption (km/L)</label><br>
                <input type="number" id="fuel_consumption" step="0.01" name="fuel_consumption" required><br><br>

                <label for="fuel_price">Fuel Price (/L)</label><br>
                <input type="number" id="fuel_price" step="0.01" name="fuel_price" required><br><br>

                <input type="submit" value="Submit"><a style="font-size: 16px" href="travel_cost.php">Reset</a>
            </form>
            <?php
                if ($_POST) {
                    $travel_distance = $_POST['travel_distance'];
                    $fuel_consumption = $_POST['fuel_consumption'];
                    $fuel_price = $_POST['fuel_price'];
                    $estimated_travel_cost = ($travel_distance / $fuel_consumption) * $fuel_price;

                    echo "<h2>Results</h2>";
                    echo "<p>Travel Distance (km): " . htmlspecialchars($travel_distance) . "<br>" . "Fuel Price (/L): " . "₱" . htmlspecialchars($fuel_price) .
                    "<br>" . "Fuel Consumption (km/L): " . htmlspecialchars($fuel_consumption) . "<br>" . "Estimated Travel Cost: " . "₱" . htmlspecialchars(number_format($estimated_travel_cost, 2)) . "</p>";
                } else {
                    echo "<p>Please fill out the form above to estimate your travel cost!</p>";
                }
            ?>
        </div> 
        <a href="index.php">></a>
    </div>
</body>
</html>