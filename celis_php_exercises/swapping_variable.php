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
        <a href="temperature_converter.php"><</a>
        <div class="content-container">
            <h2>5. Swapping Variables</h2>
            <form action="swapping_variable.php" method="POST">
                <label for="first_input">First Input</label><br>
                <input type="text" id="first_input" name="first_input" required><br><br>

                <label for="second_input">Second Input</label><br>
                <input type="text" id="second_input" name="second_input" required><br><br>

                <input type="submit" value="Submit"><a style="font-size: 16px" href="swapping_variable.php">Reset</a>
            </form>
            <?php
                if ($_POST) {
                    $firstInput = $_POST['first_input'];
                    $secondInput = $_POST['second_input'];

                    echo "<h2>Results</h2>";
                    echo "<p>Before swapping:<br>";
                    echo "First Input: " . htmlspecialchars($firstInput) . "<br>";
                    echo "Second Input: " . htmlspecialchars($secondInput) . "<br>" . "<br>";

                    $temp = $firstInput;
                    $firstInput = $secondInput;
                    $secondInput = $temp;

                    echo "After swapping:<br>";
                    echo "First Input: " . htmlspecialchars($firstInput) . "<br>";
                    echo "Second Input: " . htmlspecialchars($secondInput) . "</p><br>";
                } else {
                    echo "<p>Please fill out the form above to see variable swapping!</p>";
                }
            ?>
        </div>
        <a href="salary_calculator.php">></a>
    </div>
</body>
</html>