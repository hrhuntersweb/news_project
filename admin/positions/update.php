<?php
include('../layout/header.php');

$id = $_GET['id'];

$stmt = $conn->prepare("select * from positions where id=?");
$stmt->bind_param("i", $id);

$stmt->execute();

$result = $stmt->get_result();
$position = $result->fetch_assoc();
?>

<div class="content">
    <form action="updateController.php" method="post">
        <div class="form-layout">

            <div class="form-main">
                <div class="card">
                    <div class="card-header">
                        <h2>Position Info</h2>
                    </div>

                    <input type="hidden" name="id" value="<?= $position['id'] ?>">

                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" id="title" name="title" class="form-control" placeholder="Position title" value="<?= $position['title'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select id="status" name="status" class="form-control">
                                <option value="1" <?= $position['status'] == '1' ? 'selected' : ''  ?>>Active</option>
                                <option value="0" <?= $position['status'] == '0' ? 'selected' : ''  ?>>Inactive</option>
                            </select>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary" style="width:100%;display:flex;justify-content:center;">Update</button>
                            <a href="index.php" class="btn btn-light" style="width:100%;margin-top:8px;justify-content:center">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>
</div>

<?php
include('../layout/footer.php');
?>