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
        <a href="bmi_calculator.php"><</a>
        <div class="content-container">  
            <h2>8. String Manipulation</h2>
            <form action="string_manipulation.php" method="POST">
                <label for="input_text">Input a Text</label><br>
                <input type="text" id="input_text" name="input_text" required><br><br>

                <input type="submit" value="Submit"><a style="font-size: 16px" href="string_manipulation.php">Reset</a>
            </form>
            <?php
                if ($_POST) {
                    $inputText = $_POST['input_text'];
                    
                    echo "<h2>Results</h2>";
                    echo "<p>Your Input: " . htmlspecialchars($inputText) . "<br>";
                    echo "# of characters: " . strlen($inputText) ."<br>";
                    echo "# of Words: " . str_word_count($inputText) ."<br>";
                    echo "Uppercase: " . strtoupper($inputText) ."<br>";
                    echo "Lowercase: " . strtolower($inputText) ."<br></p>";
                } else {
                    echo "<p>Please fill out the form above to see string manipulation!</p>";
                }
            ?>
        </div>
        <a href="bank.php">></a>
    </div>
</body>
</html>