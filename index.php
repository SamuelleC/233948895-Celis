<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Exercise 1
        $a = 15;
        $b = 7;
        
        $sum = $a + $b;
        $difference = $a - $b;
        $product = $a * $b;
        $quotient = $a / $b;
        
        echo 'The sum is: '.$sum ."\n";
        echo 'The difference is: '.$difference ."\n";
        echo 'The product is: '.$product ."\n";
        echo 'The quotient is: '.$quotient;
    ?>
    
    <?php
        //Exercise 2    
        $number = 15;
        
        if ($number > 0) {
            if ($number % 2 == 0) {
                echo "The number " .$number . " is even and positive.";
            } else {
                echo "The number " .$number ." is odd and positive.";
            }
        } else if ($number < 0) {
            if ($number % 2 == 0) {
                echo "The number " .$number . " is even and negative.";
            } else {
                echo "The number " .$number ." is odd and negative.";
            }
        } else {
            echo "The number " .$number ." is zero.";
        }
    ?>

    <?php
    //Exercise 3
    //Fizz on multiples of 3, Buzz on multiples of 5, FizzBuzz on multiples of Both
    for ($i = 1; $i <=100; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "FizzBuzz"."\n";
        } else if  ($i % 3 == 0) {
            echo "Fizz"."\n";
        } else if ($i % 5 == 0) {
            echo "Buzz"."\n";
        } else {
            echo $i."\n";
        }
    }
    //Fibonacci Sequence
    echo "\n"; 
    echo "First 10 in the Fibonacci Sequence but only the even numbers will be printed \n"; 
    $num1 = 0;
    $num2= 1;
    for ($i = 0; $i <10; $i++) {
        if ($num1 % 2 == 0) {
            echo $num1."\n";
        } 
        $num3 = $num1 + $num2;
        $num1 = $num2;
        $num2 = $num3;
    }
?>
</body>
</html>