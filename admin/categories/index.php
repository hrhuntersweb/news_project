<?php
include('../layout/header.php');
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

        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Articles</th>
                        <th>Status</th>
                        <th>Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Science</td>
                        <td>science</td>
                        <td>12</td>
                        <td><span class="badge badge-success">Active</span></td>
                        <td>2025-01-10</td>
                        <td>
                            <a href="categories-edit.html" class="btn btn-warning btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm" onclick="openModal('deleteModal')">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Sports</td>
                        <td>sports</td>
                        <td>9</td>
                        <td><span class="badge badge-success">Active</span></td>
                        <td>2025-01-10</td>
                        <td>
                            <a href="categories-edit.html" class="btn btn-warning btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm" onclick="openModal('deleteModal')">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Technology</td>
                        <td>technology</td>
                        <td>15</td>
                        <td><span class="badge badge-success">Active</span></td>
                        <td>2025-01-11</td>
                        <td>
                            <a href="categories-edit.html" class="btn btn-warning btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm" onclick="openModal('deleteModal')">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Politics</td>
                        <td>politics</td>
                        <td>7</td>
                        <td><span class="badge badge-success">Active</span></td>
                        <td>2025-01-12</td>
                        <td>
                            <a href="categories-edit.html" class="btn btn-warning btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm" onclick="openModal('deleteModal')">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Culture</td>
                        <td>culture</td>
                        <td>4</td>
                        <td><span class="badge badge-warning">Inactive</span></td>
                        <td>2025-02-01</td>
                        <td>
                            <a href="categories-edit.html" class="btn btn-warning btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm" onclick="openModal('deleteModal')">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Economy</td>
                        <td>economy</td>
                        <td>6</td>
                        <td><span class="badge badge-success">Active</span></td>
                        <td>2025-02-05</td>
                        <td>
                            <a href="categories-edit.html" class="btn btn-warning btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm" onclick="openModal('deleteModal')">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Health</td>
                        <td>health</td>
                        <td>0</td>
                        <td><span class="badge badge-warning">Inactive</span></td>
                        <td>2025-03-15</td>
                        <td>
                            <a href="categories-edit.html" class="btn btn-warning btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm" onclick="openModal('deleteModal')">Delete</button>
                        </td>
                    </tr>
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