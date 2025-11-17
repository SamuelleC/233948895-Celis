<?php include 'db.php'; ?>

<?php
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM users WHERE id=$id");
    $row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form_window">
        <h2>Edit Existing User</h2>
        <form method="POST" class="user_form">
            <label>Name</label>
            <input type="text" name="name" value="<?= $row['name']; ?>" required>

            <label>Email</label>
            <input type="email" name="email" value="<?= $row['email']; ?>" required>

            <label>Phone</label>
            <input type="text" name="phone" value="<?= $row['phone']; ?>" required>

            <button type="submit" name="update" class="save-btn">Update</button>
            <a href="index.php"><button type="button" class="back-btn">Return</button></a>
        </form>
    </div>
</body>
</html>

<?php
    if (isset($_POST['update'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $sql = "UPDATE users SET name='$name', email='$email', phone='$phone' WHERE id=$id";
        if ($conn->query($sql)) {
            header("Location: index.php");
            exit;
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
?>
