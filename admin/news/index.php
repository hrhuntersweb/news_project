<?php
include('../layout/header.php');

    $result = $conn->query("select news.*, categories.title as category_title, positions.title as position_title from news 
    join categories on categories.id=news.category_id 
    join positions on positions.id=news.position_id");

$news = $result->fetch_all(MYSQLI_ASSOC);
?>

<div class="content">
    <div class="card">
        <div class="card-header">
            <h2>All News Articles</h2>
            <div class="card-header-actions">
                <input type="text" class="search-input" placeholder="Search news...">
                <a href="create.php" class="btn btn-primary">+ Add News</a>
            </div>
        </div>

        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Content</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th>Image</th>
                        <th>Position</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($news as $row){
                        ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['title'] ?></td>
                        <td><?= $row['description'] ?></td>
                        <td><?= $row['content'] ?></td>
                        <td><?= $row['created_at'] ?></td>
                        <td><?= $row['updated_at'] ?></td>
                        <td>
                            <img src="../../uploads/<?= $row['image'] ?>" style="width: 100px; height: 100px;">
                        </td>
                        <td><?= $row['position_title'] ?></td>
                        <td><?= $row['category_title'] ?></td>
                        <td><?= $row['status'] ?></td>
                        <td>
                            <a href="news-edit.html" class="btn btn-warning btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm" onclick="openModal('deleteModal')">Delete</button>
                        </td>
                    </tr>
                    <?php
                    }?>
                </tbody>
            </table>
        </div>

        <div class="table-footer">
            <span>Showing 1–7 of 48 results</span>
            <div class="pagination">
                <a href="#" class="page-btn active">1</a>
                <a href="#" class="page-btn">2</a>
                <a href="#" class="page-btn">3</a>
                <a href="#" class="page-btn">&#8250;</a>
            </div>
        </div>
    </div>
</div>

<?php
include('../layout/footer.php');
?>