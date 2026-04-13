<?php
include('../layout/header.php');

$result = $conn->query("SELECT * FROM positions");
$positions = $result->fetch_all(MYSQLI_ASSOC);
?>

<div class="content">
    <div class="card">
        <div class="card-header">
            <h2>All Positions</h2>
            <div class="card-header-actions">
                <input type="text" class="search-input" placeholder="Search positions...">
                <a href="create.php" class="btn btn-primary">+ Add Position</a>
            </div>
        </div>
        <?php
        if(isset($_GET['insert_msg'])){
           echo "<h4 class='success-message'>". "✅" .$_GET['insert_msg']."</h4>";
        }
        ?>
        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($positions as $position){ ?>
                    <tr>
                        <td><?= $position['id'] ?></td>
                        <td><?= $position['title'] ?></td>
                        <td><?= $position['status'] ?></td>
                        <td>
                            <a href="update.php?id=<?= $position['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm" onclick="openModal('deleteModal')">Delete</button>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <div class="table-footer">
            <span>Showing 1–7 of 7 results</span>
            <div class="pagination">
                <a href="#" class="page-btn active">1</a>
            </div>
        </div>
    </div>
</div>

<?php
include('../layout/footer.php');
?>