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
        <a href="simple_grading_system.php"><</a>
        <div class="content-container">    
            <h2>11. Currency Converter</h2>
            <form action="currency_converter.php" method="POST">
                <label for="amount_in_php">Amount in Peso (₱)</label><br>
                <input type="number" id="amount_in_php" name="amount_in_php" required><br><br>

                <input type="submit" value="Submit"><a style="font-size: 16px" href="currency_converter.php">Reset</a>
            </form>
            <?php
                if ($_POST) {
                    $amount_in_php = $_POST['amount_in_php'];
                    $amount_in_usd = $amount_in_php / 58.03;
                    $amount_in_eur = $amount_in_php / 67.43;
                    $amount_in_jpy = $amount_in_php / 0.38;

                    echo "<h2>Results</h2>";
                    echo "<p>PHP: " . "₱" . htmlspecialchars($amount_in_php) . "<br>";
                    echo "EUR: " . "€" . htmlspecialchars(round($amount_in_eur, 2)) . "<br>";
                    echo "USD: " . "$" .htmlspecialchars(round($amount_in_usd, 2)) . "<br>";
                    echo "JPY: " . "¥" . htmlspecialchars(round($amount_in_jpy, 2)) . "<br></p>";
                } else {
                    echo "<p>Please fill out the form above to convert PHP to USD, EUR, and JPY!</p>";
                }
            ?>
        </div>
        <a href="travel_cost.php">></a>
    </div> 
</body>
</html>