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
        <a href="simple_math.php"><</a>
        <div class="content-container">
            <h2>3. Area and Perimeter of a Rectangle</h2>
            <form action="rectangle.php" method="POST">
                <label for="length">Length of Rectangle(cm)</label><br>
                <input type="number" id="length" name="length" required><br><br>

                <label for="width">Width of Rectangle(cm)</label><br>
                <input type="number" id="width" name="width" required><br><br>

                <input type="submit" value="Submit"><a style="font-size: 16px" href="rectangle.php">Reset</a>
            </form>
            <?php
                if ($_POST) {
                    $length = $_POST['length'];
                    $width = $_POST['width'];
                    $area = $width * $length;
                    $perimeter = 2 * ($length + $width);

                    echo "<h2>Results</h2>";
                    echo "<p>The Area is: " . htmlspecialchars($area) . "cm²" . "<br>" . "The Perimeter is: " . htmlspecialchars($perimeter) . "cm</p>";
                } else {
                    echo "<p>Please fill out the form above to calculate area and perimeter!</p>";
                }
            ?>
        </div>
        <a href="temperature_converter.php">></a>
    </div>  
</body>
</html>