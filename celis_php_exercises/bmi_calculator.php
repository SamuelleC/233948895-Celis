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
        <a href="salary_calculator.php"><</a>
        <div class="content-container">
            <h2>7. BMI Calculator</h2>
            <form action="bmi_calculator.php" method="POST">
                <label for="weight">Weight(kg)</label><br>
                <input type="number" id="weight" name="weight" required><br><br>

                <label for="height">Height(m)</label><br>
                <input type="number" step="0.01" id="height" name="height" required><br><br>

                <input type="submit" value="Submit"><a style="font-size: 16px" href="bmi_calculator.php">Reset</a>
            </form>
            <?php
                if ($_POST) {
                    $weight = $_POST['weight'];
                    $height = $_POST['height'];
                    $bmi = $weight / ($height * $height);

                    echo "<h2>Results</h2>";
                    echo "<p>Height(m): " . htmlspecialchars($height) . "<br>" . "Weight(kg): " . htmlspecialchars($weight) .
                    "<br>" . "BMI: " . htmlspecialchars(round($bmi, 2)) . "</p>";
                    
                    echo "<h3>BMI Category:</h3>";
                    if ($bmi < 18.5) {
                        echo "<p style='color: #0066cc; font-weight: bold;'>Underweight</p>";
                        echo "<p>BMI below 18.5 indicates underweight. Consider consulting a healthcare provider.</p>";
                    } elseif ($bmi >= 18.5 && $bmi < 25) {
                        echo "<p style='color: #00cc00; font-weight: bold;'>Normal Weight</p>";
                        echo "<p>BMI 18.5-24.9 indicates normal weight. Great job maintaining a healthy weight!</p>";
                    } elseif ($bmi >= 25 && $bmi < 30) {
                        echo "<p style='color: #ff9900; font-weight: bold;'>Overweight</p>";
                        echo "<p>BMI 25-29.9 indicates overweight. Consider a balanced diet and regular exercise.</p>";
                    } elseif ($bmi >= 30 && $bmi < 35) {
                        echo "<p style='color: #ff6600; font-weight: bold;'>Obesity Class I</p>";
                        echo "<p>BMI 30-34.9 indicates Class I obesity. Consult a healthcare provider for guidance.</p>";
                    } elseif ($bmi >= 35 && $bmi < 40) {
                        echo "<p style='color: #ff3300; font-weight: bold;'>Obesity Class II</p>";
                        echo "<p>BMI 35-39.9 indicates Class II obesity. Medical consultation is recommended.</p>";
                    } else {
                        echo "<p style='color: #cc0000; font-weight: bold;'>Obesity Class III (Extreme)</p>";
                        echo "<p>BMI 40+ indicates Class III obesity. Immediate medical consultation is strongly recommended.</p>";
                    }
                } else {
                    echo "<p>Please fill out the form above to calculate your BMI!</p>";
                }
            ?>
        </div>
        <a href="string_manipulation.php">></a>
    </div>
</body>
</html>