<?php
include('../layout/header.php');

$result = $conn->query("SELECT * FROM categories");
$categories = $result->fetch_all(MYSQLI_ASSOC);
?>

<div class="content">
    <div class="card">
        <div class="card-header">
            <h2>All Categories</h2>
            <div class="card-header-actions">
                <input type="text" class="search-input" placeholder="Search categories...">
                <a href="create.php" class="btn btn-primary">+ Add Category</a>
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
                        <th>Description</th>
                        <th>Slug</th>
                        <th>Status</th>
                        <th>Home</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($categories as $category){ ?>
                    <tr>
                        <td><?= $category['id'] ?></td>
                        <td><?= $category['title'] ?></td>
                        <td><?= $category['description'] ?></td>
                        <td><?= $category['slug'] ?></td>
                        <td><?= $category['status'] ?></td>
                        <td><?= $category['home'] ?></td>
                        <td>
                            <a href="categories-edit.html" class="btn btn-warning btn-sm">Edit</a>
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