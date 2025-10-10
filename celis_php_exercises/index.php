<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>PHP Exercises</title>
</head>
<body>
    <h1>PHP Exercises</h1>
    <div class="first-row">
        <div class="content-container">
            <h2>1. Introduce Yourself</h2>
            <?php
                $name = "Sam";
                $age = 20;
                $favorite_color = "Red";

                echo "Hi, I'm " . $name . ", I am " . $age . " years old, and my favorite color is " . $favorite_color . ".";
            ?>
        </div>
        <div class="content-container">
            <h2>2. Simple Math</h2>
            <?php
                $num1 = 20;
                $num2 = 2;
                $sum = $num1 + $num2;
                $difference = $num1 - $num2;
                $product = $num1 * $num2;
                $quotient = $num1 / $num2;

                echo "Num1: " . $num1 . "<br>";
                echo "Num2: " . $num2 . "<br>" . "<br>";
                echo "Sum: " . $sum . "<br>";
                echo "Difference: " . $difference . "<br>";
                echo "Product: " . $product . "<br>";
                echo "Quotient: " . $quotient . "<br>";
            ?>
        </div>
        <div class="content-container">
            <h2>3. Area and Perimeter of a Rectangle</h2>
            <?php
                $length = 10;
                $width = 5;
                $area = $width * $length;
                $perimeter = 2 * ($length + $width);

                echo "Area of rectangle: " . $area . "<br>";
                echo "Perimeter of rectangle: " . $perimeter . "<br>";
            ?>
        </div>
        <div class="content-container">
            <h2>4. Temperature Converter</h2>
            <?php
                $celsius = 36;
                $fahrenheit = $celsius * (9/5) + 32;

                echo $celsius . " celsius is " . $fahrenheit . " in fahrenheit";
            ?>
        </div>
    </div>
    <div class="second-row">
          <div class="content-container">
            <h2>5. Swapping Variables</h2>
            <?php
                $var1 = "Variable 1";
                $var2 = "Variable 2";

                echo "Before swapping:<br>";
                echo "Var1: " . $var1 . "<br>";
                echo "Var2: " . $var2 . "<br>" . "<br>";

                $temp = $var1;
                $var1 = $var2;
                $var2 = $temp;

                echo "After swapping:<br>";
                echo "Var1: " . $var1 . "<br>";
                echo "Var2: " . $var2 . "<br>";
            ?>
        </div>
        <div class="content-container">
            <h2>6. Salary Calculator</h2>
            <?php
                $basic_salary = 15000;
                $allowance = 2000;
                $deduction = $basic_salary * 0.30;
                $net_salary = $basic_salary + $allowance - $deduction;

                echo "Basic Salary: " . $basic_salary . "<br>";
                echo "Allowance: " . $allowance . "<br>";
                echo "Deductions: " . $deduction . "<br>";
                echo "Net Salary: ". $net_salary . "<br>";
            ?>
        </div>
        <div class="content-container">
            <h2>7. BMI Calculator</h2>
            <?php
                $weight = 75;
                $height = 1.82;
                $bmi = $weight / ($height * $height);

                echo "Height(m): " . $height . "<br>";
                echo "Weight(kg): " . $weight . "<br>";
                echo "BMI: " . round($bmi, 2) . "<br>";
            ?>
        </div>
        <div class="content-container">  
            <h2>8. String Manipulation</h2>
            <?php
                $stored_sentence = "This is a sentence";
                
                echo "Original Sentence: " . $stored_sentence ."<br>";
                echo "Number of characters: " . strlen($stored_sentence) ."<br>";
                echo "Number of Words: " . str_word_count($stored_sentence) ."<br>";
                echo "Uppercase: " . strtoupper($stored_sentence) ."<br>";
                echo "Uppercase: " . strtolower($stored_sentence) ."<br>";
            ?>
        </div>
        </div>
        <div class="third-row">
            <div class="content-container">
                <h2>9. Bank Account Simulation</h2>
                <?php
                    $balance = 20000;
                    $deposit = 4000;
                    $withdraw = 1000;

                    echo "BANK" . "<br>";
                    echo "Total Balance: " . $balance . "<br>";
                    echo "Depositing: " . $deposit . "<br>";

                    $balance = $balance + $deposit;

                    echo "New Total Balance: " . $balance . "<br>";
                    echo "Withdrawing: " . $withdraw . "<br>";

                    $balance = $balance - $withdraw;

                    echo "New Total Balance: " . $balance . "<br>";
                ?>
            </div>
            <div class="content-container">
                <h2>10. Simple Grading System</h2>
                <?php
                    $math_grade = 94;
                    $english_grade = 95;
                    $science_grade = 96;
                    $average = ($math_grade + $english_grade + $science_grade) / 3;

                    echo "Math Grade: " . $math_grade . "<br>";
                    echo "English Grade: " . $english_grade . "<br>";
                    echo "Science Grade: " . $science_grade . "<br>";
                    echo "Average: " . round($average, 2) . "<br>";

                    if ($average >= 90) {
                        echo "Your Final Grade is A!";
                    } elseif ($average >= 80) {
                        echo "Your Final Grade is B!";
                    } elseif ($average >= 75 && $average < 80) {
                        echo "Passed!";
                    } else {
                        echo "Fail!";
                    }
                ?>
            </div>
            <div class="content-container">    
                <h2>11. Currency Converter</h2>
                <?php
                    $amount_in_php = 150;
                    $amount_in_usd = $amount_in_php / 58.03;
                    $amount_in_eur = $amount_in_php / 67.43;
                    $amount_in_jpy = $amount_in_php / 0.38;

                    echo "PHP: " . $amount_in_php . "<br>";
                    echo "IN EUR: " . round($amount_in_eur, 2) . "<br>";
                    echo "IN USD: " . round($amount_in_usd, 2) . "<br>";
                    echo "IN JPY: " . round($amount_in_jpy, 2) . "<br>";
                ?>
            </div>
            <div class="content-container">
                <h2>12. Travel Cost Estimator</h2>
                <?php
                    $distance = 100;
                    $fuel_consumption = 20;
                    $fuel_price = 58;
                    $estimated_travel_cost = ($distance / $fuel_consumption) * $fuel_price;

                    echo "Travel Distance (km): " . $distance . "<br>";
                    echo "Fuel Price (/liter): " . $fuel_price . "<br>";
                    echo "Fuel Consumption (km/liter): " . $fuel_consumption . "<br>";
                    echo "Estimated Travel Cost: " . $estimated_travel_cost . "<br>";
                ?>
            </div> 
        </div>
    </div>
</body>
</html>