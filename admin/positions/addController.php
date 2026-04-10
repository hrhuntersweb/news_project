<?php
include('../config/db.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $title = $_POST['title'];
    $status = $_POST['status'];

    $stmt = $conn->prepare("INSERT INTO positions (title, status) VALUES (?, ?)");

    $stmt->bind_param("si", $title, $status);

    if($stmt->execute()){
        header("location:index.php?insert_msg=Position added successfully");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>