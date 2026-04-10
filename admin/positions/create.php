<?php
include('../layout/header.php');
?>

<div class="content">
    <form action="addController.php" method="post">
        <div class="form-layout">

            <div class="form-main">
                <div class="card">
                    <div class="card-header">
                        <h2>Position Info</h2>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" id="title" name="title" class="form-control" placeholder="Position title">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select id="status" name="status" class="form-control">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary" style="width:100%;display:flex;justify-content:center;">Create</button>
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