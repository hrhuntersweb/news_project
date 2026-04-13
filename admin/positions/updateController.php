<?php
include('../config/db.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $id = $_POST['id'];
    $title = $_POST['title'];
    $status = $_POST['status'];

    $stmt = $conn->prepare("update positions set title=?, status=? where id=?");

    $stmt->bind_param("sii", $title, $status, $id);

    if($stmt->execute()){
        header("location:index.php?insert_msg=Position updated successfully");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>