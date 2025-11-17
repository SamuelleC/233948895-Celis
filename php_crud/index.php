<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Management Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header>
            <h2>Current User List</h2>
            <a class="btn add-btn" href="add.php">Create User +</a>
        </header>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $result = $conn->query("SELECT * FROM users"); 
                while($row = $result->fetch_assoc()): 
                ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['name']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['phone']; ?></td>
                    <td>
                        <a class="btn edit-btn" href="edit.php?id=<?= $row['id']; ?>">Edit</a>
                        <a class="btn delete-btn" href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Delete this record?');">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>