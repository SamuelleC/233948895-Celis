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
        <a href="bank.php"><</a>
        <div class="content-container">
            <h2>10. Simple Grading System</h2>
            <form action="simple_grading_system.php" method="POST">
                <label for="programming_grade">Programming Grade</label><br>
                <input type="number" id="programming_grade" name="programming_grade" required><br><br>

                <label for="ethics_grade">Ethics Grade</label><br>
                <input type="number" id="ethics_grade" name="ethics_grade" required><br><br>

                <label for="math_grade">Math Grade</label><br>
                <input type="number" id="math_grade" name="math_grade" required><br><br>

                <input type="submit" value="Submit"><a style="font-size: 16px" href="simple_grading_system.php">Reset</a>
            </form>
            <?php
                if ($_POST) {
                    $programming_grade = $_POST['programming_grade'];
                    $ethics_grade = $_POST['ethics_grade'];
                    $math_grade = $_POST['math_grade'];
                    $average = ($programming_grade + $ethics_grade + $math_grade) / 3;

                    echo "<h2>Results</h2>";
                    echo "<p>Programming Grade: " . htmlspecialchars($programming_grade) . "<br>" . "Ethics Grade: " . htmlspecialchars($ethics_grade) .
                    "<br>" . "Math Grade: " . htmlspecialchars($math_grade) .
                    "<br>" . "<strong>Average: </strong>" . round(htmlspecialchars($average), 2) . "</p>";

                    if ($average >= 90) {
                        echo "<p>Your Final Grade is A!</p>";
                    } elseif ($average >= 80) {
                        echo "<p>Your Final Grade is B!</p>";
                    } elseif ($average >= 75 && $average < 80) {
                        echo "<p>Passed!</p>";
                    } else {
                        echo "<p>Fail!</p>";
                    }
                } else {
                    echo "<p>Please fill out the form above to see your final grade!</p>";
                }
            ?>
        </div>
        <a href="currency_converter.php">></a>
    </div>
</body>
</html>