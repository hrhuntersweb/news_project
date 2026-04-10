<?php
include('../config/db.php');

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $content = $_POST['content'];
    $status = $_POST['status'];
    $createdAt = $_POST['created_at'];
    $updatedAt = $_POST['updated_at'];

    $categoryId = $_POST['category_id'];
    $positionId = $_POST['position_id'];

    $image = $_FILES['image'];

    $fileName = time() . $image['name'];
    $tempName = $image['tmp_name'];

    $path = "../../uploads/" . $fileName;

    if (move_uploaded_file($tempName, $path)) {
        $stmt = $conn->prepare("insert into news(title, description, content, created_at, updated_at, image, position_id, category_id, status) values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssiii", $title, $description, $content, $createdAt, $updatedAt, $fileName, $positionId, $categoryId, $status);

        if ($stmt->execute()) {
            header("location:index.php?insert_msg=News added successfully");
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
}
