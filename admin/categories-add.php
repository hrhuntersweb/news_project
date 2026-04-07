<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel — Add Category</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <aside class="sidebar">
    <div class="sidebar-logo">Admin<span>Panel</span></div>
    <ul class="sidebar-menu">
      <li><span class="sidebar-section">Main</span></li>
      <li><a href="samir.php"><span class="icon">&#9632;</span> Dashboard</a></li>
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
        <a href="categories.html" class="back-link">&#8592; Categories</a> / Add Category
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
                  <input type="text" id="name" name="name" class="form-control" placeholder="Category name">
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
              <div class="card-header"><h2>Options</h2></div>
              <div class="card-body">
                <div class="form-group">
                  <label for="status">Status</label>
                  <select id="status" name="status" class="form-control">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                  </select>
                </div>
                <div class="form-actions">
                  <button type="submit" class="btn btn-primary" style="width:100%">Save Category</button>
                  <a href="categories.html" class="btn btn-light" style="width:100%;margin-top:8px;justify-content:center">Cancel</a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </form>
    </div>
  </div>

</body>
</html>
