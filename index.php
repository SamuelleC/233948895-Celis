<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
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
    //Exercise 2
    <?php
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
</body>
</html>