<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form_window">
        <h2>Create New User</h2>
        <form method="POST" class="user_form">
            <label>Name</label>
            <input type="text" name="name" required>

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Phone</label>
            <input type="text" name="phone" required>

            <button type="submit" name="save" class="btn save-btn">Create</button>
            <button type="button" class="btn back-btn" onclick="window.location='index.php'">Return</button>
        </form>
    </div>
</body>
</html>

<?php
    if (isset($_POST['save'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $sql = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";
        if ($conn->query($sql)) {
            header("Location: index.php");
            exit;
        } else {
            echo "Error: " . $conn->error;
        }
    }
?>