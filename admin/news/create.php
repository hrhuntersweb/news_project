<?php
include('../layout/header.php');
?>

<div class="content">
    <form action="addController.php" method="post" enctype="multipart/form-data">
        <div class="form-layout">

            <!-- Left column -->
            <div class="form-main">
                <div class="card">
                    <div class="card-header">
                        <h2>Article Content</h2>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" id="title" name="title" class="form-control" placeholder="Enter article title">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" id="description" name="description" class="form-control" placeholder="Enter article description">
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea id="content" name="content" class="form-control form-textarea" placeholder="Write article content here..."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                             <input type="file" id="image" name="image" class="form-control">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right column -->
            <div class="form-sidebar">
                <div class="card">
                    <div class="card-header">
                        <h2>Publish</h2>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select id="status" name="status" class="form-control">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="created_at">Created at</label>
                            <input type="date" id="created_at" name="created_at" class="form-control">
                        </div>
                         <div class="form-group">
                            <label for="updated_at">Updated at</label>
                            <input type="date" id="updated_at" name="updated_at" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="card" style="margin-top:20px">
                    <div class="card-header">
                        <h2>Details</h2>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="category_id">Category</label>
                            <select id="category_id" name="category_id" class="form-control">
                                <option value="">— Select category —</option>
                                <?php
                                $result = $conn->query("select * from categories");
                                $categories = $result->fetch_all(MYSQLI_ASSOC); 

                                foreach($categories as $category){
                                    echo "<option value='".$category['id']."'>".$category['title']. "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="position_id">Positions</label>
                            <select id="position_id" name="position_id" class="form-control">
                                <option value="">— Select position —</option>
                                <?php
                                $result = $conn->query("select * from positions");
                                $positions = $result->fetch_all(MYSQLI_ASSOC); 

                                foreach($positions as $position){
                                    echo "<option value='".$position['id']."'>".$position['title']. "</option>";
                                }
                                ?>
                            </select>
                        </div>
                         <div class="form-actions">
                            <button type="submit" class="btn btn-primary" style="width:100%;">Save Article</button>
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