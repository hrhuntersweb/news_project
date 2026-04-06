<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel — Edit Category</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <aside class="sidebar">
    <div class="sidebar-logo">Admin<span>Panel</span></div>
    <ul class="sidebar-menu">
      <li><span class="sidebar-section">Main</span></li>
      <li><a href="index.html"><span class="icon">&#9632;</span> Dashboard</a></li>
      <li><span class="sidebar-section">Content</span></li>
      <li><a href="news.html"><span class="icon">&#128240;</span> News</a></li>
      <li><a href="categories.html" class="active"><span class="icon">&#128193;</span> Categories</a></li>
      <li><span class="sidebar-section">System</span></li>
      <li><a href="settings.html"><span class="icon">&#9881;</span> Settings</a></li>
    </ul>
  </aside>

  <div class="main">
    <header class="topbar">
      <div class="topbar-title">
        <a href="categories.html" class="back-link">&#8592; Categories</a> / Edit Category
      </div>
      <div class="topbar-user">
        <div class="avatar">A</div>
        Admin
      </div>
    </header>

    <div class="content">
      <form action="#" method="post">
        <div class="form-layout">

          <div class="form-main">
            <div class="card">
              <div class="card-header"><h2>Category Info</h2></div>
              <div class="card-body">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" id="name" name="name" class="form-control" value="Science">
                </div>
                <div class="form-group">
                  <label for="slug">Slug</label>
                  <input type="text" id="slug" name="slug" class="form-control" value="science">
                  <small class="form-hint">Used in URLs. Changing this may break existing links.</small>
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea id="description" name="description" class="form-control form-textarea">Science and technology news from around the world.</textarea>
                </div>
              </div>
            </div>
          </div>

          <div class="form-sidebar">
            <div class="card">
              <div class="card-header"><h2>Options</h2></div>
              <div class="card-body">
                <div class="form-group">
                  <label for="status">Status</label>
                  <select id="status" name="status" class="form-control">
                    <option value="active" selected>Active</option>
                    <option value="inactive">Inactive</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Articles</label>
                  <p style="font-size:0.875rem;color:#555;padding:6px 0">12 articles in this category</p>
                </div>
                <div class="form-actions">
                  <button type="submit" class="btn btn-primary" style="width:100%">Update Category</button>
                  <a href="categories.html" class="btn btn-light" style="width:100%;margin-top:8px;justify-content:center">Cancel</a>
                </div>
              </div>
            </div>

            <div class="card" style="margin-top:20px">
              <div class="card-header"><h2>Danger Zone</h2></div>
              <div class="card-body">
                <p style="font-size:0.82rem;color:#888;margin-bottom:12px">Permanently delete this category. Articles will become uncategorized.</p>
                <button type="button" class="btn btn-danger" style="width:100%" onclick="openModal('deleteModal')">Delete Category</button>
              </div>
            </div>
          </div>

        </div>
      </form>
    </div>
  </div>

  <!-- Delete Confirm Modal -->
  <div class="modal-overlay" id="deleteModal">
    <div class="modal">
      <div class="modal-header">
        <h3>Confirm Delete</h3>
        <button class="modal-close" onclick="closeModal('deleteModal')">&times;</button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete the category <strong>"Science"</strong>? Articles in this category will become uncategorized.</p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-light" onclick="closeModal('deleteModal')">Cancel</button>
        <a href="categories.html" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>

  <script>
    function openModal(id) { document.getElementById(id).classList.add('open'); }
    function closeModal(id) { document.getElementById(id).classList.remove('open'); }
    document.querySelectorAll('.modal-overlay').forEach(function(o) {
      o.addEventListener('click', function(e) { if (e.target === o) o.classList.remove('open'); });
    });
  </script>
</body>
</html>
