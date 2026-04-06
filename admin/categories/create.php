<?php
include('../layout/header.php');
?>

<div class="content">
    <form action="#" method="post">
        <div class="form-layout">

            <div class="form-main">
                <div class="card">
                    <div class="card-header">
                        <h2>Category Info</h2>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" id="title" name="title" class="form-control" placeholder="Category title">
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" id="slug" name="slug" class="form-control" placeholder="category-slug">
                            <small class="form-hint">Used in URLs. Auto-generated from the name if left blank.</small>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="description" name="description" class="form-control form-textarea" placeholder="Short description of this category (optional)"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-sidebar">
                <div class="card">
                    <div class="card-header">
                        <h2>Options</h2>
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
                            <label for="home">Home</label>
                            <select id="home" name="home" class="form-control">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary" style="width:100%;display:flex;justify-content:center;">Create</button>
                            <a href="categories.html" class="btn btn-light" style="width:100%;margin-top:8px;justify-content:center">Cancel</a>
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