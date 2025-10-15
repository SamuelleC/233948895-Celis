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
        <a href="index.php"><</a>
        <div class="content-container">
            <h2>2. Simple Math</h2>

            <form action="simple_math.php" method="POST">
                    <label for="first_number">First Number</label><br>
                    <input type="number" id="first_number" name="first_number" required><br><br>

                    <label for="second_number">Second Number</label><br>
                    <input type="number" id="second_number" name="second_number" required><br><br>

                    <input type="submit" value="Submit"><a style="font-size: 16px" href="simple_math.php">Reset</a>
            </form>
            <?php
                if ($_POST) {
                    $num1 = $_POST['first_number'];
                    $num2 = $_POST['second_number'];
                    $sum = $num1 + $num2;
                    $difference = $num1 - $num2;
                    $product = $num1 * $num2;
                    $quotient = $num1 / $num2;

                    echo "<h2>Results</h2>";
                    echo "<p>Sum: " . htmlspecialchars($sum) . "<br>" . "Difference: " . htmlspecialchars($difference) .
                    "<br>" . "Product: " . htmlspecialchars($product) . "<br>" . "Quotient: " . htmlspecialchars($quotient) . "</p>";
                } else {
                    echo "<p>Please fill out the form above to perform calculations!</p>";
                }
            ?>
        </div>
        <a href="rectangle.php">></a>
    </div>
</body>
</html>