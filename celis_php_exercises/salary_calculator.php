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
        <a href="swapping_variable.php"><</a>
        <div class="content-container">
            <h2>6. Salary Calculator</h2>
            <form action="salary_calculator.php" method="POST">
                <label for="salary">Salary</label><br>
                <input type="text" id="salary" name="salary" required><br><br>

                <label for="allowance">Allowance</label><br>
                <input type="text" id="allowance" name="allowance" required><br><br>

                <input type="submit" value="Submit"><a style="font-size: 16px" href="salary_calculator.php">Reset</a>
            </form>
            <?php
                if ($_POST) {
                    $basic_salary = $_POST['salary'];
                    $allowance = $_POST['allowance'];
                    $deduction = $basic_salary * 0.15;
                    $net_salary = $basic_salary + $allowance - $deduction;

                    echo "<h2>Results</h2>";
                    echo "<p>Basic Salary: " . htmlspecialchars($basic_salary) . "<br>" . "Allowance: " . htmlspecialchars($allowance) .
                    "<br>" . "Deductions(15% of salary): " . htmlspecialchars($deduction) . "<br>" . "Net Salary: " . htmlspecialchars($net_salary) . "</p>";
                } else {
                    echo "<p>Please fill out the form above to calculate your salary!</p>";
                }
            ?>
        </div>
        <a href="bmi_calculator.php">></a>
    </div>
</body>
</html>