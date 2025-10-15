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
            <a href="travel_cost.php"><</a>
            <div class="content-container">
                <h2>1. Introduce Yourself</h2>
            
                <form action="index.php" method="POST">
                    <label for="name">Name</label><br>
                    <input type="text" id="name" name="name" required><br><br>

                    <label for="age">Age</label><br>
                    <input type="number" id="age" name="age" required><br><br>

                    <label for="favorite_color">Favorite Color</label><br>
                    <input type="text" id="favorite_color" name="favorite_color" required><br><br>

                    <input type="submit" value="Submit"><a style="font-size: 16px" href="index.php">Reset</a>
                </form>
                
                <?php
                    if ($_POST) {
                        $name = $_POST['name'];
                        $age = $_POST['age'];
                        $favorite_color = $_POST['favorite_color'];
                        
                        echo "<h2>Your Information:</h2>";
                        echo "<p>Hi, I'm " . htmlspecialchars($name) . ", I am " . htmlspecialchars($age) . " years old, and my favorite color is " . htmlspecialchars($favorite_color) . ".</p>";
                    } else {
                        echo "<p>Please fill out the form above to introduce yourself!</p>";
                    }
                ?>
            </div>
            <a href="simple_math.php">></a>
        </div>   
</body>
</html>