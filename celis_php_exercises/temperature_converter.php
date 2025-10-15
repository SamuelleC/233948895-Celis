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
        <a href="rectangle.php"><</a>
        <div class="content-container">
            <h2>4. Temperature Converter</h2>
            <form action="temperature_converter.php" method="POST">
                <label for="celsius">Temperature (°C)</label><br>
                <input type="number" id="celsius" name="celsius" required><br><br>

                <input type="submit" value="Submit"><a style="font-size: 16px" href="temperature_converter.php">Reset</a>
            </form>
            <?php
                if ($_POST) {
                    $celsius = $_POST['celsius'];
                    $convertedToFahrenheit = $celsius * (9/5) + 32;
    
                    echo "<h2>Results</h2>";
                    echo "<p>" . htmlspecialchars($celsius) . " celsius is " . htmlspecialchars($convertedToFahrenheit) . " in fahrenheit" . "<br>" ."</p>";
                } else {
                    echo "<p>Please fill out the form above to convert Celsius to Fahrenheit!</p>";
                }
            ?>
        </div>
        <a href="swapping_variable.php">></a>
    </div>
</body>
</html>