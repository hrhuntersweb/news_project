<?php
include('../config/db.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    $home = $_POST['home'];

    $stmt = $conn->prepare("INSERT INTO categories (title, slug, description, status, home) VALUES (?, ?, ?, ?, ?)");

    $stmt->bind_param("sssii", $title, $slug, $description, $status, $home);

    if($stmt->execute()){
        header("location:index.php?insert_msg=Category added successfully");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>