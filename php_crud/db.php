<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "crud_db";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die ("Connectuin failed: " . $conn->connect_error);
    }
?>