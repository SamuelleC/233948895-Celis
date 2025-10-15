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
        <a href="string_manipulation.php"><</a>
        <div class="content-container">
            <h2>9. Bank Account Simulation</h2>
            <form action="bank.php" method="POST">
                <label for="deposit_amount">Deposit Amount</label><br>
                <input type="number" id="deposit_amount" name="deposit_amount" required><br><br>

                <label for="withdraw_amount">Withdraw Amount</label><br>
                <input type="number" id="withdraw_amount" name="withdraw_amount" required><br><br>

                <input type="submit" value="Submit"><a style="font-size: 16px" href="bank.php">Reset</a>
            </form>
            <?php
            if ($_POST) {
                $balance = 20000;
                $deposit = $_POST['deposit_amount'];
                $withdraw = $_POST['withdraw_amount'];

                echo "<h2>Results</h2>";
                echo "<p>Initial Balance: " . htmlspecialchars($balance) . "<br>";
                echo "Deposit Amount: " . htmlspecialchars($deposit) . "<br>";      
                $balance += $deposit;
                echo "New Balance after Deposit: " . htmlspecialchars($balance) . "<br>";
                echo "Withdraw Amount: " . htmlspecialchars($withdraw) . "<br>";
                $balance -= $withdraw;
                echo "New Balance after Withdrawal: " . htmlspecialchars($balance) . "<br>";
                echo "</p>";
            } else {
                echo "<p>Please fill out the form above to simulate bank account transactions!</p>";
            }
            ?>
        </div>
        <a href="simple_grading_system.php">></a>
    </div>
</body>
</html>