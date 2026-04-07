<?php
include(__DIR__.'/../config/db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel — Dashboard</title>
    <link rel="stylesheet" href="http://localhost/news/admin/style.css">
</head>

<body>

    <?php
    include('sidebar.php');
    ?>

    <!-- Main -->
    <div class="main">
        <header class="topbar">
            <div class="topbar-title">Dashboard</div>
            <div class="topbar-user">
                <div class="avatar">A</div>
                Oder
            </div>
        </header>